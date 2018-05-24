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
                <li role="presentation" class="active"><a href="index.php">Home</a></li>

                <li role="presentation"><a href="register.php">Registration</a></li>
                <li role="presentation"><a href="#">Courts</a></li>
                <li role="presentation"><a href="#">Cases</a></li>
                <li role="presentation"><a href="about.php">About</a></li>
                <li role="presentation"><a href="contacts.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Responsive slider - START -->
  <div class="container">
          <center>
          <form>
              <div class="col-sm-4 form-group">
                  <input type="text" class="form-control" name="case" placeholder="Case number">
              </div>
              <div class="col-sm-2 form-group">
              <button type="submit" class="form-control btn btn-success">Search</button>
              </div>
              <div class="col-sm-2 form-group">
                  <button type="reset" class="form-control btn btn-warning">Clear</button>
              </div>
          </form>
          </center>
  </div>
  <div class="container">
      <div class="row">
          <hr>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <hr>
      </div>
  </div>
  <div class="slider">
    <div class="container">
      <div class="row">
        <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
          <div class="slides" data-group="slides">
            <ul>
              <li>
                <div class="slide-body" data-group="slide">
                  <img src="img/2a.jpg" alt="">
                  <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                    <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"></div>
                    <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="900" data-length="300"></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="slide-body" data-group="slide">
                  <img src="img/1.jpg" alt="">
                  <div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
                    <div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"></div>
                    <div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="slide-body" data-group="slide">
                  <img src="img/10.jpg" alt="">
                  <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                    <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"></div>
                    <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"></div>

                  </div>
                </div>
              </li>

            </ul>
          </div>

          <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
          <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
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

</body>

</html>
