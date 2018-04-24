<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome to Kiwi !</title>


        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="/css/album.css" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #1d2124;


                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: left;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body{
                color: #171a1d;

            }


        </style>

        <!--Navigation bar-->
        <div id="navigationbar">
        <div class="navbar navbar-inverse bg-inverse" >
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand" style="font-size:35px">Kiwi</a>


                <ul class="nav justify-content-end" style="font-size:26px" >

                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-earphone"></span>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Contact us</a>
                    </li>

                </ul>
            </div>
        </div>
        </div>
        <!--Navigation bar-->

    </head>


    <body>

    <section class="jumbotron text-center">

        <div class="container">
            <img align="" height="180dp" WIDTH="180dp" src="/uploads/rad_kiwi_v4.png" class="pull-left"/>
            <br>
            <h1><strong>Coach 2 Student</strong></h1>
            <br>
            <h2>
                <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Sign in</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register</a>
            </h2>
        </div>
    </section>



        <div class="w-100 p-3">
            <div class="container">

                <div class="row">
                    <h1></h1>
                    <p  class="text-center" ><font size="4"><b>Meet kiwi, a platform that connects two essential components: teaching and learning. Kiwi is the right platform for you
                                if you're an expert within a particular field or if you want to gain a better understanding of a certain area.
                                Share your knowledge with others or gain new insights!</b></font></p><br><br>
                </div>
            </div>
        </div>


    </body>


    <!--Footer-->
    <footer class="page-footer font-small blue-grey lighten-5 pt-0">

        <div style="background-color: #21d192;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text text-center text-md-left">
                            <strong>Get connected with us on social networks!</strong>
                        </h6>
                    </div>
                </div>
                <!--Grid row-->
            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-4 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-4 mb-4 dark-grey-text">
                    <p><b><strong>CREATED BY: </strong></b></p>
                    <img align="" height="90dp" WIDTH="270dp" src="/uploads/Orange_Logo_Orange.png" class="pull-left"/>


                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                    <p><b><strong>FOLLOW US:</strong></b></p>
                    <img align="" height="90dp" WIDTH="100dp" src="/uploads/facebook_logo.png" class="pull-left"/>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                    <br><br>
                    <img align="" height="85dp" WIDTH="90dp" src="/uploads/Logo-Twitter.png" class="pull-left"/>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->

                <!--/.Fourth column-->
                <div class="col-md-5 col-lg-3 col-xl-4 dark-grey-text">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="teal accent-3 mb-4 mt-1 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> Marconilaan 16, 5621 AA Eindhoven </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@OrangeDataSolutions.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 316 234 567 88</p>

                </div>

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
                <strong> MDBootstrap.com</strong>
            </a>
        </div>
        <!--/.Copyright -->


        <!-- Bootstrap core JavaScript
        ================================================= -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </footer>
    <!--/.Footer-->


</html>
