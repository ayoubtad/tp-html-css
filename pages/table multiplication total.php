[15:58, 11/03/2026] Ayoub:
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>tablede multiplication totale</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>

<body>

    <h1>Tables de multiplication</h1>

    <div class="container">

        <?php

        for ($i = 1; $i <= 9; $i++) {

            echo "<div class='table'>";
            echo "<h3>Table de $i</h3>";

            for ($j = 1; $j <= 9; $j++) {
                $produit = $i * $j;
                echo "$i × $j = $produit <br>";
            }

            echo "</div>";
        }

        ?>
        <br></br>
    <a href="index.php">retour a l'acceuil</a>
    <br></br>
    <a href="eau.php">situation de l'eau</a>
    <br></br>
    <a href="formulaire.php">retour au formulaire</a>
    <br></br>
    <a href="mois.php">mois</a>

</body>

</html>

</div>

<a href="index.php">Retour à l'accueil</a>

</html>