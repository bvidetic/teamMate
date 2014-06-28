<?php
// this checks if the cookie is set at the bottom of login.php. if not it redirects them back to login on index.php
    if(!isset($_COOKIE["loggedin"])){
        header("location:index.php");
    }
?>



<html>
    <body>
        <h2>Welcome to login success page.
<!-- creates the logout button  -->
          <a href="logout.php">Logout</a>


    </body>
</html>


