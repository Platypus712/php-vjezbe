<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vježba-7</title>
</head>
<body>
  <h1>Izračun ocjene iz kolokvija</h1>
  <p>Potrebno je napraviti formu za izračun ocjene iz kolokvija. Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5</p>
  <form action="" method="POST" id="izracun-ocjene">
    <label for="ocjena1">Ocjena I kolokvija: </label>
    <input type="number" name="ocjena1" id="ocjena1" min="1" max="5" required autofocus>
    <br>  
    <br>
    <label for="ocjena2">Ocjena II kolokvija: </label>
    <input type="number" name="ocjena2" id="ocjena2" min="1" max="5" required>
    <br>
    <input type="submit" value="Izračunaj">
  </form>
  <?php
    if (isset($_POST['ocjena1'])) {$prvaOcjena = $_POST['ocjena1'];}
    if (isset($_POST['ocjena2'])) {$drugaOcjena = $_POST['ocjena2'];}
    $prosjek = ($prvaOcjena + $drugaOcjena) / 2;

    if ($prvaOcjena < 1 || $prvaOcjena > 5 || $drugaOcjena < 1 || $drugaOcjena > 5 ) {
      print 'Krivi unos';
    } else if ($prvaOcjena == 1 || $drugaOcjena == 1 ) {
      print 'Jedan od kolokvija je negativan i zbog toga je zaključna ocjena 1.';
    } else {
      print '
      <p>Ocjena I kolokvija: '.$prvaOcjena.'</p>
      <p>Ocjena II kolokvija: '.$drugaOcjena.'</p>
      <hr>
      <p>Srednja ocjena iz predmeta: '.$prosjek.'</p>
      <p>Konačna ocjena iz predmeta: '.round($prosjek).'</p>';
    }
  ?>
</body>
</html>