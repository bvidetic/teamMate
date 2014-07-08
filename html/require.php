<?php
    require('../connect_db.php');
    if (mysqli_ping($dbhandle))
    {
    echo 'MySQL Server'. mysqli_get_server_info($dbhandle);
    'on'.mysqli_get_host_info($dbhandle)
    }