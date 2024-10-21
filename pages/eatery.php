<!-- Page with info on x queried eatery -->
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
  <h1><?php echo $eatery_name ?></h1>
</body>

</html>
