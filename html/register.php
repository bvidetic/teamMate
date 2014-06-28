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
        header("location:user.php");
?>