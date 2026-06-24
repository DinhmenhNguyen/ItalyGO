<?php
session_start();
include('includes/database.php');

if(isset($_POST["username"])){

    $gebruikersnaam = $_POST['username'];
    $wachtwoord = $_POST['password'];
    
    if (isset($gebruikersnaam) && isset($wachtwoord) !== "") {
        $sql = "INSERT INTO Gebruikers (gebruikersnaam, wachtwoord) VALUES ('$gebruikersnaam', '$wachtwoord')";
        
    
        $statement = $pdo->prepare($sql);
    
        $statement->execute();
    
        header("Location: login.php");
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
        <section class="account-aanmaken-section">
            <div class="account-aanmaken-container">
                <h1>Account aanmaken</h1>
                <form action="" method="POST" class="account-aanmaken-form">
                    <label for="username">Username:</label>
                    <input class="account-aanmaken-input" type="text" name="username" placeholder="gebruikersnaam" required>
                    <label for="password">Password:</label>
                    <input class="account-aanmaken-input" type="password" name="password" placeholder="••••••••" required>
                    <button class="account-aanmaken-button" type="submit">Account aanmaken</button>
                </form>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>