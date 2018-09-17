<?php
include '../../judiciary/log_connect.php';

$date = date("Y-m-d");
$case=$_REQUEST['case'];

$parts = explode('-',$date);
$month = $parts[1];;
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
    <div id='wrapper'>
        <!-- Sidebar -->

        <!-- Tools -->
        <section id='tools'>
            <ul class='breadcrumb' id='breadcrumb'>
                <li class='title'>Case Amendment</li>
            </ul>
            <div id='toolbar'>

            </div>
        </section>
        <!-- Content -->
        <div id='content'>
            <div class='panel panel-default'>
                <div class='panel-heading'>
                    <i class='icon-edit icon-large'></i>
                    Case Amendment
                </div>
                <div class='panel-body' align="center">
                    <form class="inline" role="form" action="case_amend_connect.php" method="POST" enctype="multipart/form-data">
                        <div class="col-sm-9">
                            <h4 align="center"> <b> <u>Case Amendment</u> </b></h4>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-2 form-group">
                                    <label> Case number: </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text"class="form-control" value="<?php echo $case; ?>" name="caseno" placeholder="Casenumber" required readonly>
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label> Court: </label>
                                </div>
                                <div class='col-sm-4 form-group'>
                                    <select class="form-control" name="court">
                                        <option> COURT 1 </option>
                                        <option> COURT 2 </option>
                                        <option> COURT 3 </option>
                                        <option> COURT 4 </option>
                                        <option> COURT 5 </option>
                                        <option> COURT 6 </option>
                                        <option> COURT 7 </option>
                                    </select>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2 form-group">
                                    <label> Activity: </label>
                                </div>
                                <div class='col-sm-4 form-group'>
                                    <select class="form-control" name="activity">
                                        <option> Assesment of Costs/Taxation </option>
                                        <option> Bail </option>
                                        <option> Bond </option>
                                        <option> Certificate of Urgency </option>
                                        <option> Contempt Proceedings </option>
                                        <option> Deputy Register Actions </option>
                                        <option> Directions </option>
                                        <option> Execution Proceedings </option>
                                        <option> Hearing-Application </option>
                                        <option> Hearing Main Suit </option>
                                        <option> Judgement </option>
                                        <option> Mention </option>
                                        <option> Plea </option>
                                        <option> Post Judgedment </option>
                                        <option> Pre Trial </option>
                                        <option> Registration/Filing </option>
                                        <option> Ruling </option>
                                        <option> Sentencing </option>
                                        <option> Stood Over Generally(SOG) </option>
                                        <option> Date In The Registry(DIR) </option>
                                        <option> Case Closed </option>
                                        <option> Matter Settled </option>
                                        <option> Formal Proof </option>
                                        <option> Proceedings To Be Typed </option>
                                        <option> Notice To Show Cause </option>
                                        <option> Case  Dismissed </option>
                                        <option> Case Withdrawn </option>
                                        <option> Case Transferred </option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label> Next Date of Case: </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2 form-group">
                                    <label> Party(s): </label>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="party" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class='row'>
                                    <input type='text' value="<?php echo $sub; ?>" name="by" hidden>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class='row'>
                                    <input type='text' value="<?php echo $date; ?>" name="reg" hidden>
                                </div>

                            </div>
                            <div class="row">
                                <div class=" form-actions col-sm-12">
                                    <div class="col-sm-2 form-group">
                                        <button type="submit" class="btn btn-success" name="submit" > CONFIRM </button>
                                    </div>
                                    <div class="col-sm-1 form-group">
                                        <button type="reset" class="btn btn-warning" name="reset" > Reset </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

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
