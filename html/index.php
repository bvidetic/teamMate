<html>
    <body>
            <div class="login">
                <h2>Login</h2>  
<!-- login.php is referencing the page we submit to in php. under action -->
                <form action="login.php" method="POST">
<!-- type tells db type of info entered, name is type of field for site. -->
                    <input type="text" name="email" class="email" placeholder="Email"><br>
<!-- type password will put a character instead of text so it's hidden in the db -->
                    <input type="password" name="pass" class="pass" placeholder="Password"><br>
                    <br>
<!-- input type tell the site to submit to db -->
                    <input type="submit" id="loginButton" value="Log In"></input>
                    <input type="submit" id="lostPassword" value="Forgot Password"></input>
                        <script>
                            $(document).ready(function(){
                            });
                        </script>
                </form>
            </div>
<!-- creates a link to the register.php page -->
            <a href="register.php">Register</a>

    </body>
</html>
