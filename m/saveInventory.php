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
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $image_url = save_uploaded_file("image");
    $organic = $_POST['organic'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $user_id = get_current_user_id();
    $sql = "INSERT INTO inventory (name, quantity, image_url, organic, unit, price, user_id) VALUES('$name', $quantity, '$image_url', $organic, '$unit', $price, $user_id)";
    echo "SQL:".$sql;
    $mysqli = get_database_connection();
    $mysqli->query($sql) or die("Error in mysql query");
    $mysqli->close();

    header("Location: home.php?msg=Added inventory item#inventory");
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

saveInventory();