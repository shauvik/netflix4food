<?php

include_once("common.php");
function saveSeller()
{

    if(username_exists()){
        echo "user already exits";
        return;
    }
//
   $filePath = save_uploaded_file("photo");
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
    header("Location: /");
}


saveSeller();

function username_exists()
{
    $userExists = false;
    $userName = $_POST['username'];
    $email = $_POST['email'];

    $sql = "SELECT count(*) FROM users where username LIKE '$userName' OR email LIKE '$email'";
    $mysqli = get_database_connection();
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $userExists = true;
    } else {
        $userExists = false;
    }

    $mysqli->close();
    return $userExists;
}

function getSeller(){

}