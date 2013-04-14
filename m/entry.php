<?php

include_once("common.php");
function saveSeller()
{

    if(username_exists()){
        error_with_message("User already exists.");
        return;
    }

   if(isset($_POST['photo']) && !empty($_POST['photo'])){
       $filePath = save_uploaded_file("photo");
   } else {
       $filePath = '';
   }
   $role = $_POST['role'] ?: "seller";
   $name = $_POST['name'] ?: "";
   $phone = $_POST['phone'] ?: 0;
   $email = $_POST['email'] ?: "";
   $deliver = $_POST['deliver'] ?: -1;
   $rate = $_POST['rate'] ?: "";
   $location = $_POST['location'] ?: "";
   $description = $_POST['description'] ?: "";
   $userName = $_POST['username'] ?:"";


   $sql = "INSERT into users (userName, role, name, phone, email, deliver, rate, location, description, photo_url) VALUES('$userName', '$role', '$name', '$phone', '$email' , $deliver, '$rate', '$location', '$description', '$filePath')";
   $mysqli = get_database_connection();
   $mysqli->query($sql) or die("Error in mysql query");
   $mysqli->close();
//    print "test";
    header("Location: index.php#login-page");
}


saveSeller();

function username_exists()
{
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
    header("Location: index.php?error=$errorMessage#signup-page");
}