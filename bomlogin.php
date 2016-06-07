<?php
// If form submitted, insert values into the database.
include_once './includes/db_connect.php';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM  eajgjaxzxc.admins WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db_con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        header("Location: b_booked.php");
    } else {
        echo "Invalid username or password go back and try again";
    }
}