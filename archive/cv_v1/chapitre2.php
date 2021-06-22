<?php
$datetime1 = date_create(date("Y-m-d"));
$datetime2 = date_create('2022-02-08');
$datetime3 = date_create('2017-12-03');
$interval = date_diff($datetime1, $datetime2);
$interval2 = date_diff($datetime3, $datetime1);
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>&#10084; Chapitre 2 &#10084;</title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300');
      *{
        margin:0;
        padding:0;
      }
      html,body{
        background-color: orange;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        height:100vh;
        font-family: 'Kalam', arial;
      }
      h1, h2{
        color:blue;
        font-family: 'Kalam', arial;
      }
    </style>
  </head>
  <body>
    <img src="enigmes/lionne.jpg" alt="">
    <h1>&#10084; Chapitre 2 &#10084;</h1>
    <h2>Temps restant : <?= $interval->format('%a');  ?> jours.</h2>
    <h2>Temps écoulé : <?= $interval2->format('%a');  ?> jours.</h2>
    <img src="enigmes/lionne.jpg" alt="">
  </body>
</html>
