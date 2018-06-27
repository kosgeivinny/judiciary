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
                            <img src="img/logi.jpg" style="width: 20%; max-width: 60px; margin: 0 auto;" align="left">
                            <li>  &nbsp;&nbsp;</li>
                            <li role="presentation" class="active"><a href="index.php">Home</a></li>
                            <li role="presentation"><a href="register.php">Registration</a></li>
                            <li role="presentation"><a href="#">Courts</a></li>
                            <li role="presentation"><a href="#">Cases</a></li>
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/case.jpg" style="width: 20%; max-width: 360px; margin: 0 auto;">
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

    $rus = "SELECT * FROM registration inner join notices WHERE registration.Caseno='$case' AND notices.Caseno='$case'";
    $sur = mysqli_query($conn, $rus);

         $first=$row['Caseno'];
    echo $first;

    echo "<table class='table table-striped align-left' cellspacing='15px' border='0px' style='width:600px;height:auto;'>
           ";

    while($row =mysqli_fetch_assoc($sur)) {
        echo "
                  <tr> <td><b> Case number: </b></td> <td>".$row["Caseno"]."</td></tr>
                  <tr><td><b> Date Filed: </b></td><td>".$row["Date"]."</td> </tr>
                  <tr><td><b> Name of the Deceased: </b></td><td>".$row["Deceased"]."</td></tr>
                  <tr> <td><b> Petitioners: </b></td><td>".$row["Petitioner1"]."<br>".$row["Petitioner2"]."</td></tr>
                  <tr><td><b> Forms received: </b></td><td>Chief's Letter: &nbsp;&nbsp;&nbsp;&nbsp; ".$row["Chief"]."
                                                       <br>Form80: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;".$row["Form80"]."
                                                       <br>Form5:  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;".$row["Form5"]."
                                                       <br>Form12: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;".$row["Form12"]."
                                                       <br>Form38: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ".$row["Form38"]."
                                                       <br>Form57: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ".$row["Form57"]."
                                                       <br>Form11: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; ".$row["Form11"]."</td></tr>";
           }
    echo "</table>";

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
