<?php
include "../judiciary/home/connect.php";
session_start();

if( isset($_POST["login"])) {
    $username=$_POST['username'];
    $password=($_POST['password']);


    $sql= "SELECT * FROM staff WHERE Username='$username' AND Password = '$password' ";
    $result = mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        while($row=mysqli_fetch_assoc($result)){

            $_SESSION['name']=$row['Name'];


        }//end of while loop
        ?>
        <script>
            window.location.assign('../judiciary/home');

        </script>
        <?php
    }//end of if login is successfull
    else{
        ?>
        <script> alert ('Invalid username or password Please try again!!');
            window.location.assign('../judiciary');
        </script>
        <?php
    }
}

?>