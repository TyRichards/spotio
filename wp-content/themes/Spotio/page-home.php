<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- Subheader Section -->
<section class="masthead">
    <div class="background">&nbsp;</div>
    <div class="container col-no-padding-xs">   
        <div class="col-sm-7">
<!--             <div class="download-buttons text-center">
                <a href="https://itunes.apple.com/us/app/icanvass-door-to-door-sales/id618155835?mt=8" target="_blank">
                    <div class="btn-sprite btn-appstore"></div>
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.icanvass" target="_blank">
                    <div class="btn-sprite btn-googleplay"></div>
                </a>
            </div> -->            
        </div>           
        <div class="col-sm-5">
            <div class="col-sm-12 col-no-padding">
                <h2><i>The</i> App for Tracking Door-to-Door Sales</h2>
                <div class="icon-section">
                    <div class="icon-sections clearfix">
                        <div class="col-xs-2 text-center vert-align col-no-padding">
                            <i class="fa fa-map-marker fa-3x"></i>
                        </div>
                        <div class="col-xs-10 vert-align">
                            Maps & reports that keep you in the know 
                        </div>
                    </div>
                    <div class="icon-sections clearfix">
                        <div class="col-xs-2 text-center vert-align col-no-padding">
                            <i class="fa fa-arrow-circle-right fa-3x"></i>
                        </div>
                        <div class="col-xs-10 vert-align">
                            Fast and easy to use
                        </div>
                    </div>
                    <div class="icon-sections clearfix">   
                        <div class="col-xs-2 text-center vert-align col-no-padding">             
                            <i class="fa fa-laptop fa-2x"></i><i class="fa fa-mobile fa-2x"></i>
                        </div>
                        <div class="col-xs-10 vert-align">
                            Made for mobile & web<br>
                            iOS, Android, Mac & PC 
                        </div>
                    </div>                
                </div>
                <p>                    
                    <a class="btn btn-lg btn-primary btn-block text-center" href="http://login.icanvassapp.com/Account/Register">
                        Start Free Trial
                        <i class="fa fa-right fa-arrow-circle-right"></i>
                    </a>
                    <a class="btn btn-lg btn-clear btn-block text-center" href="/features">
                        How It Works
                        <i class="fa fa-right fa-play-circle"></i>
                    </a>                                    
                </p>
            </div>            
        </div>              
    </div> <!-- .container -->
<!--     <div class="download-buttons">
        <a href="https://itunes.apple.com/us/app/icanvass-door-to-door-sales/id618155835?mt=8" target="_blank">
            <div class="btn-sprite btn-appstore"></div>
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.icanvass" target="_blank">
            <div class="btn-sprite btn-googleplay"></div>
        </a>
    </div> -->
</section>

<!-- Integrations -->
<section class="logos">
    <div class="container">
        <div class="col-md-2 text-center">
            <p>Integrates With:</p>
        </div>
        <div class="col-md-10 cred-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integrations.png" alt="Spotio Integrations" width="100%">
        </div>                                                                                           
    </div>
</section>   

<!-- Testimonials -->
<section class="section reviews">
    <div class="container">
        <img class="image hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen-1.jpg" alt="Spotio">
        <div class="visible-xs">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/screen-1.jpg" alt="Spotio">
        </div>        
        <div class="col-xs-12">
            <div class="text-center col-sm-8 col-sm-offset-2">
                <h2>The #1 Door to Door App on the App Store & Google Play</h2>            
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-8">
            <ul class="media-list">       
                <li class="media">
                    <img class="img-mini pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/michelle-capp.png" alt="Spotio Reviews" width="100%" height="100%">
                    <div class="media-body">                   
                        <h5>Michelle Capp</h5>                        
                    </div>
                    <p>"I just started a door to door sales job and this app has been a lifesaver.  It make my job so much easier and keeps me organized.  This app is a must have!"</p>
                </li>
               <li class="media">
                    <img class="img-mini media-object pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/james-festini.png" alt="Spotio Reviews" width="100%" height="100%">
                    <div class="media-body">                   
                        <h5>James Festini</h5>                        
                    </div>
                    <p>"If you door knock you must ICanvass. Door knocking will never be the same again. A must have for your door sales person."</p>
                </li>                
                <li class="media">
                    <img class="img-mini pull-left circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer/steven-scheeler.png" alt="Spotio Reviews" width="100%" height="100%">
                    <div class="media-body">                   
                        <h5>Steven Scheeler</h5>                        
                    </div>
                    <p>"Great way to canvass a neighborhood while you deliver to current clients.    I love this app. It takes out the guess work on who you have talk too and who you need to talk too. Love the calendar built in that sends you an email reminders on who your leads are for that day."</p>
                </li>                                
            </ul>                                   
        </div>
    </div>
</section>            

<?php get_footer(); ?> 