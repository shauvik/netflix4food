<?php

include_once("common.php");

function login(){
    global $_SESSION;

    $userName = $_POST['username'];

    if(empty($userName) || empty($_POST['password'])){
        error_with_message("User Name or Password Not Specified");
        return;
    }


    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $userName;
    $sql = "SELECT id, role FROM users where username = '$userName' ";

    $mysqli = get_database_connection();
    $result = $mysqli->query($sql) or die("Error in mysql query"+$mysqli->error);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $_SESSION['userId'] = $row['id'];
            $_SESSION['role'] = $row['role'];
        }

        login_success();
    }
    else {
        // login did not work
       error_with_message("User Not Found");
       return;
    }
    $mysqli->close();
}

function login_success(){
    // goto another page
    header("Location: home.php");
}

function error_with_message($msg){
    $errorMessage = urlencode($msg);
    header("Location: index.php?error=$errorMessage#login-page");
}

if(is_loggedIn()){
  // go to inventory page
    header("Location: home.php");
} else {
  login();
}

