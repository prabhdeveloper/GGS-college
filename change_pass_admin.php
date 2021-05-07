<?php
session_start();
include_once('CRED.php');
$status = "";
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_create']) && !empty($_POST['pass_create'])) {
    $email = $_POST['email'];
    $Password_encoded = md5($_POST['pass']);
    $encoded_new_pass = md5($_POST['pass_create']);

    $CRED = new CRED();
    $status = $CRED->change_pass_admin($email, $Password_encoded, $encoded_new_pass);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Change password</title>
    <style>
        body {
            background-color: lightgrey;
        }

        .error {
            color: red;
            font-weight: 100;
            margin-bottom: 0;
        }
    </style>
</head>

<body>

    <img id="back_image" style="width: 50px; float: left;" src="Back1.png" alt="back_image">

    <div class="container">
        <h2 style="text-align: center;">Change Password</h2>
        <form method="post" name="change_pass" class="form-horizontal" action="">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pass">Old Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" placeholder="Old password" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pass_create">New Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass_create" placeholder="New password" name="pass_create">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-outline-secondary">Save</button>
                </div>
            </div>
        </form>
    </div>
    <?php echo $status; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        $("#back_image").click(function() {
            window.location.href = "admin_panel.php";
        });
        $("form[name='change_pass']").validate({

            rules: {
                pass: {
                    required: true,
                },
                pass_create: "required",
                email: {
                    required: true,
                    email: true,
                }
            },

            messages: {
                pass: {
                    required: "*Please provide a password",
                },
                pass_create: "*Please provide a password",
                email: "*Enter a valid email address"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

</html>