<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $issued=$_POST['issued'];
    $date=$_POST['dateiss'];
    $expected =$_POST['dateex'];
    $by=$_POST['by'];




    $not= "INSERT INTO grantt (Caseno, Issued_by, Date_Issued, Date_Expected, Receiver) VALUES ('$caseno', '$issued', '$date', '$expected', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

        ?>
        <script> alert("Grant issuance confirmed!!");
            window.location.assign('index.php');
        </script>
        <?php

    }
}
?>

