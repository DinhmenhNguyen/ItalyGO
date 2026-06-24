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
    <script src="JS/versturen.js"></script>
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
        <div class="search-container">
            <form method="GET" action="bestemmingen.php">
                <input type="text" name="search" placeholder="Zoek naar een bestemming"...>
                <button type="submit">Zoeken</button>
            </form>
        </div>
        <?php
        if (isset($_GET['search'])) {
            $search = "%" . $_GET['search'] . "%";
            $sql = "SELECT * FROM Bestemmingen WHERE naam LIKE :search";
            $statement = $pdo->prepare($sql);
            $statement->bindParam(":search", $search); 
            $statement->execute();
            $bestemmingen = $statement->fetchAll();
        }else{
             $sql = "SELECT * FROM Bestemmingen";

        $statement = $pdo->prepare($sql);

        $statement->execute();

        $bestemmingen = $statement->fetchAll();

        }    

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
            echo "<h1>$naam</h1>";
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
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>