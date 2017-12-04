<!doctype html>

<html lang="en-gb" class="no-js"> 

<head>
    <title>Maharagama blood bank </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/png" href="--><?php //echo base_url(assets2/images/favicon.png);?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="--><?php //echo base_url(assets2/images/favicon.ico);?>

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


    
    <!-- ######### CSS STYLES ######### -->

    <link rel="stylesheet" href="<?php echo base_url('assets2/css/reset.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/style.css');?>" type="text/css" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/font-awesome/css/font-awesome.min.css');?>">

    <!-- simple line icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/css/simpleline-icons/simple-line-icons.css');?>" media="screen" />

    <!-- et linefont icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/et-linefont/etlinefont.css');?>">

    <!-- animations -->
    <link href="<?php echo base_url('assets2/js/animations/css/animations.min.css');?>" rel="stylesheet" type="text/css" media="all" />

    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url('assets2/css/responsive-leyouts.css');?>" type="text/css" />

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="<?php echo base_url('assets2/css/shortcodes.css');?>" type="text/css" />



    <!-- mega menu -->
    <link href="<?php echo base_url('assets2/js/mainmenu/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/js/mainmenu/demo.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/s/mainmenu/menu.css');?>" rel="stylesheet">

    <!-- MasterSlider -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/js/masterslider/style/masterslider.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets2/js/masterslider/skins/de/style.css');?>" />

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets2/js/cubeportfolio/cubeportfolio.min.css');?>">

    <!-- owl carousel -->
    <link href="<?php echo base_url('assets2/js/carouselowl/owl.transitions.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets2/js/carouselowl/owl.carousel.css');?>" rel="stylesheet">

    <!-- tabs 2 -->
    <link href="<?php echo base_url('assets2/js/tabs2/tabacc.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets2/js/tabs2/detached.css');?>" rel="stylesheet" />


</head>

<body>

<div class="site_wrapper">

    <div class="top_nav" style="padding: 14px 16px;  background-color:#404040;">
        <div class="container">

            <div class="left">

               <!-- <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope" style= "font-size=40px;"></i>pdms@gmail.com</a> <i class="fa fa-phone-square"></i>&nbsp; +94-011-2850 253-->
            </div><!-- end left -->
            <ul class="nav navbar-nav navbar-right" style="width : 100px;">
                <!-- <button type ="button" class="dropdown-toggle" data-toggle="dropdown" class="tpbut" style=" font-size: 17px;"><i class="fa fa-lock"></i>Login</button> -->
                    
                    <li class="dropdown">


                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <button style="width: 80px; height: 43px;"><b>Login</b></button></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <div class="" style="width:300px; height: 250px; padding: 10px; padding-top: 50px;">
                                <?php echo form_open('users/login'); ?>
                                <div class="col-md-12">
                                    <h3 class="text-center"><b>Please Sign In
                                        <!-- <?php echo $title; ?> -->
                                    </h3>
                                    <div class="form-group">
                                        <input type="text" name="employee_username" class="form-control" placeholder="Enter Username" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="employee_password" class="form-control" placeholder="Enter Password" required autofocus>

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #330000;">Login</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </ul>
                    </li>
            </ul>    
