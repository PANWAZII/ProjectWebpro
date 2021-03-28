<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/ProjectWebpro/box.css?v=<?php echo time(); ?>">
    <style>
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
            <h1>Mechanical Switch</h1>
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
                        <img class="pic" src="https://cdn.shopify.com/s/files/1/0328/6034/0364/t/4/assets/pf-d7c3ac81--1000WirelessandWired540x.gif?v=1592298252" alt="keyboard" width=600 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
                        <div class="textbox2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; จุดแตกต่างหลักๆ ของเจ้า Mechanical Keyboard กับ Rubber Dome คือมันไม่ได้ใช้แผงยางแบบเดียวกันกับคีย์บอร์ดปกติ แต่ใช้สวิตช์แยกแต่ละตัวแยกกันแต่ละปุ่ม ซึ่งแต่ละปุ่มนั้นก็มีการทำงานแยกกันอย่างชัดเจนและมีกลไกแยกกัน ดังนั้นถ้าปุ่มพังปุ่มเดียว ส่งซ่อมเปลี่ยนแค่ปุ่มเดียวก็กลับมาทำงานได้ครับ (ยกเว้นแผงบอร์ดวงจรด้านล่างพังนะ ซึ่งยากมาก)</div>
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
                            <h1>Mechanical Keyboard ดียังไง?</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/home/mk2.jpg" alt="keyboard2" width=600 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="textbox2">1. ทนกว่า Membrane Keyboard (rubber dome) มาก</div>
                        <div class="textbox2">2. ตอบสนองเร็วกว่า ทำให้พิมพ์เร็ว เล่นเกมส์ดีกว่า และนิ้วไม่ล้าอีกด้วย</div>
                        <div class="textbox2">3. มักมีการป้องกัน Key Rollover คือสามารถกดหลายๆปุ่มพร้อมกันได้</div>
                        <div class="textbox2">4. ถอด Keycaps ทำความสะอาดได้ง่าย</div>
                        <div class="textbox2">5. มีสวิตซ์ คีย์แคป ไฟ เฟรม หลายแบบให้เลือกตามความต้องการ</div>

                    </td>
                </tr>
            </table>
        </center>
    </div>

    <div class="box4">
        <center>
            <table border="0">
                <tr>
                    <th width="700" height="500">
                        <div class="textbox1">
                            <h1>ข้อเสียของ Mechanical Keyboard</h1>
                        </div>
                        <img class="pic" src="/ProjectWebpro/materials/home/mk3.jpg" alt="keyboard2" width=600 height="auto" />
                    </th>
                    <td width="800" height="500">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="textbox2">1. มีราคาที่ค่อนข้างสูง</div>
                        <div class="textbox2">2. เวลาพิมพ์เสียงมักจะดังกว่า โดยจะดังมากหรือน้อยขึ้นอยู่กับสวิตซ์ที่เลือกใช้</div>
                        <div class="textbox2">3. น้ำหนักมากกว่าแบบ Membrane</div>
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