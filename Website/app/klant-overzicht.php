<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'klant') {
    header("Location: login.php");
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
        <nav>
            <div class="klant-overzicht-header">
                <div>
                    <a href="index.php">← ItalyGO Travel</a>
                    <h2>Mijn account</h2>
                </div>
                <div>
                    <a class="uitlog" href="uitlog.php">
                        ← Uitloggen
                    </a>
                </div>
            </div>
        </nav>

        <section>
            <div>
                <div>
                    <h1>Mijn Reizen</h1>
                    <a href="bestemmingen.php">Nieuwe reis boeken</a>
                </div>
                <div>
                    <?php
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('includes/footer.php');
    ?>
</body>

</html>