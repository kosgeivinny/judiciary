<?php
include "connect.php";

if (isset($_POST['submit'])){
    $caseno=$_POST['caseno'];
    $deceased=$_POST['deceased'];
    $petition1=$_POST['petitioner1'];
    $petition2=$_POST['petitioner2'];
    $date=$_POST['date'];



    $reg= "INSERT INTO registration (Caseno, Deceased, Petitioner1, Petitioner2, Date) VALUES ('$caseno', '$deceased', '$petition1', '$petition2', '$date')";
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