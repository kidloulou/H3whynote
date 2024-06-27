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
?>
<div class="container_cont_note">
<div class="container_note">
    <a href="add_mat.php" class="btn_note">Ajouter une matière</a>

    <a href="add_note.php" class="btn_note">Ajouter une note</a>
</div>
</div>

<div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Matière (Nom du Prof)</th>
                    <th>Coef</th>
                    <th>Note</th>
                    <th>Moyenne</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $subjects = [
                    ["Matière" => "Mathématiques", "Prof" => "M. Dupont", "Coef" => 4, "Note" => 15],
                    ["Matière" => "Physique", "Prof" => "Mme. Martin", "Coef" => 3, "Note" => 14],
                    ["Matière" => "Chimie", "Prof" => "M. Durand", "Coef" => 2, "Note" => 16],
                ];

                foreach ($subjects as $subject) {
                    echo "<tr>";
                    echo "<td>{$subject['Matière']} ({$subject['Prof']})</td>";
                    echo "<td>{$subject['Coef']}</td>";
                    echo "<td>{$subject['Note']}</td>";
                    echo "<td>" . ($subject['Note'] * $subject['Coef']) / $subject['Coef'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

<style>

.table-container {
    margin: 20px;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    tbody tr:first-child th:first-child {
        border-top-left-radius: 10px;
    }

    tbody tr:first-child th:last-child {
        border-top-right-radius: 10px;
    }

    tbody tr:last-child td:first-child {
        border-bottom-left-radius: 10px;
    }

    tbody tr:last-child td:last-child {
        border-bottom-right-radius: 10px;
    }
}


</style>
</body>
</html>