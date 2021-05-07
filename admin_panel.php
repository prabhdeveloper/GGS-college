<?php
include_once('CRED.php');
$status = "";
$email = $_SESSION['email_admin'];

$CRED = new CRED();
$CRED->block_ip_admin();

if (isset($_COOKIE['token_admin']) && !empty($_COOKIE['token_admin'])) {
    $cookie_val = explode(" ", $_COOKIE['token_admin']);
    $email_cookie = $cookie_val['0'];
    $pass_cookie = $cookie_val['1'];
    $CRED = new CRED();
    $status = $CRED->admin_login($email_cookie, $pass_cookie);
}

if (isset($_SESSION['email_admin']) && !empty($_SESSION['email_admin'])) {
    header('location: home.php');
}

if (isset($_POST['login']) && !empty($_POST['login'])) {
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $Pass_encoded = md5($_POST['password']);
        if (isset($_POST['checked']) && !empty($_POST['checked'])) {
            $CRED = new CRED();
            $status = $CRED->admin_login($email, $Pass_encoded, $_POST['checked']);
        }
        $CRED = new CRED();
        $status = $CRED->admin_login($email, $Pass_encoded);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

    <title>Admin Login</title>
</head>

<body>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-3"></div>
            <div align="center" class="col-sm-3">
                <img id="client_img" width="300px" src="client.png" alt="login_image">
            </div>
            <div class="col-sm-3 cont">
                <form name="login_form" method="POST" class="form-signin">
                    <h1 id="login_text">Admin Login</h1>
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
                        <a href="change_pass_admin.php" class="btn btn-default">Forgot Password?</a>
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

    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

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