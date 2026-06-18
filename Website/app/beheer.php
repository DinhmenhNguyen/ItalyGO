<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'beheer') {
    header("Location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];

    // SQL-DELETE query om het gerecht uit de tabel te verwijderen.
    $sql = "DELETE FROM Gerechten WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $deleteId);
    $statement->execute();
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
            <h1>Alle bestemmingen</h1>
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
                    echo "<div>";
                    echo "<h1>$naam</h1>";
                    echo "<button type='submit' class='btn-item-action btn-delete' title='Verwijderen' onclick=\"return confirm('Weet je zeker dat je dit gerecht wilt verwijderen?');\">Verwijder</button>";
                    echo "</div>";
                    echo "<p>$beschrijving</p>";
                    echo "<span class='bestemmingen-price'>Vanaf €$prijs</span>";
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