<?php
session_start();
include('database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'beheer') {
    header("Location: login.php");
    exit();
}

$deleteId = $_GET['id'];

$deletesql = "DELETE FROM Bestemmingen WHERE id = :id";
$statement = $pdo->prepare($deletesql);
$statement->bindParam(':id', $deleteId);
$statement->execute();

header('Location: /beheer.php');
