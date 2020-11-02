<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Flow</title>
    <link rel="stylesheet" href="../src/css/navbar.css">
    <link rel="stylesheet" href="../src/css/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    
<div class="container-lg mx-auto d-block mt-4">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Orders</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                        <th>Payment Satus</th>
                        <th>Order Status</th>
                        <th>Actions</th>

                       

                    </tr>
                </thead>
                <tbody>
                   
                        <td>1</td>
                        <td>Jocelyn Amancio</td>
                        <td>500</td>
                        <td>Cash</td>
                        <td>Active</td>

                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xf217;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
            <div class="col-sm-2 mx-auto d-block" id="add">
                <button type="button" class="btn btn-info add-new"><i class="fas fa-plus" style="font-size: 14px;"></i> Add New</button>
            </div>
        </div>
    </div>
</div> 



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../src/js/navbar.js"></script>
<script src="../src/js/order.js"></script>


</body>
</html>