</div>
            </div><!-- end right -->

        </div>
    </div><!-- end top navigation links -->
    <br>
    <!-- Slider
    ======================================= -->

    <!-- masterslider -->
    <div class="slidermar">
        <h2><b style="float:right; margin-right:100px; color:maroon; font-size:40px;">Maharagama Cancer Hospital Blood Bank</b></h2>

        <div class="master-slider ms-skin-default" id="masterslider">

            <div  class="ms-slide slide-1" data-delay="3">

                <div  class="slide-pattern"></div>

                <img  src="<?php echo base_url();?>/assets2/js/masterslider/51-1000x300.jpg"  alt=""/>
                




            </div><!-- end slide 1 -->


            <div class="ms-slide slide-2" data-delay="3">

                <div class="slide-pattern"></div>

                 <img src="<?php echo base_url();?>/assets2/js/masterslider/1.jpg"  alt=""/>

            </div><!-- end slide 2 -->


            <div class="ms-slide slide-3" data-delay="3">

                <div class="slide-pattern"></div>

                 <img src="<?php echo base_url();?>/assets2/js/masterslider/3.jpg"  alt=""/>




            </div><!-- end slide 3 -->

        </div>
    </div>
    <!-- end of masterslider -->

    <div class="clearfix divider_line margin_top10 margin_bottom10"></div>


    <div class="featured_section2">
        <div class="container">

            <div class="one_fourth_less animate" data-anim-type="fadeIn" data-anim-delay="300">

                <img src="<?php echo base_url(); ?>assets2/js/image/download.jpg" alt="" class="rimg" /> <h4 style="color:#FFF63F; font-size:30px;">Our Vision</h4>
                <p style="color:maroon; font-size:18px;">To reduce the cancer burden primarily through focusing on advocacy by integrate with key national and international health development agendas to increase the resources for cancer prevention, early detection, cancer treatment and care.</p>
                

            </div><!-- end section -->

            <div class="one_fourth_less animate" data-anim-type="fadeIn" data-anim-delay="400">

                <img src="<?php echo base_url(); ?>assets2/js/image/mission-and-vision-NEW-3-2.jpg" alt="" class="rimg" /> <h4 style="color:#FFF63F; font-size:30px;">Our Mission</h4>
                <p style="color:maroon; font-size:18px;">Our mission on you is to provide comprehensive care through evidence based best practices ensuring patients safety, research education and training. Further more to protect your life from cancers and feel you more safer.</p>
                

            </div><!-- end section -->

            <div class="one_fourth_less active animate" data-anim-type="fadeIn" data-anim-delay="500">

                <img src="<?php echo base_url(); ?>assets2/js/image/hqdefault.jpg" alt="" class="rimg" /> <h4 style="color:#FFF63F; font-size:30px;">History</h4>
                <p style="color:maroon; font-size:18px;">The National Cancer Institute of Maharagama, was established in 1956 as a radiation treatment center for cancer victims, which consisted of three radiation therapy unit with ten wards for in wards patients.This is a quick playback of who we are.</p>
                

            </div><!-- end section -->

            <div class="one_fourth_less last animate" data-anim-type="fadeIn" data-anim-delay="600">

                <img src="<?php echo base_url(); ?>assets2/js/image/images.jpg" alt="" class="rimg" /> <h4 style="color:#FFF63F; font-size:30px;">About Us</h4>
                <p style="color:maroon; font-size:18px;"> The blood bank is led by an expert Consultant and includes a team of 10 doctors. The blood bank is the center of coordination for the handling of blood samples and donations.</p>
              
            </div><!-- end section -->

        </div>
    </div><!-- end featured section 2 -->


    


 

    <div class="clearfix"></div>


    <footer class="footer">
        <div class="container">
            <h5 style="color:#8B2323; font-size:40px; margin-top:-40px; margin-bottom:40px;">Contact Us</h5>

          

            <div class="one_fourth animate" data-anim-type="fadeInUp" data-anim-delay="200">
                <div class="qlinks">

                    <h4 style="color:yellow;">Blood Bank</h4>

                    <ul class="faddress">
                    <li><img src="<?php echo base_url('assets2/images/footer-logo.png');?>" alt="" /></li>
                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;National Cancer Hospital Blood Bank,Maharagama,Srilanka,<br></li>
                    <li><i class="fa fa-phone"></i>&nbsp; 011-2369931</li>
                    <li><i class="fa fa-print"></i>&nbsp; 011–2842 051</li>
                    <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i>&nbsp; info@pdmsMaharagama.com</a></li>
                    <li><img src="<?php echo base_url('assets2/images/footer-wmap.png');?>" alt="" /></li>
                </ul>
                </div>
            </div><!-- end links -->


            <div class="one_fourth animate" data-anim-type="fadeInUp" data-anim-delay="200">
                <div class="qlinks">

                    <h4 style="color:yellow;">Cancer Hospital</h4>

                    <ul class="faddress">
                    <li><img src="<?php echo base_url('assets2/images/footer-logo.png');?>" alt="" /></li>
                    <li><i class="fa fa-phone"></i>&nbsp; 011-2691111</li>
                    <li><i class="fa fa-print"></i>&nbsp; 011-2369931</li>
                    <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i>&nbsp; info@ncisl.health.gov.lk</a></li>
                    <li><img src="<?php echo base_url('assets2/images/footer-wmap.png');?>" alt="" /></li>
                </ul>
                </div>
            </div><!-- end links -->

            <h5 style="color:yellow;">Hospital Location Map</h5>

            <div class="one_fourth last animate" data-anim-type="fadeInUp" data-anim-delay="400">

              <!-- Google Map Connection code part by iframe -->

                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10576.307385525843!2d79.
                92368511573365!3d6.841151007124166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25075423f1c03%
                3A0xc24046c99d1423e4!2z4La04LeS4LeF4LeS4Laa4LePIOC2u-C3neC3hOC2vSwg4La44LeE4La74Lac4La4!5e0!3m2!1ssi!2slk!
                4v1509014866315" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"

            </div><!-- end flickr -->

        </div><!-- end footer -->

        <div class="clearfix"></div>

        <div class="copyright_info">
            <div class="container">

                <div class="clearfix divider_dashed10"></div>

                <div class="one_half animate" data-anim-type="fadeInRight" data-anim-delay="300">

            Copyright © 2017 pdmsMaharagama.com. All rights reserved.<a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>

                </div>

                <div class="one_half last">

                    <ul class="footer_social_links">
                        <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="animate" data-anim-type="zoomIn" data-anim-delay="300"><a href="#"><i class="fa fa-skype"></i></a></li>
                     
                    </ul>

                </div>

            </div>
        </div><!-- end copyright info -->


    </footer>



    <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



