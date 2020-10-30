<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <!-- <script src="report.js"></script> -->
</head>
<title> Shop Report Generation Module </title>
</head>

<body>
    <script>
        console.log(values);
        var chart = BuildChart(labels, values, "Items Sold Over Montlhy (Year 2020)");
    </script>
    <h2 class="align text-center"> Report Generation Module </h2>
    <br><br>
    <div class="chart">
            <canvas id="myChart"></canvas>
    </div>
    <br><br>
    <div class="table-responsive ">
        <table class="table table-bordered table-hover" id="dataTable">
            <thead class="blue">
                <th>Month Of </th>
                <th>Items Sold</th>
                <th> Total Stocks </th>
                <th> Net Sales (Php) </th>
            </thead>
            <tbody>
                <tr>
                    <td>January</td>
                    <td>10</td>
                    <td>200</td>
                    <td>89</td>
                </tr>
                <tr>
                    <td>February</td>
                    <td>25</td>
                    <td>550</td>
                    <td>225</td>
                </tr>
                <tr>
                    <td>March</td>
                    <td>55</td>
                    <td>100</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>April</td>
                    <td>120</td>
                    <td>200</td>
                    <td>1100</td>
                </tr>
                <tr>
                    <td>May</td>
                    <td>60</td>
                    <td>50</td>
                    <td>89</td>
                </tr>
                <tr>
                    <td>June</td>
                    <td>25</td>
                    <td>100</td>
                    <td>225</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>55</td>
                    <td>200</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>August</td>
                    <td>140</td>
                    <td>250</td>
                    <td>1100</td>
                </tr>
                <tr>
                    <td>September</td>
                    <td>200</td>
                    <td>20</td>
                    <td>89</td>
                </tr>
                <tr>
                    <td>October</td>
                    <td>50</td>
                    <td>50</td>
                    <td>225</td>
                </tr>
                <tr>
                    <td>November</td>
                    <td>60</td>
                    <td>20</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>December</td>
                    <td>120</td>
                    <td>50</td>
                    <td>1100</td>
                </tr>
            </tbody>
        </table>
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
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [ // Add custom color borders
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
        return e.itemssold;
    });
    console.log(values);
    var chart = BuildChart(labels, values, "Items Sold Over Montlhy (Year 2020)");
</script>

</html>