<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $number=$_POST['gnumber'];
    $date=$_POST['dateiss'];
    $by=$_POST['by'];




    $not= "INSERT INTO government (Caseno, Gazette_no, Date_Issued, Receiver) VALUES ('$caseno', '$number', '$date', '$by')";
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

