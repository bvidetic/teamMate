<?php
    if(!isset($_COOKIE["loggedin"])){
        header("location:index.php");
    }
?>



<html>
    <body>
        <h2>Welcome to login success page.
 
          <a href="logout.php">Logout</a>


    </body>
</html>


