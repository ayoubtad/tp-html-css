<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="formulaire.php">Formulaire de contact</a></li>
      <li><a href="table multiplication.php">Table de 4</a></li>
      <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
      <li><a href="mois.php">Mois</a></li>
      <li><a href="eau.php">Eau</a></li>
    </ul>
  </nav>

  <main>
    <h1>Formulaire de Contact</h1>
    <section>
      <form action="traitement.php" method="GET">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" placeholder="Entrez votre nom"/>
        
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"/>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Entrez votre email"/>
        
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays" placeholder="Entrez votre pays"/> 
        
        <label for="age">Âge</label>
        <input type="number" name="age" id="age" placeholder="Entrez votre âge">
        
        <label for="genre">Genre</label>
        <select name="genre" id="genre">
          <option value="Femme">Femme</option>
          <option selected="selected" value="Homme">Homme</option>
          <option value="autres">Autres</option>
        </select>
        
        <h3>Statut</h3>
        <input type="radio" name="cadre" id="etudiant" />
        <label for="etudiant">Étudiant</label>
        <input type="radio" name="cadre" id="prof" />
        <label for="prof">Enseignant</label>
        <input type="radio" name="cadre" id="autre" />
        <label for="autre">Autre</label>
        
        <h3>Pourquoi voulez-vous intégrer notre école ?</h3>
        <textarea name="textearea" id="textearea" placeholder="Saisissez vos justificatifs" rows="6"></textarea>
        
        <button type="submit"><a href="confirmation.php">Confirmer le formulaire</a></button>
      </form>
    </section>
  </main>
</body>
</html>