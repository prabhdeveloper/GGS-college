<?php
include_once('CRED.php');
$status = "";
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    $warning_status =  "<div class='incorrect_details'><strong>Login Details Incorrect. Please try again.</strong></div>";
    if (isset($_POST["f_name"]) && empty($_POST["f_name"])) {
        $status = $warning_status;
    } elseif (isset($_POST["l_name"]) && empty($_POST["l_name"])) {
        $status = $warning_status;
    } elseif (isset($_POST["c_name"]) && empty($_POST["c_name"])) {
        $status = $warning_status;
    } elseif (isset($_POST["email"]) && empty($_POST["email"])) {
        $status = $warning_status;
    } elseif (isset($_POST["phone"]) && empty($_POST["phone"])) {
        $status = $warning_status;
    } elseif (isset($_POST["postcode"]) && empty($_POST["postcode"])) {
        $status = $warning_status;
    } elseif (isset($_POST["state"]) && empty($_POST["state"])) {
        $status = $warning_status;
    } elseif (isset($_POST["address"]) && empty($_POST["address"])) {
        $status = $warning_status;
    } elseif (isset($_POST["pass"]) && empty($_POST["pass"])) {
        $status = $warning_status;
    } elseif (isset($_POST["confirm_pass"]) && empty($_POST["confirm_pass"])) {
        $status = $warning_status;
    } else {
        $CRED = new CRED();
        $status = $CRED->insert_data($_POST);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="login_details.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-5">
                <a href="ggs.php"><img src="Back1.png" alt="back_img" width="50px"></a>
            </div>
            <div align="center" class="col-sm-2">
                <label class="header">Register</label>
            </div>
            <div class="col-sm-5">
            </div>
        </div>
    </div>
    <div id="form_div" class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <form style="background-color: #efefef;padding: 10px;" action="" method="post" name="insert_data">

                    <table style="border: 3px solid lightgrey;border-radius: 5px;" class="table table-bordered">
                        <tbody>
                            <tr class="table_row">
                                <td class="fieldlabel">Firstname</td>
                                <td class="fieldarea"><input type="text" class="form-control" autocomplete="off" name="f_name" id="f_name" required></td>
                                <td class="fieldlabel">Lastname</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="l_name" id="l_name" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Company Name</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="c_name" id="c_name" required></td>
                                <td class="fieldlabel">Email</td>
                                <td class="fieldarea"><input type="email" class="form-control" autocomplete="off" name="email" id="email" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Phonenumber</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="tel" id="phone" name="phone" inputmode="numeric" minlength="10" maxlength="10" required></td>
                                <td class="fieldlabel">Postcode</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="postcode" id="postcode" minlength="6" maxlength="6" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Country</td>
                                <td class="fieldarea">
                                    <select class="form-control select-inline" id="country" name="country" required>
                                        <option id="Afganistan" value="Afganistan">Afghanistan</option>
                                        <option id="Albania" value="Albania">Albania</option>
                                        <option id="Algeria" value="Algeria">Algeria</option>
                                        <option id="American Samoa" value="American Samoa">American Samoa</option>
                                        <option id="Andorra" value="Andorra">Andorra</option>
                                        <option id="Angola" value="Angola">Angola</option>
                                        <option id="Anguilla" value="Anguilla">Anguilla</option>
                                        <option id="India" value="India">India</option>
                                        <option id="Antigua & Barbuda" value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option id="Argentina" value="Argentina">Argentina</option>
                                        <option id="Morocco" value="Morocco">Morocco</option>
                                        <option id="Mozambique" value="Mozambique">Mozambique</option>
                                        <option id="Myanmar" value="Myanmar">Myanmar</option>
                                        <option id="Nambia" value="Nambia">Nambia</option>
                                        <option id="Nauru" value="Nauru">Nauru</option>
                                        <option id="Nepal" value="Nepal">Nepal</option>
                                        <option id="Netherland Antilles" value="Netherland Antilles">Netherland Antilles</option>
                                        <option id="Netherlands" value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option id="Nevis" value="Nevis">Nevis</option>
                                        <option id="New Caledonia" value="New Caledonia">New Caledonia</option>
                                        <option id="New Zealand" value="New Zealand">New Zealand</option>
                                        <option id="Nicaragua" value="Nicaragua">Nicaragua</option>
                                        <option id="Niger" value="Niger">Niger</option>
                                        <option id="Nigeria" value="Nigeria">Nigeria</option>
                                        <option id="Zimbabwe" value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </td>
                                <td class="fieldlabel">Address</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" name="address" type="text" id="address" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">State/Region</td>
                                <td class="fieldarea">
                                    <select name="state" class="form-control input-250 select-inline" id="state">
                                        <option id="Alabama">Alabama</option>
                                        <option id="Alaska">Alaska</option>
                                        <option id="Arizona">Arizona</option>
                                        <option id="Arkansas">Arkansas</option>
                                        <option id="California">California</option>
                                        <option id="Colorado">Colorado</option>
                                        <option id="Georgia">Georgia</option>
                                        <option id="Hawaii">Hawaii</option>
                                        <option id="Idaho">Idaho</option>
                                        <option id="Illinois">Illinois</option>
                                        <option id="Indiana">Indiana</option>
                                        <option id="Iowa">Iowa</option>
                                        <option id="Mississippi">Mississippi</option>
                                        <option id="New York">New York</option>
                                        <option id="North Carolina">North Carolina</option>
                                        <option id="North Dakota">North Dakota</option>
                                        <option id="Washington">Washington</option>
                                        <option id="West Virginia">West Virginia</option>
                                        <option id="Wisconsin">Wisconsin</option>
                                        <option id="Wyoming">Wyoming</option>
                                    </select>
                                </td>
                                <td class="fieldlabel">Status</td>
                                <td class="fieldarea">
                                    <select class="form-control select-inline" id="status" name="status" required>
                                        <option id="active" value="active">Active</option>
                                        <option id="inactive" value="inactive">Inactive</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Password</td>
                                <td class="fieldarea"><input class="form-control" type="password" name="pass" id="pass" required></td>
                                <td class="fieldlabel">Confirm Password</td>
                                <td class="fieldarea"><input class="form-control" type="password" name="confirm_pass" id="confirm_pass" required></td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        <div class="btn-container">
                            <input style="background-color: #565352;" type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <?php
    echo $status;
    ?>
</body>
<script>
    $("form[name='insert_data']").validate({

        rules: {

            f_name: "required",
            l_name: "required",
            email: {
                required: true,
                email: true
            },
            c_name: "required",
            state: "required",
            postcode: {
                required: true,
                number: true
            },
            phone: {
                required: true,
                number: true
            },
            address: "required",
            pass: "required",
            confirm_pass: "required",
        },

        messages: {
            f_name: "*This field is required.",
            l_name: "*This field is required.",
            email: "Please enter a valid email address",
            pass: "*This field is required.",
            confirm_pass: "*This field is required.",
            c_name: "*This field is required.",
            state: "*This field is required.",
            phone: "*Invalid type",
            postcode: "*Invalid type",
            address: "*This field is required.",
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
</script>

</html>