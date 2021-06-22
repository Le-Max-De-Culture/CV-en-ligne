<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sondage LMDC</title>
    <link rel="stylesheet" href="assets/stylesheets/sondage.css">
  </head>
  <body>
    <h1>Sondage Le Max De Culture</h1>

    <p>Afin de préparer au mieux la nouvelle version du site qui arrivera le 25 juillet prochain mais également pour recueillir de nouvelles idées, vous pouvez ici déposer des suggestions <span>anonymement</span> pour le projet.</p>
    <p>De nombreux projets sont en cours de préparation ou de réalisation et devraient arriver cet été mais toute proposition est la bienvenue !</p>

    <form action="" method="post">
      <textarea type="text" name="message" value="" required placeholder="Votre suggestion/idée" style="width:50%;"></textarea>
      <div class="g-recaptcha" data-sitekey="6Lf227oUAAAAAPL9B1BqvP-18Wp38_D1tNCd606I"></div>
      <input type="submit" name="" value="Envoyer">
    </form>

    <?php
    //connection bdd
try
{
  // On se connecte à MySQL en local
  //$bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
  // REVIEW: connection non local
  $bdd = new PDO('mysql:host=localhost;dbname=lemaxdec_cv;charset=utf8', 'lemaxdec_maxime', 'LmDc1968php!');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
// fin connection $bdd

$host = "localhost"; /* Host name */
//$host = "localhost";

  //$user = "root"; /* User */
  $user = "lemaxdec_maxime";
  //$password = ""; /* Password */
   $password = "LmDc1968php!";
  //$dbname = "cv"; /* Database name */
   $dbname = "lemaxdec_cv";

  $con = mysqli_connect($host, $user, $password,$dbname);
  // Check connection
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

    if (isset($_POST['message'])) {
      $message = $_POST['message'];
      // Ma clé privée
      $secret = "6Lf227oUAAAAAGAWX3blaEPT6Dq9Mh-vmyZyhjy9";
      // Paramètre renvoyé par le recaptcha
      $response = $_POST['g-recaptcha-response'];
      // On récupère l'IP de l'utilisateur
      $remoteip = $_SERVER['REMOTE_ADDR'];
      $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
        . $secret
        . "&response=" . $response
        . "&remoteip=" . $remoteip ;

$decode = json_decode(file_get_contents($api_url), true);
$dev=false;
if ($decode['success'] == true OR $dev==true) {

$req = $bdd->prepare('INSERT INTO sondage(message, date_message) VALUES(:message, NOW())');
            $req->execute(array(
              'message' => $message
            ));
          }
          else {
            echo "Problème avec le captcha";
          }
          }
     ?>


<?php

$reponse = $bdd->query('SELECT date_message, DAY(date_message) AS day, MONTH(date_message) AS month, YEAR(date_message) AS year, message FROM sondage ORDER BY id DESC');

while ($donnees = $reponse->fetch())
{
      if ($donnees['month'] == '1') {
        $month = 'janvier';
      }
      if ($donnees['month'] == '2') {
        $month = 'février';
      }
      if ($donnees['month'] == '3') {
        $month = 'mars';
      }
      if ($donnees['month'] == '4') {
        $month = 'avril';
      }
      if ($donnees['month'] == '5') {
        $month = 'mai';
      }
      if ($donnees['month'] == '6') {
        $month = 'juin';
      }
      if ($donnees['month'] == '7') {
        $month = 'juillet';
      }
      if ($donnees['month'] == '8') {
        $month = 'août';
      }
      if ($donnees['month'] == '9') {
        $month = 'septembre';
      }
      if ($donnees['month'] == '10') {
        $month = 'octobre';
      }
      if ($donnees['month'] == '11') {
        $month = 'novembre';
      }
      if ($donnees['month'] == '12') {
        $month = 'decembre';
      }
      $day = $donnees['day'];
      $year = $donnees['year'];

?>
    <div>
      <p><i class="fas fa-quote-right"></i> <?php echo $donnees['message'];?> <i class="fas fa-quote-right"></i>
      <span> - déposé le <?php echo $day . ' ' . $month . ' ' . $year?> par un anonyme</span>
      </p>
    </div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
 ?>

 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
