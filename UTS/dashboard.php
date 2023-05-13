<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS RPL ~ Semester 2</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .box {
            border: 3px solid #f1f1f1;
            width: 50%;
            margin-left: 25%;
            margin-top: 10%;
        }

        .btnlogout {
            background-color: #ff841b;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .btnlogout:hover {
            opacity: 0.8;
        }

        h2 {
            text-align: center;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Anda Berhasil Login Sebagai <?= ucfirst($_SESSION['user_login']); ?></h2>
        <div>
            <form action="logout.php" method="post">
                <input type="hidden" name="logout" value="true">
                <button type="submit" class="btnlogout">Logout</button>
            </form>
        </div>
    </div>

</body>

</html>