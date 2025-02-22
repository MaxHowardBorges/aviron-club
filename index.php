<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aviron Accueil</title>
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <?php require_once 'fr_navigation.html'; ?>
    <body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.meteociel.fr/previsions/30949/montauroux.htm" title="Météo" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="en_welcome.php" title="English page"><img id="langue" src="assets/img/flag_english.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>

    <div id="background">      

        <div id="bb"><button id="b1" onclick="window.location.href = 'fr_baseaviron.php';">Saint Cassien International Rowing Center</button>
        <button id="b2" onclick="window.location.href = 'fr_clubaviron.php';">Le Club d'Aviron <br>Saint Cassien</button></div>

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
        <h1>Accès</h1>
        <div id="map">
            <img id="cartefrance" src="assets/img/map.png" />
            <a class="googlemaps" href="https://www.google.fr/maps/place/Base+Nautique+-+Aviron+Formation+Var/@43.585277,6.7864199,17z/data=!3m1!4b1!4m6!3m5!1s0x12ce9fd47a63c59d:0x9f197ae188e05f35!8m2!3d43.5852737!4d6.7886486!16s%2Fg%2F1yg4fj69z?entry=ttu" title="Google Maps" target="_blank">
                <img id="cartezoom" src="assets/img/map2.png" />
            </a>
        </div>
        <div id="button_savoir_plus">
            <button id="b3" onclick="window.location.href = 'fr_informations.php';">En savoir plus</button>
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