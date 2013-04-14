<?php

function viewOrder(){

    $orderId = $_GET['order_id'];
    $sql =
        " SELECT inventory.name, inventory.image_url, inventory.price, orders.quantity "+
        " FROM inventory LEFT JOIN orders on inventory.inventory_id = orders.order_id "+
        " WHERE order.order_id = $orderId" ;

    $mysqli = get_database_connection();
    $result = $mysqli->query($sql) or die("Error in mysql query"+$mysqli->error);


    $itemArr = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $item = array();
            $item['name'] = $row['name'];
            $item['quantity'] = $row['quantity'];
            $item['image_url'] = $row['image_url'];
            $item['price'] = $row['price'];

            $itemArr[]=$item;
        }
    }

    $mysqli->close();

    return json_encode($itemArr);
}