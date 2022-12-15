<!DOCTYPE html>
<html>
<head>
  <title>Vjezba-9 -> Php zadaca</title>
  <style>
    .pzatvoreno{
      color: red;
    }
    .potvoreno{
      color: green;
    }
  </style>
</head>
<body>
  <h1>Radno vrijeme dućana!</h1>
  <div class="radno-vrijeme">
    <p>PON-PET: 8:00 - 20:00</p>
    <p>SUB: 9:00 - 14:00</p>
    <p>Dućan je zatvoren nedjeljom i na sve državne praznike i blagdane!</p>
    <hr>
  </div>
<?php

  $trenutniDan = date('l'); 
  $trenutnoVrijeme = date('H:s'); 

function radnoVrijeme($trenutniDan, $trenutnoVrijeme) {
    if ($trenutniDan != 'subota' && $trenutniDan != 'nedjelja' && $trenutnoVrijeme >= '8:00' &&$trenutnoVrijeme <= '20:00') {
      print '<p>Danas je '.$trenutniDan.' i '.$trenutnoVrijeme.' sati.</p>
      <p class="potvoreno"><strong>Dućan je otvoren!</strong></p>';
    } elseif ($trenutniDan == 'subota' && $trenutnoVrijeme >= '9:00' && $trenutnoVrijeme <= '14:00') {
      print '<p>Danas je '.$trenutnoVrijeme.' i '.$trenutnoVrijeme.' sati.</p>
      <p class="potvoreno"><strong>Dućan je otvoren jer je drugačije radno vrijeme vikendom.</strong></p>';
    } else {
      print '<p>Danas je '.$trenutniDan.' i '.$trenutnoVrijeme.' sati.</p>
      <p class="pzatvoreno"><strong>Dućan je zatvoren!</strong></p>';
    }
  }

  radnoVrijeme($trenutniDan, $trenutnoVrijeme);
?>


</body>
<html>