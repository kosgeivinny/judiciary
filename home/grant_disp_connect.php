<?php
include "connect.php";

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $dao = $_POST['date'];
    $date = date("Y-m-d", strtotime($dao));
    $collect = $_POST['collector'];
    $id = $_POST['id'];
    $by=$_POST['by'];



    $reg="INSERT INTO grant_disp (Caseno, Collected_by, ID_number, Date_dispatched, Dispatched_by) VALUES ('$caseno', '$collect', '$id', '$date', '$by')";
    $ger= mysqli_query($conn, $reg);

    if (!$ger) {
        die("Query failed" . mysqli_error($conn));
    } else {

        ?>
        <script> alert("Dispatch Successful!");
            window.location.assign('index.php');
        </script>
        <?php

    }
}
?>