<html>
    <head>
        <style>
body {
  height:  100vh; 
  width:  100vw;
  margin:  0 0; 
  display:  flex; 
  align-items:  flex-start; 
  justify-content:  flex-start; 
  background-color:white; 
}
form {
  padding:  40px 30px; 
  background-color: white; 
  display:  flex; 
  flex-direction:  column;
  align-items:  center; 
  padding-bottom:  20px; 
  width:  300px; 
  margin-left:700px;
  margin-top:200px;
}
</style>
</head>
    </html>
<?php 
    include_once 'Header.php';
?>

<section class="singup-form">
<br>

<div class="container">
    <br>
<h2> Login</h2>
    <form action="includes/login.inc.php" method="post"> 
        <input type="text" name="uid" placeholder="Username/Email..."><br>
        <input type="password" name="pwd" placeholder="Password..."><br>
        <button type="submit" name="submit">Log In</button>

    </form>
</div>
    <br>
    <br>
    <br>
    <br>  
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Please fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect login information</p>";
        }
    }
?>  
</section>



<?php 
    include_once 'Footer.php';
?>

