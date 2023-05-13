<?php
session_start();
?>
<!DOCTYPE html>
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

        form {
            border: 3px solid #f1f1f1;
            width: 50%;
            margin-left: 25%;
            margin-top: 10%;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        h2 {
            text-align: center;
        }

        .notice_warning {
            background-color: #fd3824;
            padding: 5px;
            margin-bottom: 10px;
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
    <form action="./func.php" method="post">
        <h2>Login Form With PHP & Mysql</h2>
        <div class="container">
            <?php
            if (isset($_SESSION["message"])) {
            ?>
                <div class="notice_warning">
                    <h3><?= $_SESSION["message"]; ?></h3>
                </div>

            <?php
            }
            ?>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Masukkan Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Masukkan Password" name="password" required>
            <button name="submit" type="submit">Login</button>
        </div>
    </form>

</body>

</html>