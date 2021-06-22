<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enigme</title>
    <style media="screen">
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
     form{
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
     }
     input{
       padding: 15px;
     }
     input#text{
       width: 500px;
     }
     input#send{
       width: 200px;
     }
    </style>
  </head>
  <body>

    <form class="" action="" method="post">
      <input type="text" name="text" id="text" value="" placeholder="Message décodé/information/truc que tu as trouvé ;)" required>
      <input type="submit" name="" id="send" value="Essayer">
    </form>
    <?php
    if (isset($_POST['text'])) {
      $text = htmlspecialchars($_POST['text']);
      $text = str_replace(" ", "-", strtolower($text));
      echo '<p>Tu as essayé : "' . $text .'".</p>';
      if ($text == "l'isle-sur-la-sorgue" or $text == "l'îsle-sur-la-sorgue" or $text == "l-isle-sur-la-sorgue") {
        echo '<p>Bravo !! Tu as franchi la première étape avec succès !</p><p> Rendez-vous ici pour la suite : <a href="epaavretl.php">ici</a> ;)</P>';
      }
      else {
        echo '<p>Désolé. Ce n\'est pas ça. Tu as le temps pour réessayer .</p>';
      }
    }
     ?>
    <!-- rien dans le code, tout sur papier !-->
  </body>
</html>
