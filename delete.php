<?php
include_once __DIR__. "/init.php";

$myyd=$_GET["id"];

$stmt=$pdo->prepare("DELETE FROM articoli WHERE id =?");
$stmt->execute([$myyd]);
header("location:admin.php");

?>