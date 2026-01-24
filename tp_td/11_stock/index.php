<?php
$produit = "Clavier";
$quantite = 3; // changez cette valeur pour tester
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 2 — Stock</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .pill { display:inline-block; padding: 6px 12px; border-radius: 999px; font-weight: bold; }
    .ok { background:#e7f7e7; color:#1f7a1f; }
    .warn { background:#fff5d6; color:#8a5a00; }
    .ko { background:#ffe1e1; color:#8a0000; }
  </style>
</head>
<body>
  <h1>Stock produit</h1>
  <p>Produit : <strong><?= $produit ?></strong></p>
  <p>Quantité : <strong><?= $quantite ?></strong></p>

  <?php
    // TODO:
    // Si quantite inferieure a 10 => afficher "En stock" avec class "pill ok"
    // Si quantite entre 1 et 9 => afficher "Stock faible" avec class "pill warn"
    // Si quantite egale à 0 => afficher "Rupture" avec class "pill ko"
  ?>
</body>
</html>
