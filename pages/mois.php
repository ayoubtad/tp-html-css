<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mois</title>
    <link rel="stylesheet" href="../css/style_mois.css">
</head>

<?php
$mois = 1;
$annee = 2000;
$nom_mois = "Janvier";

// Déterminer la saison basée sur le mois affiché
switch ($mois) {
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

// Calculer le nombre de jours
switch ($mois) {
    case 4:
    case 6:
    case 9:
    case 11:
        $jours = 30;
        break;
    case 2:
        if ($annee % 4 == 0) {
            $jours = 29;
        } else {
            $jours = 28;
        }
        break;
    default:
        $jours = 31;
}
?>

<body class="saison-<?php echo $saison; ?>">
    <nav>
        <ul>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Formulaire de contact</a></li>
            <li><a href="table multiplication.php">Table de multiplication</a></li>
            <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
            <li><a href="eau.php">Eau</a></li>
            <li><a href="tab_asso.php">dates de mois</a></li>
        </ul>
    </nav>

    <main>
        <h1>Nombre de jours par mois</h1>

        <section>
            <p>Le mois de <strong><?php echo $nom_mois; ?></strong> de l'année <strong><?php echo $annee; ?></strong> a <strong><?php echo $jours; ?></strong> jours.</p>
        </section>
    </main>
</body>

</html>