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

  <div class='user'>
    <picture>
      <img src="public/images/cornell_student.png" alt="Cornell Student (Persona)" class='rounded'>
    </picture>

    <h2>Maria</h2>
  </div>

  <form action="/eateries" method="POST">
    <div class="button-container d-flex flex-wrap mb-3">
      <input type="checkbox" class="btn-check" id="protein" name="protein" value="1" autocomplete="off" <?php echo $protein; ?>>
      <label class="btn btn-outline-success" for="protein">High Protein</label>

      <input type="checkbox" class="btn-check" id="low_carb" name="low_carb" value="Low Carb" autocomplete="off" <?php echo $low_carb; ?>>
      <label class="btn btn-outline-success" for="low_carb">Low Carb</label>

      <input type="checkbox" class="btn-check" id="low_cal" name="low_cal" value="Low Cal" autocomplete="off" <?php echo $low_cal; ?>>
      <label class="btn btn-outline-success" for="low_cal">Low Cal</label>

      <input type="checkbox" class="btn-check" id="low_fat" name="low_fat" value="Low Fat" autocomplete="off" <?php echo $low_fat; ?>>
      <label class="btn btn-outline-success" for="low_fat">Low Fat</label>

      <input type="checkbox" class="btn-check" id="dairy_free" name="dairy_free" value="Dairy Free" autocomplete="off" <?php echo $dairy_free; ?>>
      <label class="btn btn-outline-success" for="dairy_free">Dairy Free</label>

      <input type="checkbox" class="btn-check" id="vegan" name="vegan" value="Vegan" autocomplete="off" <?php echo $vegan; ?>>
      <label class="btn btn-outline-success" for="vegan">Vegan</label>

      <input type="checkbox" class="btn-check" id="vegetarian" name="vegetarian" value="Vegetarian" autocomplete="off" <?php echo $vegetarian; ?>>
      <label class="btn btn-outline-success" for="vegetarian">Vegetarian</label>

      <input type="checkbox" class="btn-check" id="gluten_free" name="gluten_free" value="Gluten Free" autocomplete="off" <?php echo $gluten_free; ?>>
      <label class="btn btn-outline-success" for="gluten_free">Gluten Free</label>

      <input type="checkbox" class="btn-check" id="low_cholesterol" name="low_cholesterol" value="Low Cholesterol" autocomplete="off" <?php echo $low_cholesterol; ?>>
      <label class="btn btn-outline-success" for="low_cholesterol">Low Cholesterol</label>

      <input type="checkbox" class="btn-check" id="low_sodium" name="low_sodium" value="Low Sodium" autocomplete="off" <?php echo $low_sodium; ?>>
      <label class="btn btn-outline-success" for="low_sodium">Low Sodium</label>

      <input type="checkbox" class="btn-check" id="nut_free" name="nut_free" value="Nut Free" autocomplete="off" <?php echo $nut_free; ?>>
      <label class="btn btn-outline-success" for="nut_free">Nut Free</label>

      <input type="checkbox" class="btn-check" id="soy_free" name="soy_free" value="Soy Free" autocomplete="off" <?php echo $soy_free; ?>>
      <label class="btn btn-outline-success" for="soy_free">Soy Free</label>
    </div>

    <div class="d-flex justify-content-center">
      <input id="set_goals" type="submit" value="Find where to eat!" class="btn btn-primary submit" />
    </div>
  </form>

  <div class='nav'>
    <a href="javascript:void(0);" onclick="submitForm()">
      <div class='icon-home'>
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.2097 27.6952V23.6062C12.2096 22.5661 13.0575 21.7211 14.1081 21.7141H17.9562C19.0117 21.7141 19.8674 22.5612 19.8674 23.6062V23.6062V27.7079C19.8671 28.5909 20.579 29.3126 21.4708 29.3333H24.0362C26.5935 29.3333 28.6667 27.2809 28.6667 24.7491V24.7491V13.1171C28.653 12.1211 28.1807 11.1858 27.384 10.5773L18.6103 3.58036C17.0733 2.36205 14.8883 2.36205 13.3513 3.58036L4.61607 10.59C3.81639 11.196 3.34322 12.1328 3.33337 13.1298V24.7491C3.33337 27.2809 5.40654 29.3333 7.96392 29.3333H10.5293C11.4432 29.3333 12.184 28.5999 12.184 27.6952V27.6952" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
          <path fill-rule="evenodd" clip-rule="evenodd" d="M23.0586 9.72136C23.0586 13.6374 19.9188 16.7774 16 16.7774C12.0825 16.7774 8.94135 13.6374 8.94135 9.72136C8.94135 5.80532 12.0825 2.66663 16 2.66663C19.9188 2.66663 23.0586 5.80532 23.0586 9.72136ZM16 29.3333C10.2165 29.3333 5.33331 28.3933 5.33331 24.7666C5.33331 21.1385 10.2472 20.2319 16 20.2319C21.7848 20.2319 26.6666 21.1719 26.6666 24.7986C26.6666 28.4266 21.7528 29.3333 16 29.3333Z" fill="#91C788" />
        </svg>
      </div>
    </a>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script>
    function submitForm() {
      document.querySelector('form').submit();
    }
  </script>
</body>

</html>
