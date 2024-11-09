<?php

$eatery_id = $_GET["eatery"] ?? NULL;
$eatery_sql = "SELECT name FROM eateries WHERE id = " . $eatery_id;
$eatery_record = exec_sql_query($db, $eatery_sql)->fetchAll();
$eatery_name = $eatery_record[0]['name'];

$sql = "SELECT * FROM meals WHERE eatery_id = " . $eatery_id;

$sql_filter_clause = '';

$filter_elements_and = [];
$filter_elements_or = [];

$feedback = [];

if (isset($_COOKIE['protein'])) {
  $filter_elements_or[] = 'protein >= 20';
  $feedback[] = 'High Protein';
}

if (isset($_COOKIE['low_carb'])) {
  $filter_elements_or[] = 'total_carbs < 25';
  $feedback[] = 'Low Carb';
}

if (isset($_COOKIE['low_cal'])) {
  $filter_elements_or[] = 'cal < 400';
  $feedback[] = 'Low Calorie';
}

if (isset($_COOKIE['dairy_free'])) {
  $filter_elements_and[] = 'dairy_free = 1';
  $feedback[] = 'Dairy Free';
}

if (isset($_COOKIE['vegan'])) {
  $filter_elements_and[] = 'vegan = 1';
  $feedback[] = 'Vegan';
}

if (isset($_COOKIE['vegetarian'])) {
  $filter_elements_and[] = 'vegetarian = 1';
  $feedback[] = 'Vegetarian';
}

if (isset($_COOKIE['gluten_free'])) {
  $filter_elements_and[] = 'gluten_free = 1';
  $feedback[] = 'Gluten Free';
}

if (isset($_COOKIE['low_cholesterol'])) {
  $filter_elements_or[] = 'cholesterol < 300';
  $feedback[] = 'Low Cholesterol';
}

if (isset($_COOKIE['low_sodium'])) {
  $filter_elements_or[] = 'sodium < 140';
  $feedback[] = 'Low Sodium';
}

if (isset($_COOKIE['nut_free'])) {
  $filter_elements_and[] = 'nuts_free = 1';
  $feedback[] = 'Nut Free';
}

if (isset($_COOKIE['soy_free'])) {
  $filter_elements_and[] = 'soy_free = 1';
  $feedback[] = 'Soy Free';
}

if (!empty($filter_elements_and)) {
  $sql_filter_clause .= ' AND (' . implode(' AND ', $filter_elements_and) . ')';
}

if (!empty($filter_elements_or)) {
  $sql_filter_clause .= ' AND ';
  $sql_filter_clause .= '(' . implode(' OR ', $filter_elements_or) . ')';
}

$sql_query = $sql . $sql_filter_clause;
echo "<pre>Generated SQL Query: " . htmlspecialchars($sql_query) . "</pre>";

try {
  $records = exec_sql_query($db, $sql_query)->fetchAll();
} catch (PDOException $e) {
  echo "SQL Error: " . $e->getMessage();
}

if (!empty($feedback)) {
  $listed = implode(', ', $feedback);
  $feedback_message = 'Showing ' . $listed . ' options for ' . $eatery_name;
} else {
  $feedback_message = 'Showing all options for ' . $eatery_name;
}

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
