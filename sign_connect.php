<?php
include "home/connect.php";

if (isset($_POST['submit'])){
    $uname=$_POST['name'];
    $uid=$_POST['id'];
    $uemail=$_POST['email'];
    $susername=$_POST['username'];
    $pass=$_POST['password'];
    $pwd = md5($pass);

    $reg= "INSERT INTO staff (Name, PJ, Email, Username, Password) VALUES ('$uname', '$uid', '$uemail', '$susername', '$pwd')";
    $ger= mysqli_query($conn, $reg);
    if (!$ger){
        die("Query failed" .mysqli_error($conn));
    }
    else {

            ?>
            <script> alert("Registration successful!! Login now");
                window.location.assign('../judiciary');
            </script>
            <?php
        }
    }
?>