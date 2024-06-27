<?php
include('core/logic/logic.php');



$titre = "devnote"
 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/style/style.css">
    <title> <?php echo $titre ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/portfolio/Assets/notes.png">
    <body style="background-image: url('Assets/backgound.jpeg'); background-size: cover; background-repeat: no-repeat;">
    
</head>
<body>

<?php
    if (isset($_GET['err']) && $_GET['err'] == 1) {
        echo '<div id="error-box">
                <span id="close-btn" onclick="this.parentElement.style.display=\'none\'">&times;</span>
                <p>Une erreur s\'est produite. Vous avez rentrer le mauvais ID ou MDP</p>
            </div>';
    }
    ?>



</div>

<div class="centered-container">
    <div class="container">
        <form action="core/logic/logic.php" method="post">
            <h2 class="titre">Login</h2>
            <label for="username">Identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Confirmer</button>
        </form>
    </div>
</div>




</body>
</html>
