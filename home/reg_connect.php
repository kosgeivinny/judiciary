<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $serial=$_POST['serial'];
    $date=$_POST['dateiss'];
    $by=$_POST['by'];
    $expect = Date('Y/m/d', strtotime($date.'+30 days'));




    $not= "INSERT INTO registrar (Caseno, Serial, Date_Issued, Receiver) VALUES ('$caseno', '$serial', '$date', '$by')";
    $ton= mysqli_query($conn, $not);
    if (!$ton){
        die("Query failed" .mysqli_error($conn));
    }
    else {
        $ru = "SELECT * FROM government WHERE Caseno='$caseno'";
        $ur = mysqli_query($conn, $ru);
        $numrows = mysqli_num_rows($ur);

        if($numrows == 1){
            $ins = "INSERT INTO counter (Caseno, Date_Received, Date_Expected) VALUES ('$caseno', '$date', '$expect')";
            $sin = mysqli_query($conn, $ins);

            if ($sin){
                ?>
                <script> alert("All notices received!!");
                    window.location.assign('index.php');
                </script>
                <?php
            }

        }
        else {

            ?>
            <script> alert("Form30 Received!!");
                window.location.assign('index.php');
            </script>
            <?php
        }
    }
}
?>

