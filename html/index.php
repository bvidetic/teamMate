<!DOCTYPE html>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <main>
        <body>

    <!-- LOGGED IN ------------------------------------------------------------ -->
            <div class="header">
                <h1 class="mainHeader">Welcome to Find a Team-mate!</h1>
                <h2 class="subHeader">Connecting athletes to like-minded athletes!</h2>
                <button id="signinin" class="signinin">Sign In</button>
            </div>
            
<!--        <div class="header">
                <form id="logout" action="index.php" method="POST" id="">
                    <input type="text" name="email" class="email" placeholder="Logged in Email"><br>
                    <button id="logout" class="logout">Logout</button>
                </form>    
            </div> -->


       <!-- LEFT ASIDE --------------------------------------------------------- -->
            <div class= "mainContents">
                <div class="leftAside">
                    <br>
                    <h3>Looking to start a new team?<br>
                        Short on players?<br>
                        Lost a teammate?<br>
                        Find the best fit!
                    </h3>
                    <button id="findPlayers1">Search for Players</button>
                </div>


        <!-- RIGHT ASIDE -------------------------------------------------------- -->
                <div class="rightAside">
                    <br>
                    <h3>Looking to join a team?<br>
                        New to the area?<br>
                        Find the best fit!
                    </h3>
                    <button id="findPlayers2">Search for Teams</button>
                </div>            

        <!-- MIDDLE FLOAT -------------------------------------------------------- -->
                <div class="centerMiddle">            
                    <h3><p>TEAM-MATE:<br>noun: a member of the same team.</p>
                        <p>At find a Team-mate, we match you with a players that may be a good fit based on your team values. It doesn't matter if you're looking for a high caliber player, someone to fill a specific position or just another member who likes to party. This site will help you find the best match.</p>
                    </h3>
                </div>
            </div>
 <!-- REGISTER -------------------------------------------------------------------- -->
            <div class="register">
                <h2>Register</h2>
<!-- action references this page as the registration page....can use whatever you want -->
                <form action="register.php" method="POST">
                    <input type="text" name="email" class="email" placeholder="Email"><br>
                    <input type="text" name="zip" class="zip" placeholder="Zip Code"><br> 
                    <input type="password" name="password" class="password" placeholder="Password"><br>
                    <input type="submit" id="register" value="Register"></input>
                </form>
            </div>

    <!-- LOG IN ------------------------------------------------------------------- -->
            <div class="login">
                <h2>Login</h2>  
                <form action="login.php" method="POST">
                    <input type="text" name="email" class="email" placeholder="Email"><br>
                    <input type="password" name="pass" class="pass" placeholder="Password"><br>
                    <br>
                    <input type="submit" id="loginButton" value="Log In"></input>
                    <input type="text" id="lostPassword" value="Forgot Password"></input>
                </form>
            </div>

    <!-- FORGOT PASSWORD --------------------------------------------------------- -->
            <div class="forgotPassword">
                <h2>Forgot Password</h2>  
                <form action="forgotpass.php" method="POST">
                    <input type="text" name="email" class="email" placeholder="Email"><br>
                    <input type="text" name="zip" class="zip" placeholder="Zip Code"><br>
                    <br>
                    <input type="submit" id="forgotPass" value="Request Password"></input>
                </form>
            </div>







        </body>
    </main>
</html>

<!-- creates a link to the register.php page -->
            <!-- <a href="register.php">Register</a> -->

<!-- you can use this layout to call php parts into your page. -->
<!-- <?php include 'layout.php' ?> -->