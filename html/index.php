<html>
    <body>
<!-- login.php is referencing the page we submit to in php. -->
            <div class="login">
                <h2>Login</h2>  
                <form action="login.php" method="POST">
                    <input type="text" name="email" class="email" placeholder="Email"><br>
                    <input type="password" name="pass" class="pass" placeholder="Password"><br>
                    <br>
                    <input type="submit" id="loginButton" value="Log In"></input>
                    <input type="submit" id="lostPassword" value="Forgot Password"></input>
                        <script>
                            $(document).ready(function(){
                            });
                        </script>
                </form>
            </div>

            <a href="register.php">Register</a>

    </body>
</html>
