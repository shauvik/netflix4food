<?php

function create_order(){
    $userId = get_current_user();
    $quantity = isset($_POST['quantity']) ? $_POST['quantity']: "";
    $inventoryId = isset($_POST['inventoryId']) ? $_POST['inventoryId']: 0;



    $sql = "INSERT into order (inventory_id, user_id, quantity) VALUES($inventoryId, $userId, $quantity)";
    $mysqli = get_database_connection();
    $mysqli->query($sql) or die("Error in mysql query");
    $mysqli->close();


}

create_order();