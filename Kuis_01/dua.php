<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Pemograman PHP Ke-2</title>
</head>

<body>
    <h1>Menampilkan Bilangan Genap dan Ganjil dari 1 sampai 20</h1>
    <h2>Menampilkan Bilangan Genap dari 1 sampai 20</h2>
    <?php
    for ($i = 0; $i < 20; $i++) {
        if (($i % 2) == 0) {
            echo $i . ", ";
        }
    }
    ?>

    <h2>Menampilkan Bilangan Ganjil dari 1 sampai 20</h2>
    <?php
    for ($i = 0; $i < 20; $i++) {
        if (($i % 2) != 0) {
            echo $i . ", ";
        }
    }
    ?>
</body>

</html>