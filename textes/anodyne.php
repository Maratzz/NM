<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anodyne | Nicolas Moisson</title>
    <meta name="description" content="Anodyne est fait de la même matière que celle des rêves.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Anodyne | Nicolas Moisson">
    <meta name="twitter:description" content="Anodyne est fait de la même matière que celle des rêves.">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/img-grid/anodyne.png">
    <meta name="twitter:image:alt" content="Capture d'écran du jeu Anodyne">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Anodyne | Nicolas Moisson">
    <meta property="og:description" content="Anodyne est fait de la même matière que celle des rêves.">
    <meta property="og:url" content="https://nicolasmoisson.fr/textes/anodyne">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/img-grid/anodyne.png">
    <meta property="og:image:alt" content="Capture d'écran du jeu Anodyne">
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
          <source media="(max-width: 800px)" srcset="../img/img-header/mobile/anodyne_header_800.jpg">
          <source media="(min-width: 801px)" srcset="../img/img-header/anodyne_header.jpg ">
          <img src="/img/img-header/anodyne_header.jpg" class="bg-img-header" alt="Capture d'écran du jeu Anodyne"/>
        </picture>

        <h2>Anodyne</h2>
        <p>Anodyne est fait de la même matière que celle des rêves.</p>
      </div>

      <article class="article" id="article">
        <h3>Publié le 1er avril 2019, écrit le 6 mars 2014 - Jeux vidéo</h3>

        <audio id="audio" ontimeupdate="udpateProgress()" onended="resetAudio()" preload="none">
          <source src="../music/anodyne.ogg" type="audio/ogg">
          <source src="../music/anodyne.mp3" type="audio/mp3">
        </audio>
        <div id="audioWrap">
          <button id="audioPlayer"><i class="far fa-play-circle" id="audioIcon"></i></button>
          <div>
            Cliff - Sean Han Tani
            <progress id="seekbar" value="0" max="1"></progress>
          </div>
        </div>

        <p>
          Fugace, léger, absurde, le jeu partage de nombreux traits avec les songes qui viennent peupler notre sommeil. Il est la fois riche en scènes et en situations, toutes plus étonnantes les unes que les autres, mais également pauvre en cohérence et en significations. Comme un rêve, il est ridicule de tenter d'y voir une quelconque logique et l'interpréter en profondeur ne fait que briser l'illusion. Au mieux, c'est tiré par les cheveux, au pire on sombre dans l'obsession symbolique et l'analyse confortable à laquelle on fait dire ce que l'on souhaite.
        </p>
        <p>
          Notons simplement que le mot <i>anodyne</i> en anglais désigne en premier lieu ce qu'on pourrait traduire par <i>analgésiques</i> en français. Par extension métaphorique, <i>anodyne</i> peut qualifier tout ce qui rassure et apaise l'esprit. Dans ce sens, <i>Anodyne</i>, avec une majuscule, est un jeu qui cherche à distraire l'esprit et de Young, le jeune protagoniste, et du joueur ou de la joueuse, pour lui offrir un refuge vidéo-ludique, le temps de quelques heures. Cette analyse, je ne la sors pas de mon chapeau magique: ce n'est pas un hasard si les deux développeurs se sont associés sous le nom d'Analgesic Productions pour sortir <i>Anodyne</i>.
        </p>
        <p>
          Ainsi, le jeu entier est à l'image d'un rêve vidéo-ludique analgésique. Les environnements se succèdent, les situations s'enchaînent sans trop d'explications. Aux commandes d'un dénommé Young dont on ne sait absolument rien, si ce n'est qu'il semble avoir des difficultés pour interagir avec l'extérieur et former (et entretenir) des relations sociales, on s'enfonce toujours plus dans un monde aux multiples facettes et aux nombreux environnements. Le pixel art d'<i>Anodyne</i>, soigné et varié, se décline en tableaux qui vont de la forêt automnale à la faille spatio-temporelle futuriste, en passant par un retour à l'époque des déclinaisons de gris de <i>Gameboy</i>. Les styles graphiques et les ambiances se mélangent pour former un univers riche, à défaut d'être cohérent. On ne sait jamais sur quoi on va tomber en passant d'un écran à un autre, et cette découverte de l'inconnu est au cœur des points forts du jeu, qui met l'emphase sur le côté exploration, du reste. Certains passages valent le détour, de par leur absurdité soudaine ou bien alors de par leur imprévisible charme. On se surprend à rester quelques secondes de plus devant un décor de carte postale, immobile, avant de repartir vers d'autres péripéties.
        </p>
        <p>
          <i>Anodyne</i> n'a pas de sens ni de but à proprement parler, et bien courageux est celui qui essaierait de lui en coller un. On peut y voir tout et n'importe quoi, et c'est là son plus grand défaut. Alors oui, le tout est très fortement inspiré des premiers <i>Zelda</i>, dans ses mécaniques de jeu, dans l'architecture du monde, dans l'alternance entre l'exploration externe de la carte et l'exploration interne des donjons qui sont dispersés ici et là. Mais l'inspiration s'arrête là. <i>Zelda</i> avait une histoire, un but, un rythme: sauver la princesse, et le monde. S'il fallait donner un but à <i>Anodyne</i>, ce serait celui que j'ai déjà donné un peu plus haut: divertir et occuper l'esprit pendant quelques heures. Cela passe par la forme la plus classique des clones <i>Zelda</i>-esque, à savoir des donjons à la chaîne, des boss, quelques énigmes, et des errances dans le vaste monde.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/anodyne_in.png" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Si les mécaniques de jeu sont solides, l'exécution pêche parfois au niveau de la difficulté qui s'avère être fausse par moments, mais c'est moins lié à <i>Anodyne</i> qu'au genre dont il s'inspire. En général, pour instaurer une certaine progression dans ce genre de jeux, on a recours à des objets ou à des améliorations qu'on acquiert au fil du temps et qui permettent de débloquer des zones inaccessibles jusqu'alors. Cependant <i>Anodyne</i>, dans sa rigidité toute onirique, ne présente rien de tout cela: il lui faut donc passer par un système de cartes à trouver un peu partout dans le monde, cartes qu'il faudra avoir en quantité suffisante pour ouvrir les grilles bloquant l'accès aux nouvelles zones, sous peine de devoir revenir en arrière et chercher dans tous les coins pour avoir les dernières. Vous le voyez venir, mais malheureusement il faudra le faire: oui, il faudra obtenir toutes les cartes du jeu pour accéder à la dernière zone du jeu. Je n'ai pas apprécié ce système dans <i>Super Mario 3D Land</i>, et ce sera la même chose dans <i>Anodyne</i>. L'exploration est un choix, pas une nécessité, et je serai toujours contre cette manière d'instaurer une fausse difficulté via la deuxième méthode. Cela résulte en un retour en arrière et une exploration forcée qui laisse un arrière-goût de frustration et d'énervement. Heureusement que la carte indique clairement les endroits encore non-visités, ce qui allège un peu la sensation de faire une corvée pour arriver à la fin du jeu.
        </p>
        <p>
          On regrettera également une certaine monotonie dans les donjons, la faute encore à cette rigidité omniprésente dans le titre. Puisqu'il n'y a pas d'objets, les puzzles sont extrêmement limités et on a vite fait le tour entre les pièces avec plusieurs interrupteurs dedans ou les niveaux à base de sauts au pixel près (certains sont de véritables cauchemars, les personnes facilement frustrées s'abstiendront). Les ennemis sont pour la plupart du <i>hit-and-run</i>, et c'est la même chose pour les boss. Pas de points faibles, pas de stratégie à adopter (excepté pour le dernier boss), juste un matraquage de balais dans les règles. Dommage.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/anodyne_in_2.png" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Si il est relativement facile de se laisser entraîner dans l'aventure de Young, grâce à des graphismes et une musique soignés et la curiosité inhérente, il est un peu plus compliqué d'y trouver un intérêt véritable tant celui-ci n'est jamais vraiment explicité. On nous parle de sauver le monde de l'obscurité, de retrouver "The Briar". Ce dernier n'aura aucune signification, et ce jusqu'à la fin, où les spéculations vont bon train dans le coin des aficionados de la sur-interprétation. En attendant, on déambule sans repères, on avance sans indices, et on progresse vers une fin qui, au fond, ne nous intrigue pas vraiment. Enfin, pas vraiment, c'est relatif. C'est exactement comme dans un rêve: lorsqu'on est plongé dedans, on continue le voyage, curieux de voir ce qu'il va se passer par la suite, un peu ballotté par les événements, sans vraiment être conscient. Mais une fois que le réveil a sonné, une fois que la fin du jeu arrive et que les crédits se déroulent, on a du mal à replonger dedans.
        </p>
        <p>
          Tel un songe fugace, <i>Anodyne</i> a trop peu d'impact pour véritablement se graver dans la mémoire. On peut s'en rappeler par moments, certaines scènes sont mémorables, certains passages frustrants ne seront pas oubliés de sitôt, il y a des références à beaucoup de choses appréciées dans la sphère vidéo-ludique, mais l'ensemble manque de profondeur et d'éléments qui restent fixés en tête. Il n'empêche que le jeu remplit son contrat, et s'avère un petit baume pour l'esprit, l'espace de quelques heures. Il ne faut pas trop lui en demander, cependant, un peu comme un songe vers lequel il ne faudra pas revenir une fois la nuit passée.
        </p>
      </article>

      <aside class="credits" data-aos="zoom-in">
        <p>Anodyne, un jeu d'Analgesic Production: Sean Han Tani (design, programmation & musique), Marina Hittaka (design & art)</p>
        <p>Sorti initialement en février 2013 sur Windows</p>
        <p>Disponible à la vente sur de nombreuses plateformes via <a href="https://www.anodynegame.com/">le site officiel</a></p>
      </aside>

      <aside class="credits" data-aos="zoom-in">
        <p>
          Image de couverture: <a href="https://www.steamcardexchange.net/index.php?gamepage-appid-234900">SteamCardsExchange.net</a><br />
          Images à l'intérieur: <a href="https://sean-han-tani.itch.io/anodyne">Itch.io</a>.
        </p>
      </aside>
    </main>
<?php include("../components/version.html") ?>
<?php include("../components/footer.html") ?>
