<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
<header></header>
<main>
  




      <?php if (isset($_SESSION["alert"])): ?>
    <div class="alert alert-<?= $_SESSION["alert"]["type"]; ?> alert-dismissible fade show" role="alert"><?= $_SESSION["alert"]["message"]; ?></div>
        
        <?php unset($_SESSION["alert"]); ?>
      <?php endif; ?>

      <?= $content ?>
  </div>

</main>
</body>
<footer></footer>
</html>
