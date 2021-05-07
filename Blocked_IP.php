<?php
session_start();
if (isset($_SESSION['time_blocked']) && !empty($_SESSION['time_blocked']) && isset($_SESSION['date_blocked']) && !empty($_SESSION['date_blocked'])) {
    $time_blocked = $_SESSION['time_blocked'];
    $date_blocked = $_SESSION['date_blocked'];
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        p {
            text-align: center;
            font-size: 30px;
            margin-top: 0px;
        }
    </style>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 100px;" class="col-sm-12">
        <div class="col-sm-4">
            <img style="width: 120px;margin-top: 5px;margin-left: 270px;" src="BlockeD.png" alt="Blocked">
        </div>
        <div class="col-sm-6">
            <h1>Blocked Page</h1>
            <br>
            <h4>Your Organisation has blocked access to this page or website.</h4>
        </div>
        <div class="col-sm-2">
            <div id="countdowntimer"><span id="future_date"><span></div>
        </div>
    </div>
    <p id="demo"></p>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("<?php echo "$date_blocked $time_blocked"; ?>").getTime();
        //  alert(countDownDate);
        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = "You can try again in " + days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                window.location.href = 'admin_school.php';
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

</body>

</html>