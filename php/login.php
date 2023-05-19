<?php 
    include('header.php')
?>

<div class="container">
    <div class="card">
        
        <form action="../includes/login.in.php" method="post">
            
            <div class="formbg"></div>
            <div class="loginform">
            <h1>Welcome</h1>
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
            <h2>Sign In</h2>
            <p>New Here? <button class="create" data-function="create">Create an Account</button></p>
            <div class="formcontent">
                <label for="email">Email</label>
                <input type="text" name="username" placeholder="admin@demo.com">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="······">
                <input class="button" type="submit" value="login" name="submit" id="btn-login">
            </div>
            </div>
        <div class="clear"></div>
        </form>
    </div>
</div>




<?php 
    include('footer.php');

?>