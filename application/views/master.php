<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?> | Editing Services</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/animation.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

        <style type="text/css">
            .navbar-inverse {
                border-color: transparent;}

            .navbar-brand
            {
                font-size: 17px;
            }
            .dropdown-menu{
                font-size:15px;
            }
            .dropdown-toggle{
                font-size:17px;
            } 
        </style>	
    </head>
    <body>

        <header>
            <div class="container-fluid" style="background: #FFFFFF; margin-top:8px; margin-bottom:8px;">
                <div class="row">

                    <div class="col-md-4 col-md-offset-1 pull-left">
                        <?php if ($published_logo) { ?> <a href="#" style="width: 50%;float: left;"><img src="<?php echo base_url() . $published_logo->logo_image; ?>" class="img-responsive" alt="Site Logo" height="250" width="120"> </a> <?php } else { ?>
                            <a href="<?php echo base_url(); ?>" style="width: 50%;float: left;"><img src="<?php echo base_url(); ?>img/logo/fixed_logo.png" class="img-responsive" alt="Site Logo" width="90"> </a>
                        <?php } ?>
                    </div>

                    <div class="col-md-7 text-right"> 
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-linkedin"></a> 
                        <br/>
                        <form action="" class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="search this site" />
                            </div>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form> 
                    </div>        
                </div>
            </div>
        </header>
        <!--End of the header-->

        <div class="body-wrap">
            <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="165" role="navigation">
                <div class="container">	
                    <div class="row-fluid">	 
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=
                                    "#main_menu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>

                            </button>
                            <a href="<?php echo base_url(); ?>" class="navbar-brand" style="margin-left:25px;"><span class="glyphicon glyphicon-home" aria-hidden="true" style="margin-right:17px;"></span>Home</a>

                        </div>

                        <!--menu section.. main_menu upore call kore data-target er moddhe deche-->
                        <div class="collapse navbar-collapse" id="main_menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>training">Training</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>editing">Editing</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url(); ?>research">Research</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Help on analysis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Publication Support Services<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>article_editing">Article Editing</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Format Checking</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Plagiarism</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Language Training<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">English</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Korean</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">China</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Malaysian</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#" style="font-size:17px;">About Us</a></li>
                                <li> <a href="<?php echo base_url(); ?>contact" style="font-size:17px;">Contact</a></li>
                            </ul>
                            <!--form section-->
                        </div>
                    </div>
                </div>
            </nav> 
            <!--End of the navbar-->
        </div>	 


        <?php if ($slider) { ?>
            <div class="featured container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12">
                        <div id="slider">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="slider1" class="img-responsive" width="304" height="236">
                                        <div class="carousel-caption">
                                            <h4> Research </h4>
                                            <p>Maximize your research</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo base_url(); ?>img/slider/2.jpg" alt="slider2" class="img-responsive" width="304" height="236">
                                        <div class="carousel-caption">
                                            <h4> Training </h4>
                                            <p>Learn training and apply in your work</p>

                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="<?php echo base_url(); ?>img/slider/3.jpg" alt="slider3" class="img-responsive" width="304" height="236">
                                        <div class="carousel-caption">
                                            <h4> Innovation</h4>
                                            <p>Be innovative to create anything</p>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="slider4" class="img-responsive" width="304" height="236">
                                        <div class="carousel-caption">
                                            <h4> Language</h4>
                                            <p>Language in all over the world</p>

                                        </div>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>  <!--End slider container-->
                    </div>

                </div>
            </div>  <!--End slider section-->
        <?php } ?>

        <!--main content-->
        <?php echo $maincontent; ?>
        <!--main content-->










        <hr align="left" width="100%">
        <footer>
            <div class="container-fluid text-center"> 
            </div>
            <p class="text-center"> &copy; Copyright-All right reserved Patuakhali Bangladesh </p> 
        </footer>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" 
           role="button" title="" data-toggle="tooltip" data-placement="top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a> <!--scroll to top-->

        <script type="text/javascript">

        </script>	
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/style.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>js/npm.js"></script>
    </body>
</html>