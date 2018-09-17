<?php
include '../../judiciary/log_connect.php';

if (!isset($_SESSION['name']))
{
    header("Location: ../index.php");
    die();
}
?>

<?php
include "register_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eldoret Law Courts</title>

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
                            <li role="presentation" class="active"><a href="register.php">Registration</a></li>
                            <li role="presentation"><a href="cases.php">Cases</a></li>
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

<div class="container">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h3 align="center"> REPUBLIC OF KENYA <BR>
                    IN THE CHIEF MAGISTRATE'S COURT AT ELDORET <br>
                </h3>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="container">

            <div class="col-lg-8 well" style="background-color: #afee42">
                <div class="row">
                    <center>
                        <form class="inline" role="form" action="notices_connect.php" method="POST" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <h4 align="center"> <b> <u>Check List</u> </b></h4>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label> Case Number: </label>
                                    </div>
                                    <div class="col-sm-4"><b>
                                        <input type="text" name="caseno" value="<?php echo $_SESSION['case']; ?>" readonly>
                                        </b>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label> Check appropriately: </label>
                                    </div>
                                    <label class="col-sm-8">
                                        <div class="col-lg-12 checkbox" align="left">
                                            <label class="checkbox"><input type="checkbox" value="YES" name="death" required>  <b> DEATH CERTIFICATE</b>  </label> <br>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="chief" required>  <b> LOCAL CHIEF'S LETTER</b>  </label> <br>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="form80" required>  <b> FORM 80</b> (PETITION) </label>  <br>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="form5" required> <b>FORM 5</b> (AFFIDAVIT IN SUPPORT OF PETITION) </label> <br>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="form12" required> <b>FORM 12</b> (AFFIDAVIT OF MEANS BY PETITIONER) </label> <br>
                                            <div class="form-group">
                                            <label><b>FORM 38</b> (CONSENT)</label>
                                            <div class="radio">
                                                <label class="radio-inline"><input type="radio" name="form38" value="YES" checked required> Yes </label>
                                                <label class="radio-inline"><input type="radio" name="form38" value="NO" required> No </label>
                                            </div>
                                            </div>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="form57" required> <b>FORM 57</b> (GUARANTEE) </label> <br>
                                            <label class="checkbox"><input type="checkbox" value="YES" name="form11" required> <b>FORM 11</b> (FORM 11) </label> <br>
                                            <label><b>Any other(Specify)</b> <input type='text' name='other'>  </label>
                                        </div>

                                </div>
                                <br>

                                <br>

                                <div class="row">
                                        <div class="col-sm-7 form-group">

                                            <button type="submit" class="btn btn-success" name="submit" > SUBMIT </button>
                                        </div>
                                        <div class="col-sm-1 form-group">
                                            <button type="reset" class="btn btn-warning" name="reset" ><span class="glyphicon glyphicon-minus-sign"></span> Reset </button>
                                        </div>
                                </div>

                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>

        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <hr>
        </div>
    </div>

    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Eldoret Law Courts, All right reserved.</span>
                        </p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Arsha
                            -->
                            <a href="https://bootstrapmade.com/"> P & A </a> by <a href="https://bootstrapmade.com/">ICT TEAM</a>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive-slider.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/functions.js"></script>
<script>
    wow = new WOW({}).init();
</script>

</body>
</html>
