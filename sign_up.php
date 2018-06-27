<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eldoret Law Courts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/custom.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="container">

    <header>
        <h1>Registration Form</h1>

    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="sign_connect.php" method="POST" autocomplete="on">
                        <h1> Sign up </h1>
                        <p>
                            <label>Your Name:</label>
                            <input name="name" required="required" type="text" placeholder="Name" />
                        </p>
                        <p>
                            <label>ID Number:</label>
                            <input name="id" required="required" type="int" placeholder="National ID" />
                        </p>
                        <p>
                            <label> Your email:</label>
                            <input name="email" required="required" type="email" placeholder="Email"/>
                        </p>
                        <p>
                            <label>Your username:</label>
                            <input name="username" required="required" type="text" placeholder="Username" />
                        </p>

                        <p>
                            <label>Your password: </label>
                            <input name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" name="submit" value="Sign up"/>
                        </p>
                        <p class="change_link">
                            Already registered ?
                            <a href="../judiciary" class="to_register"> Go and log in </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>