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
    <title>Eldoret Law Courts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/custom.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="container">

    <header>
        <h1>Edit Account Page</h1>

    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="edit_connect.php" method="POST" autocomplete="on">
                        <h1> Edit Account </h1>
                        <p>
                            <input name="name" required="required" type="text" value="<?php echo $_SESSION['name'] ?>" hidden/>
                        </p>

                        <p>
                            <label>New username:</label>
                            <input name="username" required="required" type="text" placeholder="Username" />
                        </p>

                        <p>
                            <label>New password: </label>
                            <input name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" name="submit" value="Submit"/>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>