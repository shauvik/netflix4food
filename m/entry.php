<?php

include_once("common.php");
 error_reporting(E_ALL);
function saveSeller()
{
   $role = $_POST['role'];
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $deliver = $_POST['deliver'];
   $rate = $_POST['rate'];
   $location = $_POST['location'];
   $description = $_POST['description'];
   $userName = $_POST['username'];

   $sql = "INSERT into users (userName, role, name, phone, email, deliver, rate, location, description) VALUES('$userName', '$role', '$name', '$phone', '$email' , $deliver, '$rate', '$location', '$description')";
   $mysqli = get_database_connection();
   $mysqli->query($sql) or die("Error in mysql query");
   $mysqli->close();
}


saveSeller();

function getSeller(){

}