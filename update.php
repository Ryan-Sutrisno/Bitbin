<?php
include "connection.php";

$id = $_GET["id"];
$content = $_POST["update_content"];

$stmt = $conn->prepare("UPDATE pastes SET content = :content WHERE id = :id");
$stmt->bindParam(":content", $content);
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: paste.php?id=" . $id);
?>