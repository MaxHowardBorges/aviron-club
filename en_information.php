<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
    <link rel="stylesheet" href="css/informations.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<?php require_once 'en_navigation.html'; ?>

<body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.meteociel.fr/previsions/30949/montauroux.htm" title="Weather" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="informations.php" title="Page française"><img id="langue" src="assets/img/flag_french.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
    <div id="background"></div>

    <div class="titre-page">
        <h1>Information</h1>
    </div>
    <div class="div-transport">
        <h2 id="transport">Transportation</h2>
        <div class="transport">
            <img id="carte_info" src="assets/img/carte_information.png" />
            <div class="texte">
                <p>By plane: Nice airport/ Car rental/ Highway A8 -> Marseille/ exit 39 (40km)</p>
                <p>By train: Cannes station/ Car rental/Highway A8 -> Marseille/ exit 39 (20km)</p>
                <p>By car: Highway A8 to “les Adrets” exit 39 ->Montauroux</p>
                <p>From the highway exit 39, the rowing center is 500m on the left after crossing the large bridge over the lake</p>
            </div>
        </div>
    </div>
    <div class="logement-tourisme">
        <div class="logement">
            <h2>Accommodation</h2>
            <div class="texte-logement">
                <p>Le Champ d'Eysson: apart-hotel - <a class="lien" href="https://champdeysson.com/" target="_blank">champdeysson.com</a></p>
                <p>Camping les Floralies: bungalows - <a class="lien" href="https://www.domainedesfloralies.fr/" target="_blank">www.domainedesfloralies.fr</a></p>
                <p>Les Gîtes du lac: gites - <a class="lien" href="https://www.lesgitesdulac.com/" target="_blank">www.lesgitesdulac.com</a></p>
                <p>Auberge des Pins: hotel - <a class="lien" href="https://www.aubergedespins.com/index.php/fr/" target="_blank">www.aubergedespins.com</a></p>
            </div>
        </div>
        <div class="tourisme">
            <h2>Tourism</h2>
            <p> To know more : <a class="lien" href="https://www.paysdefayence.com/" target="_blank">www.paysdefayence.com</a></p>
        </div>
    </div>
</body>

</html>