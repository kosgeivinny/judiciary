<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $casen=$_POST['caseno'];
    $date=$_POST['dated'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p2=$_POST['p3'];
    $p4=$_POST['p4'];
    $filee=$_POST['filee'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $by=$_POST['by'];

    $ins = "INSERT INTO objection(Caseno, Date, P1, P2, P3, P4, Filee, Contact, Address, Sent ) VALUES ('$casen', '$date', '$p1', '$p2', '$p3', '$p4', '$filee', '$contact', '$address', '$by')";
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
                window.location.assign('case_reg.php');
            </script>
            <?php

        }
    }
}
?>