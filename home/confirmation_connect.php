<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $form109=$_POST['form109'];
    $form9=$_POST['form9'];
    $form0=$_POST['form0'];
    $other=$_POST['other'];
    $dateiss=$_POST['dateiss'];
    $by=$_POST['by'];




    $not= "INSERT INTO confirmation (Caseno, Form109, Form9, Form0, Other, Date_Filed, Receiver) VALUES ('$caseno', '$form109', '$form9', '$form0', '$other', '$dateiss', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {

        ?>
        <script> alert("Filling Successful!!");
            window.location.assign('index.php');
        </script>
        <?php

    }
}
?>

