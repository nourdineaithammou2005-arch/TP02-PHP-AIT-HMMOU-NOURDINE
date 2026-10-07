<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03 — Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 : Constantes, Calculs et TVA</h1>

    <?php
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");
    $prixUnitaireHT = 60;
    $quantite = 3;
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * (TAUX_TVA / 100);
    $totalTTC = $totalHT + $montantTVA;
    $fraisLivraison = 15;
    $montantFinal = $totalTTC;
    $montantFinal += $fraisLivraison;

    echo "<h2>Récapitulatif de la commande</h2>";
    echo "<ul>";
    echo "<li>Prix unitaire HT : " . $prixUnitaireHT . " " . DEVISE . "</li>";
    echo "<li>Quantité : " . $quantite . "</li>";
    echo "<li><strong>Total HT : " . $totalHT . " " . DEVISE . "</strong></li>";
    echo "<li>TVA (" . TAUX_TVA . "%) : " . $montantTVA . " " . DEVISE . "</li>";
    echo "<li>Total TTC : " . $totalTTC . " " . DEVISE . "</li>";
    echo "<li>Frais de livraison : " . $fraisLivraison . " " . DEVISE . "</li>";
    echo "<li><strong>Montant final à payer : " . $montantFinal . " " . DEVISE . "</strong></li>";
    echo "</ul>";

    if (defined("TAUX_TVA")) {
        echo "<p style='color: green;'><em>Vérification : La constante TAUX_TVA est bien définie.</em></p>";
    }
    ?>
</body>
</html>