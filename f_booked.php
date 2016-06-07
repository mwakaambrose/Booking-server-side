<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bookings | Free Zone Booked</title>
        <link href="hotelstyles/style.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="header">
            <h2>Hotel Free Zone</h2>
        </div>
        <div class="rooms">
            <h3>Booked Rooms</h3>
            <h5>Call the Numbers to follow up on the on the persons that booked.</h5><br/><br/>           
            
            <?php
            $con = mysqli_connect("127.0.0.1", "eajgjaxzxc", "jdBErKN6rA", "eajgjaxzxc") or die("Failed to connect");
            $k_sql = "SELECT * FROM eajgjaxzxc.rooms WHERE hotel LIKE '%free%' AND status = 1";
            $k_result = mysqli_query($con, $k_sql) or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($k_result, MYSQLI_ASSOC)) {
                echo '<table>';
                echo '<tr>';
                echo '<td>';
                echo $row['id'];
                echo '</td>';
                echo '<td>';
                echo $row['roomtype'];
                echo '</td>';
                echo '<td>';
                echo $row['price'];
                echo '</td>';
                echo '<td>';
                echo $row['occupantnumber'];
                echo '</td>';
                echo '</tr>';
                echo '</table>';
            }
            ?>
        </div>
    </body>
</html>
