<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CV | Nicolas Moisson</title>
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="CV | Nicolas Moisson">
    <meta name="twitter:description" content="Un CV consulté, le deuxième offert.">
    <meta name="twitter:image" content="https://nicolasmoisson.fr/img/ego/maratz.jpg">
    <meta name="twitter:image:alt" content="Avatar du personnage The Sythian que j'utilise comme avatar pour ma présence sur Internet">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CV | Nicolas Moisson">
    <meta property="og:description" content="CV de Nicolas Moisson mais aussi de Maratz. Un CV consulté, le deuxième offert.">
    <meta property="og:url" content="https://nicolasmoisson.fr/cv">
    <meta property="og:image" content="https://nicolasmoisson.fr/img/ego/maratz.jpg">
    <meta property="og:image:alt" content="Avatar du personnage The Sythian que j'utilise comme avatar pour ma présence sur Internet">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <?php include("components/css_files.html") ?>
  </head>
  <body id="cv">
    <?php include("components/base-cv-header-in-menu.html"); ?>
    <main>
      <div class="cvIntro">

        <img src="/img/cv/cvRecto.jpg" id="cvRecto" onclick="switchRecto()" alt="Lire le CV côté Nicolas"/>

        <div class="cvHeader">
          <div id="cvHeader__recto">
            <h2 class="cvHeader__hello">Bonjour, je suis Nicolas</h2>
            <div class="cvHeader__itsme">
              <p class="cvHeader__itsme--mario">Rédacteur, chargé de communication et apprenti front-dev.</p>
              <p class="cvHeader__itsme--mario">Je couche des mots sur l'écran.</p>
              <p class="cvHeader__itsme--mario">J'aime la philosophie, le jeu vidéo, et Marguerite Duras.</p>
              <br />
              <p class="cvHeader__itsme--mario">Je suis disponible pour écrire vos prochains textes.</p>
            </div>
          </div>

          <div id="cvHeader__verso">
            <h2 class="cvHeader__hello">Bonjour, je suis Maratz</h2>
            <div class="cvHeader__itsme">
              <p class="cvHeader__itsme--mario">Ludophilophage et critique.</p>
              <p class="cvHeader__itsme--mario">J'explore des mondes pixelisés.</p>
              <p class="cvHeader__itsme--mario">J'aime <i>Alundra</i>, <i>Thumper</i>, et Tevis Thompson.</p>
            </div>
          </div>
        </div>

        <img src="/img/cv/cvVerso.jpg"/ id="cvVerso" onclick="switchVerso()" onmouseover="hoverCvVerso()" onmouseout="normalCvVerso()" alt="Lire le CV côté Maratz"/>

      </div>

      <div class="cvPoeme">
        <div class="cvIntro__accroche">
          <div data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <p>
              Parce qu'un CV est obsolète par nature,<br />
              <span>glorifiant le passé pour décrocher un futur;</span>
            </p>
            <p id="accroche-p1">
              Parce qu'un CV plie l'humain en pile de papiers,<br />
              <span>feuille à lire, aussitôt jetée;</span>
            </p>
            <p id="accroche-p2">
              Parce que le CV sépare, apparie et gomme l'épars,<br />
              <span>et compare les sommes des parts</span><br />
              <span>quand nous devrions aspirer au pari;</span>
            </p>
            <p id="accroche-p3">
              Parce qu'un n'est rien,<br />
              <span>deux une question,</span><br />
              <span>et trois une célébration,</span>
            </p>
            <p id="accroche-p4">
              Voici un site entier,<br />
              <span>deux CV,</span><br />
              <span>et trois cent raisons</span><br />
              <span>de se rencontrer.</span>
            </p>
          </div>
        </div>
      </div>

      <div id="cvContainerRecto">

        <div class="cvSection">
          <hr /><h2>Ce que je sais faire</h2><hr />
        </div>

        <div class="cvSection__skill">

          <div class="cvSection__skill--item" id="cvSkill-1" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" onclick="cvDisplay1()">
            <img src="img/cv/webdev.jpg" alt="Informations sur les compétences en développement web"/>
            <h3>Développement web</h3>
          </div>

          <div id="cvSkill-1--info">
            <p>
              J'aime apprendre et découvrir. Comprendre l'envers du décor.
            </p>
            <p>
              J'aime l'espace du web, la liberté qu'il apporte, les possibilités qu'il offre.
            </p>
            <p>
              J'aime fouiller et créer. Je cours après la satisfaction qui vient quand on réussit après mille échecs.
            </p>
            <p>
              Pour toutes ces raisons et bien plus, je me suis lancé dans la création d'un site personnel, fait maison.
            </p>
            <p>
              A travers lui, j'explore et renforce mes compétences en développement web, tout en construisant mon île dans l'océan numérique.
            </p>
            <p>
              <i>Ça c'est mon site; il y en a beaucoup comme ça, mais lui c'est le mien.</i>
            </p>
          </div>

          <div id="cvSkill-1--icons">
            <img src="img/iconsvg/html5.svg" title="HTML5" alt="Icône pour HTML 5"/>
            <img src="img/iconsvg/css3.svg" title="CSS3" alt="Icône pour CSS 3"/>
            <img src="img/iconsvg/javascript.svg" title="Javascript" alt="Icône pour Javascript"/>
            <img src="img/iconsvg/jquery.svg" title="jQuery" alt="Icône pour jQuery"/>
            <img src="img/iconsvg/git.svg" title="Git" alt="Icône pour Git"/>
            <img src="img/iconsvg/php.svg" title="PHP" alt="Icône pour PHP"/>
            <img src="img/iconsvg/atom.svg" title="Atom" alt="Icône pour Atom"/>
          </div>

          <div class="cvSection__skill--item" id="cvSkill-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true" onclick="cvDisplay2()">
            <img src="img/cv/writing.jpg" alt="Informations sur les compétences en rédaction et création"/>
            <h3>Rédaction & Création</h3>
          </div>

          <div id="cvSkill-2--info">
            <p>
              J'ai toujours été intéressé par le pouvoir des mots, le potentiel de transmission contenue dans une phrase bien tournée. Les syllabes s'enchaînent, chuintent sous le stylo et l'allitération jaillit, son sens siffle aux oreilles, du sucre pour le cerveau.
            </p>
            <p>
              Alors j'ai écrit, et étudié, et expérimenté. Pas nécessairement dans cet ordre là.<br>
              Et je n'ai jamais cessé de le faire: pour moi-même, pour des clients d'agence, pour des grands groupes, sur Internet, sur papier, dans des CMS, sur un ton critique, divertissant, informatif. En anglais ou en français. Des newsletters, des nouvelles et récits, des articles de presse, des actualités, des textes.
            </p>
            <p>
              <i>Ecrire, c'est aussi ne pas parler. C'est se taire. C'est hurler sans bruit.</i> -Marguerite Duras
            </p>
          </div>
          <div id="cvSkill-2--icons">
            <img src="img/iconsvg/microsoftword.svg" title="Microsoft Word" alt="Icône pour Microsoft Word"/>
            <img src="img/iconsvg/microsoftpowerpoint.svg" title="Microsoft Powerpoint" alt="Icône pour Microsoft Powerpoint"/>
            <img src="img/iconsvg/wordpress.svg" title="Wordpress" alt="Icône pour Wordpress"/>
            <!--<img src="img/iconsvg/gimp.svg" title="GIMP" alt="Icône pour GIMP"/>-->
            <img src="img/iconsvg/inkscape.svg" title="Inkscape" alt="Icône pour Inkscape"/>
          </div>

          <div class="cvSection__skill--item" id="cvSkill-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true" onclick="cvDisplay3()">
            <img src="img/cv/communication.jpg" alt="Informations sur les compétences en communication"/>
            <h3>Communication</h3>
          </div>

          <div id="cvSkill-3--info">
            <p>
              Ecrire, c'est bien; partager, c'est mieux !
            </p>
            <p>
              Convaincu que le web est un endroit formidable pour échanger et fédérer des communautés aussi riches que variées, j'ai acquis au cours de mes pérégrinations numériques une connaissance accrue des canaux et méthodes de communication et de partage. Des réseaux sociaux aux sites institutionnels, des blogs à l'envoi de newsletters en passant par le réseau interne d'entreprise: tout est une question d'envoyer le bon message à la bonne personne, et avec le bon outil.
            </p>
          </div>
          <div id="cvSkill-3--icons">
            <img src="img/iconsvg/facebook.svg" title="Facebook" alt="Icône pour Facebook"/>
            <img src="img/iconsvg/twitter.svg" title="Twitter" alt="Icône pour Twitter"/>
            <img src="img/iconsvg/linkedin.svg" title="Linked In" alt="Icône pour Linked In"/>
            <img src="img/iconsvg/instagram.svg" title="Instagram" alt="Icône pour Instagram"/>
            <img src="img/iconsvg/tumblr.svg" title="Tumblr" alt="Icône pour Tumblr"/>
            <img src="img/iconsvg/mailchimp.svg" title="MailChimp" alt="Icône pour MailChimp"/>
            <img src="img/iconsvg/buffer.svg" title="Buffer" alt="Icône pour Buffer"/>
            <img src="img/iconsvg/hootsuite.svg" title="Hootsuite" alt="Icône pour Hootsuite"/>
          </div>

        </div>

        <div class="cvSection">
          <hr /><h2>Ce que j'ai fait</h2><hr />
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date" data-aos="fade-zoom-in" data-aos-duration="1000">
            2017
          </div>
          <div class="cvItem__info" data-aos="fade-zoom-in" data-aos-duration="1000">
            <h3>Rédacteur web | Gestion de projet</h3>
            <h4>Aktor Interactive - Maisons du Monde</h4>
            <p>
              Pour le compte de Maisons du Monde, j'ai rédigé et mis en forme les textes de <a href="http://recrutement.maisonsdumonde.com">leur nouveau site carrière&nbsp;<i class="fas fa-external-link-alt"></i></a>. J'ai suivi le projet et les différentes étapes de pré-production, développement (sous Wordpress), retour client et validation/sélection des éléments.
            </p>
          </div>

          <svg class="cvSeparator" viewBox="0 0 50 300">
            <line x1="35" y1="25" x2="15" y2="300" />
          </svg>
          <img src="img/cv/maisonsdumonde.png" alt="Logo de Maisons du Monde"/>
          <img src="img/cv/aktor.jpg" alt="Logo d'Aktor Interactive"/>

        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            2016
          </div>
          <div class="cvItem__info">
            <h3>Assistant en communication | Community Manager</h3>
            <h4>Aktor Interactive</h4>
            <p>
              Aktor Interactive est une agence de communication spécialisée dans le recrutement et les problématiques RH depuis 1999. J'ai eu l'opportunité d'y faire mon stage de fin d'études et contribuer à plusieurs campagnes de communication pour des clients d'envergure nationale. J'ai également travaillé sur l'amélioration de la communication interne de l'entreprise.
            </p>
          </div>
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            2013
          </div>
          <div class="cvItem__info">
            <h3>Traducteur bénévole</h3>
            <h4>Leaguepedia</h4>
            <p>
              Afin de combiner mon intérêt pour l'anglais et la scène compétitive de <i>League of Legends</i>, j'ai participé à la traduction d'un wiki au sein d'une équipe de traducteurs français bénévoles.
            </p>
          </div>
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            2013
          </div>
          <div class="cvItem__info">
            <h3>Rédacteur de la newsletter</h3>
            <h4>Association des anglicistes</h4>
            <p>
              Durant ma licence d'anglais j'ai rejoint l'association des anglicistes au poste de rédacteur et concepteur de la newsletter, envoyée bi-mensuellement aux abonné(e)s et membres. Au programme: recherche d'information, rédaction, et MailChimp !
            </p>
          </div>
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            2012
          </div>
          <div class="cvItem__info">
            <h3>Rédacteur spécialisé MOBA</h3>
            <h4>LeGamer.com</h4>
            <p>
              J'ai rejoint l'équipe d'un site québecquois consacré à l'actualité des <i>MOBAs</i> et <i>MMORPGs</i> en tant que rédacteur. J'ai principalement couvert les scènes eSport de <i>League of Legends</i>, <i>DotA 2</i> ou encore <i>Heroes of Newerth</i>. J'ai aussi couvert l'actualité de ces jeux à travers des news et des guides pour les champions à leur sortie.
            </p>
            <p>
              <a href="http://www.legamer.com/cats/chroniques/moba" target="_blank">Retrouvez l'ensemble des chroniques écrites pour ce site en suivant ce lien <i class="fas fa-external-link-alt"></i></a>
            </p>
          </div>

          <svg class="cvSeparator" viewBox="0 0 50 300">
            <line x1="35" y1="25" x2="15" y2="300" />
          </svg>
          <img src="img/cv/legamer.jpeg" alt="Logo de LeGamer.com"/>
        </div>

        <div class="cvSection">
          <hr /><h2>Ce que j'ai étudié</h2><hr />
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            <p>
              2013 / 2016
            </p>
          </div>
          <div class="cvItem__info">
            <h3>Master SIMIL-TRA</h3>
            <h4>Université Lyon 2</h4>
            <p>
              Derrière le sigle se cache un master traitant des <b>S</b>ystèmes d'<b>I</b>nformation <b>M</b>ultilingues, de l'<b>I</b>ngénierie <b>L</b>inguistique et de la <b>Tra</b>duction. Pour faire simple, cela m'a permis de développer et approfondir l'environnement web, notamment dans les aspects structurels et informationnels. Cela inclut comment collecter, organiser, écrire, traduire, et mettre en forme du contenu et des données.
            </p>
          </div>
        </div>

        <div class="cvItem__container" data-aos="fade-zoom-in" data-aos-duration="1000">
          <div class="cvItem__date">
            2011 / 2013
          </div>
          <div class="cvItem__info">
            <h3>Licence de langue et littérature anglaise</h3>
            <h4>Université de Perpignan</h4>
            <p>
              Je me suis intéressé au langage et aux langues, et plus particulièrement l'anglais. A travers la licence j'ai pu étudier la grammaire, les littératures et civilisations américaines et britanniques, la traduction, la linguistique, ou bien encore le cinéma.
            </p>
          </div>
        </div>

        <!--<div class="cvSection">
          <hr /><h2>Téléchargez le CV au format</h2><hr />
        </div>-->

      </div>

      <div id="cvContainerVerso">

        <div class="cvIntro__ludo">
          <img src="img/cv-maratz/ludo.jpg" alt="Image d'illustration"/>
          <div class="cvIntro__ludo--phage">
            <h2>Ludophilophage</h2>
          </div>
          <div class="cvIntro__ludo--philo">
            <h2>Critique</h2>
          </div>
          <div class="cvIntro__ludo--paragraph">
            <p>
              <i>Ludus</i>, <i>φιλεῖν</i> et <i>φαγεῖν</i>: tels étaient au départ les préfixes et suffixes choisis par moi-même pour créer le néologisme parfait désignant ma passion pour le jeu vidéo. Mais accidentellement le temps ajouta un autre ingrédient à ma mixture: l'écriture. C'est ainsi que naquit Maratz, ardent joueur et critique féroce. Je consacre désormais (ou aimerait consacrer) mon temps libre à explorer les mondes pixelisés et combattre la notation arbitraire.
            </p>
          </div>
        </div>

        <div class="cvSection">
          <hr /><h2>Mes genres de prédilection</h2><hr />
        </div>

        <div class="cvLudo">
          <ul>
            <li>
              Twitch
              <video playsinline autoplay muted loop>
                <source src=img/cv-maratz/superhexagon.webm type="video/webm" />
              </video>
            </li>
            <li>
              Puzzle
              <video playsinline autoplay muted loop>
                <source src=img/cv-maratz/englishcountrytune.webm type="video/webm" />
              </video>
            </li>
            <li>
              Rythme
              <video playsinline autoplay muted loop>
                <source src=img/cv-maratz/thumper.webm type="video/webm" />
              </video>
            </li>
            <li>
              Plate-forme
              <video playsinline autoplay muted loop>
                <source src=img/cv-maratz/supermeatboy.webm type="video/webm" />
              </video>
            </li>
            <li>
              Roguelike
              <video playsinline autoplay muted loop>
                <source src=img/cv-maratz/necrodancer.webm type="video/webm" />
              </video>
            </li>
          </ul>
        </div>

        <div class="cvSection">
          <hr /><h2>Cred' de rue</h2><hr />
        </div>

        <p class="cvLudoIntro">
          Pile, ludophile. Face, ludophage. Entre les deux, une passion pour le jeu, les mécaniques, le design respectueux, la surprise permanente. Contre le cinéma interactif et l'absence de risques, voici un florilège de succès que j'ai obtenus au fil de mon exploration du medium, avec le pourcentage de joueurs et de joueuses qui les ont aussi sur Steam. Une façon comme une autre de dire que manette en main, je me défends plutôt bien.
        </p>

        <div class="cvCred">

          <img src="img/cv-maratz/beat.jpg" id="achiev1" alt="Icône d'un succès de BIT.TRIP BEAT sur Steam"/>
          <div>
            <h3>PROGRESS</h3>
            <h4>BIT.TRIP BEAT</h4>
            <p>
              Terminer le jeu en mode normal
            </p>
            <span class="cvPercent">
              2,1 %
            </span>
          </div>

          <img src="img/cv-maratz/core.jpg" id="achiev2" alt="Icône d'un succès de BIT.TRIP CORE sur Steam"/>
          <div>
            <h3>ACCOMPLISHMENT</h3>
            <h4>BIT.TRIP CORE</h4>
            <p>
              Terminer le jeu en mode normal
            </p>
            <span class="cvPercent">
              1,8 %
            </span>
          </div>

          <img src="img/cv-maratz/crypt.jpg" id="achiev3" alt="Icône d'un succès de Crypt of the Necrodancer sur Steam"/>
          <div>
            <h3>So Hardcore!</h3>
            <h4>Crypt of the Necrodancer</h4>
            <p>
              Finir le "all zones mode" avec Cadence
            </p>
            <span class="cvPercent">
              3,9 %
            </span>
          </div>

          <img src="img/cv-maratz/hexagon.jpg" id="achiev4" alt="Icône d'un succès de Super Hexagon sur Steam"/>
          <div>
            <h3>Hexagon</h3>
            <h4>Super Hexagon</h4>
            <p>
              Terminer le niveau "Hyper Hexagonest" et découvrir la fin
            </p>
            <span class="cvPercent">
              3,7 %
            </span>
          </div>

          <img src="img/cv-maratz/supermeatboy.jpg" id="achiev5" alt="Icône d'un succès de Super Meat Boy sur Steam"/>
          <div>
            <h3>Golden God</h3>
            <h4>Super Meat Boy</h4>
            <p>
              Finir le jeu à 100%
            </p>
            <span class="cvPercent">
              2,0 %
            </span>
          </div>

          <img src="img/cv-maratz/thumper.jpg" id="achiev6" alt="Icône d'un succès de Thumper sur Steam"/>
          <div>
            <h3>All S Rank</h3>
            <h4>Thumper</h4>
            <p>
              Obtenir un rang S pour tous les niveaux
            </p>
            <span class="cvPercent">
              0,8 %
            </span>
          </div>

          <img src="img/cv-maratz/aquaria.jpg" id="achiev7" alt="Icône d'un succès d'Aquaria sur Steam"/>
          <div>
            <h3>Explorer</h3>
            <h4>Aquaria</h4>
            <p>
              Découvrir toutes les zones d'Aquaria
            </p>
            <span class="cvPercent">
              3,1 %
            </span>
          </div>

          <img src="img/cv-maratz/vvvvvv.jpg" id="achiev8" alt="Icône d'un succès de VVVVVV sur Steam"/>
          <div>
            <h3>Flip Mode Complete</h3>
            <h4>VVVVVV</h4>
            <p>
              Terminer le jeu en mode inversé
            </p>
            <span class="cvPercent">
              1,5 %
            </span>
          </div>

          <img src="img/cv-maratz/yearwalk.jpg" id="achiev9" alt="Icône d'un succès de Year Walk sur Steam"/>
          <div>
            <h3>Year Run</h3>
            <h4>Year Walk</h4>
            <p>
              Faire un year walk en moins de 20 minutes
            </p>
            <span class="cvPercent">
              5,0 %
            </span>
          </div>

          <img src="img/cv-maratz/deponia.jpg" id="achiev10" alt="Icône d'un succès de Deponia sur Steam"/>
          <div>
            <h3>Droggeljug</h3>
            <h4>Deponia</h4>
            <p>
              Droggeljug
            </p>
            <span class="cvPercent">
              4,3 %
            </span>
          </div>

        </div>

        <div class="cvSection">
          <hr /><h2>Textes choisis</h2><hr />
        </div>

        <p class="cvLudoIntro">
          J'ai commencé mon activité critique en 2013 sur le site de Sens Critique, avant de supprimer le compte fin 2017. Depuis j'ai migré les textes sur ce site, que j'ai à moitié construit pour les héberger et les mettre en avant. Je privilégie la recherche des transtextualités (Genette) dans les oeuvres vidéoludiques. J'accorde une grande valeur à la subjectivité, à la sincérité et au respect de l'expérience. Je tends à l'éloigner du cinéma, l'objet traditionnel de fascination, pour la rapprocher plutôt de la philosophie et de la littérature, défrichant ainsi de nouveaux horizons critiques pour ce medium.<br />
        </p>

        <div class="cvLudoCritiques">
          <ul>
            <li>
              <a href="/textes/slaveofgod">Slave of God</a>
            </li>
            <li>
              <a href="/textes/supermariogalaxy">Super Mario Galaxy</a>
            </li>
            <li>
              <a href="/textes/140">140</a>
            </li>
            <li>
              <a href="/textes/alanwake">Alan Wake</a>
            </li>
            <li>
              <a href="/textes/papoyyo">Papo Y Yo</a>
            </li>
            <li>
              <a href="/textes/darksiders">Darksiders</a>
            </li>
          </ul>
        </div>
<!--
        <div class="cvSection">
          <hr /><h2>Téléchargez le CV au format</h2><hr />
        </div>

      </div>

      <div class="cvSection__download">
        <div>
          <i class="far fa-file-pdf fa-3x"></i>
          <a href="cv_nicolas_moisson.pdf" download>PDF</a>
        </div>

        <div>
          <i class="far fa-file-image fa-3x"></i>
          <a href="cv_nicolas_moisson.png" download>PNG</a>
        </div>

        <div id="cvSection__download--recto">
          <img src="img/cv/cvRecto.jpg" />
        </div>

        <div id="cvSection__download--verso">
          <img src="img/cv/cvVerso.jpg"/>
        </div>

        <div>
          <i class="far fa-file-image fa-3x"></i>
          <a href="#" download>PNG</a>
        </div>

        <div>
          <i class="far fa-file-pdf fa-3x"></i>
          <a href="#" download>PDF</a>
        </div>

      </div>-->

    </main>
    <?php include("components/version.html") ?>
    <?php include("components/footer.html"); ?>
  </body>
</html>
