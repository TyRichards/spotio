<?php
/*
Template Name: Pricing
*/
?>

<?php get_header(); ?>

<section class="primary-content container">
    <div class="col-no-padding-xs">  
        <!-- Pricing Table -->
        <div class="row clearfix">
            <h1 class="text-center">Pricing</h1>
            <p class="text-center no-margin">Free 14 Day Trial. No Credit Card Required</p>
        </div>       
        <section class="pricing   col-md-8 col-md-offset-2">         
            <div class="col-sm-6">
                <div class="plan">
                    <div class="title h3">Basic</div>
                    <div class="price">Free</div>
                    <div class="description">
                        <div class="description-box">
                            Mobile only (After Free Trial)
                        </div>                    
                        <div class="description-box">
                            100 pins
                        </div>
                        <div class="description-box">
                            Map & Pin List
                        </div>
                        <div class="description-box">
                            Date & time stamp
                        </div>  
                        <div class="description-box">
                            Update Pins
                        </div>                  
                    </div>
                    <a class="btn btn-huge btn-primary" href="http://login.icanvassapp.com/Account/Register">Sign Up</a>
                </div> <!-- .plan -->
            </div>
            <div class="col-sm-6">
                <div class="plan">
                    <div class="title h3">Premium</div>
                    <div class="price">$24 / mo per user</div>
                    <div class="description">
                        <div class="description-box">
                            Mobile & Web App
                        </div>                   
                        <div class="description-box">
                            <i>Unlimited</i> pins
                        </div>
                        <div class="description-box">
                            Manage teams
                        </div>
                        <div class="description-box">
                            Custom Reports
                        </div>                   
                        <div class="description-box">
                            Custom Status & Questions
                        </div>
                    </div>
                    <a class="btn btn-huge btn-primary" href="http://login.icanvassapp.com/Account/Register">Sign Up</a> 
                </div>
            </div>
        </section> 
    </div>
</section> <!-- primary content -->         
      

<section class="section reviews">
    <div class="container">
        <img class="image hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen-1.jpg" alt="Spotio">
        <div class="visible-xs">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen-1.jpg" alt="Spotio">
        </div>        
        <div class="col-xs-12">
            <div class="text-center col-sm-8 col-sm-offset-2">
                <h2>Frequently Asked Questions</h2>            
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-8">
            <ul class="media-list">       
                <li class="media">
                    <div class="media-body">                   
                        <h5><i class="fa fa-file fa-left"></i>Is there a contract?</h5>
                    </div>                                        
                    <p>No, Spotio is paid on a month-to-month basis and you can cancel at anytime. If you cancel during the middle of your billing cycle you will not be given a prorated refund.</p>
                </li>
                <li class="media">
                    <div class="media-body">                   
                        <h5><i class="fa fa-tags fa-left"></i>Are there discounts?</h5>
                    </div>                                        
                    <p>Yes, we offer discounts for large teams over with 25 users and for paying up front for a years worth of use. Please contact us for more information on the available discounts.</p>
                </li>              
                <li class="media">
                    <div class="media-body">                   
                        <h5><i class="fa fa-lock fa-left"></i>How safe is my Data?</h5>
                    </div>                                        
                    <p>Very safe. Your data is stored on our secure servers, not the mobile device. If you lose your phone, don't worry, log in on another device and BOOM, there is everything. Offsite backups happen every day.</p>
                </li>                                
            </ul>                                   
        </div>
    </div>
</section>            

<section class="section reviews container">
    <div class="col-xs-12">
        <div class="text-center col-sm-10 col-sm-offset-1">
            <h2>We are the #1 Choice for Door-to-Door Tracking for a Reason</h2>                        
        </div>
        <div class="col-xs-12 text-center alert alert-black">
            <h5>Find out for yourself &nbsp;&nbsp;&nbsp;&nbsp;<span><a class="btn btn-primary" href="http://login.icanvassapp.com/Account/Register">Try It Now</a></span></h5>
        </div>            
        <div class="col-sm-4">
            <img class="img-mini pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/michelle-capp.png" alt="Spotio Reviews" width="100%" height="100%">
            <h5>Michelle Capp</h5>                                        
            <p>"I just started a door to door sales job and this app has been a lifesaver.  It make my job so much easier and keeps me organized.  This app is a must have!"</p>
        </div>
        <div class="col-sm-4">
            <img class="img-mini pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/steven-scheeler.png" alt="Spotio Reviews" width="100%" height="100%">
            <h5>Steven Scheeler</h5>                        
            <p>"Great way to canvass a neighborhood while you deliver to current clients.    I love this app. It takes out the guess work on who you have talk too and who you need to talk too. Love the calendar built in that sends you an email reminders on who your leads are for that day."</p>
        </div>              
        <div class="col-sm-4">
            <img class="img-mini media-object pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/james-festini.png" alt="Spotio Reviews" width="100%" height="100%">
            <h5>James Festini</h5>                                        
            <p>"If you door knock you must ICanvass. Door knocking will never be the same again. A must have for your door sales person."</p>
        </div>                      
    </div>
</section>

<?php get_footer(); ?> 
