<?php
$articles = [
    ["title" => "Php VS Python", "content" => "PHP Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "image" => "1-php-vs-python.jpg"],
    ["title" => "React ou React Native", "content" => "REACT Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "image" => "2-react-vs-react-native.jpg"],
    ["title" => "Les meilleurs outils devops", "content" => "DEVOPS Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", "image" => "3-devops.png"],
];


function getArticles(PDO $pdo, int $limit = null): array
{
    $sql = "SELECT * FROM articles ORDER BY id DESC";
    if ($limit) {
        $sql .= " LIMIT :limit";
    }


    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }

    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}
