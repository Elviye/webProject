<?php 
    include('../header.php');
?>

<div class="container">
    <div class="card">
    <?php 
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<div class='error'>All fields are required !</div>";
        }elseif($_GET["error"] == "invalidpwd"){
            echo "<div class='error'>Invalid password form !</div>";
        }elseif($_GET["error"] == "usernametaken"){
            echo "<div class='error'>Username already taken !</div>";
        }elseif($_GET["error"] == "success"){
            echo "<div class='error'>Registered Successfully !</div>";
        }elseif($_GET["error"] == "stmtfailed2"){
            echo "<div class='error'>Creation failed !</div>";
        }elseif($_GET["error"] == "invalidpwdform"){
            echo "<div class='error'>weak password !</div>";
        }
    }
?>
        <div class="inputs">
            <form action="../includes/register.in.php" method="post">
                <input type="text" name="username" id="uid" placeholder="username" ><br>
                <input type="text" name="fName" id="fname" placeholder="fullname" ><br>
                <input type="text" name="filliere" placeholder="branch" ><br>
                <input type="password" name="password" id="pwd" placeholder="password" >
                </div>
                <input type="submit" value="Register" name="submit" id="btn-register">
                <span>Already registered ? <a href="login.php" >Log in</a></span>
            </form>
    </div>
</div>




<?php 
    include('../footer.php');
?>