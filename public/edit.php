<?php
    include("../connection/connect.php");
    if(isset($_POST["edit_id"])){
        $id = trim($_POST["edit_id"]);
        $edit_arr = array();
        $filter = ['_id' => new MongoDB\BSON\ObjectID($id)];
        $query = new MongoDB\Driver\Query($filter);
        $result = $connect_arr["driver_connection"] ->executeQuery('inventory.Users', $query)
        $fetch = current($result ->toArray());
        $edit_arr = array("user" =>$fetch->user, "pass" =>$fetch->pass, "email" =>$fetch->email, "g"=>$_POST["edit_id"]);
        echo json_encode($edit_arr);
    }
?>