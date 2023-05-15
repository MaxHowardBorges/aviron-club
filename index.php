<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aviron Accueil</title>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <?php require_once 'navigation.html'; ?>
    <body> 

    <div id="background">
        

        <div id="bb"><button id="b1" onclick="window.location.href = 'baseaviron.php';">Saint Cassien International Rowing Center</button>
        <button id="b2">Le Club d'Aviron <br>Saint Cassien</button></div>

    </div>
    <div id="video">
        <h1>Présentation vidéo</h1>
        <div id="video-liste">
            <video controls poster="assets/img/aviron_miniature1.png">
                <source src="assets/video/video_1_bassin.webm" type="video/webm">
                Le fichier vidéo ne peut pas être lu
            </video>
            <video controls poster="assets/img/aviron_miniature2.png">
                <source src="assets/video/video_3_temoignage.webm" type="video/webm">
                Le fichier vidéo ne peut pas être lu
            </video>
            <video controls poster="assets/img/aviron_miniature3.png">
                <source src="assets/video/video_2_equipment.webm" type="video/webm">
                Le fichier vidéo ne peut pas être lu
            </video>
        </div>
    </div>
    <div id="acces">
        <h1>Accés</h1>
        <div id="map">
            <img id="map1" src="assets/img/map.png" />
            <img id="map2" src="assets/img/map2.png" />
        </div>
        <div id="button_savoir_plus">
            <button id="b3">En savoir plus</button>
        </div>
    </div>
    </body>
    <footer id="foot">
        <div id="f1">
        <img src="assets/img/region_sud.png" />
        <img src="assets/img/logo_var_83.png" />
        <img src="assets/img/logo_cc_paysdefayence.png" />
        </div>
        <div id="f2">
        <img src="assets/img/logo_rotary_hauts_de_siagne.png" />
        <img src="assets/img/logo_carrefour_market.png" />
        <img src="assets/img/logo_ffa_horizontal_couleurs.png" />
        </div>
        <div id="f3">
        <img src="assets/img/logo_adps_prevoyance_sante.png" />
        <img src="assets/img/logo_c_toit.png"/>
        </div>
        <div id="f4">
        <img src="assets/img/logo_jo_paris_2024.png" />
        </div>
    </footer>
</html>