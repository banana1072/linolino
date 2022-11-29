<?php

require_once("common.php");

try {

    $title = $_POST["title"];
    $content = $_POST["content"];
    $id = $_POST["id"];
    $sql = "UPDATE columns SET title=:title,content=:content WHERE id=".$id;

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":title", $title, PDO::PARAM_STR);
    $stmt->bindValue(":content", $content, PDO::PARAM_STR);

$stmt->execute();
    header("Location: list.php");
    exit;
} catch (Exception $e) {
    echo $e->getMessage();
}
