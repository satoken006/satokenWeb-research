<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="http://satoken.nkmr.io/research/javascripts/main.js"></script>
    <title>研究成果</title>
</head>
<body>
    <div class="nav fixed">
        <ul id="menubar">
            <li><a href="http://satoken.nkmr.io/">HOME</a></li>
            <li><a href="http://satoken.nkmr.io/profile/">PROFILE</a></li>
            <li><a href="http://satoken.nkmr.io/research/">RESEARCH</a></li>
            <li><a href="http://satoken.nkmr.io/product/">PRODUCT</a></li>
            <li><a href="http://satoken.nkmr.io/activity/">ACTIVITY</a></li>
            <li><a href="http://satoken.nkmr.io/link/">LINK</a></li>
        </ul>
    </div>
    <img id="header" src="http://satoken.nkmr.io/img/header.jpg">

    <div id="content">
        <div class="heading">研究成果 - コミック</div>

        <div class="research-category-box">
            <a href="http://satoken.nkmr.io/research/handwriting/">
                <img src="../../img/research/handwriting.png">
                <p>
                    <span>手書き文字<br>×<br>アニメーション</span>
                </p>
            </a>
        </div>       
        <div class="research-category-box">
            <a href="http://satoken.nkmr.io/research/comic/">
                <img src="../../img/research/comic.png">
                <p>
                    <span>コミック<br>読書促進</span>
                </p>
            </a>
        </div>
        <div class="research-category-box">
            <a href="http://satoken.nkmr.io/research/accel/">
                <img src="../../img/research/accel.png">
                <p>
                    <span>ノイズ<br>キャンセリング<br>ミュージック</span>
                </p>
            </a>
        </div>        
        <div class="research-category-box">
            <a href="http://satoken.nkmr.io/research/memory/">
                <img src="../../img/research/memory.png">
                <p>
                    <span>暗記学習支援</span>
                </p>
            </a>
        </div>

        <?php

        require "../../php/function.php";
        require "../php/connectToMySQL.php";

        showResearches( $connection, "comic" );

        ?>
    </div>

</body>
</html>