</div>


<!-- ######### JS FILES ######### -->
<!-- get jQuery used for the theme -->
<script type="text/javascript" src="<?php echo base_url('assets2/js/universal/jquery.js');?>"></script>
<script src="<?php echo base_url('assets2/js/style-switcher/styleselector.js');?>"></script>
<script src="<?php echo base_url('assets2/js/animations/js/animations.min.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets2/js/mainmenu/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets2/js/mainmenu/customeUI.js');?>"></script>
<script src="<?php echo base_url('assets2/js/masterslider/masterslider.min.js');?>"></script>
<script type="text/javascript">
    (function($) {
        "use strict";
        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider' , {
            width:1400,    // slider standard width
            height:680,   // slider standard height
            space:0,
            speed:45,
            layout:'fullwidth',
            loop:true,
            preload:0,
            autoplay:true,
            view:"parallaxMask"
        });
    })(jQuery);
</script>
<script src="<?php echo base_url('assets2/js/scrolltotop/totop.js');?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets2js/mainmenu/sticky.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets2/js/mainmenu/js75180.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets2/js/cubeportfolio/jquery.cubeportfolio.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets2/js/cubeportfolio/main.js');?>"></script>
<script src="<?php echo base_url('assets2/js/tabs2/index.js');?>"></script>
<script>
    $('.accordion, .tabs').TabsAccordion({
        hashWatch: true,
        pauseMedia: true,
        responsiveSwitch: 'tablist',
        saveState: sessionStorage,
    });

</script>

<script type="text/javascript">
    $()
</script>
<script src="<?php echo base_url('assets2/js/aninum/jquery.animateNumber.min.js');?>"></script>
<script src="<?php echo base_url('assets2/js/carouselowl/owl.carousel.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets2/js/universal/custom.js');?>"></script>

</body>
</html>
