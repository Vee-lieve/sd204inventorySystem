<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inventory</title>
<link rel="stylesheet" href="../src/css/supplier.css">
<link rel="stylesheet" href="../src/css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Suppliers</b></h2></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th id="supplier_id">Supplier ID</th>
                        <th id="supplier_name">Supplier Name</th>
                        <th id="supplier_add">Address</th>
                        <th id="supplier_num">Contact Number</th>
                        <th>Actions</th>
                    
                       

                    </tr>
                </thead>
                <tbody>
                   
                        <td>1</td>
                        <td>Dranix Inc.</td>
                        <td>Calbayog City</td>
                        <td>09054178386</td>
                    

                        <td>
                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xf217;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>      
                </tbody>
            </table>
           <center> <div class="col-sm-4" id="add">
           <button type="button" class="btn btn-info add-new"><i class="fas fa-plus" style="font-size: 14px;"></i> Add New</button>
                    </div></center>
        </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="../src/js/supplier.js"></script>
<script src="../src/js/navbar.js"></script>


</body>
</html>