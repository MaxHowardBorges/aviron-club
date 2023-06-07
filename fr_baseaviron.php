<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base d'aviron</title>
    <link rel="stylesheet" href="css/baseaviron.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/diaporama_gallery.css" />
    <script src="js/diaporama_gallery.js"></script>
</head>
<?php require_once 'fr_navigation.html'; ?>

<body>
    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.meteociel.fr/previsions/30949/montauroux.htm" title="Météo" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="en_rowingcenter.php" title="English page"><img id="langue" src="assets/img/flag_english.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
    <div id="background"></div>

    <div class="titre-page">
        <h1>Base d'Aviron Saint Cassien</h1>
    </div>
    <div class="neutre">
        <p>Reconstruite en 2021*, la base d'aviron de St Cassien offre des installations sportives modernes dans un site magnifique ; elle accueille plus de 2000 rameurs chaque année :</p>
        <ul>
            <li>Le Club local Aviron Saint Cassien avec près de 1000 pratiquants du Pays de Fayence.</li>
            <li>Les clubs et la ligue de la Région qui entrainent en permanence leurs équipes de compétition.</li>
            <li>Les équipes de compétitions de France et d'Europe en Stage de haut niveau (Rowing Camp).</li>
        </ul>
        <p><br>Par ailleurs, les équipements disponibles et une vue exceptionnelle sur le lac font de la base d'Aviron un lieu idéal pour accueillir des groupes, séminaires dentreprise, etc.</p>
    </div>
    <div class="bloc_impair">
        <div class="texte">
            <h2>Base d'Aviron St Cassien</h2>
            <h3>Une base moderne qui peut accueillir jusqu'à 120 personnes</h3>
            <p>• Salle de réunion pour 60 personnes avec une petite cuisine</p>
            <p>• Salle d'ergomètres pour 30 rameurs</p>
            <p>• Salle de préparation physique haute performance</p>
            <p>• Salle de soins</p>
            <p>• Garage pour les bateaux visiteurs</p>
            <p>• Bateaux à louer (coaching et rame)</p>
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

            <div class="mySlides">
                <img class="pres-img" src="assets/img/compétition huit minime filles.jpg" style="width:100%">
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
                <div class="column">
                    <img class="demo cursor" src="assets/img/compétition huit minime filles.jpg" style="width:100%" onclick="currentSlide(3,  this)">
                </div>
            </div>
        </div>
        <div class="texte">
            <h2>Lac St Cassien</h2>
            <h3>Un lac calme et ensoleillé dans un environnement naturel magnifique idéal pour l'aviron, en particulier en hiver</h3>
            <p>• 8km de long x 2 km de large , tour du lac 13 km</p>
            <p>• 3 bassins navigables de 1500 à 5500 m de longueur</p>
            <p>• Un lac calme, avec peu de vent et peu de bateaux à moteur autres que les bateaux de coaching</p>
            <p>• Un environnement naturel boisé magnifique et vue sur les Alpes Maritimes</p>
            <p>• Accès direct de la base d'aviron avec 3 pontons</p>
        </div>
    </div>
    <div class="bloc_impair">
        <div class="texte">
            <h2>Stage d'Aviron (Rowing Camps)</h2>
            <h3>La Base d'aviron peut accueillir des groupes jusqu'à 60 rameurs et offre des conditions idéales pour l'entraînement</h3>
            <p>• Bateaux à louer et possibilité de suivi coaching</p>
            <p>• Accès aux salles d'ergomètres et de fitness</p>
            <p>• Salle de reunion équipée video et pour les repas</p>
            <p>• Logements tout confort à proximité (appart-hotel, camping, gîte…) avec tarrifs avantageux pour les groups d'aviron</p>
            <p>• Garage à bateaux pour les visiteurs en stage</p>
            <div class="boutton">
                <button id="contact" onclick="window.location.href = 'fr_contact.php';">Contacts</button>
            </div>
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
            <h2>Un site unique dans un environnement naturel</h2>
            <h3>Avec une vue magnifique sur le lac, la Base d'Aviron de St Cassien est un lieu ideal pour les reunions privées, les séminaires, etc…</h3>
            <p>• Grande salle de reunion toute équipée, divisible en deux</p>
            <p>• Grande terrasse avec vue sur le lac</p>
            <p>• Offre de services de repas et cocktail à proximité</p>
            <p>• Initiation à l'aviron et autres activités autour du lac</p>
            <p>• Logements de qualité à moins de 5 km (appart-hotel, bungalow, gîte...)</p>
        </div>
    </div>
    <div class="neutre qui-somme-nous">
        <h2>Qui sommes-nous</h2>
        <div class="container">
            <div class="mySlides" style="display: block;">
                <img class="pres-img" src="assets/img/AG_Lionel-Fasola_Club_Aviron_StCassien_06042019-e1625992883334.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/AG_ODescampq_Club_Aviron_StCassien_06042019-e1625992718742.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/Coach-Nicolas.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/Luc-Crispon.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/compétition 2023 2.jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/Scolaire Julien 2022 .jpg" style="width:100%">
            </div>

            <div class="mySlides">
                <img class="pres-img" src="assets/img/coach Facundo.jpeg" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1, this)">&#10094;</a>
            <a class="next" onclick="plusSlides(1, this)">&#10095;</a>

            <div class="row">
                <div class="column">
                    <img class="demo cursor active" src="assets/img/AG_Lionel-Fasola_Club_Aviron_StCassien_06042019-e1625992883334.jpg" style="width:100%" onclick="currentSlide(1, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/AG_ODescampq_Club_Aviron_StCassien_06042019-e1625992718742.jpg" style="width:100%" onclick="currentSlide(2,  this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/loisir_fete_club_2004.JPG" style="width:100%" onclick="currentSlide(3, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/Coach-Nicolas.jpg" style="width:100%" onclick="currentSlide(4, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/Luc-Crispon.jpg" style="width:100%" onclick="currentSlide(5, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/compétition 2023 2.jpg" style="width:100%" onclick="currentSlide(6, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/Scolaire Julien 2022 .jpg" style="width:100%" onclick="currentSlide(7, this)">
                </div>
                <div class="column">
                    <img class="demo cursor" src="assets/img/coach Facundo.jpeg" style="width:100%" onclick="currentSlide(8, this)">
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once 'fr_footer.html'; ?>
</html>