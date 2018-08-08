<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $death=$_POST['death'];
    $chief=$_POST['chief'];
    $form80=$_POST['form80'];
    $form5=$_POST['form5'];
    $form12=$_POST['form12'];
    $form38=$_POST['form38'];
    $form57=$_POST['form57'];
    $form11=$_POST['form11'];
    $other = $_POST['other'];



    $not= "INSERT INTO notices (Caseno, Death, Chief, Form80, Form5, Form12, Form38, Form57, Form11, Other) VALUES ('$caseno', '$death', '$chief', '$form80', '$form5', '$form12', '$form38', '$form57', '$form11', '$other')";
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
            <script> alert("Notices Confirmed!!");
                window.location.assign('payment.php');
            </script>
            <?php
        }
    }
}
?>