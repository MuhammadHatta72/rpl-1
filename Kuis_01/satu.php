<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Pemograman PHP Ke-1</title>
</head>

<body>
    <h1>Menampilkan dan Menambahkan Data Customer</h1>
    <?php

    $dataCustomer = ["Widlhan", "Anawati", "Tipul"];
    ?>
    <h2>Data belum ditambah</h2>
    <ul>
        <?php
        foreach ($dataCustomer as $key) {
            echo "<li>" . $key . "</li>";
        }
        ?>
    </ul>

    <?php
    array_push($dataCustomer, "Nasirin");
    ?>
    <h2>Data telah ditambah</h2>
    <ul>
        <?php
        foreach ($dataCustomer as $key) {
            echo "<li>" . $key . "</li>";
        }
        ?>
    </ul>
</body>

</html>