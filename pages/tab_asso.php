<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>tableau associatif</title>
    <link rel="stylesheet" href="../css/style_mois.css" />
</head>

<?php
$mois = array();
$annee = 2026;
$noms_mois = [
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre"
];
for ($i = 1; $i <= 12; $i++) {
    $nb_jour = 0;
    switch ($i) {
        // 4,6,9,11,2
        case 4:
        case 6:
        case 9:
        case 11:
            $nb_jour = 30;
            break;
        case 2:
            // python : nb = 29 if annee%4==0 else 28
            $nb_jour = $annee % 4 == 0 ? 29 : 28;
            break;
        default:
            $nb_jour = 31;
    }
    $mois[$noms_mois[$i - 1]] = $nb_jour;
}

?>

<body>
    <header>
        <h1>Le premier TP en HTML/CSS</h1>
        <ul>
            <li>
                <a href="index.php">accueil</a>
            </li>

            <li>
                <a href="eau.php">eau</a>
            </li>
            <li>
                <a href="table multiplication total.php">toutes les tables de multiplication</a>
            </li>
            <li>
                <a href="table multiplication.php">table de 4</a>
            </li>
            <li>
                <a href="#">Exercice-4</a>
            </li>
            <li>
                <a href="formulaire.php">formulaire de contact</a>
            </li>
            <li>
                <a href="tab_asso.php">dates de mois</a>
            </li>
        </ul>
    </header>
    <main>
        <section>
            <h1>toues les mois</h1>
            <article>
                <h3><?php echo $annee; ?></h3>
                <?php foreach ($mois as $k => $v) { ?>
                    <p><?php echo "$k $v jours"; ?></p>
                <?php } ?>
            </article>
        </section>
    </main>

</body>

</html>