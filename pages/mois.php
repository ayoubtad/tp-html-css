<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mois</title>
    <link rel="stylesheet" href="../css/style_mois.css">
</head>

<body>
    <?php

    $mois = 12;
    $annee = 2000;

    switch ($mois) {
        case 4:
        case 6:
        case 9:
        case 11:
            echo "30";
            break;
        case 2:
            if ($annee % 4 == 0) {
                echo "29";
            } else {
                echo "28";
            }
            break;
        default:
            echo "31";
    }
    ?>
    <br></br>
    <a href="index.php">retour a l'acceuil</a>
    <br></br>
    <a href="eau.php">situation de l'eau</a>
    <br></br>
    <a href="formulaire.php">retour au formulaire</a>
    <br></br>
     
    <a href="table multiplication total.php">toutes les tables de multiplication</a>
</body>

</html>