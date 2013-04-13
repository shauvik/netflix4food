<?php

include_once("common.php");

function login(){
    $userName = $_POST['username'];
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $userName;

    $sql = "SELECT id FROM users where username = '$userName' ";

    $mysqli = get_database_connection();
    $result = $mysqli->query($sql) or die("Error in mysql query"+$mysqli->error);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
           $_SESSION['userId'] = $row['userId'];
        }
    }
    else {
        echo 'NO RESULTS';
    }
    $mysqli->close();
}
login();
