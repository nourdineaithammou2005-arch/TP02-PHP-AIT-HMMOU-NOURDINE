<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 — Variables et Concaténation</title>
</head>
<body>
    <h1>Exercice 2 : Variables, Concaténation et Casse</h1>

    <?php
    $nom = "Alami";
    $prenom = "Karim";
    $age = 22;
    $formation = "Programmation Web 2";
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis la formation " . $formation . ".";
    echo "<p>" . $presentation . "</p>";
    $presentation .= " J'apprends PHP.";
    echo "<p>" . $presentation . "</p>";

    $note = 12;
    $Note = 16;
    echo "<p>La valeur de la variable \$note est : " . $note . "</p>";
    echo "<p>La valeur de la variable \$Note est : " . $Note . "</p>";
    ?>
</body>
</html>
