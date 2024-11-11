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

  <div class='header'>
    <h1>Hello, Maria!</h1>
    <picture>
      <img src="public/images/cornell_student.png" alt="Cornell Student (Persona)">
    </picture>
  </div>
  <p>Meals that meet <strong>your</strong> needs:</p>


  <a href="/meals?<?php echo http_build_query(array("eatery" => 2)); ?>">
    <div class='eatery'>
      <h3>Cafe Jennies</h3>
      <p class='eatery-info'>Open: 8:30am – 6:00pm | 0.1 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 3)); ?>">
    <div class='eatery'>
      <h3>Crossings Cafe</h3>
      <p class='eatery-info'>Open: 8:00am – 5:00pm | 1.1 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 4)); ?>">
    <div class='eatery'>
      <h3>Cornell Dairy Bar</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 1.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 5)); ?>">
    <div class='eatery'>
      <h3>The Big Red Barn</h3>
      <p class='eatery-info'>Open: 8:00am – 3:00pm | 0.6 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 6)); ?>">
    <div class='eatery'>
      <h3>Mattin's</h3>
      <p class='eatery-info'>Open: 7:00am – 10:00pm | 0.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 7)); ?>">
    <div class='eatery'>
      <h3>Goldies's</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 0.5 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 8)); ?>">
    <div class='eatery'>
      <h3>Atrium Café</h3>
      <p class='eatery-info'>Open: 7:00am – 4:00pm | 0.2 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 9)); ?>">
    <div class='eatery'>
      <h3>Mann Café</h3>
      <p class='eatery-info'>Open: 8:00am – 6:00pm | 0.8 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 10)); ?>">
    <div class='eatery'>
      <h3>Martha's</h3>
      <p class='eatery-info'>Open: 8:00am – 3:00pm | 0.9 mi</p>
    </div>
  </a>

  <a href="/meals?<?php echo http_build_query(array("eatery" => 11)); ?>">
    <div class='eatery'>
      <h3>Risley Dining Room</h3>
      <p class='eatery-info'>Open: 11:00am – 2:00pm and 5:00pm – 7:00pm| 1.2 mi</p>
    </div>
  </a>

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
