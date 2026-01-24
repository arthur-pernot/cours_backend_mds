<?php
// exo10_tri_tableau.php
$produits = [
  ["nom" => "Souris", "prix" => 14.90],
  ["nom" => "Clavier", "prix" => 29.90],
  ["nom" => "Écran", "prix" => 129.00],
  ["nom" => "Tapis", "prix" => 7.50],
  ["nom" => "Webcam", "prix" => 39.90],
];

$ordre = "asc"; // asc ou desc

// TODO:
// - Si $_GET["ordre"] existe (asc/desc), mettre à jour $ordre
// - Trier les produits
//   - asc: du moins cher au plus cher
//   - desc: du plus cher au moins cher
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 10 — Tri</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 720px; }
    .row { display:flex; gap: 10px; align-items:center; margin-bottom: 12px; }
    a { text-decoration:none; padding: 6px 10px; border: 1px solid #ddd; border-radius: 999px; color:#111; }
    a.active { background:#111; color:#fff; border-color:#111; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Tri par prix</h1>

    <div class="row">
      <span>Ordre :</span>
      <a href="?ordre=asc" class="<?= $ordre === "asc" ? "active" : "" ?>">Croissant</a>
      <a href="?ordre=desc" class="<?= $ordre === "desc" ? "active" : "" ?>">Décroissant</a>
    </div>

    <table>
      <thead><tr><th>Produit</th><th>Prix</th></tr></thead>
      <tbody>
        <?php foreach ($produits as $p): ?>
          <tr>
            <td><?= htmlspecialchars($p["nom"]) ?></td>
            <td><?= number_format($p["prix"], 2, ",", " ") ?> €</td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
