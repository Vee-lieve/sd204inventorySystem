<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Flow</title>
    <link rel="stylesheet" href="../src/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
    .container-fluid {
        width: 70rem
    }

    .head{
        text-align: center;
        margin-top: 2rem;
        font-weight: bold;
        font-size:large;
        font-variant: normal;
       
        
    }

    
</style>

<body>

<div class="container" style="max-width:70%;"> 
     <div class="head ml-5 ml-lg-0">
        <p style="font-family: Georgia, 'Times New Roman', Times, serif;"> Cash Flow Statement </p>
        <p> Quency's Shop </p>
        <p> Month Ended January 31, 2020</p>
    <div>
            <table class="table table-hover">
                <tbody>
                    <tr class="table-active font-weight-bold" >
                        <td>Cash Flow from Operations</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Net Income</td>
                        <td> Php 200,000.00</td>
                    <tr class="table-active" style="font-style: italic;">
                        <td class="table-active"> Additions to Cash</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Depreciations </td>
                        <td> Php 20,000.00 </td>
                    </tr>
                    <tr>
                        <td> Increase in Account Payable </td>
                        <td> Php 10,000.00 </td>
                    </tr>
                    <tr class="table-active" style="font-style: italic;">
                        <td> Substractions from Cash </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Increase in Account Receivable </td>
                        <td class="text-danger"> (Php 20,000.00) </td>
                    </tr>
                    <tr>
                        <td> Increase in Inventory </td>
                        <td class="text-danger"> (Php 30,000.00) </td>
                    </tr>
                    <tr>
                        <td> Net Cash from Operations </td>
                        <td> Php 40,000.00 </td>
                    </tr>
                    <tr class="table-active" style="font-style: italic;">
                        <td> Cash Flow from Investing </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Purchase of Equipment </td>
                        <td class="text-danger"> (Php 5,000.00) </td>
                    </tr>
                    <tr class="font-weight-bold">
                        <td> Cash Flow From Financing</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> Notes Payable </td>
                        <td> Php 7,500.00 </td>
                    </tr>
                    <tr class="font-weight-bold " style="text-decoration: underline;">
                        <td > Cash Flow for Month Ended December 31, 2019</td>
                        <td> Php 42,500.00 </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../src/js/navbar.js"></script>

</body>

</html>