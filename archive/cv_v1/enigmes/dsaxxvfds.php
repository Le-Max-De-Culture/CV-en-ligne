<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Enigme n°5</title>
    <style media="screen">
    body{
      background-color:orange;
      font:normal 100% 'Poppins', Helvetica, sans-serif;
    }
    img{
      display:block;
      margin:auto;
    }
    span{
      font-weight:bold;
    }
    p{
      text-align:center;
      font-size:40px;
    }
    ul li{
      list-style:none;
    }
    form#form{
      display:block;
      margin:auto;
      text-align:center;
    }
    input{
      margin:auto;
      background-color:yellow;
      border-radius:50px;
      border:2px solid black;
      padding:1%;
    }
    </style>
  </head>
  <body>
<img src="lionne.jpg" alt="">
<p>Note à Personne. Merci beaucoup pour <span>tout</span></p>

<p>1, 5, 13, 29, 61, ?</p>

<p>- C'est trop bon, a-t-elle chuchoté. Mais j'ai sommeil. La suite au prochain numéro ?</p>
<p><form action="" method="POST" id="form">
<input type="text" name="password" id="psw" placeholder="Nombre"/>
<input type="submit" name="" value="Vérifier" placeholder="Vérifier">
</form></p>
<p id="response">
  <?php
  if (isset($_POST['password'])) {
    $psw = $_POST['password'];
    if ($psw == "125") {
      echo 'Bon message ! Rendez-vous sur la page de la prochaine énigme : <a href="dsqcarfd.php">link</a>' ;
    }
    else {
      echo "Mauvais message...";
    }
  }
   ?></p>
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
   </script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
      tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] },

});
</script>
  </body>
</html>
