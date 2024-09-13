<?php
$datetime1 = date_create(date("Y-m-d"));
$datetime2 = date_create('2024-04-22');
$interval = date_diff($datetime1, $datetime2);
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Concours</title>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300');
      *{
        margin:0;
        padding:0;
      }
      html,body{
        background-color: blue;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        height:100vh;
        font-family: 'Kalam', arial;
      }
      h1, h2{
        color:white;
        font-family: 'Kalam', arial;
      }
    </style>
  </head>
  <body>

    <h1><?= $interval->format('%a');  ?></h1>
  </body>
</html>
