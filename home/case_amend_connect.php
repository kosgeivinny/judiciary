<?php
include "connect.php";

if(isset($_POST['submit'])){

    $caseno = $_POST['caseno'];
    $court = $_POST['court'];
    $activity = $_POST['activity'];
    $dao = $_POST['date'];
    $date = date("Y-m-d", strtotime($dao));
    $party = $_POST['party'];
    $by = $_POST['by'];
    $reg = $_POST['reg'];


    $ins = "INSERT INTO cases (Caseno, Court, Activity, Date, Party, Registrar, Date_Registered) VALUES ('$caseno', '$court', '$activity', '$date', '$party', '$by', '$reg')";
    $insert = mysqli_query($conn, $ins);

    if (!$ins) {
        die($ins);
    } else {
        ?>
        <script> alert("Successfully Amended!");
            window.location.assign('cases.php');
        </script>
        <?php
    }

}
?>