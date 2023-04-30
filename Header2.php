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
            .form-style-3{
                    max-width: 450px;
                    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                    align-items: center;
                }
                .form-style-3 label{
                    display:block;
                    margin-bottom: 10px;
                }
                .form-style-3 label > span{
                    float: left;
                    width: 400px;
                    color: #F072A9;
                    font-weight: bold;
                    font-size: 13px;
                    text-shadow: 1px 1px 1px #fff;
                }
                .form-style-3 fieldset{
                    border-radius: 10px;
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    margin: 15px 0px 10px 550px;
                    border: 1px solid #FFD2D2;
                    padding: 20px;
                    background: #FFF4F4;
                    box-shadow: inset 0px 0px 15px #FFE5E5;
                    -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
                    -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
                }
                .form-style-3 fieldset legend{
                    color: #FFA0C9;
                    border-top: 1px solid #FFD2D2;
                    border-left: 1px solid #FFD2D2;
                    border-right: 1px solid #FFD2D2;
                    border-radius: 5px 5px 0px 0px;
                    -webkit-border-radius: 5px 5px 0px 0px;
                    -moz-border-radius: 5px 5px 0px 0px;
                    background: #FFF4F4;
                    padding: 0px 8px 3px 8px;
                    box-shadow: -0px -1px 2px #F1F1F1;
                    -moz-box-shadow:-0px -1px 2px #F1F1F1;
                    -webkit-box-shadow:-0px -1px 2px #F1F1F1;
                    font-weight: normal;
                    font-size: 12px;
                }
                .form-style-3 textarea{
                    width:250px;
                    height:100px;
                }
                .form-style-3 input[type=text],
                .form-style-3 input[type=date],
                .form-style-3 input[type=datetime],
                .form-style-3 input[type=number],
                .form-style-3 input[type=search],
                .form-style-3 input[type=time],
                .form-style-3 input[type=url],
                .form-style-3 input[type=email],
                .form-style-3 select, 
                .form-style-3 textarea{
                    border-radius: 3px;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border: 1px solid #FFC2DC;
                    outline: none;
                    color: #F072A9;
                    padding: 5px 8px 5px 8px;
                    box-shadow: inset 1px 1px 4px #FFD5E7;
                    -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
                    -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
                    background: #FFEFF6;
                    width:50%;
                }
                .form-style-3  input[type=submit],
                .form-style-3  input[type=button]{
                    background: #28cef3;
                    border: 1px solid #C94A81;
                    padding: 5px 15px 5px 15px;
                    color: #FFCBE2;
                    box-shadow: inset -1px -1px 3px #FF62A7;
                    -moz-box-shadow: inset -1px -1px 3px #FF62A7;
                    -webkit-box-shadow: inset -1px -1px 3px #FF62A7;
                    border-radius: 3px;
                    border-radius: 3px;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;	
                    font-weight: bold;
                }
                .required{
                    color:red;
                    font-weight:normal;
                }
            </style>
    </head>    
    <body style="background:#474647">
        
        <nav>
            <ul>
                <li><a href="#" class="logo"><img src = "logo_demo.png" alt=""><span class="nav-item">Хоол домч</span> </a></li>
                <li><a href = "http://localhost:8501"> <i class="fas fa-home"></i> <span class="nav-item"> Нүүр хуудас </span> </a></li>
                <li><a href = "http://127.0.0.1:5501/chatbot/bot.html"><i class="fas fa-comment"></i> <span class="nav-item"> Чатбот </span> </a></li>
                <li><a href = 'index.php'> <i class='fas fa-utensils'></i><span class='nav-item'> Хооллолт </span></a></li>
                <li><a href = "#"> <i class="fas fa-apple-whole"><img src="fruit.png" alt="apple on the moon" width="25" height="25"></i><span class="nav-item"> Жимс </span></a></li>";
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
