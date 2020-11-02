<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Test Inventory</title>
</head>
<style>
form{
  width: 450px;
  margin-top: 0.5in;
  height: 280px;
  border: 1px solid black;
  padding: 10px;
}

h5{
  text-align: center;
}
</style>

<body>
<?php require_once('process.php')?>

<?php
  if(isset($_SESSION['message'])): ?>

  <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
      echo $_SESSION['message'];
      unset $_SESSION['message'];

    ?>
      <div>
      <?php endif ?> 


<div class="container">
<?php   

$conn = new mysqli($servername, $username, $password, $db) or die($mysqli_error( $conn));
$result = $mysqli->query('SELECT productID, category, brand FROM  product');
// pre_r($result);
// pre_r($result->fetch_assoc());
?>


<div class="row justify-content-center">

<table class="table">
<thead>
<tr>
    <th>Product ID</th>
    <th>Category</th>
    <th>Brand</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th colspan="2">Action</th>

</tr>

</thead>
<?php
 while ($row = $result->$fetch_assoc());?>
  <tr>
  <td><?php echo $row['productID'];?></td>
  <td><?php echo $row['category'];?></td>
  <td><?php echo $row['brand'];?></td>
  <td><?php echo $row['productName'];?></td>
  <td><?php echo $row['quantity'];?></td>
  <td><?php echo $row['price'];?></td>
  <td>
      <a href="test-inventory.php?edit=<?php echo $row['productID']; ?>"
        class="btn btn-info">Edit</a>
      
        <a href="test-inventory.php?delete=<?php echo $row['productID']; ?>"
        class="btn btn-danger">Delete</a>

  </td>
  </tr>
<?php endwhile; ?>



</table>




</div>

<?php
function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo "</pre>";
}

?>




<div class="row justify-content-center">
<form method="post" action="process.php">
<h5>Add Product Details</h5>
  <div class="form-row">

    <div class="col">
      <input type="hidden" class="form-control" placeholder="Product ID" value="<?php echo $productID; ?>"  name="productID">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Category" value="<?php echo $category; ?>" name="category">
    </div>
  </div>
  <br>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Brand" value="<?php echo $brand; ?>"  name="brand">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Product Name" value="<?php echo $productName; ?>" name="productName">
    </div>
  </div>

  <br>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Quantity" value="<?php echo $quantity; ?>" name="quantity">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Price" value="<?php echo $price; ?>" name="price">
    </div>

    <div class="form-row">
      <?php 
        if($update == true):
      ?>
         <center><button type="submit" class="btn btn-info" name="update">UPDATE</button></center>
        <?php else: ?>
          <div class="form-row"> <center><button type="submit" class="btn btn-primary" name="add">ADD</button></center></div>
        <?php endif;?>
    </div>
  </div>
  <br>
        

</form>
</div>
</div>




 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>