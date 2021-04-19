<?php
session_start();
include('../connectDB.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: /ProjectWebpro/login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['userID']);
    header('location: /ProjectWebpro/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

        body {
            background-color: rgb(50, 50, 50);
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
        }

        .usercomment {
            background-color: gray;
            margin-top: 450px;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            width: 600px;
            height: 100px;
            border: none;
            border-radius: 10px;
        }

        .card {
            margin-left: 20px;
            padding: 5px;
            word-wrap: break-word;
            justify-content: left;
            margin-bottom: 10px;
            max-width: 650px;
            min-width: 100px;
            min-height: 40px;
            display: inline-block;
            border: none;
            border-radius: 10px;
            background-color: rgba(0, 136, 169, 1);
        }

        .date {
            color: white;
            font-size: 15px;
            margin-top: 4px;
            margin-left: 10px;
        }

        .buttomline {
            margin-top: 10px;
            width: 670px;
            height: 2px;
            background-color: black;
        }

        .namecolor {
            display: flex;
            color: orange;
        }


        ::-webkit-scrollbar {
            width: 20px;
        }


        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            /* border-radius: 10px; */
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 136, 169, 1);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: orange;
        }
    </style>

</head>

<body>

    <?php
    $SQL = 'SELECT * FROM comments';
    $stmt = $conforcmt->prepare($SQL);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
            <p>
            <div class="namecolor">@<?= $row['username']; ?></p>
                <div class="date"><?php echo $row['createdOn']; ?></div>
            </div>
            <div class="card">
                <p><?= $row['comment']; ?></p>
            </div>
            <center>
                <div class="buttomline"></div>
            </center>
    <?php }
    } ?>
</body>

</html>