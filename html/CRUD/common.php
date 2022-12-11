<?php
header("X-FRAME-OPTIONS: DENY");
define("HOST", "mysql208.phy.lolipop.lan");
define("DB_NAME", "lLAA1455253-linolino");
define("USER", "LAA1455253");
define("PASS", "Linolino0206");
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
$pdo = "";
try{
  $pdo = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS,$options);
}  catch (PDOException $e) {
  $errorMessage = 'データベースエラー';
}

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
