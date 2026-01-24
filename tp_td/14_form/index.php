<?php
// exo5_profil_post.php
$prenom = "";
$age = "";
$bio = "";
$erreurs = [];

// TODO:
// - Si la requête est POST (indice: $_SERVER["REQUEST_METHOD"])
// - Récupérer prenom/age/bio depuis $_POST
// - Valider: prenom non vide, age nombre >= 0
// - Remplir $erreurs si nécessaire
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Exo 5 — Profil (POST)</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 24px; }
    .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; max-width: 900px; }
    .card { border: 1px solid #ddd; border-radius: 12px; padding: 16px; }
    .error { color: #8a0000; background: #ffe1e1; padding: 10px; border-radius: 8px; margin-bottom: 10px; }
    textarea { width: 100%; height: 90px; }
    input { width: 100%; padding: 6px; }
  </style>
</head>
<body>
  <h1>Profil utilisateur</h1>

  <div class="grid">
    <div class="card">
      <h2>Formulaire</h2>

      <?php if (!empty($erreurs)): ?>
        <div class="error">
          <strong>Erreurs :</strong>
          <ul>
            <?php
              // TODO: afficher chaque erreur dans un <li>
            ?>
          </ul>
        </div>
      <?php endif; ?>

      <form method="post">
        <label>Prénom</label>
        <input name="prenom" value="<?= htmlspecialchars($prenom) ?>">

        <label>Âge</label>
        <input name="age" value="<?= htmlspecialchars($age) ?>">

        <label>Bio</label>
        <textarea name="bio"><?= htmlspecialchars($bio) ?></textarea>

        <button type="submit">Envoyer</button>
      </form>
    </div>

    <div class="card">
      <h2>Rendu</h2>

      <?php
        // TODO:
        // - Si POST ET pas d'erreurs: afficher une carte avec prénom, âge, bio
        // - Sinon: afficher un texte "Remplissez le formulaire."
      ?>
    </div>
  </div>
</body>
</html>
