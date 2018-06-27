<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $payment=$_POST['payment'];
    $receipt=$_POST['receipt'];

    $not= "INSERT INTO pay (Caseno, Payment, Receipt) VALUES ('$caseno', '$payment', '$receipt')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {
        $sql= "SELECT * FROM registration WHERE Caseno = '$caseno' ";
        $result = mysqli_query($conn,$sql);
        $numrows=mysqli_num_rows($result);
        if($numrows==1) {
            while ($row = mysqli_fetch_assoc($result)) {

                $_SESSION['case'] = $row['Caseno'];
            }
            ?>
            <script> alert("Payment Confirmed!!");
                window.location.assign('index.php');
            </script>
            <?php
        }
    }
}
?>