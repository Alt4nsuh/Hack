<?php

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';

    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email,  $pwd,$pwdRepeat) != false){
        header("location: ../signup.php?error=emptyInput");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?error=passwordsDontMatch");
        exit();
    }
    if(UidExists($conn, $name, $email) != false){
        header("location: ../signup.php?error=usernameTaken");
        exit();
    }

    createUser($conn, $name, $email,$pwd, $pwdRepeat);
}
else{
    header("location: ../signup.php");
    exit();
}