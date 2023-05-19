<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Fit Factory - Login/register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="stylesheet" href="../css/login/register.css">
</head>
<body>
<div class="formbg"></div>
<div class="loginform">
  <h1>Welcome</h1>
  <h2>Sign In</h2>
  <?php 
        if(isset($_GET["error"])){
            $error = $_GET["error"];
            if($_GET["error"] == "loggedin"){
                echo "<div class='error'>logged in succesfully !</div>";
            }elseif($error == "wronglogin" || $error == "wrongpwd"){
                echo "<div class='error'>wrong password or username !</div>";
            }elseif($_GET["error"] == "invalidusername"){
                echo "<div class='error'>Invalid user !</div>";
            }elseif($_GET["error"] == "emptyinput"){
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
          }else{
                echo "<div class='error'>Something Went wrong Try Again please !</div>";
            }
        }
    ?>
  <p>New Here? <button class="create" data-function="create">Create an Account</button></p>
  <p>Access as a <a href="../fit_FACTORY.php">guest.</a>
  <div class="formcontent">
      <form action="../includes/login.in.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="username">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="······">
    <input type="submit" name="submit" value="Sign in">
    </form>
  </div>
</div>
  
<div class="createform">
  <h1>Welcome</h1>
  <h2>Sign Up</h2>
  <p>Do you already have an account? <button class="login" data-function="login">Sign In</button></p>
  <div class="formcontent">
      <form action="../includes/register.in.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username" placeholder="username">
    <label for="fullName">fullName</label>
    <input type="text" name="fullName" placeholder="FUllName">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="······">
    <input type="submit" name="submit" value="SignUp">
    </form>
  </div>
</div>

<div class="clear"></div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.6.0.js'></script><script  src="../js/script.js"></script>

</body>
</html>
