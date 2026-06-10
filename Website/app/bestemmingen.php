<?php
session_start();

include('includes/database.php');
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
            <div class=bestemmingen-start>
                <h1>
                    Onze bestemmingen
                </h1>
                <p>Kies uit onze zorgvuldig geselecteerde Italiaanse steden</p>
            </div>
        </section>

        <?php
        $sql = "SELECT * FROM Bestemmingen";

        $statement = $pdo->prepare($sql);

        $statement->execute();

        $bestemmingen = $statement->fetchAll();

        $statement->fetchAll();

        foreach ($bestemmingen as $bestemming) {
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
            echo "<div>";
            echo "<img class='bestemmingen-image' src='bestemmingen-images/$afbeelding' alt='Bestemming 1'>";
            echo "<div>";
            echo "<div>";
            echo "<h1>$naam</h1>";
            echo "<p>$beschrijving</p>";
            echo "<span class='bestemmingen-price'>Vanaf €$prijs</span>";
            echo "</div>";
            echo "<div>";
            echo "<a href='booking-info.php'>Meer Info →</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</section>";
        }
        ?>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>