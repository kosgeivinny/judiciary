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
                <div id="register" class="animate form">
                    <form  action="mysuperscript.php" autocomplete="on">
                        <h1>Log in</h1>
                        <p>
                            <label for="username" class="uname" > Your email or username </label>
                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <p class="login button">
                            <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
                        </p>
                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <div id="login" class="animate form">
                    <form  action="mysuperscript.php" autocomplete="on">
                        <h1> Sign up </h1>
                        <p>
                            <label for="namesignup" class="uname" >Your Name:</label>
                            <input id="usernamesignup" name="name" required="required" type="text" placeholder="Name" />
                        </p>
                        <p>
                            <label for="usernamesignup" class="uname" >ID Number:</label>
                            <input id="usernamesignup" name="id" required="required" type="int" placeholder="National ID" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail"  > Your email:</label>
                            <input id="emailsignup" name="email" required="required" type="email" placeholder="Email"/>
                        </p>
                        <p>
                            <label for="usernamesignup" class="uname" >Your username:</label>
                            <input id="usernamesignup" name="username" required="required" type="text" placeholder="Username" />
                        </p>

                        <p>
                            <label for="passwordsignup" class="youpasswd" >Your password: </label>
                            <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password: </label>
                            <input id="passwordsignup_confirm" name="password_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" value="Sign up"/>
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