<?php

include_once("common.php");
function saveSeller() {


    $role = isset($_POST['role']) ? $_POST['role'] : "seller";
    $name = isset($_POST['name']) ? $_POST['name']: "";
    $phone = isset($_POST['phone']) ? $_POST['phone']: 0;
    $email = isset($_POST['email']) ? $_POST['email']: "";
    $deliver = isset($_POST['deliver']) ? $_POST['deliver'] : -1;
    $rate = isset($_POST['rate']) ? $_POST['rate'] : "";
    $location = isset($_POST['location']) ? $_POST['location']: "";
    $description = isset($_POST['description']) ? $_POST['description']: "";
    $userName = isset($_POST['username']) ? $_POST['username'] :"";

    if(empty($userName) || empty($email)){
        error_with_message("Username and email is required.");
        return;
    }

    if(username_exists()){
        error_with_message("User already exists.");
        return;
    }


   if(isset($_POST['photo']) && !empty($_POST['photo'])){
       $filePath = save_uploaded_file("photo");
   } else {
       $filePath = '';
   }


   $sql = "INSERT into users (userName, role, name, phone, email, deliver, rate, location, description, photo_url) VALUES('$userName', '$role', '$name', '$phone', '$email' , $deliver, '$rate', '$location', '$description', '$filePath')";
   $mysqli = get_database_connection();
   $mysqli->query($sql) or die("Error in mysql query");
   $mysqli->close();

    header("Location: index.php#login-page");
}


saveSeller();

function username_exists() {
    $userExists = false;
    $userName = $_POST['username'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM users where username LIKE '$userName' OR email LIKE '$email'";
    echo $sql;
    $mysqli = get_database_connection();
    if($result = $mysqli->query($sql)) {
      if ($result->num_rows > 0) {
          $userExists = true;
      }
    }

    $mysqli->close();
    return $userExists;
}

function getSeller(){

}

function error_with_message($msg){
    $errorMessage = urlencode($msg);
    $error = $msg;

    $role = isset($_POST['role']) ? $_POST['role'] : "seller";
    $name = isset($_POST['name']) ? $_POST['name']: "";
    $phone = isset($_POST['phone']) ? $_POST['phone']: 0;
    $email = isset($_POST['email']) ? $_POST['email']: "";
    $deliver = isset($_POST['deliver']) ? $_POST['deliver'] : -1;
    $rate = isset($_POST['rate']) ? $_POST['rate'] : "";
    $location = isset($_POST['location']) ? $_POST['location']: "";
    $description = isset($_POST['description']) ? $_POST['description']: "";
    $userName = isset($_POST['username']) ? $_POST['username'] :"";


    include_once('index.php');
//    header("Location: index.php?error=$errorMessage#signup-page");
}