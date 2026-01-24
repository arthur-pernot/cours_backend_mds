<?php
$panier = [
  ["nom" => "Livre", "prix" => 12.00, "qte" => 2],
  ["nom" => "Stylo", "prix" => 1.50, "qte" => 3],
  ["nom" => "Carnet", "prix" => 4.90, "qte" => 1],
];

$tva = 0.20; // 20%
$totalHT = 0.0;
$totalTVA = 0.0;
$totalTTC = 0.0;

// TODO:
// - Calculer $totalHT = somme(prix * qte)
// - Calculer $totalTVA = $totalHT * $tva
// - Calculer $totalTTC = $totalHT + $totalTVA
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 17 — Panier</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 760px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align:left; }
    .right { text-align:right; }
    .totaux { margin-top: 12px; display:grid; grid-template-columns: 1fr 1fr; gap: 8px; max-width: 360px; }
    .pill { background:#f2f2f2; padding: 8px 10px; border-radius: 10px; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Panier</h1>

    <table>
      <thead>
        <tr><th>Article</th><th class="right">Prix</th><th class="right">Qté</th><th class="right">Sous-total</th></tr>
      </thead>
      <tbody>
        <?php
          // TODO:
          // - Afficher les lignes du panier
          // - Sous-total = prix * qte
          // - Format: number_format(..., 2, ",", " ")
        ?>
      </tbody>
    </table>

    <div class="totaux">
      <div class="pill">Total HT</div>
      <div class="pill right"><?php /* TODO: afficher $totalHT */ ?></div>

      <div class="pill">TVA (<?= (int)($tva*100) ?>%)</div>
      <div class="pill right"><?php /* TODO: afficher $totalTVA */ ?></div>

      <div class="pill"><strong>Total TTC</strong></div>
      <div class="pill right"><strong><?php /* TODO: afficher $totalTTC */ ?></strong></div>
    </div>
  </div>
</body>
</html>
