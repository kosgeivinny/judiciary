<?php
include '../../judiciary/log_connect.php';

if (!isset($_SESSION['name']))
{
    header("Location: ../index.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eldoret Law Courts</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: darkgreen">
    <label style="text-align: right; color:#f5e79e; margin: 0px 0px 0px 100px;"> <h4><b><?php echo $_SESSION['name']; ?></b></h4></label>
    <span class="logout-spn" style="float:right;">
                   <a href="logout.php" class="btn btn-warning" style="margin: 8px 50px 0px 0px;">
          <span class="glyphicon glyphicon-log-out"></span> <b>LOG OUT</b>
        </a>
        </span>
</div>
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-brand">
                            <a href="index.php"><h1>Eldoret Law Courts</h1></a>
                        </div>
                    </div>
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <img src="img/logi.jpg" style="width: 20%; max-width: 60px; margin: 0 auto;" align="left">
                            <li>  &nbsp;&nbsp;</li>
                            <li role="presentation"><a href="index.php">Home</a></li>
                            <li role="presentation"><a href="register.php">Registration</a></li>
                            <li role="presentation"><a href="cases.php">Cases</a></li>
                            <li role="presentation" class="active"><a href="report.php">Reports</a></li>
                            <li role="presentation"><a href="about.php">About</a></li>
                            <li role="presentation"><a href="contacts.php">Contact</a></li>
                            <img src="img/arms.jpg" style="width: 20%; max-width: 60px; margin: 0 auto;">

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class='container'>
    <center>
        <table>
            <form method='post' action='report.php'>
               <tr><td>
                        <button type="submit" class="btn btn-success" name="object" style='background-color: red; padding: 10px; margin: 4px 2px;  border-radius: 12px;'> <b> Cases with Objection </b> </button></td>
            </form>
            <form method='post' action='report.php'>

            <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="gra" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Awaiting Grant </b> </button></td>
            </form>
            <form method='post' action='report.php'>
                <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="fil" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Awaiting Filing Summons for Confirmation </b> </button></td>
            </form>
            <form method='post' action='report.php'>
                <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="conf" style='background-color: sandybrown; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Awaiting Confirmation </b> </button></td>
            </form>
            <form method='post' action='https://www.judiciary.go.ke/resources/forms/'>

            <td><label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><button type="submit" class="btn btn-primary" style='background-color: greenyellow; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Downloads </b> </button></td>
                </tr>
            </form>
</table>
</center>
</div>
<!-- Responsive slider - START -->
<div class="container">
    <div class="row">
        <hr>
    </div>
</div>
<div class="container">
    <?php

     include "connect.php";



    if (isset($_POST['object'])){
        $obj = "SELECT * FROM objection";
        $jbo = mysqli_query($conn, $obj);

        echo "<center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
    <thead>
    <tr><label>Cases with Objection</label></tr> 
    <tr class='info'><th>Case number</th><th>Filed by:</th><th>Date of Objection</th></tr></thead>";

        while($row =mysqli_fetch_assoc($jbo)) {
            echo "<tr><td>". $row["Caseno"] . "</td><td>". $row["P1"]."<br>". $row["P2"]."<br>". $row["P3"]."<br>". $row["P4"]."</td><td>".$row["Date"]."</td>";
            echo "</tr>";
        }
        echo "</table></center>";
    }





    if (isset($_POST['gra'])){
        $obj = "SELECT * FROM counter WHERE Caseno NOT IN (SELECT Caseno FROM grantt)";
        $jbo = mysqli_query($conn, $obj);
        $nomr = mysqli_num_rows($jbo);
    if ($nomr > 0){

        echo "<center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
    <thead>
    <tr><label>Cases Awaiting Grant Issuance</label></tr> 
    <tr class='info'><th>Case number</th><th>All Notices Received on</th><th>Date of Grant Issue</th></tr></thead>";

        while($row =mysqli_fetch_assoc($jbo)) {
            echo "<tr><td>". $row["Caseno"] . "</td><td>". $row["Date_Received"]."</td><td>".$row["Date_Expected"]."</td>";
            echo "</tr>";
        }
        echo "</table></center>";
            }
    else{
        ?>
        <script> alert("No Case Awaiting Grant Issue!");
            window.location.assign('report.php');
        </script>
        <?php
        }
    }

    if (isset($_POST['fil'])){
        $obj = "SELECT * FROM grantt WHERE Caseno NOT IN (SELECT Caseno FROM confirmation)";
        $jbo = mysqli_query($conn, $obj);
        $nomr = mysqli_num_rows($jbo);
        if ($nomr > 0){

            echo "<center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
    <thead>
    <tr><label>Cases Awaiting Filing Summons for Confirmation</label></tr> 
    <tr class='info'><th>Case number</th><th>Grant Issued by:</th><th>Date Issued</th><th>Date of Filing</th></tr></thead>";

            while($row =mysqli_fetch_assoc($jbo)) {
                echo "<tr><td>". $row["Caseno"] . "</td><td>". $row["Issued_by"]."</td><td>".$row["Date_Issued"]."</td><td>".$row["Date_Expected"]."</td>";
                echo "</tr>";
            }
            echo "</table></center>";
        }
        else{
            ?>
            <script> alert("No Case Awaiting Filling!");
                window.location.assign('report.php');
            </script>
            <?php
        }
    }


    if (isset($_POST['conf'])){
        $obj = "SELECT * FROM confirmation  WHERE Caseno NOT IN (SELECT Caseno FROM certificate)";
        $jbo = mysqli_query($conn, $obj);
        $nomr = mysqli_num_rows($jbo);
        if ($nomr > 0){

            echo "<center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
    <thead>
    <tr><label>Cases Awaiting Confirmation</label></tr> 
    <tr class='info'><th>Case number</th><th>Filing done by:</th><th>Date of Filing</th><th>Date of Confirmation</th></tr></thead>";

            while($row =mysqli_fetch_assoc($jbo)) {
                echo "<tr><td>". $row["Caseno"] . "</td><td>". $row["Receiver"]."</td><td>".$row["Date_Filed"]."</td><td>".$row["Date_Confirmation"]."</td>";
                echo "</tr>";
            }
            echo "</table></center>";
        }
        else{
            ?>
            <script> alert("No Case Awaiting Confirmation!");
                window.location.assign('report.php');
            </script>
            <?php
        }
    }
    ?>
</div>
<div class="container">
    <div class="row">
        <hr>
    </div>
</div>

<!-- Responsive slider - END -->

<div class="container">
    <div class="row">
        <hr>
    </div>
</div>

<!--start footer-->
<footer>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Eldoret Law Courts, All right reserved.</span>
                        </p>
                        <div class="credits">
                            <a href="#">   P & A </a> by <a href="#">ICT TEAM</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive-slider.js"></script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW({}).init();
</script>

</body>

</html>
