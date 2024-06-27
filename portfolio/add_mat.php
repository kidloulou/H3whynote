<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire add Matière</title>
    <link rel="stylesheet" href="core/style/style.css">
</head>
<body>
    <div class="container_titre_matt">
        <h1 class="titre_matt">Ajouter votre matière</h1>
    </div>
    <div class="container_center">
        <div class="container_form">
            <form action="#" method="post" class="form_note">
                <div class="form_group">
                    <label for="matiere">Matière</label>
                    <input type="text" id="matiere" name="matiere" required>
                </div>
                <div class="form_group">
                    <label for="prof">Nom du Prof</label>
                    <input type="text" id="prof" name="prof" required>
                </div>
                <div class="form_group">
                    <label for="coef">Coef</label>
                    <input type="number" id="coef" name="coef" required min="1">
                </div>
                <div class="form_buttons">
                    <button type="submit" class="btn_form">Valider</button>
                    <button type="button" class="btn_form" onclick="history.back()">Retour</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
