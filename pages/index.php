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

    <div class="home-layout">
      <section class="category-section">
        <h2>Langages</h2>
        <div class="cards-container">
          <article class="card">
            <h3>PHP</h3>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP">
            <p>PHP est un langage de programmation côté serveur. Il est principalement utilisé pour générer des pages web dynamiques et communiquer avec les bases de données.</p>
          </article>
          <article class="card">
            <h3>HTML</h3>
            <img src="../images/image.png" alt="HTML5">
            <p>HTML est le langage standard du développement web. Il sert à bâtir la structure de la page et à organiser le contenu à l'aide d'un puissant système de balises.</p>
          </article>
          <article class="card">
            <h3>CSS</h3>
            <img src="../images/image copy.png" alt="CSS3">
            <p>Le CSS définit l'apparence et le design visuel de vos pages (couleurs, polices, tailles, marges). Il est le complément indispensable du HTML.</p>
          </article>
        </div>
      </section>

      <section class="category-section">
        <h2>EDI</h2>
        <div class="cards-container">
          <article class="card">
            <h3>VScode</h3>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VScode">
            <p>C'est l'environnement de développement intégré qu'on utilise.</p>
          </article>
          <article class="card">
            <h3>IntelliJ</h3>
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" alt="IntelliJ">
            <p>C'est un environnement de développement intégré connu.</p>
          </article>
        </div>
      </section>
    </div>

    <div class="cta-button">
      <a href="./formulaire.php">Aller au formulaire</a>
    </div>
  </main>
</body>

</html>