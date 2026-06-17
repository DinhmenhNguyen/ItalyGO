<?php
session_start();
include('database.php');
// get id from travel
$id = $_GET["id"];

// get id from user (uit session)
$userId = $_SESSION['id'];

// instert into boekingen
$sql = "INSERT INTO Boekingen (gebruikers_id, bestemming_id) VALUES (:userId, :id)";
$statement = $pdo->prepare($sql);
$statement->bindParam(':userId',$userId);
$statement->bindParam(':id',$id);
$statement->execute();

header("Location: /klant-overzicht.php");
// redirect user with header location