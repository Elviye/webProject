<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullName = $_POST["fullName"];
    $filliere = "xxxx";

    require_once "db.in.php";
    require_once "functions.php";

    if(emptyInputsR($username, $password, $fullName, $filliere) !== false){
        header("location: ../php/loginn.php?error=emptyinput");
        exit();
    }
    if(invalidPwd($password) !== false){
        header("location: ../php/loginn.php?error=invalidpwd");
        exit();
    }
    if(invalidPwdForm($password) !== false){
        header("location: ../php/loginn.php?error=invalidpwdform");
        exit();
    }
    if(takenUid($username, $password, $fullName, $filliere) !== false){
        header("location: ../php/loginn.php?error=usernametaken");
        exit();
    }
    createUser($conn, $username, $password, $fullName);
}else{
    header("location: ../php/loginn.php");
}