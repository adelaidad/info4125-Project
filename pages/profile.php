<!-- Home page where user will add their goals -->
<?php
$protein = isset($_COOKIE['protein']) && $_COOKIE['protein'] == '1' ? 'checked' : '';
$low_carb = isset($_COOKIE['low_carb']) && $_COOKIE['low_carb'] == '1' ? 'checked' : '';
$low_cal = isset($_COOKIE['low_cal']) && $_COOKIE['low_cal'] == '1' ? 'checked' : '';
$dairy_free = isset($_COOKIE['dairy_free']) && $_COOKIE['dairy_free'] == '1' ? 'checked' : '';
$low_fat = isset($_COOKIE['low_fat']) && $_COOKIE['low_fat'] == '1' ? 'checked' : '';
$vegan = isset($_COOKIE['vegan']) && $_COOKIE['vegan'] == '1' ? 'checked' : '';
$vegetarian = isset($_COOKIE['vegetarian']) && $_COOKIE['vegetarian'] == '1' ? 'checked' : '';
$gluten_free = isset($_COOKIE['gluten_free']) && $_COOKIE['gluten_free'] == '1' ? 'checked' : '';
$low_cholesterol = isset($_COOKIE['low_cholesterol']) && $_COOKIE['low_cholesterol'] == '1' ? 'checked' : '';
$low_sodium = isset($_COOKIE['low_sodium']) && $_COOKIE['low_sodium'] == '1' ? 'checked' : '';
$nut_free = isset($_COOKIE['nut_free']) && $_COOKIE['nut_free'] == '1' ? 'checked' : '';
$soy_free = isset($_COOKIE['soy_free']) && $_COOKIE['soy_free'] == '1' ? 'checked' : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>INFO 4125 PROJECT</title>

  <link rel="stylesheet" type="text/css" href="/styles/site.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <?php include("includes/phone.php"); ?>

  <a href="/" class='arrow'>
    <svg width="28" height="100" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M23.3333 14H4.66667M4.66667 14L11.6667 7M4.66667 14L11.6667 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a>

  <div class='user'>
    <picture>
      <img src="public/images/maria.png" alt="Cornell Student (Persona)" class='rounded'>
    </picture>

    <h2 class='name'>Maria</h2>

    <!-- <figure>
      <img src="public/images/tracker.svg">
    </figure> -->

  </div>

  <form action="/" method="POST">
    <div class="container">
      <!-- Diet Types Section -->
      <h3 class="mb-3 filter">Diet Types</h3>
      <div class="button-container d-flex flex-wrap mb-4">
        <input type="checkbox" class="btn-check" id="protein" name="protein" value="1" autocomplete="off" <?php echo $protein; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="protein">High Protein</label>

        <input type="checkbox" class="btn-check" id="low_carb" name="low_carb" value="Low Carb" autocomplete="off" <?php echo $low_carb; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="low_carb">Low Carb</label>

        <input type="checkbox" class="btn-check" id="low_cal" name="low_cal" value="Low Cal" autocomplete="off" <?php echo $low_cal; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="low_cal">Low Cal</label>

        <input type="checkbox" class="btn-check" id="low_fat" name="low_fat" value="Low Fat" autocomplete="off" <?php echo $low_fat; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="low_fat">Low Fat</label>

        <input type="checkbox" class="btn-check" id="vegan" name="vegan" value="Vegan" autocomplete="off" <?php echo $vegan; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="vegan">Vegan</label>

        <input type="checkbox" class="btn-check" id="vegetarian" name="vegetarian" value="Vegetarian" autocomplete="off" <?php echo $vegetarian; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="vegetarian">Vegetarian</label>

        <input type="checkbox" class="btn-check" id="low_cholesterol" name="low_cholesterol" value="Low Cholesterol" autocomplete="off" <?php echo $low_cholesterol; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="low_cholesterol">Low Cholesterol</label>

        <input type="checkbox" class="btn-check" id="low_sodium" name="low_sodium" value="Low Sodium" autocomplete="off" <?php echo $low_sodium; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="low_sodium">Low Sodium</label>
      </div>

      <!-- Allergens Section -->
      <h3 class="mb-3 filter">Allergens</h3>
      <div class="button-container d-flex flex-wrap mb-4">
        <input type="checkbox" class="btn-check" id="dairy_free" name="dairy_free" value="Dairy Free" autocomplete="off" <?php echo $dairy_free; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="dairy_free">Dairy Free</label>

        <input type="checkbox" class="btn-check" id="gluten_free" name="gluten_free" value="Gluten Free" autocomplete="off" <?php echo $gluten_free; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="gluten_free">Gluten Free</label>

        <input type="checkbox" class="btn-check" id="nut_free" name="nut_free" value="Nut Free" autocomplete="off" <?php echo $nut_free; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="nut_free">Nut Free</label>

        <input type="checkbox" class="btn-check" id="soy_free" name="soy_free" value="Soy Free" autocomplete="off" <?php echo $soy_free; ?>>
        <label class="btn btn-outline-success me-2 mb-2" for="soy_free">Soy Free</label>
      </div>

      <div class="d-flex justify-content-center">
        <input id="set_goals" type="submit" value="Find where to eat!" class="btn btn-primary submit" />
      </div>
    </div>
  </form>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script>
    function submitForm() {
      document.querySelector('form').submit();
    }
  </script>
</body>

</html>
