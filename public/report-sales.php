<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="../src/js/navbar.js"></script>
</head>
<title> Sales Report Generation Module </title>
</head>
<style>
   .container-fluid{
       width: 70rem;
   }
</style>

<body>
    <script>
        console.log(values);
        var chart = BuildChart(labels, values, " Net Sales Over Montlhy (Year 2020)");
    </script>

<div class="container-fluid mx-auto d-block" style="max-width:100%;">
        <h2 class="align text-center"> Sales Report Generation Module </h2>
        <br><br>
        <div class="chart">
            <canvas id="myChart"></canvas>
        </div>
        <br><br>
        <div class="table-responsive ">
            <table class="table table-bordered table-hover max-width:100%" id="dataTable">
                <thead class="blue">
                    <th>Month Of </th>
                    <th>Items Sold </th>
                    <th> Net Sales </th>
                </thead>
                <tbody>
                    <tr>
                        <td>January</td>
                        <td>10</td>
                        <td>5000</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>25</td>
                        <td>2500</td>
                    </tr>
                    <tr>
                        <td>March</td>
                        <td>55</td>
                        <td>6000</td>
                    </tr>
                    <tr>
                        <td>April</td>
                        <td>120</td>
                        <td>10000</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td>60</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>June</td>
                        <td>25</td>
                        <td> 12000</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>55</td>
                        <td>9000</td>
                    </tr>
                    <tr>
                        <td>August</td>
                        <td>140</td>
                        <td>12000</td>
                    </tr>
                    <tr>
                        <td>September</td>
                        <td>200</td>
                        <td>60000</td>
                    </tr>
                    <tr>
                        <td>October</td>
                        <td>50</td>
                        <td>50000</td>
                    </tr>
                    <tr>
                        <td>November</td>
                        <td>60</td>
                        <td>10000</td>
                    </tr>
                    <tr>
                        <td>December</td>
                        <td>120</td>
                        <td>120000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>


<script>
    function BuildChart(labels, values, chartTitle) {
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"], // Our labels
                datasets: [{
                    label: chartTitle, // Name the series
                    data: values, // Our values
                    backgroundColor: [ // Specify custom colors
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 136, 0.2)',
                        'rgba(54, 190, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        
                    ],
                    borderColor: [ // Add custom color borders
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 80, 1)',

                    ],
                    borderWidth: 3 // Specify bar border width
                
                }]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            }
        });
        return myChart;
    }
    // HTML To JSON Script 
    var table = document.getElementById('dataTable');
    var json = []; // first row needs to be headers 
    var headers = [];
    for (var i = 0; i < table.rows[0].cells.length; i++) {
        headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi, '');
    }
    // go through cells 
    for (var i = 1; i < table.rows.length; i++) {
        var tableRow = table.rows[i];
        var rowData = {};
        for (var j = 0; j < tableRow.cells.length; j++) {
            rowData[headers[j]] = tableRow.cells[j].innerHTML;
        }
        json.push(rowData);
    }
    console.log(json);
    // Map json values back to label array
    var labels = json.map(function(e) {
        return e.months;
    });
    console.log(labels);
    // Map json values back to values array
    var values = json.map(function(e) {
        return e.netsales;
    });
    console.log(values);
    var chart = BuildChart(labels, values, "Net Sales Over Monthly (Year 2020)");
</script>


</html>