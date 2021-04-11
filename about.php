<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/ProjectWebpro/box.css?v=<?php echo time(); ?>">
    <style>
        .panwa {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px 8px #000000;
            animation: slideup1 1s, fadein 2s;

        }

        .panwapro {
            animation: slideup1 1s, fadein 2s;
        }

        @keyframes slideup1 {
            from {
                transform: translateY(100px);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes wb {
            0% {
                color: #0080FF;
            }

            25% {
                color: #FF8000;
            }

            50% {
                color: #FFFFFF;
            }

            75% {
                color: #FF8000;
            }

            100% {
                color: #0080FF;
            }

        }

        .profile-box {
            margin-top: 100px;
            margin-bottom: 30px;
            width: 70%;
            height: 1000px;
            background-color: rgb(25, 25, 25);
            border-radius: 25px;
            box-shadow: 0px 0px 10px #000000;
            animation: fadein 1s;
        }

        .contact {
            margin-top: 50px;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 25px;
            color: white;
            text-shadow: 2px 2px 8px #000000;
            animation: fadein 2s, wb 5s infinite;
        }

        .contact-links {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: white;
            animation: fadein 1s;
        }

        .contact-links:hover {
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 15px;
            color: orange;

        }

        .contact-pics {
            margin-top: 20;
            animation: slideup1 1s;
            transition: transform .2s;
        }

        .contact-pics:hover {
            margin-top: 20;
            transform: scale(1.5);
        }

        body {
            background-color: rgb(50, 50, 50);
        }

        p {
            margin-top: 10px;
            font-family: 'Varela Round', sans-serif;
            font-weight: 400;
            font-size: 20px;
            color: white;
            animation: fadein 2s;
            text-shadow: 0px 0px 9px #000000;
        }

        .skill {
            justify-content: center;
            text-align: left;
            width: 45%;
            height: 120px;
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

    <center>
        <div class="profile-box">
            <div class="panwapro"><img src="/ProjectWebpro/materials/about/panwa.png" alt="panwapf" width=300 height="auto"></div>
            <div class="panwa">Panwa Muangsong</div>
            <br>
            <p>Hello world, my name is Panwa. I am studying Computer Science at Rangsit University.</p>
            <p>I create this website as a Web Programming(CSC350) project.</p>
            <br>
                <div class="skill">
                    <p style="color:Tomato;">MySkills.Coding(); --> Java, Python, C, Php, HTML, CSS</p>
                    <p style="color:Tomato;">MySkills.Hardware(); --> Arduino, Raspberry Pi</p>
                    <p style="color:Tomato;">MySkills.Network(); --> Network monitoring, Phishing attack</p>
                    <p style="color:Tomato;">MySkills.OS(); --> Windows, Ubuntu, Kali Linux</p>
                </div>

            <br>
            <br>
            <div class="contact">
                <div class="contact">Contact me</div>
                <br>
                <table>
                    <tr>
                        <th width="150"><a target="_blank" href="https://www.facebook.com/PANWAZII">
                                <div> <img class="contact-pics" src="/ProjectWebpro/materials/about/facebook.png" alt="" width=60 height="auto"><br>
                                </div>
                            </a>
                        </th>
                        <th width="150"><a target="_blank" href="https://www.facebook.com/PANWAZII">
                                <div> <img class="contact-pics" src="/ProjectWebpro/materials/about/instagram.png" alt="" width=60 height="auto"><br>
                                </div>
                            </a>
                        </th>
                        <th width="150">
                            <a target="_blank" href="https://github.com/PANWAZII">
                                <div> <img class="contact-pics" src="/ProjectWebpro/materials/about/github.png" alt="" width=50 height="auto"><br>
                                </div>
                            </a>
                        </th>
                    </tr>
                    <tr>
                        <th width="150">
                            <a target="_blank" href="https://www.facebook.com/PANWAZII" class="contact-links">Facebook</a>
                        </th>
                        <th width="150">
                            <a target="_blank" href="https://www.facebook.com/PANWAZII" class="contact-links">Instagram</a>
                        </th>
                        <th width="150">
                            <a target="_blank" href="https://github.com/PANWAZII" class="contact-links">Git Hub</a>
                        </th>
                    </tr>
                </table>

            </div>
        </div>
    </center>

    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/ProjectWebpro/footer/footer.html";
    include_once($path);
    ?>

</body>

</html>