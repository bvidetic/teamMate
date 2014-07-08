<?php

function get_db_handle2(){
    $username = "root";
    $password = "";
    $hostname = "localhost";

    $conn = new mysqli($hostname, $username, $password, "findTeammate") or die ("could not connect to db");
    return $conn;

}

?>
