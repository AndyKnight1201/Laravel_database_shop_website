<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zedla 加儂</title>
    <meta name="author" content="Andy Chao">
    <meta name="description" content="本網站作品僅提供本人作品集使用，無任何商業行為。">
    <link href="https://fonts.googleapis.com/earlyaccess/notosanstc.css" rel="stylesheet" media="all">
<style>
     /* @import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);  */
    *{
        box-sizing: border-box;
        /* font: 粗體600 大小15px/行高1.2 字型1號,字型2號; */
        /* 有些字型有括號''有些沒有 */
        font: 500 20px/1.2 'Noto Sans TC',"Lato", sans-serif;
        transition: 0.5s;
    }

    html{
        scroll-behavior: smooth;
    }

    body{
        margin: 0px;
        padding: 0px;
    }

    .white{
        color: #b99f65;

    }

    .title-spacing{
        /* 字的間距 */
        letter-spacing: 5px;
    }

    .font-big{
        font-size: 50px;

    }

    .backgroundfixed{
        /* 背景設定fixed，跟著滑動跑 */
        background-attachment: fixed;

    }

    .justify{
        /* 多行文字段落兩邊切齊 */
        text-align: justify;
    }


    /* .Fix{
        width: 100%;
        margin:0 auto;
    } */

    .banner{
        width: 100%;
        height:100vh;
        /* {{ asset('Zedla_image/ZE2.png') }} */
        background-image: url("{{ asset('Zedla_image/Ganon.jpg') }} ");
        background-size: cover;
        background-position: center ;
        position: relative;
        background-repeat: no-repeat;
    }



    .title{
        width: 250px;
        height: 80px;
        background-color: rgba(0, 0, 0, 0.6);
        position:absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 7px 0px ;
        text-align: center;
    }


    .artical{
        padding: 50px 100px 50px 100px;
        background-color: rgb(0, 0, 0);
        position: relative;
    }

    .artical-title{
        font-size: 30px;
        text-align:center;
        margin-bottom: 25px;

    }

    .artical p{
        max-width: 1000px;
        margin: auto;

    }

    .small-img{
        height: 100vh;
        position: relative;
        background-size: cover;
    }

    #imgA{
        background-image: url("{{ asset('Zedla_image/ZW4.jpg') }}");
        background-size: cover;
        background-position: center -90% ;

        /* opacity: 0.8;  */

    }

    .small-img-title{
        width: 250px;
        height: 80px;
        text-align: center;
        background-color:rgb(0, 0, 0,0.6);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 7px 0px ;

    }
    .font-box{
        width: 100%;
        background-color: black;
        padding: 50px 100px 50px 100px;;
    }

    .font-box p{
        max-width: 1000px;
        margin: 20px auto;
    }

    .nav-box{
        position: fixed;
        z-index: 1;
        width: 100%;
        height: 70px;
        background-color: rgb(235, 235, 235);


    }
    .logo-box{
        float: left;
        margin-top: 5px;
        margin-left: 10px;
        width: 100px;
        height: 60px;
        background-image: url("{{ asset('Zedla_image/ZE1.png') }}");
        background-size:cover;
        background-repeat: no-repeat;
        cursor:pointer;
        transition: none;

    }

    .logo-box:hover{

    background-image: url("{{ asset('Zedla_image/PD1.png') }}");
    background-size:contain;
    }

    .link-box{
        float: right;
        margin-top: 20px;
        margin-right: 25px;

    }

    .link{
        float: left;
    }

    .link a{
        background-color: rgb(235, 235, 235);
        padding: 10px 20px 10px 20px ;
        border-radius: 10px 10px 20px 40px;
        border: 8px solid #b99f65;
        text-decoration: none;
        font-size: 25px;
    }

    .link a:hover{
        box-shadow: 10px 10px 20px 0px;
        color: #6d3b0c;

    }

    .link-box .link:nth-child(1){
        margin-right: 20px;
    }

    #Bot div{
        max-width: 1000px;
        margin: 20px auto;
    }
    .Cp-name{
        text-align: center;
    }
    .Ak{
        width: 20px;
        height: 20px;

    }
    .Ak:hover{
        background-image: url("{{ asset('Zedla_image/ZP0.jpg') }}");
        background-size: cover;
        background-position: center;
        width: 150px;
        height: 60px;
    }

    @media (max-width:750px) {
        .banner{
        width: 100%;
        height:100vh;
        background-image: url("{{ asset('Zedla_image/Ganon.jpg') }}");
        background-size: cover;
        background-position:center;
        position: relative;
        background-repeat: no-repeat;
        }

        #imgA{
        background-image: url("{{ asset('Zedla_image/ZW4.jpg') }}");
        background-size: cover;
        background-position: center 20%;
        opacity: 0.8;

        }
    }


     @media (max-width:750px) {
        .logo-box{
        float: none;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100px;
        height: 60px;
        background-image: url("{{ asset('Zedla_image/ZE1.png') }}");
        background-size:cover;
        background-repeat: no-repeat;
        cursor:pointer;

    }


        .link-box{
        width: 200px;
        height: 0px;
        background-color: #c9f9fd;
        background-image: url("{{ asset('Zedla_image/ZE3.png') }}");
        position: absolute;
        background-repeat: no-repeat;
        background-position: center 95%;
        background-size: 75%;
        overflow: hidden;
        top: 70%;
        left: 0%;
        transform: translate(0%,0%);
        z-index: 1;
        border-radius: 0 0 20px 0;
        }

        .link a{
        background-color: rgb(235, 235, 235);
        border-radius: 10px 10px 20px 20px;
        border: 8px solid #b99f65;
        font-size: 25px;
        }


        .link{
            float: none;
            margin:50px 0px 0px 50px;
        }

        .buger-link{
            position: absolute;
            top: 50%;
            left: 30px;
            transform: translate(0%,-50%);
            display: block;
            /* overflow: hidden; */
            width: 40px;
            height: 50px;
            background-image: url("{{ asset('Zedla_image/ZE5.png') }}");
            background-size: cover;
            background-position: center;
        }

        .buger-link:hover ~ .link-box{
            height: 300px;

        }

        .link-box:hover{
            height: 300px;
            }


    }

    @media (max-width:650px) {
        .banner{
        width: 100%;
        height:100vh;
        background-image: url("{{ asset('Zedla_image/ZP9.png') }}");
        background-size: 100%;
        background-position:center 50%;
        background-color: #27221e;
        position: relative;
        background-repeat: no-repeat;
        }
    }

