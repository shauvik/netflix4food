<?php

function deleteInventory(){

    $inventory_id = $_POST['inventory_id'];
    $sql = "DELETE FROM inventory WHERE inventory_id = $inventory_id";
    $mysqli = get_database_connection();
    $mysqli->query($sql) or die("Error in mysql query");
    $mysqli->close();

}

deleteInventory();