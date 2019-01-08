<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ping Pong the Animation | Nicolas Moisson</title>
    <meta name="description" content="Sing a song">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Ping Pong the Animation | Nicolas Moisson">
    <meta name="twitter:description" content="Sing a song">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/img-grid/pingpong.jpg">
    <meta name="twitter:image:alt" content="Détail de l'illustration de l'anime">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Ping Pong the Animation | Nicolas Moisson">
    <meta property="og:description" content="Sing a song">
    <meta property="og:url" content="https://nicolasmoisson.fr/textes/pingpong">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/img-grid/pingpong.jpg">
    <meta property="og:image:alt" content="Détail de l'illustration de l'anime">
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
          <source media="(max-width: 800px)" srcset="../img/img-header/mobile/pingpong_header_800.jpg">
          <source media="(min-width: 801px)" srcset="../img/img-header/pingpong_header.jpg">
          <img src="/img/img-header/pingpong_header.jpg" class="bg-img-header" alt="Capture d'écran de l'anime"/>
        </picture>

        <h2>Ping Pong the Animation</h2>
        <p>Sing a song</p>
      </div>

      <article class="article" id="article">
        <h3>Publié le 21 septembre 2018, écrit le 10 août 2014 - Animation</h3>

        <audio id="audio" ontimeupdate="udpateProgress()" onended="resetAudio()" preload="none">
          <source src="../music/pingpong.ogg" type="audio/ogg">
          <source src="../music/pingpong.mp3" type="audio/mp3">
        </audio>
        <div id="audioWrap">
          <button id="audioPlayer"><i class="far fa-play-circle" id="audioIcon"></i></button>
          <div>
            Hero Appears - Kensuke Ushio
            <progress id="seekbar" value="0" max="1"></progress>
          </div>
        </div>

        <p>
          Si <i>Ping Pong the Animation</i>  n'aura jamais la notoriété qu'il mérite, ce n'est pas à cause de son sujet en apparence peu engageant —le tennis de table n'étant pas, sauf exception, un domaine qui parle à beaucoup de personnes, moi y compris— et, par extension, son genre —l'anime de sport, même parmi les animes, a toujours été une catégorie à part— qui le distingue autant qu'il l'enferme dans une bulle. Ce n'est pas non plus à cause de sa longueur, ou plutôt de sa non-longueur, car du haut de ses 11 épisodes pour un total d'un peu de moins de quatres heures et demi d'animation, l'anime peut se dévorer en l'espace d'une journée seulement.
        </p>
        <p>
          Non, si <i>Ping Pong</i> n'aura jamais la notoriété qu'il mérite, c'est parce que <i>Ping Pong</i> n'est pas beau, tout simplement. Mais attention, ici réside la petite subtilité: il ne s'agit pas en effet d'affirmer que <i>Ping Pong</i> est moche, mais simplement que <i>Ping Pong</i> n'est pas beau. Beau pour qui ? Beau comment ? C'est là que le bât blesse, et que l'anime devient malgré lui révélateur de ce courant de pensée majoritaire qui sévit dans un medium sclérosé par cette idée du beau superficiel, cette obsession pour l'agréable sécurité de l'esthétique photo-réaliste, ou encore le doux confort des règles anatomiques scrupuleusement respectées. Si déroger à n'importe laquelle de ces idées est quelque chose qui ne trouve pas grâce à vos yeux, abandonnez de suite le projet de vous infliger l'horreur qu'est <i>Ping Pong the Animation</i>. Ainsi, vous n'aurez pas à contempler des corps "affreux" dont les courbes et les formes ne correspondent pas à l'idée que vous vous faites de la beauté d'un corps bien proportionné; vous n'aurez pas à supporter les visages "hideux" des personnages, dépourvus d'yeux gigantesques très anime-sque et dont les expressions ne sont pas exagérées à l'extrême dans des scènes comiques où la norme SD est de mise; vous n'aurez pas, enfin, à transpirer à grosses gouttes devant certains plans et animations qui, du haut de leurs quelques images par seconde, frisent l'indécence et feraient une sacrée concurrence à une grande majorité des <i>gifs</i> sur Tumblr.
        </p>
        <p>
          Non, <i>Ping Pong</i> n'est pas beau, apparemment. C'est d'ailleurs la première chose qui sera dite à propos de l'anime: <i>"essaye d'aller au-delà du graphisme, je t'assure que ça vaut le coup, donne lui sa chance"</i>. Curieuse formulation, non ? A l'entendre, on jurerait qu'il y a une esthétique correcte, et une autre qui ne l'est pas. Des dessins qui sont validés par l'Académie, et d'autres qui ne le sont pas. C'est à se demander où est passé l'expérimentation dans le medium, la recherche de la nouveauté et le questionnement perpétuel envers les acquis. Ou bien serait-il déjà possible qu'après un tout petit siècle d'existence seulement, le medium de l'anime ait déjà tout vu, tout vécu, tout montré ? Voilà une présomption que même les plus vieux arts comme la littérature ou la sculpture n'ont pas osé soutenir. Décidément, ils sont fous ces Japonais, ou plutôt ces amateurs d'animation japonaise !
        </p>

        <div class="img-inside">
          <img src="/img/img-inside/pingpong_in.jpg" alt="Capture d'écran dans le premier épisode de l'anime"/>
          <div class="img-text">Le découpage de l'image crée le mouvement et le rythme inhérent au sport qui sert de toile de fond</div>
        </div>

        <p>
          On pourrait par certains côtés soutenir que non, <i>Ping Pong</i> n'est pas beau. Et pourtant, quelle ironie dans cette affirmation, preuve s'il en est que quelque chose ne tourne définitivement pas rond dans le monde merveilleux de l'animation nippone. C'est presque indécent de dire que <i>Ping Pong</i> n'est pas beau et en même temps soutenir les qualités esthétiques de 90% des productions d'à côté, avec leurs faces terriblement lisses, leurs yeux bien trop grands, et leur animation paresseuse dès qu'il s'agit d'entrer dans le détail. Ça remonte à quand la dernière fois que vous avez vu les mâchoires bouger de manière réaliste quand les personnages se mettent à parler ? Ça remonte à quand la dernière fois que vous avez vu des rides et des plis autour des yeux , et ce même sans aller nécessairement chercher dans les personnages du troisième âge ? Ça remonte à quand, enfin, la dernière fois que vous avez été véritablement pris de court devant tant d'humanité dépeinte sur les visages de ces héros à la chair presque palpable ? <i>Ping Pong</i> inclut tout ça, et bien plus encore.
        </p>
        <p>
          <i>Ping Pong</i> n'est pas votre anime classique au style interchangeable, et de fait, n'aura jamais la popularité qu'il mérite. Pour autant, il serait regrettable d'aller dans cette direction tant l'oeuvre, adaptée du manga éponyme, nous propose quelque chose de fort et surtout, quelque chose qui a du sens dans tous ses aspects. L'univers esthétique, si il peut surprendre au premier visionnage voire en rebuter quelques-uns, est sans nul doute le meilleur choix possible pour transmettre tout ce que <i>Ping Pong</i> se propose de nous transmettre tout au long de ces 11 épisodes. Une animation plus conventionnelle, plus anime-sque si j'ose dire, aurait rendu le tout fade et dissonant. C'est bel et bien parce que <i>Ping Pong</i> est à ce point ancré dans son esthétisme bariolé qu'il réussit autant à impressioner: changement de palettes de couleurs, symbolisme visuel, multiplications des expérimentations quant aux angles de caméras, découpage aggressif de l'image, au point de retranscrire presque case par case la bande dessinée à l'écran. Tant de choses que peut se permettre <i>Ping Pong</i> justement parce qu'il n'a pas cette beauté plastique qu'ont 90% des productions voisines. La beauté de <i>Ping Pong</i> est à rechercher ailleurs, dans une peinture expressive du monde qui nous entoure, un monde qui serait passé sous un filtre psychédélique, un monde où les couleurs envahissent le champ de vision et laissent une marque indélébile sur la rétine.
        </p>
        <p>
          Mais <i>Ping Pong</i> n'est pas unique seulement du point de vue de l'esthétisme et de l'animation. C'est également une oeuvre qui sort du carcan de son genre pour aller au-delà et toucher n'importe qui. Car <i>Ping Pong</i> n'est pas un anime qui traite de <i>Ping Pong</i>. C'est un anime de sport qui n'en est pas un. Les explications techniques se comptent sur les doigts d'une main, et on n'a même pas le droit à un rapide tour d'horizon des règles du jeu. Tout juste le tennis de table est-il la toile sur laquelle seront peintes les vies diverses et variées des protagonistes qui, réunis sous la bannière de ce sport à raquettes, vont bon gré mal gré tenter de répondre chacun à leur manière à une interrogation commune: comment et pourquoi agir dans la vie ? Dans quel but ? Pourquoi, pour quoi et pour qui ? Avec l'aide de qui ?
        </p>
        <p>
          A l'aide de cette toile de fond qu'est le <i>Ping Pong</i>, l'oeuvre nous dévoile les parcours de personnages aussi variés que complexes, tous ayant une vision différente du sport pratiqué, et par extension, de la vie qu'il représente: il y a Smile, dénommé ainsi parce qu'il sourit rarement, et qui voit le <i>Ping Pong</i> comme une simple activité pour faire passer le temps avant de mourir. Considéré comme un robot par la plupart de son entourage, il attend la venue d'un héros depuis longtemps disparu pour lui montrer qu'il est tout à fait comme les autres, au fond, et que lui aussi, son sang a le goût du fer; il y a Peco, complètement à l'opposé de Smile, pour qui le <i>Ping Pong</i> est un moteur déterminant dans sa vie, ce qui le pousse à des comportements excessifs, comme toute personne passionnée par quelque chose. Les deux garçons, au coeur de l'anime, sont entourés de personnages secondaires qui n'ont de secondaires que le nom. Il y a Kazama, le Dragon, un habitué de la victoire et de la première place, et qui ne voit plus le <i>Ping Pong</i> que comme une source d'angoisse et de douleur. Cela fait bien longtemps qu'il ne prend plus plaisir dans ce sport, et que seule la victoire compte. Mais à quoi cela peut-il bien servir si il n'y a personne avec qui partager ces moments de gloire ? Seul au sommet d'une montagne, il attend lui aussi quelque chose, quelqu'un; il y a Wenge, le chinois exilé au Japon, plein d'aigreur et de nostalgie. Condamné à vivre dans ce pays qu'il déteste tant après avoir été éliminé de l'équipe chinoise, il fera tout son possible pour quitter cet enfer, à travers ce <i>Ping Pong</i> qui l'a à la fois puni mais qui va également tant lui apporter par la suite; et il y a tant d'autres personnages tous aussi travaillés et intéressants les uns que les autres, tous avec des motivations propres, des visions bien à eux de ce qu'est le <i>Ping Pong</i>, de ce qu'est la vie.
        </p>
        <p>
          Personne n'est privilégié, aucune vision n'est plus mise en avant qu'une autre. Il n'y a pas de jugement dans les actions de chacun. <i>Ping Pong the Animation</i> se contente de nous présenter une toile et les couleurs projetées dessus, mais il n'y a pas de commentaires de l'artiste par-dessus notre épaule. Libre à nous de préférer un personnage ou un autre, selon nos propres décisions quant à nos styles de vie. Certains se reconnaîtront dans Smile qui trouve absurde de s'impliquer autant dans une chose aussi anecdotique que du tennis de table, de là à mettre sa vie en jeu; attendent-ils un héros eux aussi, pour leur montrer qu'une autre voie est possible ? D'autres verront en Wenge un parallèle avec leur propre vie, où les occasions manquées et la nostalgie du passé s'accumulent au point d'obscurcir le futur et de faire du passé un poids lourd qui ne cesse de tirer l'individu vers le fond de l'abyme. Plus qu'un anime de sport, <i>Ping Pong</i> est une réflexion sur la vie et les millions de chemins possibles pour la vivre, chacun à sa manière.
        </p>

        <div class="img-inside">
          <img src="/img/img-inside/pingpong_in_2.jpg" alt="Capture d'écran"/>
          <div class="img-text">À travers le symbolisme visuel, Ping Pong enrichit la psychologie de ses personnages</div>
        </div>

        <p>
          En cela, l'oeuvre met l'emphase sur des dialogues passionnants et extrêmement bien écrits, dans le sens où tout sonne incroyablement vrais. Les interactions entre les personnages (ou leurs monologues intérieurs) sont criantes de réalisme, et on se surprend à trouver le tout étonnamment plat, loin des phrases excentriques prononcés par des héros de shounen déconnectés de la réalité. Ici, pas de menace de mort au moindre affront, pas de rallonge d'explications farfelues au milieu d'une scène d'action, pas de surexposition des enjeux narratifs. Non, <i>Ping Pong</i> est moche et plat, car <i>Ping Pong</i> est à l'image de la réalité, et c'est fantastique. Les personnages vivent et respirent sous nos yeux, mais la plupart pourraient aisément être croisés un jour, au détour d'un coin de rue. On en connaît du reste, autour de nous, des Smile désabusés, des Kazama qui veulent tout écraser sur leur passage, ou bien des gens à l'image de ce bonhomme qui veut voir la mer (un running gag discret et très plaisant à suivre), peu sûrs de ce qu'ils valent, de ce qu'ils veulent vraiment dans la vie, jusqu'au jour où la vérité s'impose à eux, tout en douceur.
        </p>
        <p>
          La synergie entre le style graphique, l'animation, les personnages et les dialogues est complétée par un univers sonore approprié, parfois éclectique, souvent electro, mais toujours efficace pour transporter le message général. Il y a les bruitages tout d'abord, très réalistes eux aussi. Le bruit des balles rebondissant sur les raquettes, celui des chaussures qui crissent, l'ambiance général lors d'un tournoi local...à nouveau, tout a l'air banal, mais tout a l'air vrai. Il y a la musique ensuite, discrète mais pertinente, avec des thèmes distincts qui reflètent bien chacun des personnages. Il y a le doublage pour finir, sans doute un des gros points forts de <i>Ping Pong</i>. Les voix sont toutes excellemment bien choisies. Wenge a même eu le droit à un véritable doubleur chinois pour ses dialogues en mandarin, afin de renforcer encore plus ce réalisme omniprésent dans l'oeuvre. A aucun moment on se retrouve tiré hors de l'univers par un son qui semble décalé par rapport au reste. <i>Ping Pong</i> est un bloc de réel de bout en bout, un réel parfois teinté de symbolisme et de métaphores visuelles soignées, mais un réel qui sonne...vrai. Ne riez pas, ce n'est pas aussi facile à trouver que ça en a l'air.
        </p>
        <p>
          Je n'oublierai pas <i>Ping Pong</i> de sitôt. Pour son audace (amusant de se dire que cette série est audacieuse parce qu'elle fait ce que les autres devraient faire normalement, si le monde tournait rond) graphique, son animation cohérente et évocatrice, l'intelligence de son propos, la qualité de l'exécution pour le mettre en images et en forme, ses personnages tous plus intéressants les uns que les autres, son réalisme cruel et les nombreuses leçons de vie qu'il apporte, pour tout ça cet anime de sport qui ne parle pas de sport vaut le détour. Je suis content que <i>Ping Pong the Animation</i> fasse parti de cette réalité tangible, car cela montre que les héros, les vrais, ceux qui nous font rêver et nous portent plus haut dans notre compréhension de la réalité, existent encore dans le monde de l'animation nippone.
        </p>

      </article>

      <aside class="credits" data-aos="zoom-in">
        <p>Ping Pong the Animation, une série d'animation de Tatsunoko Production, diffusée pour la première fois au printemps 2014.</p>
        <ul>
          <li>
            Réalisation, scénario et storyboard: Masaki Yuasa
          </li>
          <li>
            Musique: Kensuke Ushio
          </li>
          <li>
            Adapté du manga de: Taiyou Matsumoto
          </li>
        </ul>
      </aside>

      <aside class="credits" data-aos="zoom-in">
        <p>
          Image de couverture: <a href="http://moarpowah.com/2015/08/31/review-ping-pong-the-animation/">Blog Moarpowah</a><br />
          Images à l'intérieur: <a href="https://shibirerudarou.wordpress.com/2014/04/11/following-through-the-visuals-of-ping-pong-the-animation-episode-1/">Blog Shibirerudarou</a>, <a href="http://www.crunchyroll.com/anime-feature/2016/11/28/feature-ping-pong-the-animation-and-the-yuasa-matsumoto-rally">Crunchyroll</a>
        </p>
      </aside>
    </main>
<?php include("../components/version.html") ?>
<?php include("../components/footer.html") ?>
