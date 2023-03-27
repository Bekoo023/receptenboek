<?php

require 'database.php';

$sql = "SELECT * FROM colombia";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_eten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Colombiaans eten</title>
</head>

<body>
    <header>
        <div class="bovenheader">
            <p class="bovenheadertext">Colombiaans eten is de 24ste lekkerste eten van de wereld.</p>
            <p class="bovenheadertext">Colombiaans eten is buiten Colombia het bekendst in Amerika.</p>
            <p class="bovenheadertext">Colombiaans eten wordt steeds bekender in europa.</p>
        </div>
        <div class="onderheader">
            <h1>Colombiaans eten.</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <main>
        <?php foreach ($all_eten as $eten) : ?>
            <p><?php echo $eten["Naam"] ?></p>
            <p><?php echo $eten["niveau"] ?></p>
            <p><?php echo $eten["tijd"] ?> minuten</p>
            <img src="<?php echo $eten["plaatje"] ?>">
        <?php endforeach; ?>
    </main>
    <footer>
        <p class="footertext">Bekir Sezgin</p>
    </footer>
</body>

</html>