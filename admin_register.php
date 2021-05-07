 <?php
    include_once('CRED.php');
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

    if (isset($_POST['register'])) {
        $CRED = new CRED();
        $status = $CRED->insert_data_admin($_POST);
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

     <title>Add User</title>
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

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
     <script src="jquery-3.5.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


     <!-- top tab    -->
     <div style="background-color: #a9a9a975;" class="container-fluid">
         <div class="col-md-12 col-sm-12 col-12">
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

     <div class="col-sm-12">
         <div class="row">
             <div class="col-sm-5">
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
                                 <td class="fieldarea"><input type="text" class="form-control" autocomplete="off" name="f_name" id="f_name"></td>
                                 <td class="fieldlabel">Lastname</td>
                                 <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="l_name" id="l_name"></td>
                             </tr>
                             <tr class="table_row">
                                 <td class="fieldlabel">Company Name</td>
                                 <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="c_name" id="c_name"></td>
                                 <td class="fieldlabel">Email</td>
                                 <td class="fieldarea"><input type="email" class="form-control" autocomplete="off" name="email" id="email"></td>
                             </tr>
                             <tr class="table_row">
                                 <td class="fieldlabel">Phonenumber</td>
                                 <td class="fieldarea"><input class="form-control" autocomplete="off" type="tel" id="phone" name="phone" inputmode="numeric" minlength="10" maxlength="10"></td>
                                 <td class="fieldlabel">Postcode</td>
                                 <td class="fieldarea"><input class="form-control" autocomplete="off" type="text" name="postcode" id="postcode" minlength="6" maxlength="6"></td>
                             </tr>
                             <tr class="table_row">
                                 <td class="fieldlabel">Country</td>
                                 <td class="fieldarea">
                                     <select class="form-select" aria-label="Default select example" id="country" name="country">
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
                                 <td class="fieldarea"><input class="form-control" autocomplete="off" name="address" type="text" id="address"></td>
                             </tr>
                             <tr class="table_row">
                                 <td class="fieldlabel">State/Region</td>
                                 <td class="fieldarea">
                                     <select name="state" class="form-select" aria-label="Default select example" id="state">
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
                                     <select class="form-select" aria-label="Default select example" id="status" name="status">
                                         <option id="active" value="Active">Active</option>
                                         <option id="inactive" value="Inactive">Inactive</option>
                                     </select>
                                 </td>
                             </tr>
                             <tr class="table_row">
                                 <td class="fieldlabel">Password</td>
                                 <td class="fieldarea"><input class="form-control" type="password" name="pass" id="pass"></td>
                                 <td class="fieldlabel">Confirm Password</td>
                                 <td class="fieldarea"><input class="form-control" type="password" name="confirm_pass" id="confirm_pass"></td>
                             </tr>
                         </tbody>
                     </table>
                     <center>
                         <div class="btn-container">
                             <input style="background-color: #565352;" type="submit" name="register" value="Submit" class="btn btn-primary">
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
             email: {
                 required: true,
                 email: true
             },
             pass: "required",
             confirm_pass: "required",
         },

         messages: {
             email: "Please enter a valid email address",
             pass: "*This field is required.",
             confirm_pass: "*This field is required.",
         },

         submitHandler: function(form) {
             form.submit();
         }
     });
 </script>

 </html>