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