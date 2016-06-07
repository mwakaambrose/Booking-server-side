<?php
/* 
 * CHECK IF THE USER EXISTS AND USE THE CREDENTIALS TO BOOK
 * A ROOM FOR SOME ONE WHO IS BOOKING.
 */
include_once '../includes/db_connect.php';
header("Content-type:text/javascript");

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $query_string = "SELECT * FROM eajgjaxzxc.users WHERE username=$username";
    $results = mysqli_query($db_con, $query_string);
    $rows = array();
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
}

