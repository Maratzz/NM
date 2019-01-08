<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Super Hexagon | Nicolas Moisson</title>
    <meta name="description" content="Une leçon de jeu, de vie et de haut en 6 variations et 3 morceaux.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Super Hexagon | Nicolas Moisson">
    <meta name="twitter:description" content="Une leçon de jeu, de vie et de haut en 6 variations et 3 morceaux.">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/img-grid/superhexagon.jpg">
    <meta name="twitter:image:alt" content="Capture d'écran du niveau 1 du jeu">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Super Hexagon | Nicolas Moisson">
    <meta property="og:description" content="Une leçon de jeu, de vie et de haut en 6 variations et 3 morceaux.">
    <meta property="og:url" content="https://nicolasmoisson.fr/textes/superhexagon">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/img-grid/superhexagon.jpg">
    <meta property="og:image:alt" content="Capture d'écran du niveau 1 du jeu">
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
          <source media="(min-width: 801px)" srcset="../img/img-header/superhexagon_header.jpg">
          <img src="/img/img-header/superhexagon_header.jpg" class="bg-img-header" alt="Capture d'écran du jeu"/>
        </picture>

        <h2>Super Hexagon</h2>
        <p>Une leçon de jeu, de vie et de haut en 6 variations et 3 morceaux.</p>
      </div>

      <article class="article" id="article">
        <h3>Publié le 1er octobre, écrit le 17 mai 2013 - Jeux vidéo</h3>

        <audio id="audio" ontimeupdate="udpateProgress()" onended="resetAudio()" preload="none">
          <source src="../music/superhexagon.ogg" type="audio/ogg">
          <source src="../music/superhexagon.mp3" type="audio/mp3">
        </audio>
        <div id="audioWrap">
          <button id="audioPlayer"><i class="far fa-play-circle" id="audioIcon"></i></button>
          <div>
            Focus - Chipzel
            <progress id="seekbar" value="0" max="1"></progress>
          </div>
        </div>

        <p>
          Rares sont les jeux qui transforment véritablement le joueur. Je ne parle pas des jeux avec un scénario, artifice légèrement impropre au medium et sujet à la subjectivité de tout un chacun. Ni des jeux avec des graphismes sublimes et/ou uniques, qui, si ils sont plus proches du medium vidéo-ludique que l'élément scénaristique, restent tout de même soumis à la subjectivité de celui qui regarde. Je parle des jeux qui bouleversent l'être, et qui font que l'individu, après s'être impliqué moralement, mentalement ET physiquement (ce point est essentiel), ressort différent d'une confrontation avec le jeu, en apprenant quelque chose de nouveau sur lui-même, sur sa vie, sur ce qui l'entoure, sur le monde. <i>Super Hexagon</i> fait partie de cette catégorie restreinte.
        </p>
        <p>
          Pour savoir ce que ce monstre crée par Terry Cavanagh peut bien apporter à quelqu'un de normalement constitué, regarder le <i>trailer</i> ne suffira pas. Par ailleurs, parlons-en de ce <i>trailer</i>, qui est à l'image du jeu: brutal, direct, sans concession, froid comme un hexagone lancé en pleine face, <a href="https://www.youtube.com/watch?v=2sz0mI_6tLQ">la vidéo disponible sur YouTube</a> vous fera tourner de l’œil. Elle montre sans chichis ni fonfons la totalité du jeu, à savoir les mécaniques, la musique, l'image. Rien d'autre. Pas de cinématiques trompeuses, pas de listes de récompenses obtenues ici et là, pas de bouts de phrases collées les unes aux autres pour faire des éloges subliminales. Le <i>trailer</i> est le jeu. Le jeu est le <i>trailer</i>.
        </p>
        <p>
          <i>Super Hexagon</i> donc, est un jeu dans lequel vous incarnez un triangle qui gravite autour d'un hexagone. Vous êtes au milieu de l'écran, et votre but sera de rester en vie. Ou en activité. Peut-on véritablement parler de vie à ce niveau-là ? Vous aurez pour tâche d'esquiver les vagues de murs qui viendront vers vous, de l'extérieur vers l'intérieur, dans un espèce de labyrinthe inversé généré semi-aléatoirement à l'aide de <i>patterns</i> qui ne chercheront qu'une chose: que vous fonciez dedans et perdez la partie. Survivez une minute, et le niveau se termine. Chacun des trois niveaux disponibles au début débloquera après complétion son mode "hyper", qui n'est plus ni moins que la version plus difficile de son prédecesseur.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/superhexagon_in.jpg" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Et c'est tout, me direz-vous ? Oui, mes chers futurs épileptiques, c'est tout. C'est tout ce que le jeu vidéo est, à son essence même. Une idée de départ, et une mécanique qui la met en oeuvre de manière sublime. D'ici là, vous aurez déjà ouvert le <i>trailer</i> je l'espère, pour vous rendre compte que la tâche ne sera pas facile. Si les niveaux sont considérés finis au bout d'une minute, ce n'est pas pour rien. De toute façon, 4 secondes ou moins suffiront à vous tuer lors des premiers essais.
        </p>
        <p>
          De monstre, <i>Super Hexagon</i> en a l'apparence physique. Les couleurs vives, le tournoiement incessant du labyrinthe, qui s'arrête soudainement pour mieux repartir dans l'autre sens, les murs qui défilent et arrivent vers vous à vitesse grand V, les <i>patterns</i> diaboliques, le tout agrémenté d'une musique psychédélique, tout est fait pour faire de <i>Super Hexagon</i> un véritable cauchemar à 6 côtés. J'ai dit 6 ? Le jeu parfois s'amusera à modifier le cœur sur lequel vous gravitez, passant de 6 à 5, puis 4, pour faire un carré, avant de revenir à 5, puis 4, puis 6 à nouveau. Ce n'est pas vous qui jouez à <i>Super Hexagon</i>. C'est <i>Super Hexagon</i> qui joue avec vous, vous et vos nerfs.
        </p>
        <p>
          Vous l'avez deviné, le jeu est aussi monstrueux par sa difficulté. On ne monte pas un tel univers psychédélique pour y jouer une simulation d'élevage de vaches à l'intérieur. Pour vous prouver que les choses ne sont pas faites à moitié, laissez-moi préciser que le premier niveau, appelé tout simplement 'Hexagon', est labellé de la mention <i>'Hard'</i> pour la difficulté. Ne cherchez même pas un quelconque réglage, <i>Super Hexagon</i> est aussi rigide qu'une règle en fer caressant violemment vos doigts, tenue par un professeur de mathématiques peu satisfait de vos dessins à 6 faces. Ce n'est pas le jeu qui doit s'adapter à vous, mais bel et bien vous, joueur ou joueuse, qui devrez dompter la bête et montrer qui de vous deux est la forme géométrique dominante. Et ça fait mal. Et ça fait du bien. On s'énerve, on s'essouffle, on commence à se dire que ce jeu est absolument atroce. Une minute pour finir le niveau ? Et pourquoi pas les hommes sur la Lune aussi ? 15 secondes de survie, et la voix féminine annonce l'inéluctable <i>"GAME OVER"</i>, pour la 35ème fois consécutive. Machinalement, vous relancez. Encore et encore. C'est plus qu'un jeu vidéo. C'en devient un défi personnel, une question d'honneur. Vous avez connu des heptagones et des décagones, oui monsieur ! Ce n'est pas un vulgaire hexagone qui va vous barrer le chemin.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/superhexagon_in_2.jpg" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Vient alors ce moment, ce pourquoi le jeu fait partie des plus grands. Ce moment, c'est celui où vous vous rendez compte que malgré la vitesse hallucinante du labyrinthe et la folie des <i>patterns</i> endiablés, vous progressez. Vous avancez. Niveau un terminé. Niveau deux, <i>"harder"</i>. Niveau 3, <i>"hardest"</i>. Jusqu'au dernier niveau, l'ultime, le seul et l'unique <i>"Hardestestest"</i>, pour ne citer que son niveau de difficulté aussi légendaire que grammaticalement incorrect. Terry Cavanagh a inventé un néologisme pour qualifier l'expérience du dernier niveau, et nous on passe à côté de cet éclat de génie, mais le monsieur ne nous en veut pas. Il sait que nous sommes en proie avec notre dernière frontière. Le monde en noir et blanc tourne et virevolte, au rythme de la musique de Chipzel. Phénoménal. Les secondes paraissent une éternité. Une minute ? Une heure oui. L'écran n'existe plus, la manette ou le clavier n'existe plus. Il n'y a plus que vous et <i>Super Hexagon</i>. <i>Super Hexagon</i> et vous. Dans un dernier souffle, les 60 secondes sont franchies, et vous voilà transcendés. Ce jeu, ce <i>putain</i> de jeu, vous l'avez terminé. Vous avez sacrifié vos yeux, votre âme, vos doigts et votre capacité à voir le monde autrement qu'avec 6 côtés, mais cette fois-ci vous la savez cette chose qu'a voulu vous transmettre <i>Super Hexagon</i>.
        </p>
        <p>
          Avec de la persévérance et de la patience, tout est possible. Levez-vous et faites vos projets les plus fous. Tout est possible.
        </p>
        <p>
          Souvenez-vous à jamais de <i>Super Hexagon</i>, qui à travers quelques formes géométriques ridicules et un univers complètement minimaliste et psychédélique, vous aura apporté une leçon d'humilité d'abord, et une autre d'optimisme ensuite.
        </p>

      </article>

      <aside class="credits" data-aos="zoom-in">
        <p>Super Hexagon, un jeu de Terry Cavanagh (design et programmation) et Chipzel (musique)</p>
        <p>
          Sorti initialement en 2012 sur Windows.
        </p>
        <p>
          Disponible à la vente sur de nombreuses plateformes via <a href="https://www.superhexagon.com/">le site officiel</a>.
        </p>
        <p>
          Le jeu utilise des effets visuels ainsi que des répétitions rapides d'images et de figures géométriques qui peuvent provoquer des crises d'épilepsie chez les personnes sensibles à ces phénomènes.
        </p>
      </aside>

      <aside class="credits" data-aos="zoom-in">
        <p>
          Image de couverture et à l'intérieur: <a href="https://www.gog.com/game/super_hexagon">GOG.com</a><br />
        </p>
      </aside>
    </main>
<?php include("../components/version.html") ?>
<?php include("../components/footer.html") ?>
