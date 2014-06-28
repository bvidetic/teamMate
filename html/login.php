<?php
// this information connects us to the database with our db username, password and ip or local direction
    $username = "root";
    $password = "";
    $hostname = "localhost";

    
// this will handle the connection to the database. hostname, password, username references my db registration
    $dbhandle = mysql_connect($hostname, $username) or die ("could not connect to db");
// hooks into the database. findTeammate is the name of the database. dbhandle references variable above.
    $selected = mysql_select_db("findTeammate", $dbhandle);

// these are the variables that reference the login input name entered in index.php
    $myemail = $_POST["email"];
    $mypassword = $_POST["pass"];

// this protects from mysql injection...protects against hackers
    $myemail = stripslashes($myemail);
    $mypassword = stripslashes($mypassword);

// This will run to check and make sure the info entered is equal to the info in the db. verifies it.
// user references name of table in db. email & password reference variables above, aka fields in the table    
    $query = "SELECT * FROM user WHERE email='$myemail' and password='$mypassword'";
// this holds the results to see if info entered was correct
    $result = mysql_query($query);
// this will make sure we only get 1 result and not more than 1    
    $count = mysql_num_rows($result);
// this closes the connection to mySql after code has run.
    mysql_close();
// verifies there is 1 record in the db that is equal to info entered
    if($count==1){
// this activates the cookie time allowed so hackers cant just got to loginSuccess page for enterance.  
// This determines cookie storeage time for current login user. if they leave site, they will have to login again
        $seconds = 120 + time();
// date always takes this parameter to allow php to access it how we want and tells the db to store it for time specified above.
        setcookie(loggedin, date("F jS - g:i a"), $seconds);
// CHANGE "loginSuccess.php" to "user.html" page as we want to direct logged in users there        
// this references the page we will be directed to if login is successful and a alert if it is wrong
        header("location:loginSuccess.php");
    }else{
        echo "Incorrect Email or Password";
    }

?>