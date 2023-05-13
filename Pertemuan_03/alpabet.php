<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfabet A-Z</title>
</head>

<body>
    <?php
    for ($i = 0; $i < 26; $i++) {
        echo chr(65 + $i);
        if ($i < 25) {
            echo "|";
        }
    }
    ?>

</body>

</html>