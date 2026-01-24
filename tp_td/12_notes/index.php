<?php
$eleves = [
  ["prenom" => "Alice", "note" => 15],
  ["prenom" => "Bob", "note" => 9],
  ["prenom" => "Chloé", "note" => 12],
  ["prenom" => "David", "note" => 7],
];

$seuil = 10;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 3 — Notes</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    table { border-collapse: collapse; width: 520px; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    .good { background:#e7f7e7; }
    .bad { background:#ffe1e1; }
  </style>
</head>
<body>
  <h1>Notes</h1>

  <table>
    <thead>
      <tr><th>Prénom</th><th>Note</th><th>Statut</th></tr>
    </thead>
    <tbody>
      <?php
        // TODO: Pour chaque élève:
        // - afficher une ligne <tr> avec prénom et note
        // - si note >= $seuil => statut "Réussi" et ajouter class good sur <tr>
        // - sinon => statut "Échec" et class bad
      ?>
    </tbody>
  </table>
</body>
</html>
