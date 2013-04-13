<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

function get_database_connection() {
    $mysqli = new mysqli('mysql.shauvik.com', 'atlsw_user', 'JE#9nWHh', 'atlsw_db');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $mysqli;
}


function is_loggedIn(){
    return $_SESSION['loggedIn']===true;
}
