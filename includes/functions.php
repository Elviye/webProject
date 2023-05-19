<?php

function emptyInputsR($username, $password, $fullName, $filliere){
    if(empty($username) || empty($password) || empty($fullName) || empty($filliere)){
        return true;
    }else{
        return false;
    }
}

function invalidPwd($password){
    if(!preg_match("/^[a-zA-Z0-9,@]*$/",$password)){
        return true;
    }else{
        return false;
    }
}

function invalidPwdForm($password){
    if(strlen($password) < 8){
        return true;
    }else{
        return false;
    }
}

function takenUid($conn, $username){
    $sql = "SELECT * FROM `users` WHERE `username` = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "ERROR: ". mysqli_stmt_error($stmt, $conn);
    }
    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $password, $fullName){
    require_once "db.in.php";
    $sql = "INSERT INTO users(username, userPwd, fullName, date_regis) VALUES(? , ? , ? , ?);";
    $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../php/loginn.php?error=stmtfailed2");
        exit();
    }
    $hash = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$username, $hash, $fullName, date("Y-m-d"));
    mysqli_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../php/loginn.php?error=success");
    exit();
    
}

function emptyInputsL($username, $password){
    if(empty($username) || empty($password)){
        return true;
    }else{
        return false;
    }
}


function loginUser($conn, $username, $password){
    $row = takenUid($conn, $username);
    if(!$row){
        header("location: ../php/loginn.php?error=wrongloginn");
        exit();
    }
        $hashed = $row["userPwd"];
        $chkpwd = password_verify($password, $hashed); 
        if($chkpwd){
            session_start();
            $_SESSION["username"]=$username;
            $_SESSION["fullname"]=$row["fullName"];
            header("location: ../fit_FACTORY.php?error=loggedin");
            
        }else{
            header("location: ../php/loginn.php?error=wrongpwd;");
            exit();
        }
    }

function addStudent($conn, $fullname, $module, $hours_missed){
        
        $sql = "INSERT INTO students (full_name, module, hours_missed) VALUES (?, ?, ?)";//
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../attendance.php?error=addFailed");
            exit();
            //die('Error: ' . mysqli_error($conn));
        } else {
            $result = mysqli_query($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $module, $hours_missed);
            mysqli_stmt_execute($stmt);
            header("location: ../attendance.php?error=success");
            exit();
            //echo "Student record added successfully.";
            return $result;
        }
        mysqli_stmt_close($stmt);
    
}


