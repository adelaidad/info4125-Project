<?php

declare(strict_types=1);

namespace MakinaCorpus\QueryBuilder\Tests\Query;

use MakinaCorpus\QueryBuilder\Platform\Escaper\StandardEscaper;
use MakinaCorpus\QueryBuilder\Platform\Writer\MySQLWriter;
use MakinaCorpus\QueryBuilder\Query\Merge;
use MakinaCorpus\QueryBuilder\Query\Query;
use MakinaCorpus\QueryBuilder\Query\Select;
use MakinaCorpus\QueryBuilder\Tests\UnitTestCase;

/**
 * MERGE is a complex topic for which the various SQL dialects diverge
 * the most from one another, so for this peculiar use case, it does not
 * extend the base MergeTest.
 */
class MySQLWriterMergeTest extends UnitTestCase
{
    protected function setUp(): void
    {
        self::setTestWriter(new MySQLWriter(new StandardEscaper('?')));
    }

    protected function tearDown(): void
    {
        self::setTestWriter(null);
    }

    private function createUsingQuery(): Query
    {
        return (new Select('table2'))
            ->column('a')
            ->column('b')
            ->column('c')
            ->column('d')
        ;
    }

    public function testStringWithDotKeyRaiseError(): void
    {
        $query = new Merge('table1');

        self::expectExceptionMessageMatches('/column names in the primary/');
        $query->setKey(['foo.bar']);
    }

    public function testNonStringKeyRaiseError(): void
    {
        $query = new Merge('table1');

        self::expectExceptionMessageMatches('/column names in the primary/');
        $query->setKey([new \DateTimeImmutable()]);
    }

    public function testInvalidConflictBehaviourRaiseError(): void
    {
        $query = new Merge('table1');

        self::expectExceptionMessageMatches('/behaviours must be one/');
        $query->onConflict(7);
    }

    public function testValuesOnConflictIgnore(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictIgnore()
            ->values([1, 2, 3, 4])
            ->values([5, 6, 7, 8])
        ;

        self::assertSameSql(
            <<<SQL
            insert ignore into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            values (
                ?, ?, ?, ?
            ), (
                ?, ?, ?, ?
            )
            SQL,
            $query
        );
    }

    public function testValuesOnConflictIgnoreIgnoresKey(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictIgnore()
            ->setKey(['foo', 'bar'])
            ->values([1, 2, 3, 4])
            ->values([5, 6, 7, 8])
        ;

        self::assertSameSql(
            <<<SQL
            insert ignore into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            values (
                ?, ?, ?, ?
            ), (
                ?, ?, ?, ?
            )
            SQL,
            $query
        );
    }

    public function testValuesOnConflictUpdate(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictUpdate()
            ->setKey(['foo', 'bar'])
            ->values([1, 2, 3, 4])
            ->values([5, 6, 7, 8])
        ;

        self::assertSameSql(
            <<<SQL
            insert into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            values (
                ?, ?, ?, ?
            ), (
                ?, ?, ?, ?
            )
            on duplicate key update
                "fizz" = values("fizz"),
                "buzz" = values("buzz")
            SQL,
            $query
        );
    }

    public function testValuesValuesOnConflictUpdateWithoutKey(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictUpdate()
            ->values([1, 2, 3, 4])
            ->values([5, 6, 7, 8])
        ;

        self::assertSameSql(
            <<<SQL
            insert into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            values (
                ?, ?, ?, ?
            ), (
                ?, ?, ?, ?
            )
            on duplicate key update
                "foo" = values("foo"),
                "bar" = values("bar"),
                "fizz" = values("fizz"),
                "buzz" = values("buzz")
            SQL,
            $query
        );
    }

    public function testQueryOnConflictIgnore(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictIgnore()
            ->query(
                $this->createUsingQuery()
            )
        ;

        self::assertSameSql(
            <<<SQL
            insert ignore into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            select "a", "b", "c", "d" from "table2"
            SQL,
            $query
        );
    }

    public function testQueryOnConflictIgnoreIgnoresKey(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictIgnore()
            ->setKey(['foo', 'bar'])
            ->query(
                $this->createUsingQuery()
            )
        ;

        self::assertSameSql(
            <<<SQL
            insert ignore into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            select "a", "b", "c", "d" from "table2"
            SQL,
            $query
        );
    }

    public function testQueryOnConflictUpdate(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictUpdate()
            ->setKey(['foo', 'bar'])
            ->query(
                $this->createUsingQuery()
            )
        ;

        self::assertSameSql(
            <<<SQL
            insert into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            select "a", "b", "c", "d" from "table2"
            on duplicate key update
                "fizz" = values("fizz"),
                "buzz" = values("buzz")
            SQL,
            $query
        );
    }

    public function testQueryOnConflictUpdateWithoutKey(): void
    {
        $query = (new Merge('table1'))
            ->columns(['foo', 'bar', 'fizz', 'buzz'])
            ->onConflictUpdate()
            ->query(
                $this->createUsingQuery()
            )
        ;

        self::assertSameSql(
            <<<SQL
            insert into "table1" (
                "foo", "bar", "fizz", "buzz"
            )
            select "a", "b", "c", "d" from "table2"
            on duplicate key update
                "foo" = values("foo"),
                "bar" = values("bar"),
                "fizz" = values("fizz"),
                "buzz" = values("buzz")
            SQL,
            $query
        );
    }
}
