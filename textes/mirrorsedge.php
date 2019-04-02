<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mirror's Edge | Nicolas Moisson</title>
    <meta name="description" content="It's All Smokes and Mirrors.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Mirror's Edge | Nicolas Moisson">
    <meta name="twitter:description" content="It's All Smokes and Mirrors.">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/img-grid/mirrors_edge.jpg">
    <meta name="twitter:image:alt" content="Capture d'écran du jeu">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mirror's Edge | Nicolas Moisson">
    <meta property="og:description" content="It's All Smokes and Mirrors.">
    <meta property="og:url" content="https://nicolasmoisson.fr/textes/mirrorsedge">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/img-grid/mirrors_edge.jpg">
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
          <source media="(max-width: 800px)" srcset="../img/img-header/mobile/mirrors_edge_header_800.jpg">
          <source media="(min-width: 801px)" srcset="../img/img-header/mirrors_edge_header.jpg">
          <img src="/img/img-header/mirrors_edge_header.jpg" class="bg-img-header" alt="Capture d'écran du jeu"/>
        </picture>

        <h2>Mirror's Edge</h2>
        <p>It's All Smokes and Mirrors.</p>
      </div>

      <article class="article" id="article">
        <h3>Publié le 3 avril 2019, écrit le 9 décembre 2013 - Jeux vidéo</h3>

        <audio id="audio" ontimeupdate="udpateProgress()" onended="resetAudio()" preload="none">
          <source src="../music/mirrorsedge.ogg" type="audio/ogg">
          <source src="../music/mirrorsedge.mp3" type="audio/mp3">
        </audio>
        <div id="audioWrap">
          <button id="audioPlayer"><i class="far fa-play-circle" id="audioIcon"></i></button>
          <div>
            Introduction - Solar Fields
            <progress id="seekbar" value="0" max="1"></progress>
          </div>
        </div>

        <p>
          Mirror's Edge, c'est un paradoxe ambulant, de préférence sur le toit des gratte-ciels et autres infrastructures haut perché. La raison de cela est simple: tout comme dans le jeu -où il y a une opposition entre les Runners et les forces de l'ordre, la froideur des extérieurs de la ville et la chaleur des locaux, les graphismes in-game et les cinématiques stylisées- il y a également une opposition forte entre les créateurs, DICE (et les idées qu'ils veulent véhiculer), et l'éditeur, EA (et l'argent qu'ils veulent gagner). Le résultat de cette association donne une créature charmante, originale de par son univers et réellement innovante de par ce qu'elle cherche à atteindre, mais qui se retrouve souvent, trop souvent, abattu en plein saut par les exigences de la maison, et des actionnaires.
        </p>
        <p>
          Car Mirror's Edge, qu'est-ce que c'est ? C'est une vraie volonté de mélanger un genre et une technique qui ne vont pas très bien ensemble (du moins historiquement parlant): d'un côté il y a le platforming, et de l'autre il y a la vue à la première personne. Et l'idée est incroyable, géniale, inspirante ! Imaginer faire un jeu de plates-formes du point de vue du personnage, pratiquement personne n'a voulu essayer et franchir le pas, sauter la barrière, escalader le grillage. Pourtant, tous ces mouvements-là, que ne sont-ils pas naturels, instinctifs, et terriblement immersifs ? Qui donc a décrété que la vue à la première personne se limitait aux jeux orienté tir aux pigeons ou point-and-click ? Ainsi, Mirror's Edge, vu par DICE, c'est un bijou d'innovation, un mélange improbable qui redonne un nouveau souffle au genre ô combien usé du platformer classique. Ajoutons à cela une esthétique soignée, qui porte en son sein tous les éléments nécessaires pour faire sauter et virevolter le joueur dans un univers tout le temps en mouvement, et la boucle est bouclée, la course est coursée, le jeu est joué. N'en jetez-plus, le papa du platformer à la première personne est né.
        </p>
        <p>
          Mais il a fallu qu'EA pose son approbation et ses grosses pattes sur le studio; après tout, les idées sont ici, l'argent est là. EA, c'est de l'édition; c'est des actionnaires; c'est des perspectives économiques, des prévisions à faire, des promesses à tenir, un marché à alimenter. Ils n'ont pas vraiment envie de s'aventurer sur ces toits d'immeubles immaculés sans filet de protection, sans fil rouge (ou tuyau dans le cadre du jeu). C'est un investissement. Et puis...il y a les joueurs. Comment vont-ils réagir devant cette idée tout fraîche ? On sent encore la peinture sur les murs de la ville, c'est tout neuf, c'est tout beau, ça fait très peur pour le joueur. Il faut recadrer DICE. Et le miroir se brise. Le platformer à la première personne devient un jeu d'aventure saupoudré de séquences de plate-formes contrôlées et bien dosées. Parce que le jeu d'aventures, le joueur connaît. Il est à l'aise là-dedans. Il a déjà ses marques. Il sait qu'il faut suivre un chemin qui est généralement indiqué, sauter quelques obstacles, affronter quelques ennemis, dans une fuite en avant qui n'a de sens que ce que le semblant de scénario veut bien lui accorder.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/mirrors_edge_in.jpg" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Mirror's Edge, ça aurait pu être un monde totalement libre, en totale adéquation avec ce qu'il prône dans sa philosophie de jeu et d'univers. On aurait pu incarner une Faith dépourvue d'objectifs, qui se contente de naviguer dans le ciel, à travers les rues de la ville, sur les toits. Allez, si on veut être gentils, on aurait pu avoir quelques quêtes et sous-quêtes qui reflètent la vie des Runners, après tout c'est ce que nous incarnons, n'est-ce pas ? On aurait pu faire des livraisons pour des clients, transmettre des messages, se frotter aux forces de police de temps en temps si on s'approche trop près du sol. Une pointe d'adrénaline dans un monde de liberté. Voilà la face brillante du miroir !
        </p>
        <p>
          Mais le marché est une entité capricieuse, cruelle même, envers les nouveautés, et EA sait comment le dompter pour faire passer la pilule (ou le colis). Fini le monde ouvert: faites place au chemin tout tracé, à la voie en sens unique. Oubliez la liberté, la condition de Runner: devenez plutôt un Flee-er, toujours vers l'avant, sans aucune pause. Il faut que ça aille vite, il faut que ça passe comme un message entre deux individus sur les toits. Rapide, rythmé, sous pression. Pour ce dernier point, on pensera bien à augmenter les séquences d'affrontement directs ou indirects avec les forces de l'ordre. De loin, ça se traduit par un stress constant, les balles qui fusent derrière nous, les ennemis qui sont lâchés quelques secondes après que nous soyons passés à un endroit, pour nous donner juste un peu d'avance, mais pas trop. On peut entendre leur cris dans notre dos. Faith court, fuit, la caméra se trouble, bouge dans tous les sens, on ne voit plus rien, tout est blanc, magnifique.
        </p>
        <p>
          Il ne me semblait pas que Mario ou Megaman étaient des individus en fuite pourtant.
        </p>
        <p>
          Mais le pire, la cerise sur le gâteau, l'antenne sur le toit de l'immeuble, c'est les confrontations directs. Car oui, on ne peut décemment pas faire un jeu pour le marché sans inclure les insupportables séquences de tir aux pigeons. Je ne peux pas, je ne peux plus supporter qu'on prenne les joueurs pour des jambons. Oui, EA, on peut faire un jeu sans armes à feu et quand même rentabiliser l'investissement et récompenser les actionnaires. Et n'essayez même pas de me dire que les combats sont tout à fait optionnels dans Mirror's Edge, parce que premièrement tout ce qui m'intéresse et m'insupporte, c'est le fait même qu'ils SOIENT possibles dans le jeu, au-delà du "oui/non/pseudo liberté de jouer le jeu ou pas", et deuxièmement la fin du jeu EXIGE, littéralement de vous, que vous preniez les armes et effectuiez du tir aux pigeons. C'est irrévocable, vous aurez beau jouer comme un maître de l'esquive durant tout le jeu pour échapper à cet élément qu'EA a gentiment ajouté pour vous afin que vous ne soyiez pas trop dépaysés, vous DEVREZ inévitablement, fatalement tirer sur des individus armés et blindés comme des chars d'assaut bipède dans un niveau aussi irritant qu'insultant. Le level-design même du dernier niveau trahit la volonté de faire de ce moment un pur moment de hide-and-seek-and-shoot-and-FUCK YOU. Non, je ne joue pas à un jeu d'aventure "saupoudré" de platformer, je joue à un platformer ! Où est la belle idée de mélanger l'eau et l'huile ? Où est le Mirror's Edge ? Où sont les Runners ? Où est ma cité libre et vaste ?
        </p>
        <p>
          A partir de là, rien ne va plus, la machine pour uniformiser le jeu aux attentes du marché se lance, et les défauts s'accumule, tels des feuilles mortes dans les gouttières des tuyaux rouges.
        </p>
        <p>
          Parce qu'il n'y aucun intérêt de jouer à un jeu si il n'y a pas d'histoire (quand bien même on s'essaie à faire un platformer, le genre qui ne se gêne pas pour ce niveau d'artificialité, comble de l'ironie), Mirror's Edge tente péniblement de nous raconter l'histoire de Faith et de sa soeur, avec des protagonistes aussi creux qu'extrêmement opportuns. La sauce ne prend pas, clairement, et les cinématiques sont à peine bienvenues pour faire des pauses dans le rythme effréné, dans un style qui interroge. Je n'ai pour ma part pas encore compris la pertinence du style utilisé dans ces transitions: qu'est-ce que ça apporte vis-à-vis du jeu ? Non seulement c'est décalé avec la patte artistique du reste du soft, mais en plus c'est limite si ça ne nous sort pas de l'immersion. Si il y a bien une chose qui est superbe et ne souffre d'aucune critique dans Mirror's Edge, c'est la beauté de la modélisation et le choix des couleurs. Les immeubles, gigantesques, tout en volume et en blancheur, procure une identité visuelle qui se détache et s'attache à la rétine, aussi je ne comprends pas pourquoi les cinématiques reviennent à de la simple 2D de dessin animé, qui ne retranscrivent absolument pas les sensations de courir sur du concret, ou de sauter de mur en mur. Vraiment dommage.
        </p>
        <p>
          Si certains voient dans les tuyaux rouges des éléments qui s'ajoutent à l'ambiance unique du jeu, j'y vois surtout une prise par la main de la part d'EA qui me dérange. Sous couvert de sixième sens du Runner, qui nous permettrait de voir quel chemin prendre, le rouge dans le jeu est surtout un moyen efficace d'attirer notre attention et de ne jamais nous perdre en cours de route, comme si la linéarité des niveaux ne suffisait pas déjà. Toujours dans l'optique d'un Mirror's Edge libéré de toutes contraintes de marché, déambuler dans le monde ouvert et gigantesques du jeu ne nécessiterait aucun tuyau rouge. Ce serait à nous de trouver par nous-mêmes comment aller ici, ou là, avec chacun nos techniques, comme des Runners en somme, tous différents, mais tous reliés par ce désir d'aller plus haut et plus loin. Encore une fois, ne venez pas me dire qu'on peut désactiver le sixième sens dans les options, car il est inclus DE BASE dans le jeu, et ça en dit long sur la philosophie d'EA.
        </p>
        <div class="img-inside">
          <img src="/img/img-inside/mirrors_edge_in_2.jpg" alt="Capture d'écran du jeu"/>
        </div>
        <p>
          Dans la lignée de l'assistanat, le tutorial du début est peut-être un des pires exemples de début d'immersion possibles. Qu'on me présente les touches, au fur et à mesure que j'avance, je veux bien (et encore, à doses homéopathiques), mais qu'on se coltine une coéquipière qu'il nous faut attendre qu'elle ait fait sa démonstration PUIS faire la même juste derrière, non. Non, sacrebleu. Parce que c'est gonflant, et surtout parce que c'est mensonger. Une fois encore, on nous présente le concept, des Runners qui s'entraident, et communiquent entre eux, et on s'attend à faire des missions pour échanger des colis, des messages. Mais rien de tout ça n'arrive. Une facilité de scénario, une pression constante, une voix dans notre oreille qui nous dit quoi faire, une ligne rouge à suivre, et nous voilà seule, ou presque, durant tout le reste de l'aventure. Oh, deux trois rencontres de temps en temps, quand le "scénario" nécessite quelque chose pour avancer, mais c'est tout.
        </p>
        <p>
          Elle est où ma ville aux deux niveaux, avec la vie du ciel et la vie dans les rues ? Je dirais même plus, trois niveaux, puisqu'on apprend que les Runners grouillent aussi dans les réseaux souterrains. Quid de tout ça ? J'aurai adoré faire des missions souterraines, pour finalement remonter à la surface, me fondre dans la masse, dans la rue, et finir sur les toits, en alternant les différents milieux, les différentes méthodes pour s'élever dans la ville. Mais Mirror's Edge, comme beaucoup de jeux du marché, possède la forme mais pas le fond. Creuse des idées mais ne les exploite pas, ou à peine. Ce qu'il fallait, c'était un monde unique, différent, pour une aventure banale. Ce n'était pas le mélange attendu.
        </p>
        <p>
          On regrettera également un gameplay qui n'est pas suffisamment adapté au jeu, dans le sens où bien trop de commandes pour se déplacer sont des véritables coups dans l'eau tant la réactivité de Faith selon le contexte semble être aléatoire. Le tout donne naissance à des moments de grande frustration sur certains passages qui requiert de la précision, là où Mirror's Edge n'en a aucune. Comprenez-moi bien: je suis parfaitement en adéquation avec l'aspect die-and-retry si le jeu avait été mon rêve, un platformer à monde ouvert, parce que si je n'arrive pas à passer par là, et bien je passe ailleurs, problème réglé. Et si je m'acharne, c'est que je le veux, donc je n'ai aucun droit de me plaindre. Mais là, dans ce long couloir aux fausses allures de liberté qu'est Mirror's Edge, mettre des passages qui titillent la notion de "refaire jusqu'à connaître par coeur" est non seulement peu pertinent mais également frustrant dans le mauvais sens. On était là pour ça, éventuellement, on ne nous l'a pas donné, on n'en veut plus maintenant, pas la peine d'insister sur un produit fini à des années lumières de son concept original.
        </p>
        <p>
          Il n'empêche que c'est une véritable bonheur de parcourir le peu de ville qu'on daigne nous laisser visiter dans le jeu. Comme je l'ai dit plus haut, les couleurs sont très bien choisies, l'architecture de la cité, du peu qu'on voit, fait rêver. Si on ne regarde pas en bas pour éviter de constater que les rues sont bien vides, les toits eux sont tout à fait charmants et appréciables. L'ambiance sonore colle à l'univers, une musique aseptisée pour un monde aux teintes trop tranchées pour être honnête. La peinture a un goût de dystopie, et ça sent bon le miroir aux deux faces. Quel dommage de n'en voir qu'une demie, au final, quand on voit le potentiel du jeu et de l'idée de DICE. Assurément, Mirror's Edge est un jeu à faire au moins une fois, pas plus, ne serait-ce que pour se mettre à rêver de jouer à sa vraie version, celle qui sera libérée des préjugés réducteurs que portent les éditeurs sur le marché vidéoludique.
        </p>

      </article>

      <aside class="credits" data-aos="zoom-in">
        <p>Mirror's Edge, un jeu de DICE et Electronic Arts: Senta Jakobsen (réalisation), Thomas Andersson (design), Per-Olof Romell (programmation), Rhianna Pratchett (histoire), Solar Fields (musique)</p>
        <p>Sorti initialement sur <a href="https://store.playstation.com/en-us/product/UP0006-NPUB30838_00-MIEPSNNA00000001">PS3</a> et <a href="https://marketplace.xbox.com/en-gb/Product/Mirrors-Edge/66acd000-77fe-1000-9115-d80245410850">Xbox 360</a> en novembre 2008.</p>
        <p>Le jeu est disponible sur <a href="https://store.steampowered.com/app/17410/Mirrors_Edge/">Steam</a> et <a href="https://www.gog.com/game/mirrors_edge">GOG</a></p>
      </aside>

      <aside class="credits" data-aos="zoom-in">
        <p>
          Image de couverture et à l'intérieur: <a href="https://store.steampowered.com/app/17410/Mirrors_Edge/">Steam</a><br />
        </p>
      </aside>
    </main>
<?php include("../components/version.html") ?>
<?php include("../components/footer.html") ?>
