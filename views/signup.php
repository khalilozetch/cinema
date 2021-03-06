<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from myticket_h1.kenzap.com/upcoming-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 15:47:36 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cinema</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-select.min.css">
        <link rel="stylesheet" href="../css/bootstrap-slider.min.css">
        <link rel="stylesheet" href="../css/jquery.scrolling-tabs.min.css">
        <link rel="stylesheet" href="../css/bootstrap-checkbox.css">
        <link rel="stylesheet" href="../css/flexslider.css">
        <link rel="stylesheet" href="../css/featherlight.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.offcanvas.min.css">
        <link rel="stylesheet" href="../css/core.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../css/style.css" >
        <link rel="stylesheet" href="../css/responsive.css" >
        <link rel="stylesheet" href="../css/login.css" >
        <link rel="stylesheet" href="../css/signup.css" >


        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <header id="masthead" class="site-header">
            <div class="top-header top-header-bg">
                <div class="container">
                    <div class="row">


                        <div class="top-right">
                            <ul>

                                <li>
                                    <a href="login.php">log in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header main-header-bg">
                <div class="container">
                    <div class="row">
                        <div class="site-branding col-md-3">
                            <h1 class="site-title"><a href="#" title="myticket" rel="home"><img src="../images/logo.png" alt="logo"></a></h1>
                        </div>

                        <div class="col-md-9">
                            <nav id="site-navigation" class="navbar">
                                <!-- toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <div class="mobile-cart" ><a href="#">0</a></div>
                                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
                                    <button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                    </button>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="../homepage.php">Home</a></li>
                                        <li><a href="all.php">Hall</a></li>
                                        <li><a href="ticket.php">Ticekts</a></li>
                                    </ul>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <section class="section-page-header">
            <form action="../controll/signupController.php" style="border:1px solid #ccc" method="POST">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="name"><b>Name</b></label>
                    <input type="name" placeholder="your Name" name="name" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    <label for="Adress"><b>Address</b></label>
                    <input type="text" placeholder="Enter Adress" name="address" required>
                    <label for="phone"><b>Phone</b></label>
                    <input type="tel" placeholder="your phone" name="phone" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <button type="submit" name="submit" value="signup" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>

        </div>
    </section>


    <section class="section-newsletter">
        <div class="container">
            <div class="section-content">
                <h2>Stay Up to date With Your Favorite Events!</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <br> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div class="newsletter-form clearfix">
                    <input type="email" placeholder="Your Email Address">
                    <input type="submit" value="Subscribe">
                </div>
            </div>
        </div>
    </section>
    <footer id="colophon" class="site-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">

                    <div class="col-sm-8 col-md-8">
                        <a href="#"><img src="../images/logo.png" alt="logo"></a>
                    </div>
                    <div class="col-sm-4 col-md-4">

                        <p>lhalilpzetch ALL RIGHTS RESEVED</p>
                    </div>
                </div>

            </div>
        </div>

    </footer>

    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/jquery.scrolling-tabs.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.flexslider-min.js"></script>
    <script src="../js/jquery.imagemapster.min.js"></script>
    <script src="../js/tooltip.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/featherlight.min.js"></script>
    <script src="../js/featherlight.gallery.min.js"></script>
    <script src="../js/bootstrap.offcanvas.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>