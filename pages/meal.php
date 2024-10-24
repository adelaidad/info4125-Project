<!-- All meal options -->
<?php
// retrieve query string parameters for eatery
$eatery_id = $_GET["eatery"] ?? NULL;

#Getting name of selected
$sql_eatery_name = "SELECT name FROM eateries WHERE id =" . $eatery_id;
$eatery_record = exec_sql_query($db, $sql_eatery_name)->fetchAll();
$eatery_name = $eatery_record[0]['name'];

#Getting all info from this eatery
$sql_select = 'SELECT * FROM meals WHERE eatery_id=' . $eatery_id;

$sql_filter_clause = '';
#TODO FILTERING
$sql_query = $sql_select . ' ' . $sql_filter_clause;

$result = exec_sql_query($db, $sql_query);
$records = $result->fetchAll();


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
  <h1><?php echo $eatery_name ?></php>
  </h1>

  <?php foreach ($records as $record) { ?>
    <p><?php echo $record['name'] ?> </p>
    <!-- HTML format output for records -->
  <?php } ?>


</body>

</html>
