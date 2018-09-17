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
                            <li role="presentation"><a href="report.php">Reports</a></li>
                            <li role="presentation" class="active"><a href="about.php">About</a></li>
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
    <div class="about">
        <div class="row">
            <div class="recent">
                <button class="btn-primarys"><h3>About us</h3></button>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="row-slider">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <div class="col-lg-6 mar-bot30">
                        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                            <div class="slides" data-group="slides">
                                <ul>
                                    <div class="slide-bodys" data-group="slide">
                                        <li><img alt="" class="img-responsive" src="img/3.jpg" width="100%" height="450" /></li>
                                        <li><img alt="" class="img-responsive" src="img/4.jpg" width="100%" height="450" /></li>
                                        <li><img alt="" class="img-responsive" src="img/5.jpg" width="100%" height="450" /></li>
                                    </div>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                        <div class="thumnails">
                            <h4>Probate & Administration</h4>
                            <p>Most people own some assets or carry some debt at the time of their death. The assets and liabilities of someone who has
                                passed away form their “estate.” Each state has its own set of laws governing what to do with the estate and how to
                                accommodate the deceased’s estate plan - or lack thereof.</p>
                            <p>The process of closing an estate is overseen by the state’s
                                probate court system. So, lawyers who work with probate laws and estate administration focus on what happens after
                                someone dies, as opposed to estate planning attorneys, who try to put a plan in place before death.</p>

                            <div class="ficon">
                                <a href="https://www.judiciary.go.ke/resources/forms/" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
