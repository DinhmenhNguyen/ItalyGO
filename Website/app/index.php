<?php
session_start();
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
        <section id="landing-page">
            <div class="landing-page-container">
                <div class="black-background-image">
                    <img class="landing-page-image-big" src="Images/italiefoto4.png">
                    <img class="landing-page-image-small" src="Images/italiefotosmall1.png">
                </div>
                <div class="landing-page-introductie">
                    <h1>Ontdek Italië per bus</h1>
                    <h2>Comfortabele reizen naar de mooiste Italiaanse steden</h2>
                    <a href="bestemmingen.html">Bekijk bestemmingen</a>
                </div>
            </div>
        </section>

        <section id="over-ons">
            <div class="over-ons-container">
                <div class="over-ons-introduction-container">
                    <h1 class="over-ons-title">Over ItalyGO Travel</h1>
                    <p class="over-ons-paragraph">
                        Wij bieden luxe en betaalbare busreizen door Italië. Met jarenlange ervaring in het organiseren
                        van onvergetelijke reizen, staat comfort, veiligheid en authentieke Italiaanse cultuur bij ons
                        centraal.
                    </p>
                </div>

                <div class="over-ons-blokje-container">
                    <div class="over-ons-blokje lc">
                        <div class="over-ons-icon-colour-green">
                            <img class="icon" src="Images/white-bus-icon.png">
                        </div>
                        <h2>Luxe comfort</h2>
                        <p>
                            Reis in stijl met onze moderne, comfortabele bussen met alle voorzieningen.
                        </p>
                    </div>

                    <div class="over-ons-blokje vh">
                        <div class="over-ons-icon-colour-red">
                            <img class="icon" src="Images/white-shield-icon.png">
                        </div>
                        <h2>Veiligheid</h2>
                        <p>
                            Professionele chauffeurs en de hoogste veiligheidsnormen voor een zorgeloze reis.
                        </p>
                    </div>

                    <div class="over-ons-blokje ic">
                        <div class="over-ons-icon-colour-yellow">
                            <img class="icon" src="Images/white-heart-icon2.png">
                        </div>
                        <h2>Italiaanse Cultuur</h2>
                        <p>
                            Beleef de echte Italiaanse sfeer met lokale gidsen en authentieke ervaringen.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="populaire-bestemmingen">
            <div class="populaire-bestemmingen-container">
                <div class="populaire-bestemmingen-introduction-container">
                    <h1>Populaire Bestemmingen</h1>
                    <h2>Ontdek onze meest favoriete Italiaanse steden</h2>
                </div>

                <div class="populaire-bestemmingen-images-container">
                    <div class="populaire-bestemmingen-blokje">
                        <img class="populaire-bestemmingen-image" src="Images/Rome.png">
                        <div class="image-text">
                            <h3>Rome</h3>
                            <h4>De eeuwige stad</h4>
                        </div>
                    </div>

                    <div class="populaire-bestemmingen-blokje">
                        <img class="populaire-bestemmingen-image" src="Images/Milaan.png">
                        <div class="image-text">
                            <h3>Milaan</h3>
                            <h4>Mode hoofdstad</h4>
                        </div>
                    </div>

                    <div class="populaire-bestemmingen-blokje">
                        <img class="populaire-bestemmingen-image" src="Images/Como.png">
                        <div class="image-text">
                            <h3>Como</h3>
                            <h4>Prachtige natuur</h4>
                        </div>
                    </div>

                    <div class="populaire-bestemmingen-blokje">
                        <img class="populaire-bestemmingen-image" src="Images/Napels.png">
                        <div class="image-text">
                            <h3>Napels</h3>
                            <h4>Authentieke sfeer</h4>
                        </div>
                    </div>
                </div>

                <div class="populaire-bestemmingen-link-button">
                    <a href="bestemmingen.php">Bekijk bestemmingen</a>
                </div>
            </div>
        </section>

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
    </main>
</body>

</html>