<div class="container-fluid">
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a></li>
        <li><a href="#"></a><?php echo $service_info->category_name; ?></li>
    </ul>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-7">
            <div style="margin-left:60px;">
                <h3><b><?php echo $service_info->category_title; ?></b></h3>
                <div class="clearfix">
                    <p class="pull-left">
                    <h4> <i><i class="icon-user"></i> Category:<?php echo $service_info->category_name; ?>| <i class="icon-folder-close"></i> By Posted on| <i class="icon-calendar"></i> &nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <?php echo $service_info->present_date_time; ?> </i></h4>
                    <i class="icon-user"></i> <h3> <b>Location:<?php echo $service_info->location; ?></b></h3>
                    </p>
                </div><br/>
                <hr />
                <p><?php echo $service_info->category_long_description; ?></p>
                <br />
            </div>
        </div>



        <div class="col-md-4">
            <div style="margin-left:78px;margin-top:10px;background-color: #87BB11;font-size:27px;">
                <p style="margin-left:30px;">Related Services</p>
            </div>
        <!--    <table class="table" style="margin-left:78px;">
                <tr>  
                    <td>
                        <a href="#">
                            <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                        </a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                        </a>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                        </a>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                        </a>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                        </a>
                    </td> 
                </tr>
            </table> -->
            
       
        <!--    <div style="margin-left:30px;">
                    <div class="header">
                        <h4 style="background-color:#019934;; margin-left:30px; height: 25px;"><p style="margin-left:17px;">Like us on facebook</p></h4>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9" style="margin-left: 30px;">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDailyBechaKena%2F&tabs=timeline&width=380&height=320&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="380" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
                    </div>
                </div> -->
        </div>
    </div>
</div>


