<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    // print_r($post); 
    // exit("now");

    $username = "root";
    $password = "";
    $hostname = "localhost";

    $dbhandle=mysqli_connect($hostname, $username) or die ("could not connect to db");
    mysqli_set_charset($dbhandle, 'utf-8');

?>
