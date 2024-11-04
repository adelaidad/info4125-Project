<?php
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['protein'])) {
    setcookie('protein', '1', time() + (86400 * 30), "/");
  } else {
    setcookie('protein', '', time() - 3600, "/");
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
  <!-- Add the rest of the eateries -->
</body>

</html>
