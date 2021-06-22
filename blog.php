
    <?php require "assets/partials/head.php"; ?>

  </head>
  <body>

    <section>
      <?php require "assets/partials/menu.php"; ?>

      <article class="">
        <h1>Blog</h1>

        <p>Sur celui-ci, je compte vous partager mes derniers projets et avancées. Cela peut également inclure certains articles plus personnels de façon ponctuelle. Dès la rentrée scolaire, je ferai un bilan à la fin de chaque semaine de ma <span>prépa</span>.</p>

        <p><span></span></p>

        <h2>La Newsletter</h2>
        <p>
          Si vous souhaitez être tenu au courant de la sortie de chaque article, vous pouvez vous inscrire à la <span>newsletter</span> en indiquant votre adresse mail dans le champ ci-dessous : (<a href="informations.php">voir les informations collectées</a>)

          <form id="newsletter" action="" method="post">
            <input type="text" name="mail" value="" placeholder="Taper votre adresse mail">
            <input type="submit" name="" value="S'inscrire">
          </form>
          <?php
          if (isset($_POST['mail'])){
    // REVIEW: on recupere les infos
    $mail = htmlspecialchars($_POST['mail']);
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

    if (value_exist_in_table($mail, "mail", "newsletter") == TRUE) {
      echo "L'adresse mail est déjà enregistrée.";
    }
    elseif (value_exist_in_table($mail, "mail", "newsletter") == FALSE) {
      $req_inscription2 = $bdd->prepare('INSERT INTO newsletter(mail, date_inscription, ip) VALUES(:mail, NOW(), :ip)');
      $req_inscription2->execute(array(
        'mail' => $mail,
        'ip' => $ip
        ));
      echo "L'adresse mail a bien été enregistrée";
    }
    else {
      echo "Un problème est survenu. Veuillez me contacter à <a href='mailto:contact@maxime-luce.fr' target='_blank'>contact@maxime-luce.fr</a>.";
    }
    }
           ?>
        </p>
        <p>


          <?php
          $reponse = $bdd->query('SELECT id, title_post, content_post, DAY(date_post) AS day, MONTH(date_post) AS month, YEAR(date_post) AS year FROM post ORDER BY date_post DESC');
          //var_dump($reponse);

  while ($donnees = $reponse->fetch())
  { ?>
      <h2><?= $donnees['title_post']?> le <?= add_zero($donnees['day'])?>/<?= add_zero($donnees['month'])?>/<?= add_zero($donnees['year'])?></h2>
      <?= nl2br($donnees['content_post'])?>
  <?php }
           ?>
        </p>
      </article>
    </section>

    <?php require "assets/partials/footer.php"; ?>


    <?php require "assets/partials/foot.php"; ?>

  </body>
</html>
