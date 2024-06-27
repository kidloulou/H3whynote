<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H3heytnotes</title>
    <link rel="stylesheet" href="core/style/style.css">
    
</head>
<body>
<?php 
require_once("core/logic/header.php");
require_once("core/logic/login.php");

$prenom = $_SESSION['user_prenom'];
$nom = $_SESSION['user_nom'];
?>
<div id="carousel">
        <div class="carousel-container">
            <img class="photos" src="Assets/img1.jpg" alt="Image 1">
            <img class="photos" src="Assets/img2.jpg" alt="Image 2">
            <img class="photos" src="Assets/img3.jpg" alt="Image 3">
        </div>
        <div id="g" class="btn" onclick="prevImage()"></div>
        <div id="d" class="btn" onclick="nextImage()"></div>
    </div>

    
    <div class="container_why">
    <h2 class="titre_home"><b><strong><i><U>Bienvenue sur votre espace</U></i></strong></b><br>
    <?php echo $prenom . ' ' . $nom; ?>
    </h2>
<div class="container_para">
    <h5 class="sous_titre_why">Pourquoi choisir H3 Hitema?</h5>
    <p class="para_why">
        Notre école propose des formations complètes du BTS au Master, avec des spécialisations<br> 
        en programmation (BTS SIO option SLAM) et en cybersécurité (BTS SIO option RISR).<br> 
        Grâce à des projets pratiques et des stages en entreprise, nos étudiants acquièrent une expérience précieuse.<br> 
        En plus, nos cours sont dispensés par des experts et nos équipements à la pointe de la technologie.<br> 
        Rejoignez-nous pour une carrière dynamique et prometteuse dans l'informatique.
    </p>
</div>
    <div class="cards_container">
        <div class="card">
            <div class="card_icon">🌟</div>
            <div class="card_text">Option SLAM</div>
            <button class="btn_card">En savoir plus</button>
        </div>
        <div class="card">
            <div class="card_icon">🔒</div>
            <div class="card_text">Option RISR</div>
            <button class="btn_card">En savoir plus</button>
        </div>
        <div class="card">
            <div class="card_icon">🎓</div>
            <div class="card_text">Parcours Master</div>
            <button class="btn_card">En savoir plus</button>
        </div>
    </div>
</div>


<div class="container_video">
    <h6 class="titre_video">
    <b><strong><i><U>Découvrez H3 Hitema ! </U></i></strong></b>
    </h6>
<div class="style_video">    
    <video controls width="800" autoplay muted>
        <source src="/portfolio/Assets/H3video.mp4" type="video/mp4">
        <track src="/portfolio/Assets/subtitles.vtt" kind="subtitles" srclang="fr" label="French">
    </video>
</div>
<br>

<hr class="separator">

<div class="container_audio">
    <h6 class="titre_audio">
            Comment intégrer H3 Hitema ?
        </h6>
        <audio controls class="style_audio">
            <source src="/portfolio/Assets/H3audio.mp3" type="audio/mp3">
            Votre navigateur ne supporte pas la balise audio.
        </audio>
</div>
<div  class="container_etape">
        <h5 class="sous_titre_audio">
            Les 3 étapes pour pour une candidature à H3hitema:
        </h5>
        <div class="cards_container">
            <div class="card">
                <div class="container_titre_card">
                    <h3 class="titre_card">
                        1) Étude des candidatures
                    </h3>
                </div>
                <div class="card_text_audio"> 
                <ul>
                    <li class="list_test">-Dossier en ligne</li>
                    <li class="list_test">-Cv</li>
                    <li class="list_test">-Relevé des notes</li>
                    <li class="list_test">-Diplômes</li>
                    <li class="list_test">-Pièces d'identité</li>
                </ul>
                </div>
                <button class="btn_card">En savoir plus</button>
            </div>
            <div class="card">
                <div class="container_titre_card">
                    <h3 class="titre_card">
                        2) Tests en ligne
                    </h3>
                </div>
                <div class="card_text_audio"> 
                <ol>
                    <li class="list_test">-Logique</li>
                    <li class="list_test">-Mathématique</li>
                    <li class="list_test">-Informatique (sauf les BTS)</li>
                </ol>
                </div>
                <button class="btn_card">En savoir plus</button>
            </div>
            <div class="card">
                <div class="container_titre_card">
                    <h3 class="titre_card">
                        3) Entretien personnel
                    </h3>
                </div>
                <div class="card_text_audio"> 
                <dl>
                    <dt class="list_test">-Votre Parcours</dt>
                    <dd class="list_test">-Vos projets</dd>
                    <dt class="list_test">-Réponse sous 3 jours</dt>
                </dl>
                </div>
                <button class="btn_card">En savoir plus</button>
            </div>
        </div>
    </div>
</div>


<?php
require_once("core/logic/footer.php");
?>
<script src="core/interaction/index.js"></script>
</body>
</html>