<?php
include_once('CRED.php');
$status = "";
$email = $_SESSION['email_id'];

$CRED = new CRED();
$CRED->block_ip();

if (isset($_COOKIE['token']) && !empty($_COOKIE['token'])) {
    $cookie_val = explode(" ", $_COOKIE['token']);
    $email_cookie = $cookie_val['0'];
    $pass_cookie = $cookie_val['1'];
    $CRED = new CRED();
    $status = $CRED->login($email_cookie, $pass_cookie);
}

if (isset($_SESSION['email_id']) && !empty($_SESSION['email_id'])) {
    header('location: get_data.php');
}

if (isset($_POST['login']) && !empty($_POST['login'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $Pass_encoded = md5($_POST['password']);
        if (isset($_POST['checked']) && !empty($_POST['checked'])) {
            $CRED = new CRED();
            $status = $CRED->login($email, $Pass_encoded, $_POST['checked']);
        }
        $CRED = new CRED();
        $status = $CRED->login($email, $Pass_encoded);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            background-color: aliceblue !important;
        }
    </style>
</head>

<body>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3">
                <a href="ggs.php"><img src="Back1.png" alt="back_img" width="50px"></a>
            </div>
            <div align="center" class="col-sm-3">
                <img id="client_img" width="300px" src="client.png" alt="login_image">
            </div>
            <div class="col-sm-3 cont">
                <form name="login_form" method="POST" class="form-signin">
                    <h1 id="login_text">Login</h1>
                    <div class="form-group">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" name="email" id="inputEmail" class="form-control" autocomplete="off" placeholder="Email address" required="" autofocus="">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control" autocomplete="off" placeholder="Password" required="">
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" name="checked" value="remember-me"> Remember me
                        </label>
                    </div>
                    <div style="margin-bottom: 10px;" align="center">
                        <input type="submit" class="btn btn-primary" name="login" value="Login">
                        <a href="change_pass.php" class="btn btn-default">Forgot Password?</a>
                    </div>
                    <div align="center">
                        Click here to
                        <a href="insert.php">Sign up</a>
                    </div>
                    <div align="center">
                        <?php
                        echo $status;
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
<script>
    $(function() {
        $("form[name='login_form']").validate({

            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: "required",
                password: {
                    required: true,
                }
            },

            messages: {
                email: "*Enter a valid email address",
                password: {
                    required: "*Please provide a password",
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

</html>