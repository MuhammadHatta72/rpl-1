<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Pemograman PHP Ke-3</title>
</head>

<body>
    <h1>Menampilkan Inputan Sesuai yang Dimasukkan</h1>
    <form action="/Kuliah/RPL/Kuis_01/tiga.php" method="post">
        <input type="text" name="name" placeholder="Masukkan Nama">
        <input type="text" name="kelas" placeholder="Masukkan Kelas">
        <input type="submit" value="Submit">
    </form>

    <h2>Data Masukkan</h2>
    <?php
    if (strlen($_POST["name"]) > 0 || strlen($_POST["kelas"]) > 0) {
    ?>
        <table border="1" cellpadding="10">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $_POST["name"] ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $_POST["kelas"] ?></td>
            </tr>
        </table>
    <?php
    } else {
    ?>
        <h3>Data belum dimasukkan</h3>
    <?php
    }
    ?>
</body>

</html>