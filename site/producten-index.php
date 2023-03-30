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
    <title>Recepten</title>
</head>

<body>
    <?php
    include "header.php";
    include "nav.php";
    ?>

    <main>
        <div class="container">
            <div class="eten">
                <?php foreach ($all_eten as $eten) : ?>
                    <div class="textnaasteten">
                        <h4 class="text"><?php echo $eten["Naam"] ?></h4>
                        <div class="container2">
                            <a href="product.php"><img src="<?php echo $eten["plaatje"] ?>" class="image"></a>
                            <div class="overlay">
                                <p class="text"><?php echo $eten["niveau"] ?></p>
                                <p class="text"><?php echo $eten["tijd"] ?> minuten</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php
    include "footer.php";
    ?>

</body>

</html>