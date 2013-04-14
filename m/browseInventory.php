<?php

include_once("common.php");

function browseInventory(){

    $sql = "SELECT inventory_id, name, quantity, image_url, organic, unit, price FROM inventory ORDER BY NAME";

    $mysqli = get_database_connection();
    $result = $mysqli->query($sql) or die("Error in mysql query"+$mysqli->error);


    $itemArr = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $item = array();
            $item['inventory_id'] = $row['inventory'];
            $item['name'] = $row['name'];
            $item['quantity'] = $row['quantity'];
            $item['image_url'] = $row['image_url'];
            $item['organic'] = $row['organic'];
            $item['unit'] = $row['unit'];
            $item['price'] = $row['price'];

            $itemArr[]=$item;
        }
    }

    $mysqli->close();

    return json_encode($itemArr);
}