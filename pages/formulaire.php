<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="table multiplication.php">Table de multiplication</a></li>
      <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
      <li><a href="mois.php">Mois</a></li>
      <li><a href="eau.php">Eau</a></li>
      <li><a href="tab_asso.php">dates de mois</a></li>
    </ul>
  </nav>

  <main>
    <h1>Formulaire de Contact</h1>
    <section class="contact-section">
      <form action="traitement.php" method="GET" class="contact-form">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" />
        </div>

        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" />
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Entrez votre email" />
        </div>

        <div class="form-group">
          <label for="pays">Pays</label>
          <input type="text" name="pays" id="pays" placeholder="Entrez votre pays" />
        </div>

        <div class="form-group">
          <label for="age">Âge</label>
          <input type="number" name="age" id="age" placeholder="Entrez votre âge">
        </div>

        <div class="form-group">
          <label for="genre">Genre</label>
          <select name="genre" id="genre">
            <option value="Femme">Femme</option>
            <option selected="selected" value="Homme">Homme</option>
            <option value="autres">Autres</option>
          </select>
        </div>

        <div class="form-group full-width">
          <h3 class="section-subtitle">Statut</h3>
          <div class="radio-group">
            <label class="radio-label">
              <input type="radio" name="cadre" id="etudiant" value="etudiant" />
              Étudiant
            </label>
            <label class="radio-label">
              <input type="radio" name="cadre" id="prof" value="prof" />
              Enseignant
            </label>
            <label class="radio-label">
              <input type="radio" name="cadre" id="autre" value="autre" />
              Autre
            </label>
          </div>
        </div>

        <div class="form-group full-width">
          <h3 class="section-subtitle">Pourquoi voulez-vous intégrer notre école ?</h3>
          <textarea name="textearea" id="textearea" placeholder="Saisissez vos justificatifs" rows="4"></textarea>
        </div>

        <div class="form-group full-width">
          <button type="submit" formaction="confirmation.php" class="submit-btn">Confirmer le formulaire</button>
        </div>
      </form>
    </section>
  </main>
</body>

</html>