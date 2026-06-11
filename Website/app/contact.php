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
    <div class="contact-info">
        <h2>Contactgegevens</h2>
        <p><strong>Telefoon:</strong> +31 123 456 789</p>
        <p><strong>E-mail:</strong> info@italygo.nl</p>
        <p><strong>Adres:</strong> Italiëweg 1, 1234 AB Rome, Italië</p>
        <p><strong>Openingstijden:</strong> Ma-Vr: 09:00 - 18:00</p>
    </div>
    </section>
    <?php
    include('includes/footer.php');
    ?>
</body>

</html>