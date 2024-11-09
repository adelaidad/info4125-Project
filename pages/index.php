<!-- Home page where user will add their goals -->
<?php
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
  <h1>Name of the App</h1>

  <div class='user'>
    <picture>
      <img src="public/images/cornell_student.png" alt="Cornell Student (Persona)" class='rounded'>
    </picture>

    <h2>Hi Name!</h2>
  </div>

  <form action="/eateries" method="POST">
    <div class="button-container d-flex flex-wrap mb-3">
      <input type="checkbox" class="btn-check" id="protein" name="protein" value="1" autocomplete="off">
      <label class="btn btn-outline-success" for="protein">High Protein</label>

      <input type="checkbox" class="btn-check" id="low_carb" name="nutrition[]" value="Low Carb" autocomplete="off">
      <label class="btn btn-outline-success" for="low_carb">Low Carb</label>

      <input type="checkbox" class="btn-check" id="low_cal" name="nutrition[]" value="Low Cal" autocomplete="off">
      <label class="btn btn-outline-success" for="low_cal">Low Cal</label>

      <input type="checkbox" class="btn-check" id="low_fat" name="nutrition[]" value="Low Fat" autocomplete="off">
      <label class="btn btn-outline-success" for="low_fat">Low Fat</label>

      <input type="checkbox" class="btn-check" id="dairy_free" name="nutrition[]" value="Dairy Free" autocomplete="off">
      <label class="btn btn-outline-success" for="dairy_free">Dairy Free</label>

      <input type="checkbox" class="btn-check" id="vegan" name="nutrition[]" value="Vegan" autocomplete="off">
      <label class="btn btn-outline-success" for="vegan">Vegan</label>

      <input type="checkbox" class="btn-check" id="vegetarian" name="nutrition[]" value="Vegetarian" autocomplete="off">
      <label class="btn btn-outline-success" for="vegetarian">Vegetarian</label>

      <input type="checkbox" class="btn-check" id="gluten_free" name="nutrition[]" value="Gluten Free" autocomplete="off">
      <label class="btn btn-outline-success" for="gluten_free">Gluten Free</label>

      <input type="checkbox" class="btn-check" id="low_cholesterol" name="nutrition[]" value="Low Cholesterol" autocomplete="off">
      <label class="btn btn-outline-success" for="low_cholesterol">Low Cholesterol</label>
  </div>

  <input id="set_goals" type="submit" value="Find where to eat!" class="btn btn-primary submit" />
</form>


      <!-- Add more checkboxes as needed -->
      <!--  (High protein, Low Carb, Low Cal, Low Fat, Dairy Free, Vegan, Vegetarian, Gluten Free, low chlosterol...etc ) -->
  </div>

    <input id="set_goals" type="submit" value="Find where to eat!" class="btn btn-primary submit" />
  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
