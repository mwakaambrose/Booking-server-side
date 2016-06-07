<?php
session_start();
include_once '../includes/db_connect.php';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $username = stripslashes($username);
    $username = mysqli_real_escape_string($db_con, $username);
    
    //Checking is user existing in the database or not
    $query = "SELECT * FROM eajgjaxzxc.users WHERE username='$username'";
    $result = mysqli_query($db_con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    //echo $rows;
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        echo "1";
    } else {
        $sql = "INSERT INTO bookings.users VALUES (NULL, $username)";
        if (mysqli_query($db_con, $sql)){
            $_SESSION['username'] = $username;
            echo 'Signed Up Successfully';
        }  else {
            die(mysql_error());
        }
    }
} else {   
    echo 'Please provide a mobile money enabled phone number..';
}