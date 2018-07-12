<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $serial=$_POST['serial'];
    $date=$_POST['dateiss'];
    $by=$_POST['by'];




    $not= "INSERT INTO registrar (Caseno, Serial, Date_Issued, Receiver) VALUES ('$caseno', '$serial', '$date', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

        ?>
        <script> alert("Notice received!!");
            window.location.assign('index.php');
        </script>
        <?php

    }
}
?>

