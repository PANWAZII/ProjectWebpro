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
            font-size: 30px;
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
        $path .= "/ProjectWebpro/menubar/menubar.html";
        include_once($path);
        ?>
        <br>
    </div>

    <div class="box-switch">
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
                            <h1>Mechanical Switch คืออะไร?</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/switch/switchDemo.gif" alt="keyboard" width=500 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; คีย์บอร์ดสำหรับเล่นเกมคอมพิวเตอร์ที่ได้รับความนิยมอยู่ในขณะนี้ ส่วนใหญ่จะเลือกใช้สวิตช์ปุ่มกดแบบที่เรียกว่า Mechanical Switch (แมคคานิคอล สวิตช์) </div>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; สวิตช์ของคีย์บอร์ด Mechanical นั้นจะมีแบ่งออกเป็นหลายสีซึ่งมีกลไกการทำงานที่แตกต่างกัน แยกออกเป็น 3 ประเภทหลัก ๆ คือ Linear Switch, Clicky Switch และ Tactile Switch ซึ่งแต่ละประเภทก็แบ่งออกมาเป็นหลายๆสีซึ่งแต่ละสีก็จะมีน้ำหนักการกดที่แตกต่างกัน</div>
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
                            <h1>ยี่ห้อ Mechanical Switch</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/switch/brand.jpg" alt="keyboard2" width=500 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mechanical Switch แต่ละแบรนด์ก็จะมีหลากหลายแบรนด์ให้เลือกซึ่งแบรนด์หลักก็จะมี <a class="swtlink" target="_blank" href="https://www.cherrymx.de/en">Cherry</a> , <a class="swtlink" target="_blank" href="http://en.gateron.cn/">Gateron</a> , <a class="swtlink" target="_blank" href="https://www.kailhswitch.com/faq1">Kailh</a> , <a class="swtlink" target="_blank" href="https://www.razer.com/razer-mechanical-switches">Razer</a> , <a class="swtlink" target="_blank" href="https://www.logitechg.com/th-th/innovation/mechanical-switches.html">Logitech</a> , <a class="swtlink" target="_blank" href="https://www.pcgamingrace.com/products/glorious-panda-mechanical-switches">Glorious</a> ความแตกต่างของแต่ละแบรนด์คือราคา
                            ยิ่งราคาสูง งานประกอบและวัสดุก็ยิ่งดี</div>
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