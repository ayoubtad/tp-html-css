<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <title>description de la temperature de l'eau</title>
        <link rel="stylesheet" href="../css/style_eau.css" />
</head>

<?php
$temperature = 200;
$eau = "";

if ($temperature < 0) {
        $titre = "glacée";
        $eau = "glacee";
} else if ($temperature >= 0 && $temperature < 25) {
        $titre = "froide";
        $eau = "froide";
} else if ($temperature >= 25 && $temperature < 50) {
        $titre = "chaude";
        $eau = "chaude";
} else if ($temperature >= 50 && $temperature < 100) {
        $titre = "brulante";
        $eau = "brulante";
} else {
        $titre = "vapeur";
        $eau = "vapeur";
}
?>

<body class="<?php echo $eau; ?>">
        <nav>
                <ul>
                        <li><a href="page1.php">Page 1</a></li>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="formulaire.php">Formulaire de contact</a></li>
                        <li><a href="table multiplication.php">Table de multiplication</a></li>
                        <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
                        <li><a href="mois.php">Mois</a></li>
                        <li><a href="tab_asso.php">dates de mois</a></li>
                </ul>
        </nav>

        <main>
                <h1><?php echo $titre; ?></h1>
                <p class="temperature"><?php echo $temperature; ?>°C</p>


        </main>
</body>

</html>