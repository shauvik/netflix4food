<?php
include_once("common.php");

function saveInventory(){

    if(isset($_POST['inventory_id']) && !empty($_POST['inventory_id'])){
        updateInventory();
    } else {
       newInventory();
    }

}

function newInventory(){
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $quantity = $_POST['quantity'] ? $_POST['quantity'] : 0;
    $image_url = save_uploaded_file("image");
    $organic = isset($_POST['organic']) ? $_POST['organic'] : 0;
    $unit = isset($_POST['unit']) ? $_POST['unit'] : "lbs";
    $price = isset($_POST['price']) && !empty($_POST['price']) ? $_POST['price'] : 0;
    $user_id = get_current_user_id();

    if(empty($name) || empty($price)) {
        error_with_message("Name and price is required.");
        exit;
    }

    $sql = "INSERT INTO inventory (name, quantity, image_url, organic, unit, price, user_id) VALUES('$name', $quantity, '$image_url', $organic, '$unit', $price, $user_id)";
    $mysqli = get_database_connection();
    $mysqli->query($sql) or die("Error in mysql query");
    $mysqli->close();

    success_message("Added Inventory Item");
    exit;
}

function updateInventory(){

    $inventory_id = $_POST['inventory_id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $image_url = $_POST['image_url'];
    $organic = $_POST['organic'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $user_id = get_current_user_id();

    $sql = "UPDATE inventory SET name = '$name',  quantity = $quantity,  image_url = '$image_url', organic='$organic', unit = '$unit', price = $price, user_id=$user_id) WHERE inventory_id=$inventory_id";

    $mysqli = get_database_connection();
    $mysqli->query($sql) or die("Error in mysql query");
    $mysqli->close();
}


function error_with_message($msg){
    $errorMessage = urlencode($msg);
    header("Location: home.php?error=$msg");
}


function success_message($msg){
    $errorMessage = urlencode($msg);
    header("Location: home.php?msg=$msg");
}

saveInventory();