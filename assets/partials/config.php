<?php
//connection bdd
try
{
// On se connecte à MySQL en local
$bdd = new PDO('mysql:host=localhost;dbname=maxime-luce.fr;charset=utf8', 'max', 'LmDc1968php!');
// REVIEW: connection non local
//$bdd = new PDO('mysql:host=localhost;dbname=le-max-de-culture.fr;charset=utf8', 'root', 'CstPrg08CONSTANCE02!');
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
// fin connection $bdd

$host = "localhost"; /* Host name */
//$host = "localhost";

$user = "max"; /* User */
//$user = "app_user";
//$password = "CstPrg08CONSTANCE02!"; /* Password */
$password = "LmDc1968php!";
//$dbname = "le-max-de-culture.fr"; /* Database name */
$dbname = "maxime-luce.fr";

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}
?>
