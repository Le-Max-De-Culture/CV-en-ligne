<?php
session_start();
  $path = "/maxime-luce.fr/";
require "config.php";
// REVIEW: functions

function br2nl($string)
{
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
}
function debug($var)
{
  echo '<script>alert("' . $var .'")</script>';
}
function value_exist_in_table($value, $champ, $table)
{
  require "config.php";
  $req_verif_value = $bdd->prepare("SELECT * FROM ". $table . " WHERE " . $champ . "=?");
  $req_verif_value->execute([$value]);
  $value_exist = $req_verif_value->fetch();
  if ($value_exist) {
    $exist = TRUE;
  }
  else {
    $exist = FALSE;
  }
  return $exist;
}
function add_zero($value)
{
  $result = (($value<10) ? '0':'').$value;
  return $result;
}
// REVIEW: end functions
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Maxime Luce</title>
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/common.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?= $path ?>assets/stylesheets/mobile.css">
    <link href="<?= $path?>profil.png" rel="shortcut icon" />
