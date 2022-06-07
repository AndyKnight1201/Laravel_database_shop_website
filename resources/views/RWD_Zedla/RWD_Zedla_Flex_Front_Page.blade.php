<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelda-Breath of the Wild</title>
    <meta name="author" content="Andy Chao">
    <meta name="description" content="本網站作品僅提供本人作品集使用，無任何商業行為。">
</head>
 <link rel="stylesheet" href="{{ asset('css/RWD_Zedla_Flex.css') }}">


<body>
    <div class="container">
        <div class="nav">
            <div class="buger-link"></div>
            <div class="logo-box" onclick="location.href='/';"></div>
            <div class="link-box">
                <div class="link" onclick="location.href='https://www.nintendo.com/';">
                    <!-- {{ asset('image/search.png') }} -->
                    <img src="{{ asset('Zedla_image/ZE2.png') }}" width="40" alt="">
                    <a href="https://www.nintendo.com/">官網</a>
                </div>
                <div class="link" onclick="location.href='https://www.youtube.com/watch?v=zw47_q9wbBE';">
                    <img src="{{ asset('Zedla_image/ZE2.png') }}" width="40" alt="">
                    <a href="https://www.youtube.com/watch?v=zw47_q9wbBE">映像</a>
                </div>
                <div class="link" onclick="location.href='https://www.nintendo.com/store/products/the-legend-of-zelda-breath-of-the-wild-switch/';">
                    <img src="{{ asset('Zedla_image/ZE2.png') }}" width="40" alt="">
                    <a href="https://www.nintendo.com/store/products/the-legend-of-zelda-breath-of-the-wild-switch/">商店</a>
                </div>
            </div>

        </div>

        <div class="main">
            <div class="pic-area">
                <div class="imgA" onclick="location.href='/ZedlaCP';">
                    <span>英傑</span>
                </div>
                <div class="imgB" onclick="location.href='/ZedlaHyrule';">
                    <span>海拉魯</span>
                </div>
                <div class="imgC" onclick="location.href='/ZedlaGanon';">
                    <span>加儂</span>
                </div>
            </div>
            <div class="Ak"></div>
        </div>
    </div>
    <div style="background-color: rgb(0, 0, 0); text-align: center;color:white;">©2022 Copyright 趙耕誼Andy Chao. All rights reserved.</div>
</body>
</html>
