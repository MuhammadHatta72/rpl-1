<?php
$largest_city = [
    "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Kairo", "London"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Largest Cities - Muhammad Hatta</title>
</head>

<body>
    <h2>The Largest Cities - Muhammad Hatta</h2>
    <h3>List Default Largest Cities</h3>
    <p>
        <?php
        for ($i = 0; $i < count($largest_city); $i++) {
        ?>
            <?= $largest_city[$i]; ?>,
        <?php
        }
        ?>
    </p>

    <h3>List Array Push Largest Cities</h3>
    <p>
        <?php
        array_push($largest_city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
        for ($i = 0; $i < count($largest_city); $i++) {
        ?>
            <?= $largest_city[$i]; ?>,
        <?php
        }
        ?>
    </p>

    <h3>List Sort Largest Cities</h3>
    <p>
        <?php
        $sort_largest_city = sort($largest_city);
        for ($i = 0; $i < count($largest_city); $i++) {
        ?>
            <?= $largest_city[$i]; ?>,
        <?php
        }
        ?>
    </p>

</body>

</html>