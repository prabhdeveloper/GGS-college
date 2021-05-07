 <?php
    include_once('CRED.php');
    $CRED = new CRED();
    $admin_data = $CRED->admin_details();

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

    if (isset($_POST['delete']) && !empty($_POST['delete'])) {
        $CRED = new CRED();
        $CRED->delete_data($_POST['delete']);
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
     <title>Add User</title>
     <link rel="stylesheet" href="login_details.css">
     <style>
         body {
             background-color: #efefef;
         }

         #example_filter {
             float: right;
         }

         button:focus {
             box-shadow: none !important;
         }

         thead tr {
             background-color: #131d3b !important;
             color: white;
         }

         .table th {
             padding: 10px !important;
             vertical-align: inherit;
             text-align: center;
         }

         .table td {
             padding: 2px !important;
             vertical-align: inherit;
             text-align: center;
         }

         .tab:focus {
             box-shadow: none !important;
         }

         .tab {
             background-color: #131d3b !important;
             margin: 5px;
             text-decoration: none !important;
             color: white !important;
         }
     </style>
 </head>

 <body>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
     <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>


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

     <table id="example" class="table table-striped" style="width:100%">
         <thead>
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Company Name</th>
                 <th>Email</th>
                 <th>Product/Services</th>
                 <th>Status</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($admin_data as $key => $value) {
                    if ($admin_data[$key]['firstname'] == "") {
                        $admin_data[$key]['firstname'] = "--";
                    }
                    if ($admin_data[$key]['company_name'] == "") {
                        $admin_data[$key]['company_name'] = "--";
                    }
                    $I_D = $admin_data[$key]['ID'];
                ?>
                 <tr>
                     <td><?php echo $admin_data[$key]['ID'] ?></td>
                     <td><?php echo $admin_data[$key]['firstname'] ?></td>
                     <td><?php echo $admin_data[$key]['company_name'] ?></td>
                     <td><?php echo $admin_data[$key]['email'] ?></td>
                     <td>0</td>
                     <?php
                        if ($admin_data[$key]['status'] == "Active") {
                        ?>
                         <td><span style='background-color: #46a546;color:white;'><?php echo $admin_data[$key]['status'] ?></span></td>
                     <?php
                        }
                        if ($admin_data[$key]['status'] == "Inactive") {
                        ?>
                         <td><span style='background-color: #e40f0ff0;color:white;'><?php echo $admin_data[$key]['status'] ?></span></td>
                     <?php
                        }
                        ?>
                     <td><a href='edit_admin.php?id=<?php echo $admin_data[$key]['ID'] ?>'><button style='text-decoration: none;' id='edit_btn' type='button' class='btn btn-link'><i class='fas fa-edit'></i>Edit</button></a>
                         <!-- Button trigger modal -->
                         <button style='text-decoration: none;' id='delete_btn' type='button' class='btn btn-link' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $I_D ?>'>
                             <i class='fas fa-trash-alt'></i>Delete
                         </button>

                         <!-- Modal -->
                         <div class='modal fade' id='exampleModal<?php echo $I_D ?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                             <div class='modal-dialog'>
                                 <div class='modal-content'>
                                     <div class='modal-header'>
                                         <h5 class='modal-title' id='exampleModalLabel<?php echo $I_D ?>'>Are you sure you want to delete record ?</h5>
                                         <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                     </div>
                                     <div class='modal-body'>
                                         <center>
                                             <form action='' method='post'>
                                                 <button name='delete' type='submit' value='<?php echo $I_D ?>' class='btn btn-primary'>Yes</button>
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
                     </td>
                 </tr>
             <?php
                }
                ?>
         </tbody>
     </table>
 </body>
 <script>
     $(document).ready(function() {
         $('#example').DataTable({
             select: true
         });
     });
 </script>

 </html>