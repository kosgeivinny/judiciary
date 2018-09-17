<?php
include '../../judiciary/log_connect.php';

$date = date("Y-m-d");
$parts = explode('-',$date);
$month = $parts[1];
$sub = $_SESSION['name'];

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
    <style type="text/css">
        <!--

        @media print
        {
            .noprint {display:none;}
        }

        @media screen
        {
            ...
        }

        -->
    </style>

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
                            <li role="presentation" class="active"><a href="cases.php">Cases</a></li>
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

    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading noprint'>
                <h4> CASE MANAGEMENT </h4> <div class='panel-tools'>

                </div>
            </div>
            <div class='panel-body noprint'>
                <form action="case_reg.php">

                        <button type="submit" class="btn btn-success" style='background-color: blue; padding: 10px; margin: 4px 2px;  border-radius: 12px;'> <b> New Case</b> </button>
                </form>
                <center>
                    <table>
                        <form method='post'>
                            <td>
                                <button type="submit" class="btn btn-success" name="today" style='background-color: red; padding: 10px; margin: 4px 2px;  border-radius: 12px;'> <b> Cases Registered Today </b> </button></td>
                        </form>
                        <form method='post'>

                            <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="tod" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Today's Cases </b> </button></td>
                        </form>
                        <form method='post'>
                            <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="mon" style='background-color:forestgreen ; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> This Month's Cases </b> </button></td>
                        </form>
                        <form method='post'>

                            <td><label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><button type="submit" class="btn btn-success" name="my" style='background-color: forestgreen; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> My Registered Cases </b> </button></td>
                            </tr>
                        </form>
                    </table>
                    <table>
                        <form method='post' action='cases.php'>

                            <td><label> Enter date/Case number: </label>
                                <input type="text" name="sdate" placeholder="Date/Case number" required>
                                <button type="submit" class="btn btn-success" name="sea" style='background-color: green; padding: 6px; margin: 4px 2px; border-radius: 12px;'> <b> Search </b> </button></td>
                        </form>

                        <form method='post' action='cases.php'>

                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label> Select Month: </label>
                                <select name="mun">
                                    <option value="01"> January </option>
                                    <option value="02"> February </option>
                                    <option value="03"> March </option>
                                    <option value="04"> April </option>
                                    <option value="05"> May </option>
                                    <option value="06"> June </option>
                                    <option value="07"> July </option>
                                    <option value="08"> August </option>
                                    <option value="09"> September </option>
                                    <option value="10"> October </option>
                                    <option value="11"> November </option>
                                    <option value="12"> December </option>
                                </select>
                                <button type="submit" class="btn btn-success" name="month" style='background-color: deeppink; padding: 6px; margin: 4px 2px; border-radius: 12px;'> <b> Search </b> </button></td>
                        </form>
                    </table>
                </center>

                <script type="text/javascript">
                    function printtable()
                    {
                        window.print()
                    }
                </script>
            </div>
            <?php


            include "connect.php";

            if(isset($_POST['today'])){

                $run = "SELECT * FROM cases WHERE Date_Registered='$date' ORDER BY Court";
                $nur = mysqli_query($conn, $run);
                $numr = mysqli_num_rows($nur);

                if ($numr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> Cases Registered Today</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Registered by</th><th>Court</th><th>Activity</th><th>Date of Case</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($nur)) {

                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Registrar"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td><td>" . $row["Date"] . "</td></tr>";
                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("No Cases Registered Today!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }


            if(isset($_POST['mon'])){

                $rom = "SELECT * FROM cases INNER JOIN courts on cases.Court=courts.Courts WHERE extract(month from Date)='$month' ORDER BY Court";
                $mor = mysqli_query($conn, $rom);
                $momr = mysqli_num_rows($mor);

                if ($momr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> This Month's Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Party(s)</th><th>Next Date of Case</th><th class='noprint'>Ammend</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($mor)) {



                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "(" . $row["Head"] . ")</td><td>" . $row["Activity"] . "</td><td>" . $row["Party"] . "</td><td>" . $row["Date"] . "</td>
                                <td><a class='noprint' href='case_amend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("No Cases This Month!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }





            if(isset($_POST['tod'])){

                $ron = "SELECT * FROM cases INNER JOIN courts on cases.Court=courts.Courts WHERE Date='$date' ORDER BY Court";
                $nor = mysqli_query($conn, $ron);
                $nomr = mysqli_num_rows($nor);

                if ($nomr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> $date Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Party(s)</th><th class='noprint'>Ammend</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($nor)) {



                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . " (" . $row["Head"] . ")</td><td>" . $row["Activity"] . "</td><td>" . $row["Party"] . "</td>
                                    <td><a class='noprint' href='case_amend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("No Cases in Court Today!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }



            if(isset($_POST['my'])){

                $ron = "SELECT * FROM cases WHERE Registrar='$sub' ORDER BY Court";
                $nor = mysqli_query($conn, $ron);
                $nomr = mysqli_num_rows($nor);

                if ($nomr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> My Registered Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Party(s)</th><th>Date Registered</th><th>Date in Court</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($nor)) {



                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td><td>" . $row["Party"] . "</td><td>" . $row["Date_Registered"] . "</td><td>" . $row["Date"] . "</td></tr>";

                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("You have not registered any Case!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }



            if(isset($_POST['sea'])){

                $sdate = $_POST['sdate'];

                $ron = "SELECT * FROM cases INNER JOIN courts on cases.Court=courts.Courts WHERE Date='$sdate' OR Caseno='$sdate' ORDER BY Court";
                $nor = mysqli_query($conn, $ron);
                $nomr = mysqli_num_rows($nor);

                if ($nomr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> Case Details </u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th> Activity </th><th> Party(s) </th><th>Date in Court</th><th class='noprint'>Ammend</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($nor)) {



                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . " (" . $row["Head"] . ")</td><td>" . $row["Activity"] . "</td><td>" . $row["Party"] . "</td><td>" . $row["Date"] . "</td>
                                    <td><a class='noprint' href='case_amend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("Case not registered!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }



            if(isset($_POST['month'])){


                $smon = $_POST['mun'];
                $monthNum  = $smon;
                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                $monthName = $dateObj->format('F');


                $rum = "SELECT * FROM cases INNER JOIN courts ON cases.Court=courts.Courts WHERE extract(month from Date)='$smon' ORDER BY Court";
                $mur = mysqli_query($conn, $rum);
                $mumr = mysqli_num_rows($mur);

                if ($mumr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> $monthName Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Next Date of Case</th><th class='noprint'>Ammend</th></tr></thead>";

                    while ($row = mysqli_fetch_assoc($mur)) {



                        echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . " (" . $row["Head"] . ")</td><td>" . $row["Activity"] . "</td><td>" . $row["Date"] . "</td>
        <td><a class='noprint' href='case_amend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                    }
                    echo "</table></center>";
                    echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("No Cases For The Selected Month!");
                        window.location.assign('cases.php');
                    </script>
                    <?php
                }

            }


            ?>

        </div>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
<!-- Google Analytics -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>

</html>
