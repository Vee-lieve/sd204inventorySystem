<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inventory</title>
<link rel="stylesheet" href="../src/css/stock.css">
<link rel="stylesheet" href="../src/css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
</head>
<body>
<div class="container-lg mx-auto d-block mt-4">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Stock Management</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Stock ID</th>
                        <th>Product ID</th>
                        <th>Supplier ID</th>
                        <th>Stock Date</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Date Deleted</th>
                        <th>Actions</th>
                       

                    </tr>
                </thead>
                <tbody>
                   
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>10-27-20</td>
                        <td>Clothing</td>
                        <td>50</td>
                        <td>1500</td>
                        <td>10-27-20</td>
                        <td>10-27-20</td>
                        <td>10-27-20</td>

                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
            <div class="col-sm-2 mx-auto d-block mt-4" id="add">
                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus" style="font-size: 14px;s"></i> Add New</button>
            </div>
        </div>
    </div>
</div> 


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="../src/js/stock.js"></script>
<script src="../src/js/navbar.js"></script>

<?php include('../src/js/navbar.js'); ?>
</body>
</html>