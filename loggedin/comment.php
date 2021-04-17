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
    header('location: /ProjectWebpro/login.php');
}

function createCommentRow($data)
{
    global $conn;

    $response = '
            <div class="comment">
                <div class="user">' . $data['username'] . ' <span class="time">' . $data['createdOn'] . '</span></div>
                <div class="userComment">' . $data['comment'] . '</div>
                <div class="reply"><a href="javascript:void(0)" data-commentID="' . $data['id'] . '" onclick="reply(this)">REPLY</a></div>
                <div class="replies">';

    $sql = $conn->query("SELECT replies.id, username, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn FROM replies INNER JOIN user ON replies.userID = user.id WHERE replies.commentID = '" . $data['id'] . "' ORDER BY replies.id DESC LIMIT 1");
    while ($dataR = $sql->fetch_assoc())
        $response .= createCommentRow($dataR);

    $response .= '
                        </div>
            </div>
        ';

    return $response;
}

if (isset($_POST['getAllComments'])) {
    $start = $conn->real_escape_string($_POST['start']);

    $response = "";
    $sql = $conn->query("SELECT comments.id, username, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN user ON comments.userID = user.id ORDER BY comments.id DESC LIMIT $start, 20");
    while ($data = $sql->fetch_assoc())
        $response .= createCommentRow($data);

    exit($response);
}

if (isset($_POST['addComment'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    $isReply = $conn->real_escape_string($_POST['isReply']);
    $commentID = $conn->real_escape_string($_POST['commentID']);

    if ($isReply != 'false') {
        $conn->query("INSERT INTO replies (comment, commentID, userID, createdOn) VALUES ('$comment', '$commentID', '" . $_SESSION['userID'] . "', NOW())");
        $sql = $conn->query("SELECT replies.id, username, comment, DATE_FORMAT(replies.createdOn, '%Y-%m-%d') AS createdOn FROM replies INNER JOIN user ON replies.userID = user.id ORDER BY replies.id DESC LIMIT 1");
    } else {
        $conn->query("INSERT INTO comments (userID, comment, createdOn) VALUES ('" . $_SESSION['userID'] . "','$comment',NOW())");
        $sql = $conn->query("SELECT comments.id, username, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN user ON comments.userID = user.id ORDER BY comments.id DESC LIMIT 1");
    }

    $data = $sql->fetch_assoc();
    exit(createCommentRow($data));
}
$sqlNumComments = $conn->query("SELECT id FROM comments");
$numComments = $sqlNumComments->num_rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(50, 50, 50);
        }

        .comment {
            margin-top: 300px;
            width: 800px;
            height: 400px;
        }

        .textarea {
            width: 300px;
            height: 40px;
            border: none;
            border-radius: 10px;
        }

        .container {
            justify-content: center;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <div class="container">
        <center>
            <div class="comment">
                <div class="row">
                    <div class="">
                        <textarea class="textarea" id="mainComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                        <button style="float:right" onclick="isReply = false;" id="addComment">Add Comment</button>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <h2><b id="numComments"><?php echo $numComments ?> Comments</b></h2>
                        <div class="userComments"></div>
                    </div>
                </div>
            </div>
            <div class="" style="display:none">
                <div class="">
                    <textarea class="" id="replyComment" placeholder="Add Public Comment" cols="30" rows="2"></textarea><br>
                    <button style="float:right" onclick="isReply = true;" id="addReply">Add Reply</button>
                    <button style="float:right" onclick="$('.replyRow').hide();">Close</button>
                </div>
            </div>
        </center>
    </div>

    <script type="text/javascript">
        var isReply = false,
            commentID = 0,
            max = <?php echo $numComments ?>;
        $(document).ready(function() {
            $("#addComment, #addReply").on('click', function() {
                var comment;

                if (!isReply)
                    comment = $("#mainComment").val();
                else
                    comment = $("#replyComment").val();

                if (comment.length > 5) {
                    $.ajax({
                        url: '/ProjectWebpro/loggedin/comment.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            addComment: 1,
                            comment: comment,
                            isReply: isReply,
                            commentID: commentID
                        },
                        success: function(response) {
                            max++;
                            $("#numComments").text(max + " Comments");

                            if (!isReply) {
                                $(".userComments").prepend(response);
                                $("#mainComment").val("");
                            } else {
                                commentID = 0;
                                $("#replyComment").val("");
                                $(".replyRow").hide();
                                $('.replyRow').parent().next().append(response);
                            }
                        }
                    });
                } else
                    alert('Please Check Your Inputs');
            });
        });

        function reply(caller) {
            commentID = $(caller).attr('data-commentID');
            $(".replyRow").insertAfter($(caller));
            $('.replyRow').show();
        }

        function getAllComments(start, max) {
            if (start > max) {
                return;
            }

            $.ajax({
                url: '/ProjectWebpro/loggedin/comment.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    getAllComments: 1,
                    start: start
                },
                success: function(response) {
                    $(".userComments").append(response);
                    getAllComments((start + 20), max);
                }
            });
        }
    </script>
</body>

</html>