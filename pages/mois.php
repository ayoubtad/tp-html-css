<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mois</title>
    <link rel="stylesheet" href="../css/style_mois.css">
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
        <h1>Nombre de jours par mois</h1>

        <?php
        $mois = 12;
        $annee = 2000;
        $nom_mois = "Décembre";

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

        <section>
            <p>Le mois de <strong><?php echo $nom_mois; ?></strong> de l'année <strong><?php echo $annee; ?></strong> a <strong><?php echo $jours; ?></strong> jours.</p>
        </section>
    </main>
</body>

</html>