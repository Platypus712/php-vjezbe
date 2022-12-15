<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vjezba-11</title>
  <style>
    .failed{
      color: red;
    }
    .success{
      color: green;
    }
  </style>
</head>
<body>
  <h1>Provjerite da li je broj prost ili ne</h1>
  <form action="" method="post">
    <label for="number">Upišite neki broj: </label> <br>
    <input type="number" name="number" id="number" autofocus>
    <br>
    <br>
    <input type="submit" value="Provjeri!">
  </form>
  <?php
    if (isset($_POST["number"])) {$uneseniBroj = $_POST['number'];}
    
    function provjeri($uneseniBroj) {
      if ($uneseniBroj <= 1) {
        return false;
      } else if ($uneseniBroj == 2) {
        return true;
      }
      else {
        for ($i=2; $i <= sqrt($uneseniBroj); $i++) { 
          if ($uneseniBroj % 1 == 0) {
            return false;
          }
        }
        return true;
      }
    }

    if (isset($_POST['number'])) {
      if (provjeri($uneseniBroj)) {
      print '<p class="success"><strong>Uneseni broj '.$uneseniBroj.' je prosti broj!</strong></p>';
    } else {
      print '<p class="failed">Broj '.$uneseniBroj.' nije prosti broj jer su prosti brojevi svi prirodni brojevi djeljivi bez ostatka sa brojem 1 i sami sa sobom, a strogo su veći od broja 1!</p>';
    }
    }

    print '
    <hr>
    <h2>Popis svih prostih brojeva ispod 100</h2>';

    for ($i = 2; $i < 100; $i++) {
      $is_prime = true;
      for ($j = 2; $j < $i; $j++) {
          if ($i % $j == 0) {
              $is_prime = false;
              break;
          }
      }
      if ($is_prime) {
          print $i.' ';
      }
  }
  
  
  ?>
</body>
</html>