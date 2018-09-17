<?php
include "connect.php";

if (isset($_POST['submit'])){
    $uname=$_POST['name'];
    $susername=$_POST['username'];
    $pass=$_POST['password'];
    $pwd = md5($pass);

    $reg= "UPDATE staff SET Username='$susername', Password='$pwd' WHERE Name='$uname' ";
    $ger= mysqli_query($conn, $reg);
    if (!$ger){
        die("Query failed" .mysqli_error($conn));
    }
    else {

        ?>
        <script> alert("Edit successful!! Login now");
            window.location.assign('../../judiciary');
        </script>
        <?php
    }
}
?>