<?php
/*
Template Name: Pricing
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container col-no-padding-xs">  
      <!-- Pricing Table -->
      <div class="row clearfix">
        <h1 class="text-center">Pricing</h1>
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
                        View pins on map
                    </div>
                    <div class="description-box">
                        Date & time stamp
                    </div>  
                    <div class="description-box">
                        Update Pins
                    </div>                  
                </div>
                <a class="btn btn-huge btn-primary" href="http://login.icanvassapp.com/Account/Register">Sign Up</a>
            </div>
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
                        First 60 Days Free
                    </div>
                </div>
                <a class="btn btn-huge btn-primary" href="http://login.icanvassapp.com/Account/Register">Sign Up</a> 
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
