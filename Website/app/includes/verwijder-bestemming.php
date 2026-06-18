<?php
session_start();
include('database.php');

$deleteId = $_GET['id'];

$deletesql = "DELETE FROM Bestemmingen WHERE id = :id";
$statement = $pdo->prepare($deletesql);
$statement->bindParam(':id', $deleteId);
$statement->execute();

header('Location: /beheer.php');
