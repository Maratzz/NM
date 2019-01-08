<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nicolas Moisson</title>
    <meta name="description" content="Site personnel de Nicolas Moisson, aka Maratz. Ludophilophage et coucheur de mots sur écran">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Nicolas Moisson">
    <meta name="twitter:description" content="Site personnel de Nicolas Moisson, aka Maratz. Ludophilophage et coucheur de mots sur écran">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/ego/maratz.jpg">
    <meta name="twitter:image:alt" content="Avatar du personnage The Sythian que j'utilise comme avatar pour ma présence sur Internet">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nicolas Moisson">
    <meta property="og:description" content="Site personnel de Nicolas Moisson, aka Maratz. Ludophilophage et coucheur de mots sur écran">
    <meta property="og:url" content="https://nicolasmoisson.fr/">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/ego/maratz.jpg">
    <meta property="og:image:alt" content="Avatar du personnage The Sythian que j'utilise comme avatar pour ma présence sur Internet">
    <meta property="og:image:width" content="286" />
    <meta property="og:image:height" content="286" />
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <?php include("components/css_files.html") ?>
  </head>
  <body class="index">
    <header class="header-global">
      <h1><a href="/index">Nicolas Moisson</a></h1>
    </header>

    <div class="bg-video">
      <video playsinline autoplay muted loop id="bgvid">
        <source src="" type="video/webm">
      </video>
    </div>

    <nav class="menu">
      <ul>
        <li><a href="/ecrits" class="menu-categories ecrit">Écrits</a></li>
        <li><a href="/projets" class="menu-categories projet">Projets</a></li>
        <li><a href="/blog" class="menu-categories blog">Blog</a></li>
        <li><a href="/cv" class="menu-categories cv">CV</a></li>
        <li><a href="/apropos" class="menu-categories apropos">À propos</a></li>
      </ul>
    </nav>

    <div class="panopticon">
      <a href="/panoptique"><i class="fas fa-eye eye-in"></i></a>
    </div>

    <?php include("components/version.html") ?>
    <?php include("components/footer.html"); ?>
  </body>
</html>
