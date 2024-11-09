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
if (isset($_COOKIE['protein'])) {
  $filter = 'Showing High Protein';
} else {
  $filter = 'no filter';
}



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
  <h1>Name of the App</h1>
  <h2><?php echo htmlspecialchars($eatery_name); ?></h2>

  <?php if (!empty($records)): ?>
    <div class="meal-list">
      <?php foreach ($records as $record): ?>
        <div class="meal-item">
          <h3><?php echo htmlspecialchars($record['name']); ?></h3>
          <ul>
            <li><strong>Serving Size:</strong> <?php echo htmlspecialchars($record['serving_size']); ?></li>
            <li><strong>Calories:</strong> <?php echo htmlspecialchars($record['cal']); ?> kcal</li>
            <li><strong>Calories from Fat:</strong> <?php echo htmlspecialchars($record['cal_from_fat']); ?> kcal</li>
            <li><strong>Total Fat:</strong> <?php echo htmlspecialchars($record['total_fat']); ?> g</li>
            <li><strong>Cholesterol:</strong> <?php echo htmlspecialchars($record['cholesterol']); ?> mg</li>
            <li><strong>Sodium:</strong> <?php echo htmlspecialchars($record['sodium']); ?> mg</li>
            <li><strong>Total Carbohydrates:</strong> <?php echo htmlspecialchars($record['total_carbs']); ?> g</li>
            <li><strong>Protein:</strong> <?php echo htmlspecialchars($record['protein']); ?> g</li>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p>No meals found matching your criteria.</p>
  <?php endif; ?>
</body>


</html>
