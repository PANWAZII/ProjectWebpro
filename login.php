<?php
session_start();
include('connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body {
            background-color: rgb(50, 50, 50);
        }

        .box {
            margin-top: 150px;
            margin-bottom: 30px;
            width: 600px;
            height: 550px;
            background-color: rgb(25, 25, 25);
            border-radius: 25px;
            box-shadow: 0px 0px 10px #000000;
        }

        .textbox {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 17px;
            margin-top: 10px;
            min-width: 300px;
            min-height: 40px;
            border-radius: 10px;
            border: none;
        }

        .text-header {
            margin-bottom: 50px;
            margin-top: 10px;
            font-family: 'Varela Round', sans-serif;
            font-weight: 600;
            font-size: 60px;
            color: rgba(0, 136, 169, 1);
            text-shadow: 2px 2px 8px #000000;
        }

        .text-normal {
            margin-top: 10px;
            margin-left: 140px;
            text-align: left;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 25px;
            color: rgba(0, 136, 169, 1);
            text-shadow: 2px 2px 8px #000000;
        }

        table {
            margin-top: 50px;
        }

        .button {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
            float: right;
            margin-left: 25px;
            margin-top: 25px;
            margin-right: 130px;
            margin-bottom: 25px;
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .button:hover {
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 0.8);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .link {
            font-size: 15px;
            text-decoration: underline;
            color: orange;
            margin-left: 140px;
            margin-top: 50px;
            margin-right: 25px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body class="body">

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/ProjectWebpro/menubar/menubar.html";
    include_once($path);
    ?>

    <br>
    <center>
        <form action="loginDB.php" method="post">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <div class="box">
                <br>
                <table>
                    <tr>
                        <th width=300 height="auto"></th>
                        <td width=300 height="auto"></td>
                    </tr>
                    <tr>
                        <th colspan="2" width=300 height="auto">
                            <div class="text-header">Login</div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" width=300 height="auto">
                            <div class="text-normal">Username</div>
                            <input type="text" class="textbox" name="username" required>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" width=300 height="auto">
                            <div class="text-normal">Password</div>
                            <input type="password" class="textbox" name="password" required>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="2" width=300 height="auto"><a href="/ProjectWebpro/register.php" class="link">Don't have an account yet?</a><button class="button" type="submit" name="user_login">login</button></td>
                    </tr>
                </table>

            </div>
        </form>
    </center>
</body>

</html>