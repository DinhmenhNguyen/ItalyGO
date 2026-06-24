<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'beheer') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];

    $sql = "INSERT INTO Bestemmingen (naam, beschrijving, prijs, afbeelding) VALUES (:naam, :beschrijving, :prijs, :afbeelding)";

    $statement = $pdo->prepare($sql);

    $statement->bindParam(':naam', $naam);
    $statement->bindParam(':beschrijving', $beschrijving);
    $statement->bindParam(':prijs', $prijs);
    $statement->bindParam(':afbeelding', $afbeelding);

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
            <form action="" method="post">
                <label>
                    <h2>Naam</h2>
                    <input type="text" name="naam" required>
                </label>
                <label>
                    <h2>Beschrijving</h2>
                    <input type="text" name="beschrijving" required>
                </label>
                <label>
                    <h2>Prijs</h2>
                    <input type="text" name="prijs" required>
                </label>
                <label>
                    <h2>Afbeelding</h2>
                    <input type="text" name="afbeelding">
                </label>

                <div>
                    <button type="submit">Voeg toe</button>
                    <a href="beheer.php">Terug</a>
                </div>
            </form>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>