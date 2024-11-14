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

  if (isset($_POST['low_fat'])) {
    setcookie('low_fat', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('low_fat', '', time() - 3600, "/");
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
  <?php include("includes/phone.php"); ?>

  <div class='header'>
    <h1>Hello, Maria!</h1>
    <a href='/profile'>
      <picture>
        <img src="public/images/maria.png" alt="Cornell Student Maria (Persona)">
      </picture>
    </a>
  </div>
  <p>Meals that meet <strong>your</strong> needs:</p>


  <a href="/meals?<?php echo http_build_query(array("eatery" => 2)); ?>">
    <div class='eatery pink'>
      <h3>Cafe Jennies</h3>
      <p class='eatery-info'>Open: 8:30am – 6:00pm | 0.1 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 3)); ?>">
    <div class='eatery blue'>
      <h3>Crossings Cafe</h3>
      <p class='eatery-info'>Open: 8:00am – 5:00pm | 1.1 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 4)); ?>">
    <div class='eatery purple'>
      <h3>Cornell Dairy Bar</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 1.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 5)); ?>">
    <div class='eatery pink'>
      <h3>The Big Red Barn</h3>
      <p class='eatery-info'>Open: 8:00am – 3:00pm | 0.6 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 6)); ?>">
    <div class='eatery blue'>
      <h3>Mattin's</h3>
      <p class='eatery-info'>Open: 7:00am – 10:00pm | 0.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 7)); ?>">
    <div class='eatery purple'>
      <h3>Goldies's</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 0.5 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 8)); ?>">
    <div class='eatery pink'>
      <h3>Atrium Café</h3>
      <p class='eatery-info'>Open: 7:00am – 4:00pm | 0.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 9)); ?>">
    <div class='eatery blue'>
      <h3>Mann Café</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 0.8 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 10)); ?>">
    <div class='eatery purple'>
      <h3>Martha's</h3>
      <p class='eatery-info'>Open: 8:00am – 3:00pm | 0.9 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 11)); ?>">
    <div class='eatery pink'>
      <h3>Risley Dining Room</h3>
      <p class='eatery-info'>Open: 11:00am – 2:00pm and 5:00pm – 7:00pm| 1.2 mi</p>
    </div>
  </a>



  </div>


</body>

</html>
