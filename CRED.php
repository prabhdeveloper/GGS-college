<?php
session_start();
class CRED
{
    public $get_data_array;
    public $status;
    public $edit_data;
    public $db_connection;

    public function __construct()
    {
        $servername = "localhost";
        $username = "prabh";
        $password = "prabhsingh";
        $dbname = "myDB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $this->connection = $conn;
    }

    public function get_data($email)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM company_details WHERE email='$email'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $get_data_array[] = $row;
            $_SESSION['id'] = $row['ID'];
        }
        return $get_data_array;
    }

    public function insert_data($insert_data_array)
    {
        $conn = $this->connection;

        $pass = $insert_data_array['pass'];
        $confirm_pass = $insert_data_array['confirm_pass'];
        $email = $insert_data_array['email'];

        $select_all = "SELECT COUNT(*) AS count FROM company_details WHERE email='$email'";
        $result = $conn->query($select_all);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        if ($count > 0) {
            $status =  "<div style='margin-top: 10px;color: red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Email already exists!</strong></div>";
            $this->status = $status;
            return $this->status;
        } else {
            if ($pass == $confirm_pass) {
                $Password_encoded = md5($pass);

                $sql = "INSERT INTO company_details (firstname,lastname,company_name,email,pass,address,state,postcode,country,phone,status)VALUES ('" . $insert_data_array['f_name'] . "','" . $insert_data_array['l_name'] . "','" . $insert_data_array['c_name'] . "','" . $insert_data_array['email'] . "','$Password_encoded','" . $insert_data_array['address'] . "','" . $insert_data_array['state'] . "','" . $insert_data_array['postcode'] . "','" . $insert_data_array['country'] . "','" . $insert_data_array['phone'] . "','" . $insert_data_array['status'] . "')";
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['email_id'] = $insert_data_array['email'];
                    header('location: get_data.php');
                    $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>New Record created successfully!</strong></div>";
                    $this->status = $status;
                    return $this->status;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Please re-enter password.</strong></div>";
                $this->status = $status;
                return $this->status;
            }
        }
    }

    public function insert_data_admin($insert_data_array)
    {
        $conn = $this->connection;

        $pass = $insert_data_array['pass'];
        $confirm_pass = $insert_data_array['confirm_pass'];
        $email = $insert_data_array['email'];

        $select_all = "SELECT COUNT(*) AS count FROM company_details WHERE email='$email'";
        $result = $conn->query($select_all);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        if ($count > 0) {
            $status =  "<div style='margin-top: 10px;color: red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Email already exists!</strong></div>";
            $this->status = $status;
            return $this->status;
        } else {
            if ($pass == $confirm_pass) {
                $Password_encoded = md5($pass);

                $sql = "INSERT INTO company_details (firstname,lastname,company_name,email,pass,address,state,postcode,country,phone,status)VALUES ('" . $insert_data_array['f_name'] . "','" . $insert_data_array['l_name'] . "','" . $insert_data_array['c_name'] . "','" . $insert_data_array['email'] . "','$Password_encoded','" . $insert_data_array['address'] . "','" . $insert_data_array['state'] . "','" . $insert_data_array['postcode'] . "','" . $insert_data_array['country'] . "','" . $insert_data_array['phone'] . "','" . $insert_data_array['status'] . "')";
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['email_id'] = $insert_data_array['email'];
                    $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>New Record created successfully!</strong></div>";
                    $this->status = $status;
                    return $this->status;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Please re-enter password.</strong></div>";
                $this->status = $status;
                return $this->status;
            }
        }
    }

    public function change_pass($email, $Password_encoded, $encoded_new_pass)
    {
        $conn = $this->connection;

        $select_all = "SELECT * FROM company_details WHERE email='$email'";
        $result = $conn->query($select_all);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $password = $row['pass'];
                if ($Password_encoded == $password) {
                    $sql = "UPDATE company_details SET pass='$encoded_new_pass' WHERE email='$email'";
                    if ($conn->query($sql) === TRUE) {
                        $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Your password has been changed.</strong></div>";
                        $this->status = $status;
                        return $this->status;
                    } else {
                        $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>An error occurred.</strong></div>";
                        $this->status = $status;
                        return $this->status;
                    }
                } else {
                    $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect password.</strong></div>";
                    $this->status = $status;
                    return $this->status;
                }
            }
        } else {
            $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect email.</strong></div>";
            $this->status = $status;
            return $this->status;
        }
    }

    public function change_pass_admin($email, $Password_encoded, $encoded_new_pass)
    {
        $conn = $this->connection;

        $select_all = "SELECT * FROM admin WHERE email='$email'";
        $result = $conn->query($select_all);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $password = $row['password'];
                if ($Password_encoded == $password) {
                    $sql = "UPDATE company_details SET pass='$encoded_new_pass' WHERE email='$email'";
                    if ($conn->query($sql) === TRUE) {
                        $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Your password has been changed.</strong></div>";
                        $this->status = $status;
                        return $this->status;
                    } else {
                        $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>An error occurred.</strong></div>";
                        $this->status = $status;
                        return $this->status;
                    }
                } else {
                    $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect password.</strong></div>";
                    $this->status = $status;
                    return $this->status;
                }
            }
        } else {
            $status =  "<div style='color:red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect email.</strong></div>";
            $this->status = $status;
            return $this->status;
        }
    }

    public function edit_data($I_d)
    {
        $conn = $this->connection;

        $select_data = "SELECT * FROM company_details WHERE ID=$I_d";
        $result = $conn->query($select_data);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $get_data_array[] = $row;
            }
            return $get_data_array;
        }
    }

    public function edit($edit_data, $I_d)
    {
        $conn = $this->connection;

        $sql = "UPDATE company_details SET firstname='" . $edit_data['f_name'] . "', lastname='" . $edit_data['l_name'] . "', company_name='" . $edit_data['c_name'] . "', phone='" . $edit_data['phone'] . "', postcode='" . $edit_data['postcode'] . "', country='" . $edit_data['country'] . "', address='" . $edit_data['address'] . "', state='" . $edit_data['state'] . "', status='" . $edit_data['status'] . "' WHERE ID='$I_d'";
        $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Record updated successfully!</strong></div>";
            $this->status = $status;
            return $this->status;
        } else {
            $status =  "<div style='z-index: 1;text-align: center;margin-bottom: 0px;'><strong>An error occurred.</strong></div>";
            $this->status = $status;
            return $this->status;
        }
    }

    public function delete_data($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM company_details WHERE id='$id'";
        $conn->query($sql);
    }

    public function active_status()
    {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) AS count FROM company_details WHERE status='Active'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        return $count;
    }

    public function Inactive_status()
    {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) AS count FROM company_details WHERE status='Inactive'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        return $count;
    }

    public function login($email, $Pass_encoded, $checked = NULL)
    {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) AS count FROM company_details WHERE email='$email' AND pass='$Pass_encoded'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        if ($count > 0) {
            if (isset($checked) && !empty($checked)) {
                $cookie_name = "token";
                $cookie_value = $email . " " . $Pass_encoded;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            }
            $_SESSION['email_id'] = $email;
            $_SESSION['counter'] = "empty";
            $_SESSION['time_of_block'] == "";
            header('location: get_data.php');
        } else {
            $status =  "<div style='margin-top: 10px;color: red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect Details</strong></div>";

            if ($_SESSION['counter'] == "empty") {
                $_SESSION['counter'] = 1;
            } else {
                $counter = $_SESSION['counter'];
                $counter++;
                $_SESSION['counter'] = $counter;
            }

            if ($_SESSION['counter'] % 5 == 0) {
                $IP = gethostbyname("localhost");
                date_default_timezone_set('Asia/Kolkata');
                $time_blocked = time();
                $time_of_block  = 5 * 60;
                $sql = "INSERT INTO blocked_ip (Blocked,Time,time_of_block)
                VALUES ('$IP','$time_blocked','$time_of_block')";
                $conn->query($sql);
                $time_for_blocked = $time_blocked + $time_of_block;
                $_SESSION['date_blocked'] = (date("m-d-Y", $time_for_blocked));

                date_default_timezone_set('Asia/Kolkata');
                $_SESSION['time_blocked'] = date('H:i:s', $time_for_blocked);

                header('location: Blocked_IP.php');
            }
            $this->status = $status;
            return $this->status;
        }
    }

    public function admin_login($email, $Pass_encoded, $checked = NULL)
    {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) AS count FROM admin WHERE email='$email' AND password='$Pass_encoded'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
            }
        }
        if ($count > 0) {
            if (isset($checked) && !empty($checked)) {
                $cookie_name = "token_admin";
                $cookie_value = $email . " " . $Pass_encoded;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            }
            $_SESSION['email_admin'] = $email;
            $_SESSION['counter_admin'] = "empty";
            $_SESSION['time_of_block'] == "";
            header('location: home.php');
        } else {
            $status =  "<div style='margin-top: 10px;color: red;z-index: 1;text-align: center;margin-bottom: 0px;'><strong>Incorrect Details</strong></div>";

            if ($_SESSION['counter_admin'] == "empty") {
                $_SESSION['counter_admin'] = 1;
            } else {
                $counter = $_SESSION['counter_admin'];
                $counter++;
                $_SESSION['counter_admin'] = $counter;
            }

            if ($_SESSION['counter_admin'] % 5 == 0) {
                $IP = gethostbyname("localhost");
                date_default_timezone_set('Asia/Kolkata');
                $time_blocked = time();
                $time_of_block  = 5 * 60;
                $sql = "INSERT INTO blocked_ip_admin (Blocked,Time,time_of_block)
                VALUES ('$IP','$time_blocked','$time_of_block')";
                $conn->query($sql);
                $time_for_blocked = $time_blocked + $time_of_block;
                $_SESSION['date_blocked'] = (date("m-d-Y", $time_for_blocked));

                date_default_timezone_set('Asia/Kolkata');
                $_SESSION['time_blocked'] = date('H:i:s', $time_for_blocked);

                header('location: Blocked_IP.php');
            }
            $this->status = $status;
            return $this->status;
        }
    }

    public function admin_username($email)
    {

        $conn = $this->connection;
        $sql = "SELECT * FROM admin WHERE email='$email'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
        }
        return $username;
    }

    public function admin_details()
    {

        $conn = $this->connection;
        $sql = "SELECT * FROM company_details";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $admin_data[] = $row;
        }
        return $admin_data;
    }

    public function block_ip()
    {

        $conn = $this->connection;

        $ip_address = gethostbyname("localhost");
        $select_all = "SELECT * FROM blocked_ip WHERE Blocked='$ip_address'";
        $result = $conn->query($select_all);
        if ($result->num_rows > 0) {
            $blocked_IP_fetch = $result->fetch_assoc();
            $timestamp_blocked = $blocked_IP_fetch['Time'];
            $time_db_wala = $blocked_IP_fetch['time_of_block'];
            $_SESSION['time_of_block'] = $time_db_wala;
            $timestamp_BLOCKED = $timestamp_blocked + $time_db_wala;
            $_SESSION['date_blocked'] = (date("m-d-Y", $timestamp_BLOCKED));
            date_default_timezone_set('Asia/Kolkata');
            $timestamp_present = time();
            $_SESSION['time_blocked'] = date('H:i:s', $timestamp_BLOCKED);

            if ($timestamp_BLOCKED == $timestamp_present || $timestamp_BLOCKED < $timestamp_present) {
                $delete = "DELETE FROM blocked_ip WHERE Blocked='$ip_address'";
                $delete = $conn->query($delete);
                $_SESSION['time_of_block'] == "";
                $_SESSION['counter'] = "empty";
            } else {
                header('location: Blocked_IP.php');
            }
        }
    }

    public function block_ip_admin()
    {

        $conn = $this->connection;

        $ip_address = gethostbyname("localhost");
        $select_all = "SELECT * FROM blocked_ip_admin WHERE Blocked='$ip_address'";
        $result = $conn->query($select_all);
        if ($result->num_rows > 0) {
            $blocked_IP_fetch = $result->fetch_assoc();
            $timestamp_blocked = $blocked_IP_fetch['Time'];
            $time_db_wala = $blocked_IP_fetch['time_of_block'];
            $_SESSION['time_of_block'] = $time_db_wala;
            $timestamp_BLOCKED = $timestamp_blocked + $time_db_wala;
            $_SESSION['date_blocked'] = (date("m-d-Y", $timestamp_BLOCKED));
            date_default_timezone_set('Asia/Kolkata');
            $timestamp_present = time();
            $_SESSION['time_blocked'] = date('H:i:s', $timestamp_BLOCKED);

            if ($timestamp_BLOCKED == $timestamp_present || $timestamp_BLOCKED < $timestamp_present) {
                $delete = "DELETE FROM blocked_ip_admin WHERE Blocked='$ip_address'";
                $delete = $conn->query($delete);
                $_SESSION['time_of_block'] == "";
                $_SESSION['counter'] = "empty";
            } else {
                header('location: Blocked_IP.php');
            }
        }
    }
}
