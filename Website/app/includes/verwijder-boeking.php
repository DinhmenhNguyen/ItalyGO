<?php
session_start();
include('database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'klant') {
    header("Location: login.php");
    exit();
}

$deleteId = $_GET['id'];

$deletesql = "DELETE FROM Boekingen WHERE id = :id AND gebruikers_id = :gebruikers_id";
$statement = $pdo->prepare($deletesql);
$statement->bindParam(':id', $deleteId);
$statement->bindParam(':gebruikers_id', $_SESSION['id']);
$statement->execute();

header('Location: /klant-overzicht.php');
