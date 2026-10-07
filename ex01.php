<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1 — TP 02 PHP</title>
</head>
<body>

    <h1>Exercice 1 : Notions de base PHP</h1>

    <?php
    // 1. Commentaire sur une ligne : Affichage du message de bienvenue
    echo "Bienvenue dans mon TP PHP<br>";

    /*
      2. Commentaire sur plusieurs lignes :
      Affichage des informations personnelles fictives
      (Nom, Prénom et Groupe)
    */
    echo "Nom : El Amrani<br>";
    echo "Prénom : Mehdi<br>";
    echo "Groupe : G1<br>";
    ?>

    <!-- 3. Affichage avec la syntaxe courte (short echo tag) -->
    <p><?= "Ceci est ma dernière phrase affichée grâce à la syntaxe courte PHP." ?></p>

</body>
</html>