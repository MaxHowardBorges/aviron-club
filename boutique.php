<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boutique</title>
    <link rel="stylesheet" href="css/boutique.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<?php require_once 'navigation.html'; ?>

<body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.meteociel.fr/previsions/30949/montauroux.htm" title="Météo" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="rowingcenter.php" title="English page"><img id="langue" src="assets/img/flag_english.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
    <div id="background"></div>

    <div class="titre-page">
        <h1>Boutique</h1>
    </div>
    <?php
    /*
    while ($row = $stm->fetch()) {
        $i = 1;
        if ($i % 3 == 1) {
            echo "<tr>";
        }
    */
    ?>
        <div class="article">
            <a href="description.php">
                <section class='article-apercu'>
                    <img src="assets/img/Saint-Cassien-logo.png" class="img-apercu-gauche" alt="image produit">
                    <h3>article1</h3>
                    <p>19€</p>
                    <p>gourde</p>
                </section>
            </a>
        </div>
    <?php
    /*
        if ($i % 3 == 0) {
            echo "</tr>";
        }
        $i++;
    }
    */
    ?>
</body>

</html>