<?php
session_start();
include('includes/database.php');


if (isset($_POST['wachtwoord-vergeten'])) {

    $naam = $_POST['wachtwoord-vergeten'];

    $sql = "SELECT * FROM Gebruikers WHERE gebruikersnaam = :username";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":username", $naam);
    $statement->execute();
    $gebruiker = $statement->fetch();

    if ($gebruiker) {
        if ($naam === $gebruiker['gebruikersnaam']) {
            echo $gebruiker['wachtwoord'];
        } else {
            echo "Verkeerde naam";
        }
    } else {
        echo "niks";
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
        <section>
            <div>
                <form action="" method="POST">
                    <h1>Wachtwoord vergeten?</h1>
                    <input type="text" name="wachtwoord-vergeten" placeholder="gebruikersnaam">
                    <button type="submit">Stuur</button>
                </form>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>