<?php
include_once '../includes/db_connect.php';
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = $_GET['username'];
    //Checking is user existing in the database or not
    $query = "UPDATE eajgjaxzxc.rooms SET status = 1, occupantnumber = '$user' WHERE rooms.id = $id";
    if(mysqli_query($db_con, $query)){
        echo 'Booked Successfully'; 
    }  else {
         die(mysqli_error($db_con));
    }
} else {
    echo 'Error occured..';
}

