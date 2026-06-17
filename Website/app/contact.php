<?php
session_start();
include('includes/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<script src="maps.js"></script>
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
        <div class="contact-form-container">
            <div class="contact-form-section">
                <h1>Stuur ons een bericht</h1>
                <form class="contact-form">
                    <input type="text" placeholder="Naam">
                    <input type="email" placeholder="E-mail">
                    <textarea placeholder="Bericht"></textarea>
                    <button type="submit">Verzenden</button>
                </form>
            </div>
            <div class="contact-info">
                <h2>Contactgegevens</h2>
                <p><strong>Telefoon:</strong> +31 123 456 789</p>
                <p><strong>E-mail:</strong> info@italygo.nl</p>
                <p><strong>Adres:</strong> Italiëweg 1, 1234 AB Rome, Italië</p>
                <p><strong>Openingstijden:</strong> Ma-Vr: 09:00 - 18:00</p>
            </div>
        </div>
        <div id="map"></div>
    </section>
    <?php
    include('includes/footer.php');
    ?>
    <script>
        initMap();
    </script>
</body>

</html>