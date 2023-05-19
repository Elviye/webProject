<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fit Factory</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="workout.css"/>
        <link rel="stylesheet" href="../features/feats.css">
        <script src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="../css/Nutrition.css"/>
        <script src="https://kit.fontawesome.com/b985c75594.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,600&family=Bebas+Neue&display=swap');
        </style>
    </head>
    <body>
        <header>
            <div class="navbar">      
            <a href="fit_FACTORY.php" ><div class="logoname">Fit Factory</div></a>
            </div>
            <ul class="hh">
                <?php 
                    if(isset($_SESSION['username'])){
                        echo "<li><a href='\webProject\webProject\workouts.php'>Workouts</a></li>";
                        echo "<li><a href='/webProject/webProject/nutrition/Nutrition.php'>Nutrition</a></li>";
                        echo "<li><a href='/webProject/webProject/features/Features.php '>Features</a></li>";
                    }else{
                        echo "<li><a href='#workouts'>Workouts</a></li>";
                        echo "<li><a href='#Nutrition '>Nutrition</a></li>";
                        echo "<li><a href='#Features '>Features</a></li>";

                    }
                ?>
                    
                    
                    
            </ul>
            <?php
                if(isset($_SESSION['username'])){
                    echo "<div class='email' ><a href='mailto:anassskorsan2004@gmail.com' target='_self' ><button>Contact us</button></a>";
                    echo "<a href='php\signout.php' target='_self' ><button>Signout</button></a></div>";
                }else{
                    echo "<div class='email' ><a href='php/loginn.php' target='_self' ><button>Login</button></a>";
                    echo "<a href='php/loginn.php' target='_self' ><button>SignUP</button></a></div>";
                }
            ?>
            
        </header>