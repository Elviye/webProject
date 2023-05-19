<?php
    include('header.php');
    if(!isset($_SESSION['username'])){
        header('location: php/loginn.php');
    }
?>
    <div class="container">
            <h1>Workouts Generator</h1>
        <div class="cards">
                <div class="legs">
                    
                    <img src="pics/legpress.jpg" alt="man">
                    <div class="fullcap">
                        <a href="legs.php" ><button value="legs">legs</button></a>
                    </div>
                </div>
                <div class="back">
                    
                    <img src="pics/chest2.jpg" alt="man">
                    <div class="fullcap">
                        <a href="back.php" ><button value="back">back</button></a>
                    </div>
                </div>
                <div class="chest">
                    
                    <img src="pics/chist.jpeg" alt="man">
                    <div class="fullcap">
                        <a href="chest.php" ><button value="chest">chest</button></a>
                    </div>
                </div>
                
        </div>
    </div>
    <hr>
    <div class="pricing">
        <div class="top">
        <h1>WORKOUT COACHING</h1>
        <h1>Plans & Pricing</h1>
        <div class="toggle-btn">
            <span style="margin: 0.8em;">Annually</span>
            <label class="switch">
            <input type="checkbox" id="checbox" onclick="check()" ; />
            <span class="slider round"></span>
            </label>
            <span style="margin: 0.8em;">Monthly</span></div>
        </div>
    
        <div class="package-container">
        <div class="packages">
            <h1>Basic</h1>
            <h2 class="text1">&dollar;9.99</h2>
            <h2 class="text2">&dollar;119.99</h2>
            <ul class="list">
            <li class="first">Expert Level Coach</li>
            <li>Custom Training Plan</li>
            <li>1x/Week Training Plan Adjustments</li>
            <li>1x/Week Workout & File Analysis In TrainingPeaks</li>
            <li>Up To 1 Hour Per Month Of Phone/Video Calls</li>
            </ul>
            <a href="#" class="button button1">Start Now</a>
        </div>
        <div class="packages">
            <h1>Professional</h1>
            <h2 class="text1">&dollar;19.99</h2>
            <h2 class="text2">&dollar;239.99</h2>
            <ul class="list">
            <li class="first">Senior Level Coach</li>
            <li>Custom Training Plan</li>
            <li>Up To 2 Hours Per Month Of Phone/Video Calls</li>
            <li>2x/Week Workout & File Analysis In TrainingPeaks</li>
            <li>Up To 2 Hours Per Month Of Phone/Video Calls</li>
            </ul>
            <a href="#" class="button button2">Start Now</a>
        </div>
        <div class="packages">
            <h1>Master</h1>
            <h2 class="text1">&dollar;29.99</h2>
            <h2 class="text2">&dollar;359.99</h2>
            <ul class="list">
            <li class="first">Premier Level Coach</li>
            <li>Custom Training Plan</li>
            <li>Unlimited Training Plan Adjustments</li>
            <li>Daily Workout & File Analysis In TrainingPeaks</li>
            <li>Unlimited Coach Communication Via Phone/Video</li>
            </ul>
            <a href="#" class="button button3">Start Now</a>
        </div>
        </div>
    </div>
    <script>
            function check() {
        var checkBox = document.getElementById("checbox");
        var text1 = document.getElementsByClassName("text1");
        var text2 = document.getElementsByClassName("text2");
    
        for (var i = 0; i < text1.length; i++) {
        if (checkBox.checked == true) {
            text1[i].style.display = "block";
            text2[i].style.display = "none";
        } else if (checkBox.checked == false) {
            text1[i].style.display = "none";
            text2[i].style.display = "block";
        }
        }
    }
    check();
    </script>
    <hr>
    <section class="guide">
        <div class="guidecard">
            <h1>workout guidelines</h1>
        <div class="guidelines">
                <span>Rest time between sets: there are no
                    rest time! You do the next set when you
                    feel ready and recovered from the
                    previous one. It could take 30 seconds,
                    or up to 2 to 3 minutes!</span><hr>
                <span>Squeeze for One two seconds at the top
                    of each motion when the muscle is fully
                    contracted</span><hr>
                <span>Do not go lower the weight
                    immediately, lower the weight in two
                    seconds.</span><hr>
                <span>Make sure you are squeezing your core,
                    as if you are in plank position during
                    any phase of the workout, this includes
                    straightening your lower back.</span><hr>
                <span>Your arms should not be the ones
                    putting in the work, they are the ones
                    that support, it is your muscle that
                    should be working, work on creating
                    the mind muscle connection.</span><hr>
                <span>During back exercises your elbow
                    should be the one that is pull backward
                    the weight not your arm. During Biceps,
                    keep your elbows stuck to your side and
                    dont rock. In chest, squeeze your chest
                    together at the top of every motion.</span>
    
        </div>
        </div>
    </section>
    
    
    <?php
    include('footer.php');
?>