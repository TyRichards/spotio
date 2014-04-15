<?php
/*
Template Name: Features
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container col-no-padding-xs">  
 
        <!-- Features -->           
        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/iphone@2x-2.png" width="302" height="635" alt="">
                    </div>                    
                    <div class="col-sm-7 col-sm-offset-1">
                        <h1>Spotio Features</h1>

                        <p>You can decide whether to create your site using UI Kit blocks or samples.</p>

                        <div class="features">
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/Map@2x.png" width="100" height="100" alt="">
                                <h6>Map Pins</h6>

                                <p>Track exactly where you have been so you can multiply your efforts.</p>
                            </div>                                
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/Goal@2x.png" width="100" height="100" alt="">
                                <h6>Increase Sales</h6>

                                <p>Spotio will increase your sales and help you grow your sales team</p>
                            </div>
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/browser-iphone@2x.png" width="100" height="100" alt="">
                                <h6>Mobile & Web</h6>

                                <p>Spotio is built for mobile and web so you can make the most of your efforts in the field and in the office.</p>
                            </div>
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/Clipboard@2x.png" width="100" height="100" alt="">
                                <h6>Lead Status</h6>

                                <p>Check your lead status as Lead, Sale, Not Home or even a custom status so you can gauge your success in a glance.</p>
                            </div>
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/clock@2x.png" width="100" height="100" alt="">
                                <h6>Save Time</h6>

                                <p>Kiss door-to-door forms and clipboards goodbye forever. No more data entry or filing cabinets full of unorganized paperwork.</p>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <section class="container main-col col-sm-8 col-sm-offset-2 page-content">                          
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
          </div>           
      </section>               
    </div>
</section>

<?php get_footer(); ?> 
