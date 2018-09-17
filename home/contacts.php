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
                            <li role="presentation"><a href="about.php">About</a></li>
                            <li role="presentation" class="active"><a href="contacts.php">Contact</a></li>
                            <img src="img/arms.jpg" style="width: 20%; max-width: 60px; margin: 0 auto;">
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--/about-->


<div class="container">
    <div class="row">
        <div class="recent">
            <button class="btn-primarys"><h3>Our Team</h3></button>
            <hr>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="content">
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="align-center">
                        <h4>Vincent Kosgei</h4>
                        <div class="icon">
                            <i class="fa fa-tasks fa-3x"></i>
                        </div>
                        <img src="img/team/3.jpg" alt="" class="img-responsive" style="height: 240px; width: 240px">
                        <p>
                            Developer.
                        </p>
                        <div class="ficon">
                            <a href="" alt="">Learn more</a><i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="align-center">
                        <h4>Kevin Mwangi</h4>
                        <div class="icon">
                            <i class="fa fa-files-o fa-3x"></i>
                        </div>
                        <img src="img/13.jpg" alt="" class="img-responsive">
                        <p>
                            Designer.
                        </p>
                        <div class="ficon">
                            <a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wow fadeInUp" data-wow-delay="0.6s">
                    <div class="align-center">
                        <h4>Foustin Mawaya</h4>
                        <div class="icon">
                            <i class="fa fa-location-arrow fa-3x"></i>
                        </div>
                        <img src="img/team/members3.jpg" alt="" class="img-responsive" style="height: 240px; width: 240px">
                        <p>
                            Researcher.
                        </p>
                        <div class="ficon">
                            <a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
      <div class="recent">
        <button class="btn-primarys"><h3>Contact</h3></button>
        <hr>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="recent">
          <button class="btn-primarys"><h3>Send us a message</h3></button>
        </div>

        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>

      <div class="col-lg-6">
        <div class="recent">
          <button class="btn-primarys"><h3>Get in touch with us</h3></button>
        </div>
        <div class="contact-area">
          <p>Have questions about our system?. Our team receives specialized training regularly to ensure you are receiving the best services from the Probate and Administration System. Feel free to contact any of our team members any time or send us a message.</p>
          <p> We are incredibly responsive to your requests and value your questions. They are an indication of your acceptance of the System</p>

          <h4>Address:</h4>141, Eldoret<br>
          <h4>Telephone:</h4> 053 2033441 </br>
          <h4>Fax:</h4>123 456 789
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/responsive-slider.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>
</html>
