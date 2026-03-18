<?php
$nombre = 4;

if (isset($_GET['nombre'])) {
    $nombre = (int) $_GET['nombre'];
}

$lignes_mul = "";

for ($i = 0; $i <= 12; $i++) {
    $produit = $nombre * $i;
    $lignes_mul .= "$i x $nombre = $produit<br>";
}
?>
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
            <li><a href="table multiplication total.php">Tables 0 à 10</a></li>
            <li><a href="mois.php">Mois</a></li>
            <li><a href="eau.php">Eau</a></li>
            <li><a href="tab_asso.php">dates de mois</a></li>
        </ul>
    </nav>

    <main>
        <h1>Table de multiplication</h1>
        
        <form action="table multiplication.php" method="GET" class="multiplication-form">
            <label for="nombre">Nombre : </label>
            <input type="number" name="nombre" id="nombre" value="<?php echo htmlspecialchars((string)$nombre); ?>" class="number-input">
            <button type="submit" class="calc-btn">Calculer</button>
        </form>

        <div class="table-card">
            <h3>Table de <?php echo htmlspecialchars((string)$nombre); ?></h3>
            <div class="results">
                <p><?php echo $lignes_mul; ?></p>
            </div>
        </div>
    </main>
</body>

</html>