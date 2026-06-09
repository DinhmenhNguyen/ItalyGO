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
    <?php
    include('includes/head.php');
    ?>
</head>

<body>
    <?php
    include('includes/header.php');
    ?>

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