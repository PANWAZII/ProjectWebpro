<?php
session_start();

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

    <link rel="stylesheet" href="/ProjectWebpro/box.css?v=<?php echo time(); ?>">
    <style>
        .body {
            background-color: rgb(50, 50, 50);
        }

        .mech {
            text-align: left;
            float: left;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 40px;
            margin-left: 70px;
            margin-top: 200px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px 8px #000000;
            animation: slideup 1s;
        }

        @keyframes slideup {
            from {
                transform: translateY(250px);
            }

            to {
                transform: translateY(0);
            }
        }

        .swtlink {
            font-size: 25px;
            margin-left: 10px;
            margin-top: 20px;
            color: #FF33FC;
        }
    </style>
</head>

<body class="body">
    <div>
        <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/ProjectWebpro/loggedin/menubar/menubar.php";
        include_once($path);
        ?>
        <br>
    </div>

    <div class="box-keycap">
        <div class="mech">
            <h1>Keycaps</h1>
        </div>
    </div>

    <div class="box2">
        <center>
            <table border="0">
                <tr>
                    <th width="700" height="500">
                        <div class="textbox1">
                            <h1>Keycaps คืออะไร?</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/keycap/keycap.gif" alt="keyboard" width=500 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เสน่ห์อย่างนึงของ Mechanical Keyboard คือการที่เราสามารถถอดเปลี่ยนตัวปุ่มพิมพ์ได้ ปุ่มนี่เรียกกันว่า คีย์แคป (Keycap)

                        </div>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; โดยเราสามารถดึงขึ้นมาเพื่อเปลี่ยนเป็นแบบที่เราต้องการได้สามารถตกแต่งได้สวยงาม แล้วแต่กำลังทรัพย์ของแต่ละคนเลย</div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div class="box3">
        <center>
            <table border="0">
                <tr>
                    <th width="700" height="500">
                        <div class="textbox1">
                            <h1>วัสดุของ Keycaps มีอะไรบ้าง?</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/keycap/compare.jpg" alt="keyboard2" width=500 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; วัสดุของ Keycaps นั้นเป็นพลาสติกที่มีค่อนข้างหลากหลายกันครับ โดยประเภทที่นิยมๆ หลักๆ ก็จะมี ABS และ PBT</div>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ABS ย่อมากจาก “Acrylonitrile Butadiene Styrene” พลาสติก ABS ส่วนมากเป็นแบบที่พบเจอกันมากที่สุดในปัจจุบันของชุด Keycap ที่ติดมาใน Mechanical keyboard เป็นพลาสติกเกรดแข็งที่นิมใช้กันเพราะคงทนระดับนึงและต้นทุนถูกกว่า ซึ่ง 90% ของตลาดนั้นแถมคีย์แคปมาเป็น ABS</div>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ส่วนของ PBT ย่อมาจาก “polybutylene terephthalate” โดย PBT นั้นส่วนใหญ่แล้วจะมีความคงทนมากกว่า ABS พอสมควร โดย PBT มักจะนิยมมาใน Mechanical Keyboard เฉพาะทางสำหรับคนที่ชื่นชอบ Mechanical Keyboard พอสมควร หรือจะมาเป็นในแบบชุด Keycap ที่คนหาซื้อมาเปลี่ยนเพิ่มเองมากกว่า</div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <div class="box/">
        <center>
            <table border="0">
                <tr>
                    <th width="700" height="500">
                        <div class="textbox1">
                            <h1>ABS vs PBT ต่างกันอย่างไร?</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/keycap/demo.jpg" alt="keyboard2" width=500 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br><br><br><br>
                        <div class="textbox2"> PBT ส่วนใหญ่มักจะให้ความรู้สึกแน่นหนักกว่า ABS</div>
                        <div class="textbox2"> PBT ส่วนใหญ่มักจะให้ความรู้สึกสัมผัสสากๆกว่า ABS</div>
                        <div class="textbox2"> ABS จะเกิดอาการขึ้นเงา (Shiny) ง่ายกว่า PBT</div>
                        <div class="textbox2"> ABS แพ้ความร้อนง่ายกว่า PBT</div>
                        <div class="textbox2"> PBT มีโอกาสเบี้ยวผิดรูป (Warp) ง่ายกว่า ABS ในการผลิต</div>
                        <div class="textbox2"> PBT จะราคาสูงกว่า ABS</div>
                    </td>
                </tr>
            </table>
        </center>
    </div>


    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/ProjectWebpro/footer/footer.html";
    include_once($path);
    ?>

</body>

</html>