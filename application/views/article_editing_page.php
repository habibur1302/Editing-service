
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="font-size:30px;background-color: #87BB11;"><p style="margin-left:70px;">Article Editing Services</p></div>

            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br/>
                        <?php
                        foreach ($published_service_one as $v_service) {
                            ?>  
                            <div class="caption">
                                <a href="#" style="text-decoration: none;">
                                    <h3><?php echo $v_service->category_title; ?></h3>
                                </a> 
                                <table class="table">
                                    <tr>
                                        <td> 
                                            <p><?php echo $v_service->category_short_description; ?></p>   
                                            <a href="<?php echo base_url(); ?>welcome/service_page/<?php echo $v_service->category_id ?>" class="btn btn-info">View More</a>   
                                        </td>
                                    </tr>

                                </table> <!--latest service  -->
                                <br/>
                            <?php } ?>
                    <!--   <table class="table">
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                    </table><!--old service show after latest service  -->
                        </div>   
                    </div>
                </div>  

                <!--   <div class="col-md-6">
                    <br/>
                    <!--   <table class="table">
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a> 
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/2.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/3.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a>
                            </td>
                            <td>
                                <a href="#">
                                    <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
                                </a>
                                <p>Author name + date time</p>
                            </td> 
                        </tr>
                    </table>
                </div>   <!--Old service for show left side-->
            </div>   <!-- div-class-col-md-8 -->





            <div class="col-md-4">
                <div style="margin-top:-52px;background-color: #87BB11;font-size:27px;">
                    <p style="margin-left:30px;">Related Article Services</p>
                </div>
                <br/>
                 <!--  <table class="table" style="margin-left:30px;">
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
                </table>

                <!-- fb page link
                <div class="">
                    <div class="header">
                        <h4 style="background-color:#019934;; margin-left:30px; height: 25px;"><p style="margin-left:17px;">Like us on facebook</p></h4>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9" style="margin-left: 30px;">
                        <iframe src="#" width="380" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
                    </div>
                </div> -->

            </div>

        </div>
</section><!--latest services top-->



<!--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="font-size:30px;background-color: #87BB11;"><p style="margin-left:70px; font-size: 25px;">Latest Publication Support</p></div>

            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br/>
                        <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="280" height="200"></a>
                        <br />
                        <br />  
                        <div class="caption">
                            <a href="#">
                                <h4>This is the news title</h4>
                            </a> 
                            <table class="table">
                                <tr>
                                    <td><p>Author name + present_date_time</p></td>  <!--Show who add the post and also the post date from database-->
<!--    </tr>

    <tr>
        <td> 
            <p>category_short_description</p>   <!--show some about the post from database-->
<!--              <a href="#" class="btn btn-info">View More</a>    <!--Click the button to see the total page of that opportunity-->
<!--           </td>
      </tr>

  </table> <!--latest publication support  -->
<!--      <br/>

   <table class="table">
       <tr>
           <td>
               <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
           </td>
           <td>
               <a href="#">
                   <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
               </a>
               <p>Author name + date time</p>
           </td> 
       </tr>
       <tr>
           <td>
               <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
           </td>
           <td>
               <a href="#">
                   <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
               </a>
               <p>Author name + date time</p>
           </td> 
       </tr>
   </table><!--old service show after latest service  -->
<!--         </div>   
  </div>
</div>  

<div class="col-md-6">
  <br/>
  <table class="table">
      <tr>
          <td>
              <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a> 
          </td>
          <td>
              <a href="#">
                  <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
              </a>
              <p>Author name + date time</p>  
          </td>
      </tr>
      <tr>
          <td>
              <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
          </td>
          <td>
              <a href="#">
                  <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
              </a>
              <p>Author name + date time</p>
          </td> 
      </tr>
      <tr>
          <td>
              <a href="#"><img src="<?php echo base_url(); ?>img/slider/2.jpg" alt="No image record" class="img" width="120" height="80"></a>
          </td>
          <td>
              <a href="#">
                  <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
              </a>
              <p>Author name + date time</p>
          </td> 
      </tr>
      <tr>
          <td>
              <a href="#"><img src="<?php echo base_url(); ?>img/slider/3.jpg" alt="No image record" class="img" width="120" height="80"></a>
          </td>
          <td>
              <a href="#">
                  <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
              </a>
              <p>Author name + date time</p>
          </td> 
      </tr>
      <tr>
          <td>
              <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a>
          </td>
          <td>
              <a href="#">
                  <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
              </a>
              <p>Author name + date time</p>
          </td> 
      </tr>
  </table>
