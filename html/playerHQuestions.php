<!-- PLAYER H QUESTIONS PHP PAGE  ------------------------------------- -->


<?php

function get_db_handle(){
    $username = "root";
    $password = "";
    $hostname = "localhost";

    $conn = new mysqli($hostname, $username, $password, "findTeammate") or die ("could not connect to db");
    return $conn;

}

?>

