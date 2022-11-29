<?php

require_once("common.php");
try {
    // $sql = "INSERT INTO users(username,mail) VALUES('".$name."','".$mail."')";
    // $stmt = $pdo->query($sql);
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = "INSERT INTO columns(title,content) VALUES(:title,:content)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":title", $title, PDO::PARAM_STR);
    $stmt->bindValue(":content", $content, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: list.php");
    exit;
} catch (Exception $e) {
    echo $e->getMessage();
}
