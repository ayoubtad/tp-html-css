<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <title>description de la temperature de l'eau</title>
        <link rel="stylesheet" href="../css/style_eau.css" />
</head>

<?php
$temperature = 200;
$classe = "";

if ($temperature < 0) {
        $titre = "glacée";
        $classe = "glacee";
} else if ($temperature >= 0 && $temperature < 25) {
        $titre = "froide";
        $classe = "froide";
} else if ($temperature >= 25 && $temperature < 50) {
        $titre = "chaude";
        $classe = "chaude";
} else if ($temperature >= 50 && $temperature < 100) {
        $titre = "brulante";
        $classe = "brulante";
} else {
        $titre = "vapeur";
        $classe = "vapeur";
}

// Déterminer la saison basée sur le mois actuel
$mois_actuel = date('n');
$saison = '';

switch ($mois_actuel) {
    case 12:
    case 1:
    case 2:
        $saison = 'hiver';
        break;
    case 3:
    case 4:
    case 5:
        $saison = 'printemps';
        break;
    case 6:
    case 7:
    case 8:
        $saison = 'ete';
        break;
    case 9:
    case 10:
    case 11:
        $saison = 'automne';
        break;
}
?>

<body class="<?php echo $classe; ?> saison-<?php echo $saison; ?>">
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
                <h1><?php echo $titre; ?></h1>
                <p class="temperature"><?php echo $temperature; ?>°C</p>
                
                
        </main>
</body>

</html>