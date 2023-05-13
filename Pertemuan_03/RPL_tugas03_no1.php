<?php

$weather = [
    "rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather This Month - Muhammad Hatta</title>
</head>

<body>
    <h2>Weather This Month - Muhammad Hatta</h2>
    <p>We've seen all kinds of weather this month. At the beginning of the month, we had <?= $weather[6]; ?> and <?= $weather[6]; ?>. Then came <?= $weather[1]; ?> with a few <?= $weather[2]; ?> and some <?= $weather[0]; ?>. At least we didn't get any <?= $weather[3]; ?> or <?= $weather[4]; ?>.</p>
</body>

</html>