<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $notice=$_POST['notice'];
    $start=$_POST['start'];
    $by=$_POST['by'];




    $not= "INSERT INTO sent (Caseno, Notice, Date_Submitted, Sent) VALUES ('$caseno', '$notice', '$start', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

            ?>
            <script> alert("Notices Sent!!");
                window.location.assign('index.php');
            </script>
            <?php

    }
}
?>

