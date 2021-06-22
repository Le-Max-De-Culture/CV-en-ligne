
    <?php require "assets/partials/head.php"; ?>
    <style media="screen">
      form{

      }
      form input, form textarea{
        display: block;
        margin-bottom: 25px;
      }
    </style>
  </head>
  <body>

    <section>
      <?php require "assets/partials/menu.php"; ?>

      <article class="">
        <h1>Blog</h1>

        <h2>Page administrateur</h2>


        Création, gestion des publications.
        <p>

          <?php
          if (!isset($_SESSION['username'])) {
            echo '<p>Vous n\'êtes pas connecté.</p>';
          ?>
          <form method="post" action="">
  <input type="text" placeholder="Identifiant" required name="username" value="" tabindex="1" />

  <input type="password" id="password" placeholder="Mot de passe" required name="password" value=""/>
<input type="submit" value="Se connecter" class="submit "/></div>
</form>
          <?php
          if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

                $pseudo_Exist = $bdd->prepare("SELECT username FROM user WHERE username = :username");
                  //On recupère les pseudo de t'as base ou les pseudo son egal au pseudo passer par le formulaire
                  $pseudo_Exist->bindValue('username', $username, PDO::PARAM_STR);
                  $pseudo_Exist->execute();
                  //on exécute la requête

                  $pseudoINbdd = $pseudo_Exist->rowCount();
                  //Rowcount permet de sortir le nombre de valeur que t'as requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )
                if($pseudoINbdd == 0)
                {
                // la valeur n'existe pas -> action appropriée
                echo "L'identifiant n'existe pas.";
                }
                else
                {
                  $reponse = $bdd->query('SELECT username, password FROM user WHERE username="'.$username.'"') or die(print_r($bdd->errorInfo()));
                         //fin de la recuperation du contenu

                        $donnees = $reponse->fetch();
                  // Comparaison du pass envoyé via le formulaire avec la base
                  $isPasswordCorrect = password_verify($_POST['password'], $donnees['password']);



                      if ($isPasswordCorrect) {
                          $_SESSION['username'] = $username;
                          echo "<p>Vous êtes connecté " . $_SESSION['username'] . ' !</p>' ;
                            echo "<script>document.location='admin.php'</script>";
                      }
                      else {
                          echo 'Mauvais identifiant ou mot de passe !';
                        }
                }}}
          else{
           ?>
           <h2>Création d'un post</h2>
          <form class="" action="" method="post">
            <input type="date" name="date_post_new" value="" required>
            <input type="text" name="title_post_new" value="" required placeholder="Titre du post">
            <textarea type="text" name="content_post_new" rows="8" cols="80" required placeholder="Contenu"></textarea>
            <input type="submit" name="" value="Créer">
          </form>

          <?php
          if (isset($_POST['date_post_new']) AND isset($_POST['content_post_new']) AND isset($_POST['title_post_new'])){
    // REVIEW: on recupere les infos
    $content_post_new = $_POST['content_post_new'];
    $date_post_new = $_POST['date_post_new'];
    $title_post_new = $_POST['title_post_new'];
    debug("ok");
    debug($date_post_new);
    debug($title_post_new);
    debug($content_post_new);
    $req_crea = $bdd->prepare('INSERT INTO post(date_post, content_post, title_post) VALUES(:date_post_new, :content_post_new, :title_post_new)');
    $req_crea->execute(array(
      'date_post_new' => $date_post_new,
      'content_post_new' => $content_post_new,
      'title_post_new' => $title_post_new
      ));
    var_dump($content_post_new);
    }

           ?>
        </p>
        <h2>Modifier, supprimer une publication</h2>
            <p><a href="<?= $path ?>admin/panel.php"><span class="fas fa-users-cog"></span> Retour au Panel Admin</a></p>

            <?php
            if (isset($_GET['action'])) {
              $action=htmlspecialchars($_GET['action']);
            }
            else {
              $action=FALSE;
            }
            if (isset($_GET['id'])) {
              $id = htmlspecialchars($_GET['id']);
            }
             ?>

            <table>
          <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Titre</th>
            <th>Actions</th>
          </tr>

        <?php

    $reponse = $bdd->query('SELECT * FROM post ORDER BY id DESC');
    while ($donnees = $reponse->fetch())
    {
    ?>
      <tr>
        <td><?= $donnees['id']; ?></td>
        <td><?= $donnees['date_post']; ?></td>
        <td><?= $donnees['title_post']; ?></td>
        <td><a href="admin.php?id=<?= $donnees['id'];?>&action=modify" class="row_container"><span class="fas fa-cog"></span> modifier</a>
              <a href="admin.php?id=<?= $donnees['id'];?>&action=delete" class="row_container"><span class="fas fa-times"></span> supprimer</a></td>
      </tr>
      <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>
  </table>
  <?php

  if ($action == "modify") {
    $stmt = $bdd->prepare("SELECT * FROM post WHERE id = :id");
          $stmt->execute(array(
            'id' => $id
          ));
          while ($row = $stmt->fetch()) {
              $title_post = $row['title_post'];
              $id = $row['id'];
              $date_post = $row['date_post'];
              $content_post = $row['content_post'];
          }

      ?>
      <h2>Modifier la publication ayant pour identifiant <?= $id?></h2>

          <form class="" action="" method="post">
            <input type="date" name="date_post" value="<?= $date_post?>" required>
            <input type="text" name="title_post" value="<?= $title_post?>" required placeholder="Titre du post">
            <textarea name="content_post" rows="8" cols="80" placeholder="Contenu"><?= $content_post?></textarea>
            <input type="submit" name="" value="Mettre à jour">
          </form>
          <?php
          if (isset($_POST['date_post']) AND isset($_POST['title_post']) AND isset($_POST['content_post'])){
            // REVIEW: on recupere les infos
            $title_post = $_POST['title_post'];
            $date_post = $_POST['date_post'];
            $content_post = nl2br($_POST['content_post']);

            $ecriture = $bdd->prepare('UPDATE post SET title_post = :title_post, date_post = :date_post, content_post = :content_post WHERE id = :id');
            $ecriture->execute(array(
              'id' => $id,
              'date_post' => $date_post,
              'content_post' => $content_post,
              'title_post' => $title_post
            ));
            echo '<script>alert("Publication mise à jour")</script>';
            echo "<script>document.location='admin.php'</script>";
  }
}
elseif ($action == "delete") {
  $reponse = $bdd->prepare('SELECT * FROM post WHERE id = :id');
          $reponse->execute(array(
            'id' => $id
          ));
          while ($donnees = $reponse->fetch())
          {
          ?>
        <h2>Supprimer la publication du <?= $donnees['date_post']?></h2>

         <p>Êtes-vous sûr de supprimer la publication du <?= $donnees['date_post']?> (cette action est irréversible) ?</p>
         <form action="" method="post">
           <input type="submit" name="delete" value="Supprimer">
         </form>
          <?php
          if (isset($_POST['delete'])) {
            $req_delete = $bdd->prepare('DELETE FROM post WHERE id = :id');
            $req_delete->execute(array(
              'id' => $id
            ));
            echo '<script>alert("Publication supprimée")</script>';
            echo "<script>document.location='admin.php'</script>";
            ?>
            <?php
          }
        }
}

}
     ?>
      </article>
    </section>

    <?php require "assets/partials/footer.php"; ?>


    <?php require "assets/partials/foot.php"; ?>

  </body>
</html>
