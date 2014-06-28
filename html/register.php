<!-- BRIAN, FIGURE OUT WHY THE ZIP AND PASS ISNT POSTING TO THE DATABASE -->

<?php
// this information connects us to the database with our db username, password and ip or local direction
    $username = "root";
    $password = "";
    $hostname = "localhost";

    
// this will handle the connection to the database. hostname, password, username references my db registration
    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
// hooks into the database. findTeammate is the name of the database. dbhandle references variable above.
    $selected = mysql_select_db("findTeammate", $dbhandle);

// this doesnt work. its supposed to verify all three fields are filled out. when working it needs to be above the variable below, right here.
        // if(isset($_POST["email"]) && isset($_POST["zip"]) && isset($_POST["password"])){
// these are the variables that reference the register input name entered in html below
            $myemail = $_POST["email"];
            $myzip = $_POST["zip"];
            $mypassword = $_POST["password"];
// tells page to insert data into user table. fields in the table, the values of the variables created above to be inserted in the db.
            mysql_query("INSERT INTO user(email, zip, password) VALUES ('$myemail', '$myzip', '$mypassword')");
            // echo("user created successfully");
        // }
        mysql_close();
?>

<html>
    <body>

            <div class="register">
                <h2>Register</h2>
<!-- action references this page as the registration page....can use whatever you want -->
                <form action="register.php" method="POST">
                    <input type="text" name="email" class="email" placeholder="Email"><br>
                    <input type="text" name="zip" class="zip" placeholder="Zip Code"><br> 
                    <input type="password" name="password" class="password" placeholder="Password"><br>
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


