<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>##### | Nicolas Moisson</title>
    <meta name="description" content="#####">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="##### | Nicolas Moisson">
    <meta name="twitter:description" content="#####">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/img-grid/">
    <meta name="twitter:image:alt" content="Capture d'écran du jeu">
    <meta property="og:type" content="website">
    <meta property="og:title" content="##### | Nicolas Moisson">
    <meta property="og:description" content="#####">
    <meta property="og:url" content="https://nicolasmoisson.fr/textes/#####">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/img-grid/">
    <meta property="og:image:alt" content="Capture d'écran du jeu">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <?php include("../components/css_files.html") ?>
  </head>
  <body>
    <?php include("../components/base-texte-header-in-menu.html") ?>
    <main>
      <div class="img-header">
        <picture>
          <source media="(max-width: 800px)" srcset="../img/img-header/mobile/#####">
          <source media="(min-width: 801px)" srcset="../img/img-header/#####">
          <img src="/img/img-header/#####" class="bg-img-header" alt="Capture d'écran du jeu"/>
        </picture>

        <h2>#####</h2>
        <p>#####</p>
      </div>

      <article class="article" id="article">
        <h3>#####</h3>

        <audio id="audio" ontimeupdate="udpateProgress()" onended="resetAudio()" preload="none">
          <source src="../music/#####.ogg" type="audio/ogg">
          <source src="../music/#####.mp3" type="audio/mp3">
        </audio>
        <div id="audioWrap">
          <button id="audioPlayer"><i class="far fa-play-circle" id="audioIcon"></i></button>
          <div>
            ##### #####
            <progress id="seekbar" value="0" max="1"></progress>
          </div>
        </div>

        <p>#####</p>

        <div class="img-inside">
          <img src="/img/img-inside/#####" alt="#####"/>
          <div class="img-text">#####</div>
        </div>

      </article>

      <aside class="credits" data-aos="zoom-in">
        <p>#####</p>
      </aside>

      <aside class="credits" data-aos="zoom-in">
        <p>
          Image de couverture: <a href="#####">#####</a><br />
          Images à l'intérieur: #####.
        </p>
      </aside>
    </main>
<?php include("../components/version.html") ?>
<?php include("../components/footer.html") ?>
