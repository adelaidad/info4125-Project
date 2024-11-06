<!-- All meal options -->
<?php

use MakinaCorpus\QueryBuilder\Platform\Escaper\StandardEscaper;
use MakinaCorpus\QueryBuilder\Platform\Writer\SQLiteWriter;
use MakinaCorpus\QueryBuilder\DefaultQueryBuilder;

$escaper = new StandardEscaper();
$writer = new SQLiteWriter($escaper);

$queryBuilder = new DefaultQueryBuilder($writer);

$eatery_id = $_GET["eatery"] ?? NULL;
$sql_eatery_name = "SELECT name FROM eateries WHERE id = ?";
$eatery_statement = $db->prepare($sql_eatery_name);
$eatery_statement->execute([$eatery_id]);
$eatery_record = $eatery_statement->fetchAll(PDO::FETCH_ASSOC);
$eatery_name = $eatery_record[0]['name'];

$query = $queryBuilder
  ->select('meals')
  ->column('*')
  ->where('eatery_id', '=', $eatery_id);

if (isset($_COOKIE['protein'])) {
  $query->where('protein', '>=', 30);
}
if (isset($_COOKIE['low_carb'])) {
  $query->where('low_carb', '<', 400);
}
if (isset($_COOKIE['low_cal'])) {
  $query->where('low_cal', '<', 50);
}
if (isset($_COOKIE['dairy_free'])) {
  $query->where('dairy_free', '=', 1);
}
if (isset($_COOKIE['vegan'])) {
  $query->where('vegan', '=', 1);
}
if (isset($_COOKIE['vegetarian'])) {
  $query->where('vegetarian', '=', 1);
}
if (isset($_COOKIE['gluten_free'])) {
  $query->where('gluten_free', '=', 1);
}
if (isset($_COOKIE['low_cholesterol'])) {
  $query->where('low_cholesterol', '<=', 300);
}

$result = $query->executeQuery();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>INFO 4125 PROJECT</title>

  <link rel="stylesheet" type="text/css" href="/styles/site.css">
</head>


<body>
  <h1> Name of the App</h1>
  <h2><?php echo $eatery_name ?></php>
  </h2>

  <?php foreach ($records as $record) {
    $meal_name = $record['name'];
    $serving_size = $record['serving_size'];
    $calories = $record['cal'];
    $calories_fat = $record['cal_from_fat'];
    $total_fat = $record['total_fat'];
    $cholesterol = $record['cholesterol'];
    $sodium = $record['sodium'];
    $total_carbs = $record['total_carbs'];
    $protein = $record['protein'];
  ?>

    <p><?php echo $record['name'] ?> </p>
    <p><?php echo $filter ?> </p>
    <!-- HTML format output for records -->

  <?php } ?>


</body>

</html>
