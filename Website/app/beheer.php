<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'beheer') {
    header("Location: login.php");
    exit();
}
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
        <section>
            <div class="alle-bestemmingen-beheer">
                <h1>Alle bestemmingen</h1>
                <a class="voeg-bestemming-button" href="toevoeg-bestemming.php">Voeg een bestemming toe</a>
            </div>
            <div>
                <?php
                $sql = "SELECT * FROM Bestemmingen";

                $statement = $pdo->prepare($sql);

                $statement->execute();

                $bestemmingen = $statement->fetchAll();

                $statement->fetchAll();

                foreach ($bestemmingen as $bestemming) {
                    $id = $bestemming['id'];
                    $naam = $bestemming['naam'];
                    $beschrijving = $bestemming['beschrijving'];
                    $prijs = $bestemming['prijs'];
                    $afbeelding = $bestemming['afbeelding'];

                    if ($afbeelding == "") {
                        $afbeelding = "https://via.placeholder.com/400x300?text=Geen+Afbeelding";
                    } else {
                        $afbeelding = $afbeelding;
                    }

                    echo "<section class='bestemmingen-section'>";
                    echo "<div class='bestemmingen-card'>";
                    echo "<div class='bestemmingen-container'>";
                    echo "<img class='bestemmingen-image' src='bestemmingen-images/$afbeelding' alt='Bestemming 1'>";
                    echo "</div>";
                    echo "<div class='bestemmingen-info'>";
                    echo "<div class='naam-verwijder'>";
                    echo "<h1>$naam</h1>";
                    echo "<a class='verwijder-knop' href='includes/verwijder-bestemming.php?id=$id'>Verwijder</a>";
                    echo "</div>";
                    echo "<p>$beschrijving</p>";
                    echo "<div class='prijs-edit-container'>";
                    echo "<span>Vanaf €$prijs</span>";
                    echo "<a class='edit-knop' href='aanpassen-bestemming.php?id=$id'>Edit</a>";
                    echo "</div>";
                    echo "<div class='bestemmingen-link-button-container'>";
                    echo "<a class='bestemmingen-link-button' href='booking-info.php?id=$id'>Meer Info →</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</section>";
                }
                ?>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>