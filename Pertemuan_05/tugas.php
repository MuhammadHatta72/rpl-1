<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Penjumlahan</title>
</head>

<body>
    <?php
    function Sum($n1, $n2)
    {
        return $n1 + $n2;
    }
    function Everage($n1, $n2)
    {
        return ($n1 + $n2) / 2;
    }
    $number1 = 90;
    $number2 = 80;
    echo "Penjumlahan " . $number1 . " dan " . $number2 . " adalah " . Sum($number1, $number2);
    echo "<br>";
    echo "Rata-rata " . $number1 . " dan " . $number2 . " adalah " . Everage($number1, $number2);
    ?>
</body>

</html>