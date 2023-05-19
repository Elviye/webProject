<?php


if (isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "db.in.php";
    require_once "functions.php";

    if(emptyInputsL($username, $password) !== false){
        header("location: ../loginn.php?error=emptyinput");
        exit();
    }


    loginUser($conn, $username, $password);

}else{
    header("location: ../php/loginn.php");
        exit();
}