<?php

include_once("common.php");

function saveSeller()
{

   print_r($_POST);
   
   $role = $_POST['role'];
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $deliver = $_POST['deliver'];
   $rate = $_POST['rate'];
   $location = $_POST['location'];
   $description = $_POST['description'];

   // $sql = "INSERT into users (role, name, phone, email, deliver, rate, location, description) VALUES(?, ?, ?, ? ,?, ?, ?, ?)";
   // $mysqli = get_database_connection();
   // $stmt = $mysqli->prepare($sql) or die("Prepare error");
   // $stmt->bind_param($role, $name, $phone, $email, $deliver, $rate, $location, $description) or die("Bind error:".$mysqli->error);
   // $stmt->execute() or die("Mysql exec error:".$mysqli->error);	

   $sql = "INSERT into users (role, name, phone, email, deliver, rate, location, description) VALUES('$role', '$name', '$phone', '$email' , $deliver, '$rate', '$location', '$description')";
   $mysqli = get_database_connection();
   //echo "<br />Query:".$sql;
   $mysqli->query($sql) or die("Error in mysql query");
   $mysqli->close();
}


saveSeller();

function getSeller(){

}