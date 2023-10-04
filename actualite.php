<?php
require_once __DIR__ . "/lib/article.php";
$id = $_GET["id"];
$article = $articles[$id];

require_once __DIR__ . "/lib/menu.php";
$mainMenu["actualite.php"] = ["head_title" => $article["title"], "meta_description" => substr($article["content"], 0, 250), "exclude" => true];


require_once __DIR__ . "/templates/header.php";


?>



<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="./uploads/articles/<?= $article["image"] ?>" class="d-block mx-lg-auto img-fluid" alt="<?= $article["title"] ?>" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $article["title"] ?></h1>
        <p class="lead"><?= $article["content"] ?></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
    </div>
</div>



<?php require_once __DIR__ . "/templates/footer.php"; ?>