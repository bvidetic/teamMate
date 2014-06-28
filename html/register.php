<!-- BRIAN, FIGURE OUT WHY THE ZIP AND PASS ISNT POSTING TO THE DATABASE -->

<?php
    $username = "root";
    $password = "";
    $hostname = "localhost";

    

    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");

    $selected = mysql_select_db("findTeammate", $dbhandle);

        // if(isset($_POST["email"]) && isset($_POST["zip"]) && isset($_POST["password"])){
            $email = $_POST["email"];
            $zip = $_post["zip"];
            $password = $_POST["password"];
        
            mysql_query("INSERT INTO user(email, zip, password) VALUES ('$email', '$zip', '$password')");
            echo("user created successfully");
        // }
        mysql_close();


?>

<html>
    <body>

            <div class="register">
                <h2>Register</h2>    
                <form action="register.php" method="POST">
                <input type="text" name="email" class="email" placeholder="Email"><br>
                <input type="text" name="zip" class="zip" placeholder="Zip Code"><br> 
                <input type="password" name="pass" class="pass" placeholder="Password"><br>
<!--                 <input type="text" name="pass2" class="pass2" placeholder="Confirm"><br>
 -->            <input type="submit" id="register" value="Register"></input>
                    <script>
                        $(document).ready(function(){
                        });
                    </script>
                </form>
            </div>

    </body>
</html>


