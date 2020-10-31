<?php
session_start();


$servername = "localhost";
$username = "username";
$password = "password";
$db = "inventory";


$productName = 0;
$update = false;
$category = "";
$brand = "";
$productName = "";
$quantity = "";
$price = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if(isset($_POST['add'])){
    $category = $_POST['category'];
    $brand = $_POST['brand'];
    $productName = $_POST['productName'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $mysqli->query("INSERT INTO product (category, brand, productName, quantity, price,)  VALUES('$category', '$brand', '$productName', '$quantiy', '$price') ") or die($mysqli->error);


    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "Success"

    header('location: test-product.php');

    
}


if(isset($_GET['delete'])){
    $productID = $_GET['delete'];
    $mysqli->query('DELETE FROM product WHERE productID=$productID') or die($mysqli_error());

    
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "Danger";

    header('location: test-product.php');
}


  if(isset($_SESSION['edit'])){
    $productID = $_GET['edit'];
    $update = true;
    $result =  $mysqli->query('SELECT FROM product WHERE productID=$productID') or die($mysqli_error());
    if (count($result)==1){
      $row = $result->fetch_array();
      $category = $row['category'];
      $brand = $row['brand'];
      $productName = $row['productName'];
      $quantity = $row['quantity'];
      $price = $row['price'];

    }
  }


  if(isset($_POST['update'])){
    $productID = $_POST['productId'];
    $category = $_POST['category'];
    $brand = $_POST['brand']
    $productName = $_POST['productName'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $mysqli->query("UPDATE product SET category= '$category', brand= '$brand', productName='$productName', quantity='$quantity', price='$price' WHERE productID='$productID' ") or die($mysqli_error());

    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "warning";

    header('location: test-product.php');
  }



?>
