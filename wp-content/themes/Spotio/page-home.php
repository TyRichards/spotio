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
        <div class="col-sm-5 col-no-padding">
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
                            Made for mobile & desktop<br>
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
    <div class="download-buttons">
        <a href="https://itunes.apple.com/us/app/icanvass-door-to-door-sales/id618155835?mt=8" target="_blank">
            <div class="btn-sprite btn-appstore"></div>
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.icanvass" target="_blank">
            <div class="btn-sprite btn-googleplay"></div>
        </a>
    </div>
</section>

<!-- Credibility indicators -->
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

<section class="primary-content">
    <div class="container col-no-padding-xs">
        <section class="main-col page-content col-sm-7">
            <div id="main" class="site-main" role="main">
                <?php
                while (have_posts()) {
                  the_post();

                  get_template_part('content', 'page');

                  echo "\n\n";
               // If comments are open or we have at least one comment, load up the comment template
                  if (comments_open() || '0' != get_comments_number()) {
                    comments_template();
                  }

                  echo "\n\n";

                } //endwhile;
                ?>
                <a class="btn btn-success" href="#">
                    <i class="fa fa-phone fa-1x"></i>
                    Call (555) 555-5555
                </a>
                    &nbsp;&nbsp;
                <a class="btn btn-success" href="/locations">
                    <i class="fa fa-map-marker fa-1x"></i>
                    Locations
                </a>             
           </div>
        </section>
        <section class="sidebar-col sidebar-right sidebar col-sm-5">
            <div class="col-sm-12 col-md-10 col-md-offset-2 col-no-padding">
<!--                 <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                    else {
                        ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image img-rounded col-md-9 col-no-padding" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                    }
                ?>   -->       
                <?php get_sidebar('default'); ?>
            </div>
        </section>
    </div>
</section>


<?php get_footer(); ?> 