<?php
    include('../connection/connect.php');

    if(isset($_POST["del_id"])){
        $id = $_POST["del_id"];
        $connect_arr["insert_data"] ->delete(['_id' =>new MongoDB\BSON\ObjectID($id)]);
        $connect_arr["driver_connection"] ->executeBulkWrit('inventory.Users', $connect_arr["insert_data"]);
        echo "Deleted";

    }
?>