<?php
session_start();
include('includes/database.php');

if (isset($_POST["username"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Gebruikers WHERE gebruikersnaam = :username";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":username", $username);
    $statement->execute();
    $gebruiker = $statement->fetch();

    if ($gebruiker) {
        if ($password === $gebruiker["wachtwoord"]) {

            $role = $gebruiker["role"];
            $id = $gebruiker['id'];

            $_SESSION['gebruikersnaam'] = $username;
            $_SESSION['role'] = $role;
            $_SESSION['id'] = $id;

            if ($role == 'beheer') {
                header("Location: beheer.php");
            } else {
                header("Location: klant-overzicht.php");
            }
        } else {
            echo "wachtwoord klopt niet";
        }
    } else {
        echo "gebruiker is niet aanwezig";
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
                    <input class="login-input" type="password" id="password" name="password" placeholder="•••••" required>

                    <button class="login-button" type="submit">Login</button>
                    <a class="login-link" href="account-aanmaken.php">Account aanmaken</a>
                    <a class="login-link" href="wachtwoord-vergeten.php">Wachtwoord vergeten</a>
                </form>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>