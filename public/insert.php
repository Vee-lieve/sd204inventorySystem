<?php 
    include('../connection/connect.php');
    if (!empty($_POST['user']) && !empty($_POST["pass"]) && !empty($_POST["email"])){
        $user = $_POST]["user"];
        $pass = $_POST["pass"];
        $email = $_POST["email"];
        $unique_id = new MongoDB\BSON\ObjectID;

        $insert_data_array = array(
            '_id' => $unique_id,
            'user' => $user,
            'pass' => $pass,
            'email' => $email
        );

        $connect_arr["insert_data"] ->insert($insert_data_array);
        $connect_arr["driver_connection"] ->executeBulkWrite('inventory.Users', $connect_arr["insert_data"])
        echo "Inserted";
    }
?>