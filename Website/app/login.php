<?php
session_start();

$username = "user";
$password = "password";

if (isset($_POST["username"]) && isset($_POST["password"]) !== "") {
    if ($_POST["username"] == $username && $_POST["password"] == $password) {

        $role = 'beheer';

        $_SESSION['role'] = $role;

        if ($role == 'beheer') {
            header("Location: beheer.php");
        }
    }
}

?>

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
    <link rel="icon" type="image/x-icon" href="Images/white-bus-icon.png">
    <title>ItalyGO</title>
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
        <section class="login-section">
            <div class="login-container">
                <h1>Login</h1>
                <form action="" method="POST" class="login-form">
                    <label for="username">Username:</label>
                    <input class="login-input" type="text" id="username" name="username" placeholder="gebruikersnaam" required>

                    <label for="password">Password:</label>
                    <input class="login-input" type="password" id="password" name="password" placeholder="••••••••" required>

                    <button class="login-button" type="submit">Login</button>
                </form>
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