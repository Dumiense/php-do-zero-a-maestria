<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 4;
$nome = "teclado multilser";
$descricao = "teclado novo sem caixa";

$stmt = $conn->prepare("UPDATE itens SET nome= :nome, descricao = :descricao WHERE id= :id");


$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();