<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 3;

$stmt=$conn->prepare("SELECT * FROM itens WHERE id > :id");
$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($data);