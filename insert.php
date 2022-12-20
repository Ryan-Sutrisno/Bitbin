<?php
include "connection.php";

$id = uniqid();
$content = $_POST["content"];
$syntax = $_POST["syntax-highlighting"];

$stmt = $conn->prepare("INSERT INTO pastes (id, content, syntax) VALUES (:id, :content, :syntax)");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":content", $content);
$stmt->bindParam(":syntax", $syntax);
$stmt->execute();

header("Location: paste.php?id=" . $id);
?>