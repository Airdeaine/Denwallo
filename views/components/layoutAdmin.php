<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= ROOT ?>public/css/design.css">
    <meta name="description" content="<?= $description ?>">
</head>

<body>
    <?php if($view !== './views/pages/users/admin/loginAdminPage.php'): ?>
    <?php require_once("./views/components/navbarAdmin.php");?>
    <?php endif; ?>

    <?= $contenu ?>

    <?php require_once("./views/components/footer.php");?>

</body>

</html>