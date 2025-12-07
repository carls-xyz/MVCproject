<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Parc Activités' ?></title>
    <link rel="stylesheet" href="<?= $base_url ?>/css/style.css">
</head>
<body>

<header>
    <h1>RESERVATION ACTIVITE</h1>
    <nav class="nav">
        <a href="<?= $base_url ?>/activity">Activités</a>
        <a href="<?= $base_url ?>/reservation">Réservations</a>
        <a href="<?= $base_url ?>/user">Mon compte</a>
    </nav>
</header>

<main>
    <?= $content ?> 
</main>

</body>
</html>