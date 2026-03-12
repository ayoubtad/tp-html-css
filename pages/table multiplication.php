<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="../css/styletable normale.css">
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
        <h1>Table de multiplication de 4</h1>
        <div class="table-card">
            <?php
            $n = 4;
            $i = 0;
            while ($i < 11) {
                $produit = $i * $n;
                echo "$i x $n = $produit<br>";
                $i++;
            }
            ?>
        </div>
    </main>
</body>

</html>