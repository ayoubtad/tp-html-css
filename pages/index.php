<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Accueil</title>
  <meta name="description" content="Page d'accueil - HTML et CSS" />
  <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>" />
</head>

<body>
  <nav>
    <ul>
      <li><a href="page1.php">Page 1</a></li>
      <li><a href="formulaire.php">Formulaire de contact</a></li>
      <li><a href="table multiplication.php">Table de multiplication</a></li>
      <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
      <li><a href="mois.php">Mois</a></li>
      <li><a href="eau.php">Eau</a></li>
      <li><a href="tab_asso.php">dates de mois</a></li>
    </ul>
  </nav>

  <main>
    <h1>Accueil</h1>

    <section>
      <h2>C'est quoi HTML</h2>
      <img src="../images/image.png" alt="Logo HTML5" height="130">
      <p>HTML (HyperText Markup Language) est un langage standard dans le développement web.
        Il sert à créer la structure des pages web grâce à des balises pour organiser le contenu
        tel que les titres, les paragraphes, les images et les liens,
        afin qu'il soit correctement affiché dans la page web.</p>
    </section>

    <section>
      <h2>C'est quoi CSS</h2>
      <img src="../images/image copy.png" alt="Logo CSS3" height="130">
      <p>CSS (Cascading Style Sheets) est le langage utilisé pour définir l'apparence
        et la mise en forme des pages web. Il permet de modifier les couleurs, les tailles,
        les polices, les marges et la disposition des éléments HTML.
        Le CSS est complémentaire au HTML : HTML structure le contenu, CSS le rend visuellement attractif.</p>
    </section>

    <div class="cta-button">
      <a href="./formulaire.php">Aller au formulaire</a>
    </div>
  </main>
</body>

</html>