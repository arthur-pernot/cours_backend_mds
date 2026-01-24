<?php
// exo4_calculatrice_get.php

// Valeurs par défaut
$a = 0;
$b = 0;
$op = "+";
$resultat = null;

// TODO:
// - Lire a, b, op depuis $_GET si présents
// - Calculer $resultat selon l'opération (+, -, *, /)
// - Gérer la division par 0 => afficher "Erreur"
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 4 — Calculatrice (GET)</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 520px; }
    input, select { padding: 6px; }
    .result { margin-top: 12px; padding: 10px; background: #f6f6f6; border-radius: 8px; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Calculatrice (GET)</h1>

    <form method="get">
      <input type="number" name="a" value="<?= htmlspecialchars((string)$a) ?>" step="1">
      <select name="op">
        <option value="+" <?= $op === "+" ? "selected" : "" ?>>+</option>
        <option value="-" <?= $op === "-" ? "selected" : "" ?>>-</option>
        <option value="*" <?= $op === "*" ? "selected" : "" ?>>*</option>
        <option value="/" <?= $op === "/" ? "selected" : "" ?>>/</option>
      </select>
      <input type="number" name="b" value="<?= htmlspecialchars((string)$b) ?>" step="1">
      <button type="submit">Calculer</button>
    </form>

    <div class="result">
      Résultat :
      <?php
        // TODO: afficher $resultat (ou "—" si null)
      ?>
    </div>
  </div>
</body>
</html>
