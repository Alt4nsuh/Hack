<?php
    // Start the session
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <meta charset="UTF-8" />
        <title>Side Menu Bar | By Code Info </title>
        <link rel="stylesheet" href="stylee.css"/>
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
            * {
              box-sizing: border-box;
            }
            
            /* Create two equal columns that floats next to each other */
            .column1 {
              float: left;
              width: 50%;
              padding: 100-0px;
              height: 300px; /* Should be removed. Only for demonstration */
            }
            .baruun_suga
            {
                /* padding: 50%;
                margin: 50%; */
                margin-top:0;
                margin-bottom: 20%;
                margin-left: 62.5%;
                margin-right: 20%;
            }
            .column {
              float: left;
              width: 50%;
              padding: 10px;
              height: 300px; /* Should be removed. Only for demonstration */
            }
            
            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
            .nemdeg{
            /* position: absolute; */
            width: 668px;
            height:272.5px;
            /* left: 147px;
            top: 504px; */
            background-color: #ffffff;
            }
            
            .yallagch{
                margin-top:20px;
            
            }
            .button
            {
                border: 3px solid #4599D8;
                width:350px;
                height:50px;
                margin:5px;
                border-radius: 5px;
                color: black;
                font-size: 16px;
                cursor: pointer;
                align-items: center;
                background-color: white;
                /* text-align: center; */
            }
            .button:hover{
                background-color: #4599D8;
                color: white;
            }
            h1{
                text-align: center;
            }
            .searchBox {
                transform: translate(-50%,50%);
                background: #4599D8;
                height: 30px;
                border-radius: 50px;
                padding: 10px;
                margin-left: 100px;
            }
            .shuugch{
                 float:right; 
                margin-right: 200px;
            }
            .deed{
                height: 50%;
                display: flex;
                justify-content: center;
                background-color: #ffffff;

                /* width: 100%; */
                overflow-x: scroll; 
            }
            .gallery {
            display: flex;
            flex-wrap: nowrap;
            /* overflow-x: scroll;  */
            }

            .image {
            width: 200px;
            height: auto;
            margin-right: 10px;
            }
            
            </style>
    </head>     
    <body style="background:#474647">
        
        <nav style = "z-index: 9999">
            <ul>
                <li><a href="#" class="logo"><img src = "logo_demo.png" alt=""><span class="nav-item">Хоол домч</span> </a></li>
                <li><a href = "http://127.0.0.1:5501/chatbot/bot.html"><i class="fas fa-comment"></i> <span class="nav-item"> Чатбот </span> </a></li>
                <li><a href = 'index.php'> <i class='fas fa-utensils'></i><span class='nav-item'> Хооллолт </span></a></li>
                <li><a href = "http://localhost:8501"> <i class="fas fa-apple-whole"><img src="fruit.png" alt="apple on the moon" width="25" height="25"></i><span class="nav-item"> Жимс </span></a></li>";
                <?php
                if(isset($_SESSION["cus_id"])){
               echo "<li><a href = 'contact1.php'><i class='fas fa-user'></i><span class='nav-item'> Хэрэглэгч </span> </a></li>";
               echo "<li><a href = 'includes/logout.inc.php'> <i class='fas fa-apple-whole'><img src='logout.png' alt='logout on the moon' width='25' height='25'></i><span class='nav-item'> Гарах </span> </a></li>";
            }
                    else{
               echo "<li><a href = 'login.php'> <i class='fas fa-apple-whole'><img src='logout.png' alt='logout on the moon' width='25' height='25'></i><span class='nav-item'> Нэвтрэх </span> </a></li>";
               echo "<li><a href = 'signup.php'> <i class='fas fa-apple-whole'><img src='logout.png' alt='logout on the moon' width='25' height='25'></i><span class='nav-item'> Бүртгүүлэх </span> </a></li>";
            }
                ?>
            </ul>
        </nav> 
