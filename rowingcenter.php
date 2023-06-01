<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rowing Center</title>
    <link rel="stylesheet" href="css/baseaviron.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/diaporama_gallery.css" />
    <script src="js/diaporama_gallery.js"></script>
</head>
<?php require_once 'navigation.html'; ?>

<body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.windy.com/43.618/6.765/meteogram?43.304,6.765,9,m:eRQagmr" title="Weather" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="baseaviron.php" title="Page française"><img id="langue" src="assets/img/flag_french.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
    <div id="background"></div>

    <div class="titre-page">
        <h1>Saint Cassien Rowing Center</h1>
    </div>
    <div class="neutre">
        <p>Rebuilt in 2021*, the St Cassien rowing center offers modern sports facilities in a beautiful site ; it welcomes more than 2000 rowers each year :</p>
        <ul>
            <li>The local Saint Cassien Rowing Club with nearly 1000 practitioners from the Pays de Fayence.</li>
            <li>The clubs and league of the Provence Region that train their competition teams every week.</li>
            <li>The competition teams of France and Europe for intensive training courses (Rowing Camps).</li>
        </ul>
        <p><br>In addition, modern indoor accommodations and an exceptional view of the lake make the Rowing Base a unique place to host groups, business seminars, etc.</p>
        <p id="petite-etoile">* Funding provided by the Pays de Fayence Communes Community, the Provence Alpes Cote d'Azur Region and the National Sports Agency on a project supported by the National French Rowing Federation. </p>
    </div>
    <div class="bloc_impair">
        <div class="texte">
            <h2>St Cassien rowing center</h2>
            <h3>A nice modern facility to host up to 120 persons</h3>
            <p>• Large meeting room for up to 60 persons and a small kitchen to prepare meals</p>
            <p>• Indoor rowing room equiped for 30 rowers</p>
            <p>• Fitness and weight room fully equipped for high performance training</p>
            <p>• Healthcare room</p>
            <p>• Covered shed for visitor's boat</p>
            <p>• Rowing and Coaching boats for rent</p>
        </div>
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/base_vu_hauteur.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/baseaviron_saintcassien.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/base_salle_entrainement.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/base_vu_hauteur.jpg" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/baseaviron_saintcassien.JPG" style="width:100%" onclick="currentSlide(2, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/base_salle_entrainement.jpg" style="width:100%" onclick="currentSlide(3, this)">
                </div>
            </div>
        </div>
    </div>
    <div class="bloc_pair">
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/lac_st_cassien_aviron.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/plan_bassin.png" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/lac_st_cassien_aviron.jpg" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/plan_bassin.png" style="width:100%" onclick="currentSlide(2,  this)">
                </div>
            </div>
        </div>
        <div class="texte">
            <h2>Lake St Cassien</h2>
            <h3>A calm and sunny lake in a butifull natural environement, ideal for rowing, especialy in winter time:</h3>
            <p>• 8km long x 3 km wide with 3 rowing bassins from 1500 to 5500 meters long</p>
            <p>• Peacefull lake with no motor boats other than rowing coaching boats and very few windy days</p>
            <p>• Private access from the rowing base</p>
        </div>
    </div>
    <div class="bloc_impair">
        <div class="texte">
            <h2>Rowing Camps</h2>
            <h3>St Cassien rowing center can host groups up to 60 rowers and offers ideal conditions for rowing camps</h3>
            <p>• Coaching and rowing boats for rent</p>
            <p>• Access to large indoor rowing and fitness rooms</p>
            <p>• Meeting and dining room with video equipment</p>
            <p>• Comfortable housing nearby with special fares for rowing groups</p>
            <p>• Indoor shed for visitor's boats</p>
        </div>
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/competition_top_2019.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/competition_chmonde_U19.jpg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/competition_top_2019.jpg" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/competition_chmonde_U19.jpg" style="width:100%" onclick="currentSlide(2,  this)">
                </div>
            </div>
        </div>
    </div>
    <div class="bloc_pair">
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/aviron_lac_st_cassien_automne.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/st_cassien_seminaire.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/aviron_lac_st_cassien_automne.JPG" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/st_cassien_seminaire.jpg" style="width:100%" onclick="currentSlide(2,  this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%" onclick="currentSlide(3, this)">
                </div>
            </div>
        </div>
        <div class="texte">
            <h2>A unique site for special events</h2>
            <h3>Enjoying a magnificent view of the lake, St Cassien rowing center is a unique place to host groups, seminars, etc.</h3>
            <p>• Large meeting room and terrace with a splendid view over the lake</p>
            <p>• Catering services nearby to deliver quality meals on site</p>
            <p>• Rowing initiation courses and other outdoor activities around the lake</p>
            <p>• Quality housing and dining services nearby</p>
        </div>
    </div>
    <div class="neutre qui-somme-nous">
        <h2>Qui somme-nous</h2>
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/aviron_lac_st_cassien_automne.JPG" style="width:100%">
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                </div>
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/st_cassien_seminaire.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/aviron_lac_st_cassien_automne.JPG" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/st_cassien_seminaire.jpg" style="width:100%" onclick="currentSlide(2,  this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%" onclick="currentSlide(3, this)">
                </div>
            </div>
        </div>
    </div>
</body>

</html>