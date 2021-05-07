<?php
include_once('CRED.php');
session_start();
$email = $_SESSION['email_id'];

if ($email == "" || $email == null || $email == "null") {
    header('location: login.php');
}
if (isset($_POST['delete']) && !empty($_POST['delete'])) {
    $CRED = new CRED();
    $CRED->delete_data($_POST['delete']);
    unset($_SESSION['email_id']);
    unset($_SESSION['id']);
    setcookie("token", "", time(), "/");
    header('location: login.php');
}
if (isset($_POST['logout']) && !empty($_POST['logout'])) {
    unset($_SESSION['email_id']);
    unset($_SESSION['id']);
    setcookie("token", "", time(), "/");
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Get Data</title>
    <script src='jquery-3.5.1.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='login_details.css'>
</head>

<?php
$CRED = new CRED();
$get_data = $CRED->get_data($email);
$I_D = $get_data[0]['ID'];
?>
<div style="height: 52px;" class="col-sm-12">
    <div class="row">
        <div class="col-sm-1">
            <!-- Button trigger modal -->
            <button id='logout_button' type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><img class="logout_img" src="logout1.png" width="50px"></button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="margin-left: 130px;" class="modal-title" id="exampleModalLongTitle">Are you sure you want to logout ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <center>
                                <div>
                                    <form style="width: fit-content;" action="" method="POST">
                                        <button style="margin-right: 10px;float: left;" name="logout" value="logout" type="submit" class="btn btn-primary">Yes</button>
                                        <button style="width: fit-content;" type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                    </form>
                                </div>
                            </center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="center" class="col-sm-4">
        </div>
        <div align="center" class="col-sm-2">
            <label class="header">Login Info.</label>
        </div>
        <div class="col-sm-5">
        </div>
    </div>
</div>
<div id="form_div" class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <form style="background-color: #efefef;padding: 10px;" action="" method="post" name="insert_data">

                <table width="100%" style="border: 3px solid lightgrey;border-radius: 5px;" class="table table-bordered">
                    <tbody>
                        <tr class="table_row">
                            <td class="fieldlabel">Firstname</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['firstname'] ?></div>
                            </td>
                            <td class="fieldlabel">Lastname</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['lastname'] ?></div>
                            </td>
                        </tr>
                        <tr class="table_row">
                            <td class="fieldlabel">Company Name</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['company_name'] ?></div>
                            </td>
                            <td class="fieldlabel">Email</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['email'] ?></div>
                            </td>
                        </tr>
                        <tr class="table_row">
                            <td class="fieldlabel">Address</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['address'] ?></div>
                            </td>
                            <td class="fieldlabel">State</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['state'] ?></div>
                            </td>
                        </tr>
                        <tr class="table_row">
                            <td class="fieldlabel">Postcode</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['postcode'] ?></div>
                            </td>
                            <td class="fieldlabel">Country</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['country'] ?></div>
                            </td>
                        </tr>
                        <tr class="table_row">
                            <td class="fieldlabel">Phone Number</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['phone'] ?></div>
                            </td>
                            <td class="fieldlabel">Status</td>
                            <td class="fieldarea">
                                <div class="form-control"><?php echo $get_data[0]['status'] ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="float: left;width: 50%;" class="btn-container">
                    <a href="edit.php"><input id="edit" type="button" value="Edit" class="btn btn-primary"></a>
                </div>
                <div style="float: right;width: 50%;" class="btn-container">
                    <!-- Button trigger modal -->
                    <button style="background-color: #cf362b;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $I_D ?>">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter<?php echo $I_D ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="margin-left: 110px;" class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete record ?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <button style="width: 16%;" name="delete" type="submit" value="<?php echo $I_D ?>" class="btn btn-primary">Yes</button>
                                        <button style="width: 16%;" type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</html>