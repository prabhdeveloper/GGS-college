<?php
include_once('CRED.php');
$CRED = new CRED();
$active = $CRED->active_status();
$inactive = $CRED->Inactive_status();
session_start();
$admin_name = $CRED->admin_username($_SESSION['email_admin']);
$status = "";

$email = $_SESSION['email_admin'];
if ($email == null || $email == "" || $email == "null") {
    header('location: admin_panel.php');
}

if (isset($_POST['logout'])) {
    unset($_SESSION['email_admin']);
    unset($_COOKIE['token_admin']);
    setcookie("token_admin", "", time(), "/");
    header('location: admin_panel.php');
}

if (isset($_POST['home'])) {
    header('location: home.php');
}
if (isset($_POST['list_user'])) {
    header('location: admin_data.php');
}
if (isset($_POST['add_user'])) {
    header('location: admin_register.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/fcd88ec6a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login_details.css">
    <style>
        body {
            background-color: #efefef;
        }

        .tab {
            background-color: #131d3b !important;
            margin: 5px;
            text-decoration: none !important;
            color: white !important;
        }

        .tab:focus {
            box-shadow: none !important;
        }
    </style>
</head>

<body>

    <!-- top tab    -->
    <div style="background-color: #a9a9a975;" class="container-fluid">
        <div align="center" class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div align="center" class="col-md-4">
                    <form action="" method="post">
                        <ul style="width: fit-content;" class="nav nav-pills">
                            <li class="nav-item">
                                <button class="nav-link active tab" aria-current="page" href="#" type="submit" name="home">Home</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active tab" aria-current="page" href="#" type="submit" name="list_user">List User</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active tab" aria-current="page" href="#" type="submit" name="add_user">Add User</button>
                            </li>
                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <button type='button' class='btn btn-link tab' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                    Logout
                                </button>

                                <!-- Modal -->
                                <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='exampleModalLabel'>Are you sure you want to logout ?</h5>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                <center>
                                                    <form action='' method='post'>
                                                        <button name='logout' type='submit' class='btn btn-primary'>Yes</button>
                                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
                                                    </form>
                                                </center>
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                                <button type='button' class='btn btn-primary'>Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div align="center" class="col-md-12">
            <span style="font-size: 30px;">Welcome #</span><span style="font-size: 30px;background-color: azure;"><?php echo $admin_name ?></span>
        </div>
    </div>

    <div style="padding: 30px;" class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <span style="font-size: 20px;">Active Clients =></span><span style="font-size: 20px;background-color: azure;"><?php echo $active ?></span>
                </div>
                <div class="col-md-6">
                    <span style="font-size: 20px;">Inactive Clients =></span><span style="font-size: 20px;background-color: azure;"><?php echo $inactive ?></span>
                </div>
            </div>
        </div>
    </div>

    <!--     <div style="height: 70px;"></div>
 -->
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div align="center">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div align="center" id="piechart"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Active', <?php echo $active ?>],
                ['Inactive', <?php echo $inactive ?>],
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'Status',
                'width': 550,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [1, 2, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "red",
                    fill: true
                }, {
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "green",
                    fill: true
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                select: true
            });
        });
    </script>
</body>

</html>