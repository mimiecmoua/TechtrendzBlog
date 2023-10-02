<?php
$mainMenu = [
    ["page" => "index.php", "title" => "Accueil", "meta-description" => "TechTrendz, l'actu tech !"],
    ["page" => "actualites.php.", "title" => "Actualités", "meta-description" => "L'histoire du site TechTrendz"],
    ["page" => "a-propos.php", "title" => "A propos", "meta-description" => "Découvrez toutes nos actualités."],
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechTrendz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/images/logo-tech-trendz.png" alt="logo TechTrendz" width="150">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMenu as $key => $menuItem) { ?>
                    <li><a href="<?= $menuItem["page"] ?>" class="nav-link px-2"><?= $menuItem["title"] ?></a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
        <main>