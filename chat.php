<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgard-chat</title>

    <link href="https://fonts.googleapis.com/css?family=Cairo|Tajawal&amp;display=swap" rel="stylesheet" />
    <link
      class="jsbin"
      href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
      rel="stylesheet"
      type="text/css"
    />
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
    ></script>
    <script
      class="jsbin"
      src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"
    ></script>

    <script>
        function aj(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function (){
                if(req.readyState==4 && req.status==200){
                    document.getElementById("bruh").innerHTML=req.responseText;
                }
            }
        req.open('GET','refresh.php',true);
        req.send();
        }
        setInterval(function(){aj()},1000)
    </script>
</head>

<?php
    include("config.php");
?>

<style>


    *{
        margin: 0px;
        padding: 0px;
    }

    body{
        background-color: rgb(36, 36, 36);
    }

    #kl{
        width: 500px; 
        height: 95vh;
        background-color: rgb(44, 44, 44);
        overflow-y: scroll;
    }

    #rights{
        width: 100%;
        height: 50px;
        background-color: rgb(58, 58, 58);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 22px;
        font-weight: 900;
        color: white;
        letter-spacing: 1px;
        position: fixed;
        z-index: 1;
    }

    #bottom{
        position: absolute;
        bottom: 20px;
        width: 500px;
        height: 60px;
        background-color: rgb(44,44,44);
        display: flex;
        align-items: center;
    }

    #add{
        width: 30px;
        height: 30px;
    }

    #plus{
        width: 50px;
        height: 50px;
        font-size: 45px;
        color: white;
        font-weight: 100;
        position: relative;
        left: 0px;
        padding: 5px;
    }

    #plus:hover{
        background-color: rgb(75, 75, 75);
    }

    #text{
        width: 360px;
        height: 40px;
        margin-left: 10px;
        background: none;
        border: 1.5px solid rgb(255, 255, 255, .2);
        border-radius: 25px;
        padding-right: 10px;
        color: white;
        font-size: 20px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        text-align: right;
    }

    #send{
        width: auto;
        height: auto;
        position: absolute;
        right: 10px;
        bottom: 9px;
        background-color: white;
        margin-left: 0px;
        padding: 8px;
        border-radius: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        transition: .2s;
    }

    #send:hover{
        box-shadow: 0px 0px 15px white;
    }

    #send:active{
        opacity: 50%;
    }

    #send img{
        width: 25px;
        height: 25px;
    }

    #imgselected{
        position: fixed;
        width: auto;
        height: auto;
        padding: 20px;
        padding-bottom: 80px;
        background: rgb(26, 26, 26);
        top: 200px;
        border-radius: 5px;
        display: none;
        justify-content: center;
        margin-left: 20px;
        z-index: 1;
    }

    #imgselected img{
        width: 300px;
        height: 300px;
        border: 5px solid black;
    }

    #imgselected #se{
        width: 140px;
        height: 40px;
        position: absolute;
        bottom: 20px;
        left: 20px;
        border: none;
        font-size: 20px;
        cursor: pointer;
        background: white;
    }

    #imgselected #cen{
        width: 140px;
        height: 40px;
        position: absolute;
        bottom: 20px;
        right: 20px;
        border: 1px solid rgb(250,250,250,.8);
        font-size: 20px;
        background: none;
        color: white;
        cursor: pointer;
    }

    #kl ul{
        width: 100%;
        list-style: none;
        display: block;
        margin-top: 10px;
        margin-bottom: 35px;
        margin-top: 70px;
    }

    #kl ul li{
        width: auto;
        height: auto;
        padding: 10px;
        background: none;
        margin-right: 10px;
        margin-top: 10px;
        color: white;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 20px;
        font-weight:900;
        display: flex;
        align-items: center;
        justify-content: right;
    }

    #kl ul li .msg{
        max-width: 400px;
        width: auto;
        height: auto;
        background: rgb(26, 26, 26);
        display: inline-block;
        right: 250px;
        border-radius: 10px 10px 0px 10px;
        padding: 10px;
    }

    #kl ul li p{
        z-index: 0;
        font-weight:100;
        opacity: 80%;
        font-family:sans-serif;
        font-size: 16px;
        margin-right: 5px;
        margin-top: 20px;
    }

    #kl ul li img{
        max-width: 400px;
        height: auto;
        border-radius: 10px;
    }

    #kl ul li .img{
        max-width: 400px;
        width: auto;
        height: auto;
        background: white;
        display: inline-block;
        right: 250px;
        border-radius: 10px 10px 0px 10px;
        padding: 10px;
    }

    @media screen and (max-width: 900px) {

        #kl{
            height: 100vh;
        }

        #bottom{
            bottom: 0px;
        }

    }

</style>

<body onload="aj()">
    <center>

    <div id="rights">asgard chat</div>


        <div id="kl">

         
            
            <div id="bottom">
                

                    <label for="photo"><p id="plus">+</p></label>


                    <center>
                        <div id="imgselected">

                            <img  id="im" src="#">

                            <form action="return.php" method="post" autocomplete="off"  enctype="multipart/form-data">
                                <button type="submit" id="se" name="send2">Send</button>
                                <input type="file" id="photo" name="photo" style="display: none;" onchange="readURL(this)">
                            </form>

                            <button id="cen" onclick="cen()">Cencel</button>
                        </div>
                    </center>

                <form action="return.php" method="post">
                    <input type="text" id="text" name="text" required>
                    <button type="submit" id="send" name="send"><img src="https://cdn-icons-png.flaticon.com/512/1933/1933005.png"></button>
                </form>

            </div>

            <div id="bruh"></div>

        </div>

    </center>



        <script>
            function readURL(input){
                window.imgselected.style.display="flex";

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                    $('#im').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
                }
            }

            function cen(){
                window.imgselected.style.display="none";
            }
        </script>
</body>
</html>