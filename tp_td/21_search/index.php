<?php
// exo15_recherche.php
$produits = ["Pomme", "Poire", "Banane", "Mangue", "Fraise", "Ananas", "Citron"];

$q = ""; // terme de recherche

// TODO:
// - Lire $_GET["q"] si présent
// - Afficher uniquement les produits contenant $q (insensible à la casse)
// Indice: strtolower(), strpos()
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 15 — Recherche</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 720px; }
    input { padding: 8px; width: 100%; }
    .item { padding: 8px 10px; border: 1px solid #eee; border-radius: 10px; margin-top: 8px; }
    .muted { color:#666; font-size: 13px; }
  </style>
</head>
<body>
  <div class="card">
    <h1>Recherche de fruits</h1>

    <form method="get">
      <input name="q" placeholder="Tape un morceau du nom (ex: an)" value="<?= htmlspecialchars($q) ?>">
      <button type="submit">Rechercher</button>
    </form>

    <p class="muted">Résultats :</p>

    <?php
      // TODO:
      // - Si $q est vide: afficher "Tape un terme de recherche."
      // - Sinon, afficher les éléments correspondants dans <div class="item">...</div>
      // - Bonus: si aucun résultat, afficher "Aucun résultat."
    ?>
  </div>
</body>
</html>