</style>

</head>
<body>
    <main>
        <!-- 標籤列表 -->
        <div class="Fix">

            <div class="nav-box">
                <div class="buger-link"></div>
                <div class="logo-box" onclick="location.href='/Zedla';">
                </div>
                <div class="link-box">
                    <!-- 超連結 -->
                    <div class="link">
                        <a href="#Top" class="white">上層</a>
                    </div>
                    <div class="link">
                        <a href="#Bot" class="white">下層</a>
                    </div>
                </div>
            </div>

            <div id="Top">
                <!-- 第一塊區塊 大圖-->
                <div class="banner backgroundfixed">
                    <div class="title white title-spacing font-big">
                        災厄加儂
                    </div>
                </div>
            </div>

            <!-- 第二塊區塊 白字內文-->
            <div class="section">
                <div class="artical">
                    <div class="artical-title white title-spacing">
                        概要
                    </div>
                    <div id="Bot" class="justify white title-spacing">
                    <p>&emsp;&emsp;從一萬年前起就一次次襲擊海拉魯王國的魔王加儂的怨念。本作中和以往的魔王不同，是被稱之為災厄的概念。復活之時被擁有勇者之力的劍士和擁有神聖之力的公主封印。在故事開始的一百年前從海拉魯城的地下再次復活，以魔力奪取了神獸和守護者，殺害英傑和國王，使得海拉魯王國滅亡。然而薩爾達以隻身之力抑制了加儂並將他控制於海拉魯城，因此並未能完全復活。雖然本體被薩爾達抑制在海拉魯城的主城，然而懷有強大魔力的怨念依然一次次現形，有時會引起血之滿月（ブラッディムーン）使所有的魔物復活。即使是百年後的現在也對世界有巨大的影響，例如在海拉魯各地形成了怨念的沼澤。</p>
                    </div>
                    <div class="Ak"></div>
                </div>
            </div>

            <!-- <div>
                <div id="imgA" class="small-img backgroundfixed">
                    <div class="small-img-title white title-spacing font-big">
                        簡介
                    </div>

                <div id="Bot" class="font-box white justify title-spacing">
                    <div class="Cp-name" style="color: white;font-size: 30px;">林克</div>
                    <div>&emsp;&emsp;林克(日文：リンク，英語：Link)是薩爾達傳說系列中每部主角的名字，這可能是他們的真名亦或是傳說中的代稱；雖然並非全都是同一位，但是在故事背景的設定下他們皆被視為勇者之魂的轉世，是女神所欽選為保護世界遠離邪惡威脅的天選之人趙，當中有幾位更是有著血緣關係，以精神傳承的方式繼承著古代勇者的偉業。</div>
                    <div class="Cp-name" style="color: white;font-size: 30px;">達爾克爾</div>
                    <div>&emsp;&emsp;達爾克爾(日語：ダルケル；英語：Daruk)是一名首次於《曠野之息》中登場的鼓隆族人，為人重義氣且喜歡美食，百年前擔任神獸瓦・魯達尼亞的操作者並被受封為一族的英傑，然而災厄之戰中遭到厄咒加儂突襲而殞命，靈魂一直被囚禁在神獸中，直到林克甦醒並前來擊敗厄咒加儂，其靈魂才得以被解放。</div>
                    <div class="Cp-name" style="color: white;font-size: 30px;">米法</div>
                    <div>&emsp;&emsp;米法(日語：ミファー；英語：Mipha)是一名首次於《曠野之息》中登場的女性卓拉族人，是當代卓拉王的女兒，因此人稱『米法公主』。擔任操控神獸瓦・露塔的英傑之一，然而在一百年前災厄之戰中遭到厄咒加儂突襲而殞命，其靈魂被囚禁在神獸中長達一百年，直到後來林克前來擊敗厄咒加儂才得以解放靈魂。</div>
                    <div class="Cp-name" style="color: white;font-size: 30px;">力巴爾</div>
                    <div>&emsp;&emsp;力巴爾(日語：リーバル；英語：Revali)是一名首次於《曠野之息》中登場的男性利特族人，是一名擅長在空中使用弓箭的勇敢戰士，再加上自創了從平地拔升起飛的技法而在族內頗有名氣。過去受封為英傑並擔任神獸瓦・梅德的操作者，然而在一百年前毀滅王國的災厄之戰，力巴爾被厄咒加儂突襲而喪命，其靈魂在神獸中無法解脫，直到百年後來林克甦醒，並前來擊敗風咒加儂，他的靈魂才得以被釋放。以及 幫助林克打敗加儂。</div>
                    <div class="Cp-name" style="color: white;font-size: 30px;">烏爾波扎</div>
                    <div>&emsp;&emsp;烏爾波扎(日語：ウルボザ；英語：Urbosa)是一名首次於《曠野之息》中登場的格魯德族人，作為一名族長，烏爾波扎擁有著不俗的武藝，但她同時也具有著母性的包容力，由於和海拉魯王妃是摯友，因此照顧自幼失去母親的薩爾達公主。百年前由海拉魯國王受封為族內的英傑，擔當起神獸瓦・娜波力斯的操縱者，然而就在大災厄之際，烏爾波札被厄咒加儂突襲的攻擊而喪命，靈魂也被禁錮於神獸中，直到百年後林克前來解放神獸，才得以從災厄的力量中解脫。</div>

                </div> -->

            </div>
        </div>
    </main>
    <div style="background-color: rgb(0, 0, 0); text-align: center;color:white;">©2022 Copyright 趙耕誼Andy Chao. All rights reserved.</div>
</body>
</html>
