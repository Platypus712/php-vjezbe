<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vjezba 10</title>
</head>
<body>
  <h1>Unesite tekst kojem želite prebrojati broj riječi</h1>
  <form action="" method="post">
    <label for="text1">Unesite tekst:</label> <br>
    <textarea name="text" id="text1" cols="30" rows="10"></textarea> <br>
    <input type="submit" value="Prebroji!">
    <hr>
  </form>
  <?php
    $uneseniTekst = $_POST['text'];

    function prebroji($uneseniTekst) {
      print '<p>Uneseni tekst: <code><em>'.$uneseniTekst.'</em></code> ima '.str_word_count($uneseniTekst).' rijeci.</p>';
    }

    prebroji($uneseniTekst);
  ?>
</body>
</html>