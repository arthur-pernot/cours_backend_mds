<?php
// exo11_menu.php
$pages = [
  ["slug" => "accueil", "label" => "Accueil"],
  ["slug" => "apropos", "label" => "À propos"],
  ["slug" => "contact", "label" => "Contact"],
];

$pageActive = "accueil";

// TODO:
// - Lire $_GET["page"] si présent
// - Vérifier que la valeur correspond à un slug existant dans $pages
// - Si oui, mettre à jour $pageActive, sinon garder "accueil"
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 11 — Menu</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .nav { display:flex; gap: 10px; margin-bottom: 18px; }
    .nav a { text-decoration:none; padding: 8px 12px; border: 1px solid #ddd; border-radius: 10px; color:#111; }
    .nav a.active { background:#111; color:#fff; border-color:#111; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; max-width: 720px; }
  </style>
</head>
<body>

  <nav class="nav">
    <?php
      // TODO:
      // - Boucler sur $pages
      // - Générer <a href="?page=slug">label</a>
      // - Ajouter class "active" si slug === $pageActive
    ?>
  </nav>

  <div class="card">
    <h1>Page: <?= htmlspecialchars($pageActive) ?></h1>

    <?php
      // TODO:
      // - Afficher un contenu différent selon $pageActive (if/elseif)
      //   accueil => "Bienvenue sur le site"
      //   apropos => "Ce site est un exercice PHP"
      //   contact => "Contactez-nous: contact@example.com"
    ?>
  </div>

</body>
</html>
