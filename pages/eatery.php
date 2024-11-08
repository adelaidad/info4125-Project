<?php
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['protein'])) {
    setcookie('protein', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('protein', '', time() - 3600, "/");
  }

  if (isset($_POST['low_carb'])) {
    setcookie('low_carb', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('low_carb', '', time() - 3600, "/");
  }

  if (isset($_POST['low_cal'])) {
    setcookie('low_cal', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('low_cal', '', time() - 3600, "/");
  }

  if (isset($_POST['dairy_free'])) {
    setcookie('dairy_free', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('dairy_free', '', time() - 3600, "/");
  }

  if (isset($_POST['vegan'])) {
    setcookie('vegan', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('vegan', '', time() - 3600, "/");
  }

  if (isset($_POST['vegetarian'])) {
    setcookie('vegetarian', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('vegetarian', '', time() - 3600, "/");
  }

  if (isset($_POST['gluten_free'])) {
    setcookie('gluten_free', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('gluten_free', '', time() - 3600, "/");
  }

  if (isset($_POST['low_cholesterol'])) {
    setcookie('low_cholesterol', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('low_cholesterol', '', time() - 3600, "/");
  }

  if (isset($_POST['low_sodium'])) {
    setcookie('low_sodium', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('low_sodium', '', time() - 3600, "/");
  }

  if (isset($_POST['nut_free'])) {
    setcookie('nut_free', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('nut_free', '', time() - 3600, "/");
  }

  if (isset($_POST['soy_free'])) {
    setcookie('soy_free', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('soy_free', '', time() - 3600, "/");
  }

  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}

ob_end_flush();
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
  <h1>Name of App</h1>
  <h2>Where do you want to eat?</h2>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 2)); ?>" class='button'>Cafe Jennies</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 3)); ?>" class='button'>Crossings Café</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 4)); ?>" class='button'>Cornell Dairy Bar</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 5)); ?>" class='button'>The Big Red Barn</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 6)); ?>" class='button'>Mattin's</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 7)); ?>" class='button'>Goldie's</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 8)); ?>" class='button'>Atrium Café</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 9)); ?>" class='button'>Mann Café</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 10)); ?>" class='button'>Martha's</a>
  <a href="/meals?<?php echo http_build_query(array("eatery" => 11)); ?>" class='button'>Risley Dinings</a>
  <!-- Add the rest of the eateries -->
</body>

</html>
