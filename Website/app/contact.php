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
    <div class="contact-container">
        <h1>Contact</h1>
        <p>Wij helpen je graag met al je vragen over onze Italiaanse reizen.</p>
    </div>
    <section>
        <h1>Stuur ons een bericht</h1>
        <form class="contact-form">
            <input type="text" placeholder="Naam">
            <input type="email" placeholder="E-mail">
            <textarea placeholder="Bericht"></textarea>
            <button type="submit">Verzenden</button>
        </form>
    </section>
    <h1>Neem contact op</h1>
    <p>Wij helpen je graag met al je vragen over onze Italiaanse reizen.</p>
    </div>
    <?php
    include('includes/footer.php');
    ?>
</body>

</html>