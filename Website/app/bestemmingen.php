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
        $sql = "SELECT * FROM ItalyGO";

        $statement = $pdo->prepare($sql);

        $statement->execute();

        $bestemmingen = $statement->fetchAll();

        $statement->fetchAll();

        foreach ($bestemmingen as $bestemming) {
            $naam = $bestemming['naam'];
            $beschrijving = $bestemming['beschrijving'];
            $prijs = $bestemming['prijs'];
            $afbeelding = $bestemming['afbeelding'];
        }
        ?>
        <section class="bestemmingen-section">
            <div>
                <img class="bestemmingen-image" src="Images/<?php echo $afbeelding; ?>" alt="Bestemming 1">
                <div>
                    <div>
                        <h1><?php echo $naam; ?></h1>
                        <p><?php echo $beschrijving; ?></p>
                        <span class="bestemmingen-price">Vanaf €<?php echo $prijs; ?></span>
                    </div>
                    <div>

                        <a href="bestemmingen.html">Meer Info →</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-intro">
                <div class="footer-intro-container">
                    <img class="logo-footer" src="Images/ItalyGO.png">
                    <h1>
                        ItalyGO Travel
                    </h1>
                </div>
                <p>
                    Ontdek de schoonheid van Italië met onze luxe busreizen. Comfort, veiligheid en authentieke
                    Italiaanse ervaringen.
                </p>
            </div>
            <div class="footer-contact">
                <h1>
                    Contact
                </h1>
                <h2>
                    +31 20 123 4567
                </h2>
                <h2>
                    info@italygo.nl
                </h2>
                <h2>
                    Amsterdam, Nederland
                </h2>
            </div>
        </div>
        <div class="rechten-footer">
            <p>
                © 2026 ItalyGO Travel. Alle rechten voorbehouden.
            </p>
        </div>
    </footer>
</body>

</html>