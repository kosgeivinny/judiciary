<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $casen=$_POST['caseno'];
    $date=$_POST['dated'];
    $cause=$_POST['reason'];
    $by=$_POST['by'];

    $ins = "INSERT INTO objection(Caseno, Date, Cause, Sent ) VALUES ('$casen', '$date', '$cause', '$by')";
    $in = mysqli_query($conn, $ins);

    if(!$in){
        die("Query failed" .mysqli_error($conn));
    }
    else {


        $reg = "DELETE FROM registration WHERE Caseno='$casen'";
        "DELETE FROM registration WHERE ='$adm_no'";
        $ger = mysqli_query($conn, $reg);

        if (!$ger) {
            die("Query failed" . mysqli_error($conn));
        } else {

            ?>
            <script> alert("Case terminated!!");
                window.location.assign('index.php');
            </script>
            <?php

        }
    }
}
?>