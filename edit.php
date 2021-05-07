<?php
include_once('CRED.php');
session_start();
$I_d = $_SESSION['id'];
$Status_update = "";

if ($I_d == "" || $I_d == "null" || $I_d == null) {
    header('location: login.php');
}
if (isset($_POST['save_changes']) && !empty($_POST['save_changes'])) {
    $warning_status =  "<div class='incorrect_details'><strong>Login Details Incorrect. Please try again.</strong></div>";
    if (isset($_POST["f_name"]) && empty($_POST["f_name"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["l_name"]) && empty($_POST["l_name"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["state"]) && empty($_POST["state"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["country"]) && empty($_POST["country"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["email"]) && empty($_POST["email"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["phone"]) && empty($_POST["phone"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["pincode"]) && empty($_POST["postcode"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["address"]) && empty($_POST["address"])) {
        $status =  $warning_status;
    } elseif (isset($_POST["status"]) && empty($_POST["status"])) {
        $status =  $warning_status;
    } else {
        $CRED = new CRED();
        $Status_update = $CRED->edit($_POST, $I_d);
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $CRED = new CRED();
    $CRED->delete_data($_POST['delete']);
    unset($_SESSION['email_id']);
    unset($_SESSION['id']);
    setcookie("token", "", time(), "/");
    header('location: login.php');
}
?>

<head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="login_details.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<?php
$CRED = new CRED();
$get_data_array = $CRED->edit_data($I_d);

$country =  $get_data_array[0]['country'];
$state =  $get_data_array[0]['state'];
$status =  $get_data_array[0]['status'];
$country =  $get_data_array[0]['country'];

$I_D =  $get_data_array[0]['ID'];

$firstname = $get_data_array[0]['firstname'];
if ($firstname == "NULL") {
    $firstname = "";
}
$lastname =  $get_data_array[0]['lastname'];
if ($lastname == "NULL") {
    $lastname = "";
}
$company_name = $get_data_array[0]['company_name'];
if ($company_name == "NULL") {
    $company_name = "";
}
$phone = $get_data_array[0]['phone'];
if ($phone == "NULL") {
    $phone = "";
}
$postcode = $get_data_array[0]['postcode'];
if ($postcode == "NULL") {
    $postcode = "";
}
$address = $get_data_array[0]['address'];
if ($address == "NULL") {
    $address = "";
}

echo "<script>$(document).ready(function(){
            $('#" . $state . "').attr('selected','true');
            });</script>";

echo "<script>$(document).ready(function(){
            $('#" . $status . "').attr('selected','true');
            });</script>";

echo "<script>$(document).ready(function(){
            $('#" . $country . "').attr('selected','true');
            });</script>";
?>

<body>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-1">
                <a href="get_data.php"><img style='width: 47px;' src='Back1.png'></a>
            </div>
            <div class="col-sm-4">
            </div>
            <div align="center" class="col-sm-2">
                <label class="header">Edit Details</label>
            </div>
            <div class="col-sm-5">
            </div>
        </div>
    </div>
    <div id="form_div" class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <form style="background-color: #efefef;padding: 10px;" action="" method="post" name="edit_data">
                    <table width="100%" style="border: 3px solid lightgrey;border-radius: 5px;" class="table table-bordered">
                        <tbody>
                            <tr class="table_row">
                                <td class="fieldlabel">Firstname</td>
                                <td class="fieldarea"><input type="text" class="form-control" autocomplete="off" name="f_name" id="f_name" value="<?php echo $firstname ?>" required></td>
                                <td class="fieldlabel">Lastname</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="l_name" id="l_name" value="<?php echo $lastname ?>" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Company Name</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="c_name" id="c_name" value="<?php echo $company_name ?>" required></td>
                                <td class="fieldlabel">Phonenumber</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="tel" id="phone" name="phone" inputmode="numeric" minlength="10" maxlength="10" value="<?php echo $phone ?>" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Postcode</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="postcode" id="postcode" minlength="6" maxlength="6" value="<?php echo $postcode ?>" required></td>
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
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Address</td>
                                <td class="fieldarea"><input class="form-control" autocomplete="off" name="address" type="text" id="address" value="<?php echo $address ?>" required></td>
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
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Status</td>
                                <td class="fieldarea">
                                    <select class="form-control select-inline" id="status" name="status" required>
                                        <option id="active" value="active">Active</option>
                                        <option id="inactive" value="inactive">Inactive</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="float: left;width: 50%;" class="btn-container">
                        <input style="background-color: #565352;margin-right: 5px;float: right;" type="submit" name="save_changes" value="Save Changes" class="btn btn-primary">
                    </div>
                    <!-- Button trigger modal -->
                    <button style="background-color: #cf362b;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="margin-left: 70px;font-size: 18px;" class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete record ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <button style="width: 16%;" name="delete" type="submit" value="<?php echo $I_D ?>" class="btn btn-primary">Yes</button>
                                        <button style="width: 16%;" type="button" data-dismiss="modal" class="btn btn-primary">No</button>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    echo $Status_update;
    ?>
</body>

<script>
    $(document).ready(function() {
        $("form[name='edit_data']").validate({

            rules: {
                f_name: "required",
                l_name: "required",
                c_name: "required",
                postcode: {
                    required: true,
                    number: true
                },
                phone: {
                    required: true,
                    number: true
                },
                address: "required"
            },

            messages: {
                f_name: "*This field is required.",
                l_name: "*This field is required.",
                c_name: "*This field is required.",
                phone: "*Invalid type",
                postcode: "*Invalid type",
                address: "*This field is required.",
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>

</html>