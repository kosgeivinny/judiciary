<?php
include '../../judiciary/log_connect.php';

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
                            <li role="presentation" class="active"><a href="index.php">Home</a></li>
                            <li role="presentation"><a href="register.php">Registration</a></li>
                            <li role="presentation"><a href="#">Courts</a></li>
                            <li role="presentation"><a href="report.php">Reports</a></li>
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

<!-- Responsive slider - START -->
<div class="container">
<center><img src="img/case.jpg" style="width: 20%; max-width: 360px; margin: 0 auto;"></center>
</div>
<div class="container">
    <div class="row">
        <hr>
    </div>
</div>
<div class="container">

    <?php

    include "connect.php";
    if (isset($_POST['submit'])){
        $case=$_POST['case'];

    $rus = "SELECT * FROM registration inner join notices on registration.Caseno=notices.Caseno inner join pay on notices.Caseno=pay.Caseno  WHERE registration.Caseno='$case'";
    $sur = mysqli_query($conn, $rus);
    $numrow = mysqli_num_rows($sur);

    $obj = "SELECT * FROM objection WHERE Caseno='$case'";
    $job = mysqli_query($conn, $obj);
    $boj = mysqli_num_rows($job);


    if($numrow == 1) {


        echo "<center><table class='table table-striped align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>";

        while ($row = mysqli_fetch_assoc($sur)) {

            echo "
                  <label> <u><h4><b>Registration done by:</b> " . $row["Submitted"] . "</h4></u></label>
                  <br>
                  <tr> <td><b> Case number: </b></td> <td>P&A " . $row["Caseno"] . "</td></tr>
                  <tr><td><b> Date Filed: </b></td><td>" . $row["Date"] . "</td> </tr>
                  <tr><td><b> Name of the Deceased: </b></td><td>" . $row["Deceased"] . "</td></tr>
                  <tr><td><b> Petitioners: </b></td><td>" . $row["Petitioner1"] . "<br>" . $row["Petitioner2"] . "</td></tr>
                  <tr><td><b> Forms received: </b></td><td>Chief's Letter: &nbsp;&nbsp;&nbsp;&nbsp; " . $row["Chief"] . "
                                                       <br>Form80: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;" . $row["Form80"] . "
                                                       <br>Form5:  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;" . $row["Form5"] . "
                                                       <br>Form12: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;" . $row["Form12"] . "
                                                       <br>Form38: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; " . $row["Form38"] . "
                                                       <br>Form57: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; " . $row["Form57"] . "
                                                       <br>Form11: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; " . $row["Form11"] . "</td></tr>
                  <tr><td><b>Mode of Payment: </b></td><td>" . $row['Payment'] . "</td></tr>
                  <tr><td><b>Receipt no: </b></td><td>" . $row['Receipt'] . "</td></tr>";
        }
        echo "</table></center>";

        $new = "SELECT * FROM sent WHERE Caseno='$case'";
        $wen = mysqli_query($conn, $new);
        $nem = mysqli_num_rows($wen);

        $ru = "SELECT * FROM government WHERE Caseno='$case'";
        $ur = mysqli_query($conn, $ru);
        $numrows = mysqli_num_rows($ur);
        $run = "SELECT * FROM registrar WHERE Caseno='$case'";
        $nur = mysqli_query($conn, $run);
        $numr = mysqli_num_rows($nur);

        $gra = "SELECT * FROM grantt WHERE Caseno = $case";
        $rag = mysqli_query($conn, $gra);
        $gnum = mysqli_num_rows($rag);

        $conf = "SELECT * FROM confirmation WHERE Caseno = $case";
        $fon = mysqli_query($conn, $conf);
        $cnum = mysqli_num_rows($fon);

        $cert = "SELECT * FROM certificate WHERE Caseno = $case";
        $cer = mysqli_query($conn, $cert);
        $ter = mysqli_num_rows($cer);

        if ($nem == 0) {

            echo " 
<div class='container'>
<center>
<form method='post' action='not.php'> 
<label><h4><b>Notices not yet sent! </b></h4></label>
<br>
<br>

    <b><input type='text' value='$case' name='caseno' hidden></b> 
   
 <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: chartreuse'> <b>Send now</b> </button>
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
   <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
        } else {
            if($numrows == 0 && $numr == 0){

                while ($row = mysqli_fetch_assoc($wen)) {
                    $rece = $row['Date_Submitted'];
                    $recepien = $row['Sent'];

                }
                echo " 
<div class='container'>
<center>
<hr/>
<label> Notices sent! </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Date sent: </b></td><td>$rece</td> </tr>
<tr><td><b>Sent by: </b></td><td>$recepien</td></tr>
<br>
</table>
</center>
 </div>
 ";
                echo " 
<div class='container'>
<center>
<table>
<form method='post' action='reg.php'>
<tr> 
<label> <h4><b> Notices not yet received!</b></h4> </label></tr>


    <b><input type='text' value='$case' name='caseno' hidden></b> 
    
    <tr><td>
 <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: darkgreen'> <b>Form 30 Received?</b> </button></td><td></td>
 </form>
 <br>
 <form method='post' action='govt.php'> 
<div class=\"form - group\">
    <div class='row'>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    </div>
    </div>
 <td><button type=\"submit\" class=\"btn btn - success\" name=\"submit\" style='background-color: chartreuse'> <b>Gazette Notice Received?</b> </button></td>
 </tr>
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
   <tr> <td></td><td></td><td><label></label></td></tr>
   <tr><td> </td><td><button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button></td><td> </td></tr>
 </form>
 </table>
</center>
 </div>
 ";
            }
        elseif ($numrows == 0 && $numr == 1) {
            while ($row = mysqli_fetch_assoc($nur)) {
                $received = $row['Date_Issued'];
                $recepient = $row['Receiver'];

            }
            echo " 
<div class='container'>
<center>
<hr/>
<label> Form 30 Received! </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Date received: </b></td><td>$received</td> </tr>
<tr><td><b>Received by: </b></td><td>$recepient</td></tr>
<br>
</table>
<form method='post' action='govt.php'> 
<div class=\"form - group\">
    <div class='row'>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    </div>
    </div>
<button type=\"submit\" class=\"btn btn - success\" name=\"submit\" style='background-color: chartreuse'> <b>Gazette Notice Received?</b> </button>
 </tr>
 </form>
<br/>

<form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
   <button type=\"submit\" class=\"btn btn - success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";

        } elseif ($numrows == 1 && $numr == 0) {
            while ($row = mysqli_fetch_assoc($ur)) {
                $sent = $row['Date_Issued'];
                $sentt = $row['Receiver'];
            }
            echo " 
<div class='container'>
<center>
<hr/>
<label> Gazette Notice Received! </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Date received: </b></td><td>$sent</td> </tr>
<tr><td><b>Received by: </b></td><td>$sentt</td></tr>
<br>
</table>
<form method='post' action='reg.php'> 
<div class=\"form - group\">
    <div class='row'>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    </div>
    </div>
 <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: darkgreen'> <b>Form 30 Received?</b> </button>
 </form>
<br/>

<form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
   <button type=\"submit\" class=\"btn btn - success\" name=\"submit\" style='background-color: RED'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
        } else {
                while ($row = mysqli_fetch_assoc($nur)) {
                    $received = $row['Date_Issued'];
                    $recepient = $row['Receiver'];

                }
                while ($row = mysqli_fetch_assoc($ur)) {
                    $sent = $row['Date_Issued'];
                    $sentt = $row['Receiver'];
                }

                echo " 
<div class='container'>
<center>
<hr/>
<label> Notices received! </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Form30 received on: </b></td><td>$received</td> </tr>
<br>
<tr><td><b> Gazette notice received on: </b></td><td>$sent</td> </tr>
</table>
</center>
 </div>
 ";


if($gnum == 0){
    echo " 
<div class='container'>
<center>
<form method='post' action='grant.php'>
<label> <h4><b> Grant ready to be issued!</b></h4> </label>
<br>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    
   <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: darkgreen'> <b> Confirm grant issue? </b> </button>
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
  <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
}
else{
    while ($row = mysqli_fetch_assoc($rag)) {
        $on = $row['Date_Issued'];
        $issue = $row['Issued_by'];
        $expected = $row['Date_Expected'];
        $date = date("Y/m/d");
        $now = strtotime($date);
        $end = strtotime($expected);
        $diff = ($end-$now)/86400;
    }

    echo " 
<div class='container'>
<center>
<hr/>
<label> Grant(Form41) Issued </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Issued on: </b></td><td>$on</td> </tr>
<br>
<tr><td><b> Issued by: </b></td><td>$issue</td> </tr>
<br>
<tr><td><b> Date expected for confirmation: </b></td><td>$expected</td> </tr>

</table>
</center>
 </div>
 ";

    if( $cnum == 0 ){


        if($diff > 0){



        echo " 
<div class='container'>
<center>
<form method='post' action='grant.php'>
<label> <h4><b> <u>Case awaiting filing of summons!</u> </b></h4> </label>
<br>
    <b><input type='text' value='$case' name='caseno' hidden></b>
    <label> $diff Days remaining.</label> 
    
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
  <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
        }
        elseif ($diff <=0 ){
            echo " 
<div class='container'>
<center>
<form method='post' action='confirmation.php'>
<label> <h4><b> Filing of summons ready to be done!</b></h4> </label>
<br>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    
   <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: darkgreen'> <b> File now?</b> </button>
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
  <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
             }
         }

    else{
        while ($row = mysqli_fetch_assoc($fon)) {
            $by = $row['Receiver'];
            $filed = $row['Date_Filed'];
            $Other = $row['Other'];
        }

        echo " 
<div class='container'>
<center>
<hr/>
<label> Filling of summons done. </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Forms filed: </b></td><td>Summons for confirmation
                            <br><br> Affidafit in support of petition
                            <br><br> Conscent to mode of distribution
                            <br><br> $Other </td></tr>
<br>
<tr><td><b> Filing done by: </b></td><td>$by</td> </tr>
<br>
<tr><td><b> Date of Filing: </b></td><td>$filed</td> </tr>

</table>
</center>
 </div>
 ";
        if($ter == 0){
            echo " 
<div class='container'>
<center>
<form method='post' action='certificate.php'>
<label> <h4><b> Certificate of confirmation not yet issued! </b></h4> </label>
<br>
    <b><input type='text' value='$case' name='caseno' hidden></b> 
    
   <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: darkgreen'> <b> Certificate issued?</b> </button>
 </form>
 <br>
 <form method='POST' action='objection.php'>
 <input type='text' value='$case' name='caseno' hidden>
  <button type=\"submit\" class=\"btn btn-success\" name=\"submit\" style='background-color: RED' href='objection.php'> <b>Objection Filed</b> </button>
 </form>
</center>
 </div>
 ";
        }
        else{
            while ($row = mysqli_fetch_assoc($cer)) {
                $issue = $row['Issued_by'];
                $isdate = $row['Date_Issued'];
                $confirt = $row['Date_Confirmation'];
            }

            echo " 
<div class='container'>
<center>
<hr/>
<label> Certificate of Confirmation of Grant Issued. </label>
 <table class='table table-striped table-hover align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
<tr><td><b> Issued by: </b></td><td>$issue</td> </tr>
<br>
<tr><td><b> Date of Issue: </b></td><td>$isdate</td> </tr>
<br>
<tr><td><b> Date of Confirmation: </b></td><td>$confirt</td> </tr>


</table>
</center>
 </div>
 ";
        }
    }
}

        }
    }

    }
    elseif($boj == 1){
        ?>
        <script> alert("Sorry the case has been terminated!!");
            window.location.assign('index.php');
        </script>
    <?php
    }

    else {
        ?>
        <script> alert("Case not yet Filed!! File now??");
            window.location.assign('register.php');
        </script>
        <?php
    }

    mysqli_free_result($sur);

}
    ?>
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
