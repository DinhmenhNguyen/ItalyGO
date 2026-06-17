<?php
session_start();
include('includes/database.php');

$bestemmingId = $_GET['id'];

// Als het formulier is ingediend, werk dan het gerecht bij in de database.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = $_POST['gebruikersnaam'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];

    // SQL UPDATE query om de bestaande rij te wijzigen.
    $updatesql = "UPDATE Bestemmingen SET gebruikersnaam =:naam, beschrijving = :beschrijving, prijs = :prijs, afbeelding = :afbeelding WHERE id = :id";
    $statement = $pdo->prepare($updatesql);
    $statement->bindParam(':naam', $naam);
    $statement->bindParam(':beschrijving', $beschrijving);
    $statement->bindParam(':prijs', $prijs);
    $statement->bindParam(':afbeelding', $afbeelding);
    $statement->bindParam(':id', $bestemmingId);
    $statement->execute();
}

// Laad het huidige gerecht om de velden vooraf in te vullen in het formulier.
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
        <h1>Bestemming informatie</h1>
        <form>
            <section class='bestemmingen-section'>
                <div class='bestemmingen-card'>
                    <div class='bestemmingen-container'>
                        <img class='bestemmingen-image' src='bestemmingen-images/<?php echo $bestemming['afbeelding']; ?>' alt='Bestemming 1'>
                    </div>
                    <div class='bestemmingen-info'>
                        <h1><?php echo $bestemming['naam']; ?></h1>
                        <p><?php echo $bestemming['beschrijving']; ?></p>
                        <span class='bestemmingen-price'>Vanaf €<?php echo $bestemming['prijs']; ?></span>
                        <div class='bestemmingen-link-button-container'>
                            <a class='bestemmingen-link-button' href='includes/book.php?id=<?php echo $bestemming["id"] ?>'>Kopen →</a>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>