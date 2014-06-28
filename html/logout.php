<?php
// this sets the cookis to negative amt, causeing it to expire on logout
    $seconds = -10 + time();
// date always takes this parameter to allow php to access it how we want and tells the db to store it for time specified above.
    setcookie(loggedin, date("F jS - g:i a"), $seconds);
// this redirects the user back to the index page after logging out
    header("location:index.php");


?>