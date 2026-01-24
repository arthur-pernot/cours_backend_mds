<?php
// exo9_filtre_multiple.php
$produits = [
  ["nom" => "Pâtes", "categorie" => "Alimentation", "prix" => 1.40],
  ["nom" => "Huile d'olive", "categorie" => "Alimentation", "prix" => 8.90],
  ["nom" => "Shampoing", "categorie" => "Hygiène", "prix" => 3.60],
  ["nom" => "Brosse à dents", "categorie" => "Hygiène", "prix" => 2.20],
  ["nom" => "Cahier", "categorie" => "Papeterie", "prix" => 2.50],
  ["nom" => "Stylo", "categorie" => "Papeterie", "prix" => 1.10],
];

// Valeurs par défaut des filtres
$categorie = "Papeterie";
$prixMax = 3.00;

// TODO:
// - Si $_GET["categorie"] existe, mettre à jour $categorie
// - Si $_GET["prixMax"] existe, mettre à jour $prixMax (en float)
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 9 — Filtre multiple</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .wrap { max-width: 820px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; margin-bottom: 16px; }
    .grid { display:grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; align-items:end; }
    label { display:block; font-size: 12px; color:#444; margin-bottom:4px; }
    select, input { width: 100%; padding: 8px; }
    .item { border: 1px solid #eee; border-radius: 10px; padding: 10px; margin: 8px 0; }
    .muted { color:#666; font-size: 13px; }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="card">
      <h1>Filtrer les produits</h1>
      <form method="get" class="grid">
        <div>
          <label>Catégorie</label>
          <select name="categorie">
            <?php
              // TODO:
              // - Afficher les 3 options: Alimentation, Hygiène, Papeterie
              // - Mettre "selected" sur celle correspondant à $categorie
            ?>
          </select>
        </div>
        <div>
          <label>Prix max (€)</label>
          <input type="number" step="0.10" name="prixMax" value="<?= htmlspecialchars((string)$prixMax) ?>">
        </div>
        <div>
          <button type="submit">Appliquer</button>
        </div>
      </form>
    </div>

    <div class="card">
      <h2>Résultats</h2>
      <p class="muted">Critères : catégorie = <strong><?= htmlspecialchars($categorie) ?></strong>, prix ≤ <strong><?= number_format($prixMax, 2, ",", " ") ?> €</strong></p>

      <?php
        // TODO:
        // - afficher tous les produits si:
        //   - ils sont dans la bonne catégorie
        //   - leur prix est inferieur au prix max
        // - Afficher chaque résultat dans:
        //   <div class="item"><strong>NOM</strong> — PRIX € <div class="muted">CAT</div></div>
        // - Bonus: si aucun produit affiché, afficher "Aucun résultat."
      ?>
    </div>
  </div>
</body>
</html>
