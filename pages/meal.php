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

if (isset($_COOKIE['low_fat'])) {
  $filter_elements_and[] = 'total_fat < 3';
  $feedback[] = 'Low Fat';
}

if (!empty($filter_elements_and)) {
  $sql_filter_clause .= ' AND (' . implode(' AND ', $filter_elements_and) . ')';
}

if (!empty($filter_elements_or)) {
  $sql_filter_clause .= ' AND ';
  $sql_filter_clause .= '(' . implode(' OR ', $filter_elements_or) . ')';
}

$sql_query = $sql . $sql_filter_clause;

try {
  $records = exec_sql_query($db, $sql_query)->fetchAll();
} catch (PDOException $e) {
  echo "SQL Error: " . $e->getMessage();
}

if (!empty($feedback)) {
  $listed = implode(', ', $feedback);
  $feedback_message = 'Showing ' . $listed . ' options';
} else {
  $feedback_message = 'Showing all options';
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
  <?php include("includes/phone.php"); ?>
  <a href="/" class='arrow'>
    <svg width="28" height="50" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M23.3333 14H4.66667M4.66667 14L11.6667 7M4.66667 14L11.6667 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>


  <h1 class='eatery-name'><?php echo htmlspecialchars($eatery_name); ?></h1>

  <p class='feedback-message'><?php echo $feedback_message ?></p>

  <?php if (!empty($records)): ?>
    <div class="meal-list">
      <?php foreach ($records as $record): ?>
        <div class="meal-item">
          <span class="favorite-star" onclick="toggleFavorite(this)">&#9734;</span>

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
          <button class="log-meal-button">Log as Eaten</button>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class='no-meals-message'>No meals found matching your criteria.</p>
  <?php endif; ?>


  <script>
    function toggleFavorite(element) {
      element.classList.toggle("filled");
    }
  </script>
</body>


</html>
