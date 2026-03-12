<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>table de multiplication</title>
    <link rel="stylesheet" href="../css/styletable normale.css">
</head>

<body>
    <?php
$n = 4;
$i = 0;
while ($i <11){
    
    $produit = $i * $n;
    echo "$i x $n = $produit".'<br>'; 
    $i++;
}
?>
<br></br>
    <a href="index.php">retour a l'acceuil</a>
    <br><br>
    <a href="eau.php">situation de l'eau</a>
    <br></br>
    <a href="formulaire.php">retour au formulaire</a>
    <br></br>
    <a href="table multiplication total.php">toutes les tables de multiplication</a>
    <br></br>

</body>

</html>