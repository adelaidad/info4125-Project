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
  <a href="/eateries" class='arrow'>
    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M23.3333 14H4.66667M4.66667 14L11.6667 7M4.66667 14L11.6667 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>

  
  <h1 class='eatery-name'><?php echo htmlspecialchars($eatery_name); ?></h1>

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

  <div class='nav'>
    <a href="/eateries">
      <div class='icon-home'>
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.7022 31.16V26.5734C13.7022 25.4026 14.6583 24.4535 15.8377 24.4535H20.1489C20.7153 24.4535 21.2585 24.6768 21.6589 25.0744C22.0594 25.472 22.2844 26.0112 22.2844 26.5734V31.16C22.2808 31.6468 22.4731 32.1148 22.8186 32.4603C23.164 32.8057 23.6341 33 24.1244 33H27.0657C28.4395 33.0035 29.7581 32.4643 30.7308 31.5012C31.7034 30.5382 32.25 29.2305 32.25 27.8667V14.8003C32.25 13.6987 31.7581 12.6538 30.9069 11.947L20.901 4.0138C19.1605 2.62284 16.6667 2.66775 14.9781 4.12047L5.20052 11.947C4.30911 12.6329 3.77633 13.681 3.75 14.8003V27.8534C3.75 30.6958 6.07107 33 8.93426 33H11.8084C12.8268 33 13.6545 32.1843 13.6619 31.1733L13.7022 31.16Z" fill="#91C788" />
        </svg>

      </div>
    </a>

    <div class='icon-group'>
      <svg width="34" height="28" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17 12.5556C20.2133 12.5556 22.8182 9.96876 22.8182 6.77778C22.8182 3.5868 20.2133 1 17 1C13.7867 1 11.1818 3.5868 11.1818 6.77778C11.1818 9.96876 13.7867 12.5556 17 12.5556Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M14.0909 15.4445H19.9091C23.9236 15.4445 27.1818 18.68 27.1818 22.6667V24.1111C27.1818 25.7 25.8727 27 24.2727 27H9.72727C8.12727 27 6.81818 25.7 6.81818 24.1111V22.6667C6.81818 18.68 10.0764 15.4445 14.0909 15.4445Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M24.2727 2.50224C24.5055 2.47335 24.7527 2.44446 25 2.44446C27.8073 2.44446 30.0909 4.71224 30.0909 7.50001C30.0909 10.2878 27.8073 12.5556 25 12.5556C24.5055 12.5556 24.04 12.4833 23.5891 12.3533" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M26.4546 15.4445H27.1819C30.3964 15.4445 33 18.03 33 21.2222V22.6667C33 23.4611 32.3455 24.1111 31.5455 24.1111H30.091" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9.7273 2.50224C9.49457 2.47335 9.2473 2.44446 9.00003 2.44446C6.19275 2.44446 3.90912 4.71224 3.90912 7.50001C3.90912 10.2878 6.19275 12.5556 9.00003 12.5556C9.49457 12.5556 9.96003 12.4833 10.4109 12.3533" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M7.54545 15.4445H6.81818C3.60364 15.4445 1 18.03 1 21.2222V22.6667C1 23.4611 1.65455 24.1111 2.45455 24.1111H3.90909" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </div>

    <a href="/">
      <div class='icon-profile'>
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9797 20.4616C10.8229 20.4616 6.41906 21.2413 6.41906 24.3638C6.41906 27.4863 10.7949 28.294 15.9797 28.294C21.1365 28.294 25.5391 27.513 25.5391 24.3917C25.5391 21.2705 21.1645 20.4616 15.9797 20.4616Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9797 16.0079C19.3638 16.0079 22.1067 13.2637 22.1067 9.87961C22.1067 6.49548 19.3638 3.75262 15.9797 3.75262C12.5956 3.75262 9.85143 6.49548 9.85143 9.87961C9.84 13.2523 12.5651 15.9964 15.9365 16.0079H15.9797Z" stroke="black" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round" />
        </svg>


      </div>
    </a>
  </div>
</body>


</html>
