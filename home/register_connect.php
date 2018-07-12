<?php
include "connect.php";
session_start();

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $deceased=$_POST['deceased'];
    $petition1=$_POST['petitioner1'];
    $petition2=$_POST['petitioner2'];
    $petition3=$_POST['petitioner3'];
    $petition4=$_POST['petitioner4'];
    $date=$_POST['date'];
    $by=$_POST['by'];



    $reg= "INSERT INTO registration (Caseno, Deceased, Petitioner1, Petitioner2,  Petitioner3,  Petitioner4, Date, Submitted) VALUES ('$caseno', '$deceased', '$petition1', '$petition2', '$petition3', '$petition4', '$date', '$by')";
    $ger= mysqli_query($conn, $reg);

        if (!$ger) {
            die("Query failed" . mysqli_error($conn));
        } else {
            $sql= "SELECT * FROM registration WHERE Caseno = '$caseno' ";
            $result = mysqli_query($conn,$sql);
            $numrows=mysqli_num_rows($result);
            if($numrows==1) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $_SESSION['case'] = $row['Caseno'];
                }
            ?>
            <script> alert("Registration done!! Proceed to form confirmation");
                window.location.assign('notices.php');
            </script>
            <?php
        }
    }
}
?>