<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Base d'aviron</title>
        <link rel="stylesheet" href="css/baseaviron.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="css/diaporama_gallery.css" />
        <script src="js/diaporama_gallery.js"></script>
    </head>
    <?php require_once 'navigation.html'; ?>
    <body>

    <div class="meteo-langue">
        <div class="meteo"><a href="https://www.windy.com/43.618/6.765/meteogram?43.304,6.765,9,m:eRQagmr" title="Météo" target="_blank"><i class="fa-solid fa-cloud-sun fa-4x" width="90" height="60"></i></a></div>
        <div class="langue"><a href="rowingcenter.php" title="English page"><img id="langue" src="assets/img/flag_english.jpg" alt="langue anglais" width="90" height="60"></a></div>
    </div>
        <div id="background"></div>

        <div class="titre-page"><h1>Base d'Aviron Saint Cassien</h1></div>
        <div class="neutre">
            <p>Reconstruite en 2021*, la base d'aviron de St Cassien offre des installations sportives modernes dans un site magnifique ; elle accueille plus de 2000 rameurs chaque année :</p>
            <ul>
                <li>Le Club local Aviron Saint Cassien avec près de 1000 pratiquants du Pays de Fayence.</li>
                <li>Les clubs et la ligue de la Région qui entrainent en permanence leurs équipes de compétition.</li>
                <li>Les équipes de compétitions de France et d'Europe en Stage de haut niveau (Rowing Camp).</li>
            </ul>
            <p><br>Par ailleurs, les équipements disponibles et une vue exceptionnelle sur le lac font de la base d'Aviron un lieu idéal pour accueillir des groupes, séminaires dentreprise, etc.</p>
            <p id="petite-etoile">* Financement apporté par la Communauté de Communes du Pays de Fayence, par la Région Provence Alpes Côte d'Azur, par l'Agence Nationale du Sport sur un projet soutenu par la Fédération Française d'Aviron.</p>
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
                <h2>Lac St Cassien</h2>
                <h3>Un lac calme et ensoleillé dans un environnement naturel magnifique idéal pour l'aviron, en particulier en hiver</h3>
                <p>• 8km de long x 3 km de large avec 3 bassins de 1500 à 5500 mètres de long</p>
                <p>• Un lac plat sans bateaux à moteurs autres que les bateaux de coaching</p>
                <p>• Un lac peu venté, accès directe de la base d'aviron</p>
            </div>
        </div>
        <div class="bloc_impair">
            <div class="texte">
                <h2>Stage d'Aviron (Rowing Camps)</h2>
                <h3>La Base d'aviron peut accueillir des groupes jusqu'à 60 rameurs et offre des conditions idéales pour l'entraînement</h3>
                <p>• Bateaux à louer et possibilité de suivi coaching</p>
                <p>• Accès aux salles d'ergomètres et de fitness</p>
                <p>• Salle de reunion équipée video et pour les repas</p>
                <p>• Logements tout confort à proximité (appart-hotel, camping…) avec tarrifs avantageux pour les groups d'aviron</p>
                <p>• Garage à bateaux pour les visiteurs en stage</p>
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
                <p>• Initiation à l'aviron et autres activités au tour du lac</p>
                <p>• Logements de qualité à moins de 5 km (appart-hotel, bungalow, ...)</p>
            </div>
        </div>
        <div class="neutre qui-somme-nous">
            <p>Rebuilt in 2021*, the St Cassien rowing center offers modern sports facilities in a beautiful site ; it welcomes more than 2000 rowers each year :</p>
            <ul>
                <li>The local Saint Cassien Rowing Club with nearly 1000 practitioners from the Pays de Fayence.</li>
                <li>The clubs and league of the Provence Region that train their competition teams every week.</li>
                <li>The competition teams of France and Europe for intensive training courses (Rowing Camps).</li>
            </ul>
            <p><br>In addition, modern indoor accommodations and an exceptional view of the lake make the Rowing Base a unique place to host groups, business seminars, etc.</p>
            <p id="petite-etoile">* Funding provided by the Pays de Fayence Communes Community, the Provence Alpes Cote d'Azur Region and the National Sports Agency on a project supported by the National French Rowing Federation. </p>
        </div>
    </body>
</html>