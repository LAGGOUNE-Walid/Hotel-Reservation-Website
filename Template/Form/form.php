<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../CSS/normalize.css" />
  <link rel="stylesheet" href="../../CSS/style.css" />
  <link rel="stylesheet" href="./form.css" />
  <title>Document</title>
</head>
<body>
  <div class="register" id="register">
    <div class="container">

      <form action="../../../backend/reserve.php" method="POST" id="hotel-reservation">
        <?php if(array_key_exists("errors", $_SESSION)): ?>
          <h4 style="color: red;">Show error message</h4>
        <? endif; ?>

        <?php if(array_key_exists("success", $_SESSION)): ?>
          <h4 style="color: green;">saved !</h4>
        <? endif; ?>
        <div class="form-info">
          <label for="name">Nom Complet</label>
          <input type="text" name="name" id="name" required placeholder=" " />
        </div>
        <div class="form-info">
          <label for="email">Email</label>
          <input
          type="email"
          name="email"
          id="email"
          required
          placeholder=" "
          />
        </div>

        <div class="form-info">
          <label for="hotel">Hotel</label>
          <select name="hotel" id="hotel" required>
            <option selected disabled value=""></option>
            <option value="Sheraton">Sheraton - Oran</option>
            <option value="AZ">AZ - Mostaganem</option>
            <option value="Mercure">Mercure - Alger</option>
          </select>
        </div>
        <div class="form-info">
          <label for="chambre">Type de chambres</label>
          <select name="chambre" id="chambre" required>
            <option selected disabled value=""></option>
            <option value="standard">
              Chambre standard (1 a 2 personne)
            </option>
            <option value="familliale">
              Chambre familliale (1 a 4 personne)
            </option>
            <option value="Suite">Suite</option>
          </select>
        </div>
        <div class="form-info">
          <label for="nombre">Nombre de personne</label>
          <input
          type="number"
          name="nombre"
          id="nombre"
          required
          placeholder=" "
          />
        </div>

        <div class="form-info">
          <label for="arrival">Date d'arrivée</label>
          <input
          type="date"
          name="arrival"
          id="arrival"
          required
          placeholder=" "
          />
        </div>
        <div class="form-info">
          <label for="depart">Date de départ</label>
          <input
          type="date"
          name="depart"
          id="depart"
          required
          placeholder=" "
          />
        </div>

        <button type="submit" form="hotel-reservation" value="Submit">
          Submit
        </button>
      </form>
    </div>
  </div>
</body>
</html>
<?php 
unset($_SESSION["errors"]);
unset($_SESSION["success"]);
?>