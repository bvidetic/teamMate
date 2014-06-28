<?php
    $username = "root";
    $password = "";
    $hostname = "localhost";

    

    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
// hooks into the database below
    $selected = mysql_select_db("findTeammate", $dbhandle);

    $myemail = $_POST["email"];
    $mypassword = $_POST["pass"];


    $myemail = stripslashes($myemail);
    $mypassword = stripslashes($mypassword);


    $query = "SELECT * FROM user WHERE email='$myemail' and password='$mypassword'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    mysql_close();

    if($count==1){
        $seconds = 120 + time();
        setcookie(loggedin, date("F jS - g:i a"), $seconds);
// CHANGE "loginSuccess.php" to "user.html" page as we want to direct logged in users there        
        header("location:loginSuccess.php");
    }else{
        echo "Incorrect Email or Password";
    }

?>