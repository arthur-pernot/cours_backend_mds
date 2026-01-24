<?php
// exo8_filtre_prix.php
$produits = [
  ["nom" => "Câble USB-C", "prix" => 9.99],
  ["nom" => "Chargeur", "prix" => 24.90],
  ["nom" => "Tapis de souris", "prix" => 12.50],
  ["nom" => "Casque", "prix" => 59.00],
  ["nom" => "Hub USB", "prix" => 19.90],
];

$seuil = 20.00;
$affiches = 0; // compteur
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 8 — Filtre prix</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 720px; }
    .pill { display:inline-block; padding: 4px 10px; border-radius: 999px; background:#f2f2f2; }
    table { border-collapse: collapse; width: 100%; margin-top: 12px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    .cheap { background: #e7f7e7; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Produits à moins de <?= number_format($seuil, 2, ",", " ") ?> €</h1>

    <p class="pill">
      Affichés :
      <?php
        // TODO: afficher la variable $affiches (après l’avoir calculée)
      ?>
    </p>

    <table>
      <thead>
        <tr><th>Produit</th><th>Prix</th></tr>
      </thead>
      <tbody>
        <?php
          // TODO:
          // - Si le prix inferieur au seuil : afficher une ligne <tr class="cheap"> ... </tr>
          // incrémenter $affiches à chaque produit affiché
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
