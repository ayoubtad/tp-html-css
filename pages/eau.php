<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <title>description de la temperature de l'eau</title>
        <link rel="stylesheet" href="../css/style_eau.css"/>
</head>

<body>
        <?php
        $temperature = 200;
        if ($temperature < 0) {
                echo "<h1>glacée<h1>";
        } else if ($temperature >= 0 && $temperature < 25) {
                echo "<h1>froide<h1>";
        } else if ($temperature >= 25 && $temperature < 50) {
                echo "<h1>chaude<h1>";
        } else if ($temperature >= 50 && $temperature < 100) {
                echo "<h1>brulante<h1>";
        } else {
                echo "<h1>vapeur<h1>";
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