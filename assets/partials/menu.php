<div id="menu">
  <img src="<?= $path?>profil.png" alt="Image de Maxime Luce">

  <nav>
    <ul>
      <a href="index.php"><li>Accueil</li></a>
      <a href="mathematique.php"><li>Mathématique</li></a>
      <a href="vulgarisation.php"><li>Vulgarisation</li></a>
      <a href="informatique.php"><li>Informatique</li></a>
      <a href="blog.php"><li>Blog</li></a>
    </ul>
  </nav>
</div>

<header id="mobile">
  <div id="title">
    <img src="<?= $path ?>profil.png" alt="Logo du Site">
    <a href="<?= $pathl ?>index.php"><h1>
    Maxime Luce</h1></a>
  </div>
  <div id="menu-toggle">
    <nav id="nav">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="mathematique.php">Mathématique</a></li>
        <li><a href="vulgarisation.php">Vulgarisation</a></li>
        <li><a href="informatique.php">Informatique</a></li>
        <li><a href="blog.php">Blog</a></li>
      </ul>
  </nav>
    <span class="fas fa-bars" aria-hidden="true" onclick="mobile()"></span>
  </div>
</header>
