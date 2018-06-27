<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $notice=$_POST['notice'];
    $start=$_POST['start'];
    $end=$_POST['end'];




    $not= "INSERT INTO government (Caseno, Notice, Date_Submitted, Date_Expected) VALUES ('$caseno', '$notice', '$start', '$end')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

            ?>
            <script> alert("Notice Sent to Government Printers!!");
                window.location.assign('index.php');
            </script>
            <?php

    }
}
?>

