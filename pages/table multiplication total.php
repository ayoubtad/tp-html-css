<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tables de multiplication</title>
    <link rel="stylesheet" href="../css/style2.css">
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
        </div>
    </main>
</body>

</html>