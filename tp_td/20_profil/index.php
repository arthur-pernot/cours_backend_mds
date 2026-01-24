<?php
// exo14_cartes_profils.php
$profils = [
  ["prenom" => "Alice", "metier" => "Designer", "ville" => "Lyon"],
  ["prenom" => "Bob", "metier" => "Développeur", "ville" => "Paris"],
  ["prenom" => "Chloé", "metier" => "Étudiante", "ville" => "Nantes"],
  ["prenom" => "David", "metier" => "Chef de projet", "ville" => "Lille"],
];
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 14 — Cartes profils</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .grid { display:grid; grid-template-columns: repeat(2, 1fr); gap: 12px; max-width: 860px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 14px; }
    .muted { color:#666; }
  </style>
</head>
<body>
  <h1>Profils</h1>

  <div class="grid">
    <?php
      // TODO:
      // - Pour chaque profil, afficher une card:
      //   <div class="card">
      //     <h2>Prénom</h2>
      //     <div class="muted">Métier — Ville</div>
      //   </div>
    ?>
  </div>
</body>
</html>
