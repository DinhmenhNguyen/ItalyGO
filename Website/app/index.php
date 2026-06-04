<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Fjalla+One&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="CSS/index.css">
    <script src="JS/index.js"></script>
    <title>ItalyGO</title>
    <link rel="icon" type="image/x-icon" href="Images/white-bus-icon.png">
</head>

<body>
    <header>
        <div class="header-container">
            <img class="logo" src="Images/ItalyGO.png">
            <ul class="header-links">
                <li>
                    <a class="header-href" href="index.php">Home</a>
                </li>
                <li>
                    <a class="header-href" href="bestemmingen.php">Bestemmingen</a>
                </li>
                <li>
                    <a class="header-href" href="contact.php">Contact</a>
                </li>
                <li>
                    <a class="header-href" href="booking.php">Booking</a>
                </li>
                <li>
                    <a class="header-href" href="login.php">Login</a>
                </li>
            </ul>
            <span class="hamburger">
                ≡
            </span>
        </div>
    </header>

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
                    <a href="bestemmingen.html">Bekijk bestemmingen</a>
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