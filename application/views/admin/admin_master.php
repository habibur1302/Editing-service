<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>Editing Services Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Rajib Roy">

        <script type="text/javascript" src="<?php echo base_url() ?>js/jsval.js"></script>
        <link  href="<?php echo base_url() ?>asset/css/bootstrap-cerulean.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="<?php echo base_url() ?>asset/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
        <link href='<?php echo base_url() ?>asset/css/fullcalendar.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
        <link href='<?php echo base_url() ?>asset/css/chosen.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/uniform.default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/colorbox.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.cleditor.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/opa-icons.css' rel='stylesheet'>
        <link href='<?php echo base_url() ?>asset/css/uploadify.css' rel='stylesheet'>
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- alert message to delete a category...javascript code-->
        <script type="text/javascript">
            function check_delete() {
                var chk = confirm("Are you sure you want to delete this record?");
                if (chk)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        </script>
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="<?php echo base_url(); ?>super_admin"><span>Admin panel</span></a>

                    <div class="btn-group pull-right" >
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user"></i><span class="hidden-phone"><?php echo $this->session->userdata('full_name_admin'); ?></span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>super_admin/logout"> Logout </a></li>
                        </ul>
                    </div>

                    <div class="top-nav nav-collapse">
                        <ul class="nav">
                            <li><a href="#">Visit Site</a></li>
                            <li>
                                <form class="navbar-search pull-left">
                                    <input placeholder="Search" class="search-query span2" name="query" type="text">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="span2 main-menu-span">
                    <div class="well nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li class="nav-header hidden-tablet">Main</li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>     
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>add_service"><i class="icon-picture"></i><span class="hidden-tablet"> Add Service</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>manage_service"><i class="icon-calendar"></i><span class="hidden-tablet"> Manage Services</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>add_slider"><i class="icon-list-alt"></i><span class="hidden-tablet"> Add Slider</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>manage_slider"><i class="icon-font"></i><span class="hidden-tablet"> Manage Slider</span></a></li>
                            <li class="nav-header hidden-tablet">Admin Section</li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_change_password"><i class="icon-font"></i><span class="hidden-tablet"> Change Password</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>manage_user"><i class="icon-th"></i><span class="hidden-tablet"> Manage User</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>manage_comment"><i class="icon-folder-open"></i><span class="hidden-tablet"> Manage Comments</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_admin"><i class="icon-align-justify"></i><span class="hidden-tablet"> Manage Admin</span></a></li>

                            <li class="nav-header hidden-tablet">Logo Section</li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>manage_logo"><i class="icon-list-alt"></i><span class="hidden-tablet"> Manage Logo</span></a></li>

                        </ul>
                        <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                    </div>
                </div>

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <div id="content" class="span10">
                    <!-- content starts -->

                    <!-- This is the cut of Dashboard -->
                    <?php echo $admin_main_content; ?>

                    <!-- content ends -->
                </div>
            </div>

            <hr>
            <div class="modal hide fade" id="myModal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>

            <footer>
                <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Online News</a> 2017</p>
                <p class="pull-right">Developer Name: <a href="">Rajib Roy</a></p>
            </footer>
        </div>

        <script src="<?php echo base_url() ?>asset/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery-ui-1.8.21.custom.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-transition.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-alert.js"></script>       
        <script src="<?php echo base_url() ?>asset/js/bootstrap-modal.js"></script>      
        <script src="<?php echo base_url() ?>asset/js/bootstrap-dropdown.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-scrollspy.js"></script>    
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tab.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tooltip.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-popover.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-button.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-collapse.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-carousel.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-typeahead.js"></script>
        <script src="<?php echo base_url() ?>asset/js/bootstrap-tour.js"></script>   
        <script src="<?php echo base_url() ?>asset/js/jquery.cookie.js"></script> 
        <script src='<?php echo base_url() ?>asset/js/fullcalendar.min.js'></script>
        <script src='<?php echo base_url() ?>asset/js/jquery.dataTables.min.js'></script>    
        <script src="<?php echo base_url() ?>asset/js/excanvas.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.flot.resize.min.js"></script>
        <!-- chart libraries end -->

        <script src="<?php echo base_url() ?>asset/js/jquery.chosen.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.uniform.min.js"></script>  
        <script src="<?php echo base_url() ?>asset/js/jquery.colorbox.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.cleditor.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.noty.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.elfinder.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.raty.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.iphone.toggle.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.autogrow-textarea.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.uploadify-3.1.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/jquery.history.js"></script> 
        <script src="<?php echo base_url() ?>asset/js/charisma.js"></script>

    </body>
</html>
