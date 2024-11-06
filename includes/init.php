<?php

// initialize and open database
require_once "includes/db.php";
require 'vendor/autoload.php';
$db = init_sqlite_db("db/site.sqlite", "db/init.sql");
