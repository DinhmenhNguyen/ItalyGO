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
            <?php
            if (isset($_SESSION['role']) == "") {
                echo "<div>";
            } else if ($_SESSION['role'] == 'beheer') {
                echo " <li>";
                echo "<a class='header-href' href='beheer.php'>Beheer</a>";
                echo "</li>";
            } else if ($_SESSION['role'] == 'klant') {
                echo " <li>";
                echo "<a class='header-href' href='klant-overzicht.php'>Mijn overzicht</a>";
                echo "</li>";
            }

            if (isset($_SESSION['role'])) {
                echo " <li>";
                echo "<a class='uitlog' href='includes/uitlog.php'>← Uitloggen </a>";
                echo "</li>";
            } else {
                echo " <li>";
                echo " <a class='header-href' href='login.php'>Login</a>";
                echo "</li>";
            }
            ?>
        </ul>
        <button class="hamburger" onclick="togglemenu()">
            ≡
        </button>
        <ul id="dropdown" hidden>
            <li>
                <a class="header-href" href="index.php">Home</a>
            </li>
            <li>
                <a class="header-href" href="bestemmingen.php">Bestemmingen</a>
            </li>
            <li>
                <a class="header-href" href="contact.php">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['role']) == "") {
                echo "<div>";
            } else if ($_SESSION['role'] == 'beheer') {
                echo " <li>";
                echo "<a class='header-href' href='beheer.php'>Beheer</a>";
                echo "</li>";
            } else if ($_SESSION['role'] == 'klant') {
                echo " <li>";
                echo "<a class='header-href' href='klant-overzicht.php'>Mijn overzicht</a>";
                echo "</li>";
            }

            if (isset($_SESSION['role'])) {
                echo " <li>";
                echo "<a class='header-href' href='includes/uitlog.php'>← Uitloggen </a>";
                echo "</li>";
            } else {
                echo " <li>";
                echo " <a class='header-href' href='login.php'>Login</a>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</header>