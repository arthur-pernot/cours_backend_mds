<?php
// exo12_couleur_aleatoire.php
$couleur = "#000000";

// TODO:
// - Générer une couleur hex aléatoire sous forme "#RRGGBB"
// Indices possibles:
// - random_int(0, 255) pour R, G, B
// - convertir en hex avec dechex
// - s'assurer d'avoir 2 caractères par composante (ex: "0A")
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 12 — Couleur aléatoire</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 720px; }
    .swatch { height: 140px; border-radius: 12px; border: 1px solid #ddd; }
    .row { display:flex; gap: 16px; align-items:center; margin-top: 12px; }
    .mono { font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, "Liberation Mono", monospace; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Couleur aléatoire</h1>

    <div class="swatch" style="background: <?= htmlspecialchars($couleur) ?>;"></div>

    <div class="row">
      <div>Couleur :</div>
      <div class="mono"><?= htmlspecialchars($couleur) ?></div>
      <div>
        <a href="">Régénérer</a>
      </div>
    </div>
  </div>
</body>
</html>
