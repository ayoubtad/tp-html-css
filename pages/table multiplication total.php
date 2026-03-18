<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tables de multiplication</title>
    <link rel="stylesheet" href="../css/style2.css?v=<?php echo time(); ?>">
</head>

<body>
    <nav>
        <ul>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Formulaire de contact</a></li>
            <li><a href="table multiplication.php">Table de multiplication</a></li>
            <li><a href="mois.php">Mois</a></li>
            <li><a href="eau.php">Eau</a></li>
            <li><a href="tab_asso.php">dates de mois</a></li>
        </ul>
    </nav>

    <main>
        <h1>Tables de multiplication</h1>

        <div class="container">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='table'>";
                echo "<h3>Table de $i</h3>";

                for ($j = 1; $j <= 10; $j++) {
                    $produit = $i * $j;
                    // Adding .row class instead of raw text separated by <br> for much better CSS typography handling
                    echo "<div class='row'>$i × $j = <span style='color: #d81196'>$produit</span></div>";
                }

                echo "</div>";
            }
            ?>
        </div>
    </main>
</body>

</html>