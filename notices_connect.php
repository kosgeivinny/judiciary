<?php
include "connect.php";

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $chief=$_POST['chief'];
    $form80=$_POST['form80'];
    $form5=$_POST['form5'];
    $form12=$_POST['form12'];
    $form38=$_POST['form38'];
    $form57=$_POST['form57'];
    $form11=$_POST['form11'];



    $not= "INSERT INTO registration (Caseno, Chief, Form80, Form5, Form12, Form38, Form57, Form11) VALUES ('$caseno', '$chief', '$form80', '$form5', '$form12', '$form38', '$form57', '$form11')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {
        ?>
        <script> alert("Notices confirmed!!");
            window.location.assign('payment.php');
        </script>
        <?php
    }
}
?>