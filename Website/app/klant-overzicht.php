<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'klant') {
    header("Location: login.php");
    exit();
}


$userId = $_SESSION['id'];

$sql = "SELECT Boekingen.id, Bestemmingen.naam
        FROM Boekingen
        JOIN Bestemmingen ON Boekingen.bestemming_id = Bestemmingen.id
        WHERE Boekingen.gebruikers_id = :userId";

$statement = $pdo->prepare($sql);
$statement->bindParam(':userId', $userId);

$statement->execute();
$bestemmingen = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('includes/head.php');
    ?>
</head>

<body>
    <?php
    include('includes/header.php');
    ?>

    <main>
        <nav>
            <div class="klant-overzicht-header">
                <div>
                    <a href="index.php">← ItalyGO Travel</a>
                    <h2><?php echo $_SESSION['gebruikersnaam']; ?>'s account</h2>
                </div>
                <div>
                    <a class="uitlog" href="includes/uitlog.php">
                        ← Uitloggen
                    </a>
                </div>
            </div>
        </nav>

        <section>
            <div>
                <div class="klant-overzicht-mijn-reizen">
                    <h1>Mijn Reizen</h1>
                    <a class="button-nieuw-reis" href="bestemmingen.php">Nieuwe reis boeken</a>
                </div>
                <div>
                    <?php

                    foreach ($bestemmingen as $bestemming) {
                        $naam = $bestemming['naam'];
                        $id = $bestemming['id'];

                        echo "<div class='bestemming-klant-overzicht'>";
                        echo "<h1>$naam</h1>";
                        echo "<a href='includes/verwijder-boeking.php?id=$id'>Verwijder</a>";
                        echo "</div>";
                    }

                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>