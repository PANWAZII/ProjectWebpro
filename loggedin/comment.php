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

if (isset($_POST['comment'])) {
    $username = $_SESSION['username'];
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    date_default_timezone_set('Asia/Bangkok');
    $date = date('d/m/y h:i:s');
    // $date = new DateTime("now", new DateTimeZone('Etc/GMT+7') );
    // $datenow = date_format($date, 'd/m/Y');
    $sql = "INSERT INTO comments (username, comment, createdOn) 
    VALUES ('$username','$comment', '$date' )";
    mysqli_query($conn, $sql);
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

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes blink {
            0% {
                color: rgba(0, 136, 169, 1);
            }

            50% {
                color: orange;
            }

            100% {
                color: rgba(0, 136, 169, 1);
            }

        }

        body {
            background-color: rgb(50, 50, 50);
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
        }

        .usercomment {
            background-color: whitesmoke;
            margin-top: 10px;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            width: 600px;
            height: 100px;
            border: none;
            border-radius: 10px;
        }

        .textarea {
            overflow: auto;
            width: 400px;
            height: 40px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .container {
            float: left;
            animation: fadein 1s;
            background-color: rgb(25, 25, 25);
            margin-top: 100px;
            width: 900px;
            height: 800px;
            border-radius: 30px;
        }

        .submitbtn {
            border: none;
            border-radius: 10px;
            width: 600px;
            height: 30px;
            background-color: rgba(0, 136, 169, 1);
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
        }

        .submitbtn:hover {
            background-color: orange;
        }

        ::placeholder {
            color: orange;
        }

        iframe {
            margin-top: 40px;
            width: 800px;
            height: 600px;
            border: none;
            border-radius: 10px;
        }

        .header {
            writing-mode: vertical-rl;
            text-orientation: sideways;
            float: left;
            margin-left: 60px;
            margin-top: 220px;
            width: 40px;
            height: 400px;
            font-size: 100px;
            color: rgba(0, 136, 169, 1);
            animation: fadein 2s, blink 2s infinite;
        }

        .makecontentcenter {
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>
    <div>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/ProjectWebpro/loggedin/menubar/menubar.php";
        include_once($path);
        ?>
    </div>
    <br>
    <center>
        <div class="makecontentcenter">
            <form action="comment.php" method="post">
                <center>
                    <div class="container">
                        <iframe src="/ProjectWebpro/loggedin/fetchcmt.php" frameborder="0"></iframe>
                        <textarea class="usercomment" placeholder="What do you think about my website?" name="comment" id="comment" cols="5" rows="10"></textarea>
                        <br>
                        <input class="submitbtn" type="submit" value="POST"></input>
                    </div>
                </center>
            </form>
            <div class="header">COMMENT</div>
        </div>
    </center>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/ProjectWebpro/footer/footer.html";
    include_once($path);
    ?>
</body>

</html>