</div>   <!--Old service for show left side-->
<!--    </div>   <!-- div-class-col-md-8 -->




<!-- fb page link
            <div class="col-md-4">
                <div style="margin-top:-52px;background-color: #87BB11;font-size:27px;">
                    <p style="margin-left:30px; font-size: 23px;">Publication Support side</p>
                </div>
                <br/>
                <table class="table" style="margin-left:30px;">
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
                </table>

                
                <div class="">
                    <div class="header">
                        <h4 style="background-color:#019934;; margin-left:30px; height: 25px;"><p style="margin-left:17px;">Like us on facebook</p></h4>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9" style="margin-left: 30px;">
                        <iframe src="#" width="380" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
                    </div>
               

            </div>
        </div>
</section>



 <!--<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="font-size:30px;background-color: #87BB11;"><p style="margin-left:70px; font-size: 25px;">Language Training</p></div>
     
            <div class="col-md-8">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <br/>
                        <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="280" height="200"></a>
                        <br />
                        <br />  
                        <div class="caption">
                            <a href="#">
                                <h4>This is the news title</h4>
                            </a> 
                            <table class="table">
                                <tr>
                                    <td><p>Author name + present_date_time</p></td>  <!--Show who add the post and also the post date from database-->
<!--    </tr>
<!--
   <tr>
       <td> 
           <p>category_short_description</p>   <!--show some about the post from database-->
<!--      <a href="#" class="btn btn-info">View More</a>    <!--Click the button to see the total page of that opportunity-->
<!--  </td>
</tr> 

</table> <!--latest service  -->
<!--   <br/> 

   <table class="table">
       <tr>
           <td>
               <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
           </td>
           <td>
               <a href="#">
                   <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
               </a>
               <p>Author name + date time</p>
           </td> 
       </tr>
       <tr>
           <td>
               <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
           </td>
           <td>
               <a href="#">
                   <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
               </a>
               <p>Author name + date time</p>
           </td> 
       </tr>
   </table><!--old service show after latest service  -->
<!--    </div>   
</div>
</div>  

<div class="col-md-6">
<br/>
<table class="table">
    <tr>
        <td>
            <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a> 
        </td>
        <td>
            <a href="#">
                <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
            </a>
            <p>Author name + date time</p>  
        </td>
    </tr>
    <tr>
        <td>
            <a href="#"><img src="<?php echo base_url(); ?>img/slider/1.jpg" alt="No image record" class="img" width="120" height="80"></a>
        </td>
        <td>
            <a href="#">
                <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
            </a>
            <p>Author name + date time</p>
        </td> 
    </tr>
    <tr>
        <td>
            <a href="#"><img src="<?php echo base_url(); ?>img/slider/2.jpg" alt="No image record" class="img" width="120" height="80"></a>
        </td>
        <td>
            <a href="#">
                <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
            </a>
            <p>Author name + date time</p>
        </td> 
    </tr>
    <tr>
        <td>
            <a href="#"><img src="<?php echo base_url(); ?>img/slider/3.jpg" alt="No image record" class="img" width="120" height="80"></a>
        </td>
        <td>
            <a href="#">
                <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
            </a>
            <p>Author name + date time</p>
        </td> 
    </tr>
    <tr>
        <td>
            <a href="#"><img src="<?php echo base_url(); ?>img/slider/4.jpg" alt="No image record" class="img" width="120" height="80"></a>
        </td>
        <td>
            <a href="#">
                <h5>Canadian university student Tahmid Hasib, who was arrested under</h5>  
            </a>
            <p>Author name + date time</p>
        </td> 
    </tr>
</table>
</div>   <!--Old service for show left side-->
<!-- </div>   <!-- div-class-col-md-8 -->




<!--
<div class="col-md-4">
    <div style="margin-top:-52px;background-color: #87BB11;font-size:27px;">
        <p style="margin-left:30px; font-size: 23px;">Language Training side</p>
    </div>
    <br/>
    <table class="table" style="margin-left:30px;">
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
    </table>

<!-- fb page link
<div class="">
    <div class="header">
        <h4 style="background-color:#019934;; margin-left:30px; height: 25px;"><p style="margin-left:17px;">Like us on facebook</p></h4>
    </div>
    <div class="embed-responsive embed-responsive-16by9" style="margin-left: 30px;">
        <iframe src="#" width="380" height="320" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
    </div>
</div>  -->

<!--  </div> 
</div>
</section>   
