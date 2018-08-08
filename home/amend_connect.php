<?php
include "connect.php";

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $app=$_POST['app'];
    $dao = $_POST['date'];
    $date = date("Y-m-d", strtotime($dao));
    $by=$_POST['by'];



    $reg="INSERT INTO application (Caseno, Application, Date, Done_by) VALUES ('$caseno', '$app', '$date', '$by')";
    $ger= mysqli_query($conn, $reg);

    if (!$ger) {
        die("Query failed" . mysqli_error($conn));
    } else {

            ?>
            <script> alert("Application done Successfully!");
                window.location.assign('index.php');
            </script>
            <?php

    }
}
?>