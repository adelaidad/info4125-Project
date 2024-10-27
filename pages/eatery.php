<!-- Select Eatery -->
<?php
// retrieve query string parameters for eatery
$eatery_name = $_GET["eatery"] ?? NULL;

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
  <h2>Where do you want to eat</h2>

  <!-- choosing eatery-- possible eateries are stored in eatery table it chould just be links with query string parameters -->
  <a href="/meals?<?php echo http_build_query(array("eatery" => 2)); ?>" class='button'>Cafe Jennies</a>
</body>

</html>
