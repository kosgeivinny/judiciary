<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $issued=$_POST['issued'];
    $date=$_POST['dateconf'];
    $dateiss =$_POST['dateissued'];
    $by=$_POST['by'];




    $not= "INSERT INTO certificate (Caseno, Issued_by, Date_Confirmation, Date_Issued, Receiver) VALUES ('$caseno', '$issued', '$date', '$dateiss', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

        ?>
        <script> alert("Certificate issued successfuly!!");
            window.location.assign('index.php');
        </script>
        <?php

    }
}
?>

