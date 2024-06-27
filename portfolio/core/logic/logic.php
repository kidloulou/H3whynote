
<?php
include 'login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        try {
            
            $stmt = $conn->prepare("SELECT _role_id, user_prenom, user_nom FROM USER WHERE user_prenom = ?");
            $stmt->execute([$username]);

            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                
                $_SESSION['user_prenom'] = $row['user_prenom'];
                $_SESSION['user_nom'] = $row['user_nom'];

              
                if ($row['_role_id'] == 1) {
                    header("Location: ../../home_prof.php");
                    exit();
                } elseif ($row['_role_id'] == 2) {
                    header("Location: ../../home_eleve.php");
                    exit();
                } else {
                    header("Location: ../../index.php?err=1");
                    exit();
                }
            } else {
                
                header("Location: ../../index.php?err=1");
                exit();
            }
        } catch(PDOException $e) {
            echo "Erreur lors de l'exécution de la requête: " . $e->getMessage();
            exit();
        }
    } else {
       
        header("Location: ../../index.php?err=1");
        exit();
    }
}

$current_page = basename($_SERVER['PHP_SELF']);
$page_titles = [
    'home_eleve.php' => 'Home',
    'notes.php' => 'Notes',
    'emploie.php' => 'Emploi du temps',
    'travail.php' => 'Travail à faire',
    'information.php' => 'Info',
];

$title = isset($page_titles[$current_page]) ? $page_titles[$current_page] : '';


?>

