<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'klant') {
    header("Location: login.php");
}

$userId = $_SESSION['id'];

$sql = "SELECT Boekingen.id, Bestemmingen.naam
        FROM Boekingen
        JOIN Bestemmingen ON Boekingen.bestemming_id = Bestemmingen.id
        WHERE Boekingen.gebruikers_id = $userId";

$statement = $pdo->prepare($sql);

$statement->execute();
$bestemmingen = $statement->fetchAll();
$statement->fetchAll();

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
                    <a class="uitlog" href="uitlog.php">
                        ← Uitloggen
                    </a>
                </div>
            </div>
        </nav>

        <section>
            <div>
                <div>
                    <h1>Mijn Reizen</h1>
                    <a href="bestemmingen.php">Nieuwe reis boeken</a>
                </div>
                <div>
                    <?php

                    foreach ($bestemmingen as $bestemming) {
                        $naam = $bestemming['naam'];

                        echo "<div>";
                        echo "<h1>$naam</h1>";
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