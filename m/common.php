<?php
/**
 * Created by IntelliJ IDEA.
 * User: gewthen
 * Date: 4/13/13
 * Time: 11:58 AM
 * To change this template use File | Settings | File Templates.
 */


function get_database_connection() {
    $mysqli = new mysqli('mysql.shauvik.com', 'atsw_user', 'JE#9nWHh', 'atlsw_db');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $mysqli;
}