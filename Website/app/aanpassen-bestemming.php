<?php
session_start();
include('includes/database.php');

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'beheer') {
    header("Location: login.php");
}

$bestemmingId = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];

    $updatesql = "UPDATE Bestemmingen SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, afbeelding = :afbeelding WHERE id = :id";
    $statement = $pdo->prepare($updatesql);
    $statement->bindParam(':naam', $naam);
    $statement->bindParam(':beschrijving', $beschrijving);
    $statement->bindParam(':prijs', $prijs);
    $statement->bindParam(':afbeelding', $afbeelding);
    $statement->bindParam(':id', $bestemmingId);
    $statement->execute();
}

$sql = "SELECT * FROM Bestemmingen WHERE id = :id";

$statement = $pdo->prepare($sql);
$statement->bindParam(':id', $bestemmingId);
$statement->execute();
$bestemming = $statement->fetch();

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
            <h1>Aanpassen <?php echo $bestemming['naam']; ?></h1>
            <div>
                <form action="" method="post">
                    <label>
                        <h2>Naam</h2>
                        <input type="text" name="naam" required value="<?php echo $bestemming['naam']; ?>">
                    </label>
                    <label>
                        <h2>Beschrijving</h2>
                        <input type="text" name="beschrijving" required value="<?php echo $bestemming['beschrijving']; ?>">
                    </label>
                    <label>
                        <h2>Prijs</h2>
                        <input type="text" name="prijs" required value="<?php echo $bestemming['prijs']; ?>">
                    </label>
                    <label>
                        <h2>Afbeelding</h2>
                        <input type="text" name="afbeelding" required value="<?php echo $bestemming['afbeelding']; ?>">
                    </label>

                    <div class="button-row">
                        <button type="submit">Aanpassen</button>
                        <a href="beheer.php">Terug</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>