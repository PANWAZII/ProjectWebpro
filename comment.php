<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        body {
            background-color: rgb(50, 50, 50);
        }

        table {
            margin-top: 300px;
        }

        .announce {
            justify-content: center;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 40px;
            color: orange;
            text-decoration: none;
            animation: fadein 1s;
        }

        .button-group {
            margin-right: 170px;
            margin-top: 20px;
            justify-content: center;
            animation: fadein 2s;

        }

        .button {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
        }

        .button {
            padding: 9px 25px;
            background-color: rgba(0, 136, 169, 1);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
        }

        .button:hover {
            padding: 9px 25px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            color: orange;
        }
    </style>
</head>

<body class="body">
    <div>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/ProjectWebpro/menubar/menubar.html";
        include_once($path);
        ?>
    </div>

    <br>
    <center>
        <table>
            <tr>
                <td>
                    <div class="announce">
                        You must be logged in first
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="button-group">
                        <a href="/ProjectWebpro/login.php"><button class="button">Login now</button></a>
                    </div>
                </td>
            </tr>
        </table>
    </center>

</body>

</html>