<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informations</title>
    <link rel="stylesheet" href="css/informations.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<?php require_once 'fr_navigation.html'; ?>

<body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.meteociel.fr/previsions/30949/montauroux.htm" title="Météo" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="en_information.php" title="English page"><img id="langue" src="assets/img/flag_english.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
    <div id="background"></div>

    <div class="titre-page">
        <h1>Informations</h1>
    </div>
    <div class="div-transport">
        <h2 id="transport">Transport</h2>
        <div class="transport">
            <img id="carte_info" src="assets/img/carte_information.png" />
            <div class="texte">
                <p>En avion: Nice aéroport/ Location de voiture/Autoroute A8 -> Marseille/ sortie 39 (40km)</p>
                <p>En train: Gare de Cannes/ Location de voiture/Autoroute A8 -> Marseille/ sortie 39 (20km)</p>
                <p>En voiture: Autoroute A8 en direction de “les Adrets” sortie 39 ->Montauroux</p>
                <p>A partir de l'autoroute prendre la sortie 39, le centre d'aviron est à 500m sur la gauche après avoir traversé le grand pont sur le lac</p>
            </div>
        </div>
    </div>
    <div class="logement-tourisme">
        <div class="logement">
            <h2>Logement</h2>
            <div class="texte-logement">
                <p>Le Champ d'Eysson: appart-hotel - <a class="lien" href="https://champdeysson.com/" target="_blank">champdeysson.com</a></p>
                <p>Camping les Floralies: bungalows - <a class="lien"href="https://www.domainedesfloralies.fr/" target="_blank">www.domainedesfloralies.fr</a></p>
                <p>Les Gîtes du lac: gîtes - <a class="lien" href="https://www.lesgitesdulac.com/" target="_blank">www.lesgitesdulac.com</a></p>
                <p>Auberge des Pins: hotel - <a class="lien" href="https://www.aubergedespins.com/index.php/fr/" target="_blank">www.aubergedespins.com</a></p>
            </div>
        </div>
        <div class="tourisme">
            <h2>Tourisme</h2>
            <p> Pour en savoir plus : <a class="lien" href="https://www.paysdefayence.com/" target="_blank">www.paysdefayence.com</a></p>
        </div>
    </div>
</body>
<?php require_once 'fr_footer.html'; ?>
</html>