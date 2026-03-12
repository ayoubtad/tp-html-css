<!doctype html>
<html lang="fr">
  <html>
    <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="../css/style.css"/>
    </head>
    <body>
      <h1>Formulaire</h1>
      <section>
        <form action="traitement" method="GET"></form>
          <label for="nom">Nom</label>
          <input type="text"name="nom"id="nom"placeholder="Entrez votre nom"/>
          <br />
          <br />
          <label for="prenom">Prenom</label>
          <input type="text"name="prenom"id="prenom"placeholder="Entrez votre prenom"/>
          <br /><br />
          <label for="email">Email</label>
          <input type="text"name="email"id="email"placeholder="Entrez votre email"/>
          <br><br>
          <label for="pays">Pays</label>
          <input type="text" name="pays" id="pays" placeholder="Entrez votre pays"/> 
          <br /><br />
          <label for="age"> Age</label>
          <input type="text" name="age" id="age" placeholder="Entrez votre age">
          <br><br>
          <label for="genre">Genre</label>
          <select name="genre" id="genre">
            <option value="Femme">Femme</option>
            <option selected="selected" value="Homme">Homme</option>
            <option value="autres">Autres</option>
          </select>
          <br /><br />
          <input type="radio" name="cadre" id="etudiant" />
          <label for="etudiant">etudiant</label>
          <input type="radio" name="cadre" id="prof" />
          <label for="prof">Enseignant</label>
          <input type="radio" name="cadre" id="autre" />
          <label for="autre">Autre</label>
          <br /><br />
          <h3>Pourquoi vous voulez integrer notre ecole</p>
          <br />
          <textarea rows="20px" cols="50px" name="textearea" id="" placeholder="Saisissez vos justificatifs">
          </textarea>
      </section>
      <br><br><br>
      <a href="confirmation.php">Pour confirmer votre formulaire appuyer ici</a>  
    </body>
  </html>
</html>