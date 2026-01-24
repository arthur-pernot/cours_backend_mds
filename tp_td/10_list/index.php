<?php
$fruits = ["Comté", "Roquefort", "Emmental", "Reblochon", "Morbier"];
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 1 — Liste</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 520px; }
    .badge { display:inline-block; padding: 4px 10px; border-radius: 999px; background:#f2f2f2; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Liste de fromages</h1>

    <p class="badge">
      Total :
      <?php
        // TODO: afficher le nombre de fromage
      ?>
    </p>

    <ul>
      <?php
        // TODO: afficher chaque fromage dans un <li>...</li> avec une boucle foreach
      ?>
    </ul>
  </div>
</body>
</html>
