<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.body-content-->

			<!-- Call to Action -->
			<section class="section-sm bg-primary">
			    <div class="container">
			        <div class="col-sm-8 text-center">
			            <h4>Sign up in seconds. 14 day free trial.</h4>
			            <span>No credit card required</span>
			        </div>
			        <div class="col-sm-4">
			            <a id="btn-action" class="btn btn-lg btn-clear btn-block" href="http://login.icanvassapp.com/Account/Register">
			                Get Started
			                <i class="fa fa-arrow-circle-right fa-right"></i>
			            </a>
			        </div>
			    </div>
			</section>   

			<footer class="footer">
				<section class="more-foot">
			        <div class="container col-no-padding-xs">
					    	
					        <div class="col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0">
										<div class="col-sm-12 col-no-padding-xs">
											<div class="clearfix">
							        	<a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								        	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
								        </a>
							      	</div>
<!-- 											<div class="clearfix">
												<p class="text-center tagline"><?php bloginfo('description'); ?></p>
											</div>	 -->
							       	<div class="clearfix"></div>
							        <div class="col-md-12 col-no-padding">									   
				                <p class="social-btns text-center">				                	
				                	<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				                	<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				                	<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
				                	<a href="http://youtube.com/" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
				                	<a href="http://linkedin.com/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
				              	</p>
						          </div> 																		        
						        </div>		
					        </div>					        
					        <div class="clearfix visible-sm"></div>
				          <div class="col-sm-3 col-md-2 hidden-xs">
										<?php dynamic_sidebar('footer-left'); ?>
				          </div>
				          <div class="col-sm-3 col-md-2 hidden-xs">
					            	<?php dynamic_sidebar('footer-right'); ?>
	<!-- 				                <h6>Follow Us</h6>
					                <ul>
										<li><a href="#">Facebook</a>
										</li>
										<li><a href="#">Twitter</a>
										</li>
										<li><a href="#">Instagram</a>
										</li>
					                </ul> -->
				          </div>					        
					        <div class="col-sm-6 col-md-3">
					          <a class="btn btn-primary btn-block" href="http://login.icanvassapp.com/Account/Register">											
											Start Free Trial
											<i class="fa fa-right fa-arrow-circle-right"></i>
										</a>
					          <a class="btn btn-clear btn-block" href="http://login.icanvassapp.com/">
											Sign In
										</a>  										  								
					      	</div>
					   		
			        </div> <!-- container -->
	      		</section>	      		
	      		<section class="small-footer">
	      			<div class="container col-no-padding-xs">
	      				<div class="col-xs-12 col-sm-8">
			        		<div class="pull-left footer-credits">		        			
			        			<small>
			        				<a href="<?php echo esc_url(home_url('/')); ?>">
			        					© <?php echo date("Y"); ?> <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
			        				</a>
			        			</small>		        			
			        		</div>
			        		<div class="pull-left footer-menu">
			        			<?php dynamic_sidebar('footer-credits'); ?>
			        		</div>
		        		</div>
		        		<div class="col-xs-12 col-sm-4">
			        		<div class="pull-right no-float-xs">
			        			<a href="http://paradoxcreative.com" target="_blank">
			        				<small>Site crafted by Paradox</small>
			        			</a>
			        		</div>
			        	</div>
		        	</div>
		        </section>	
	      	</footer>	
	      </div> <!-- .container -->	     
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/ejk1iep.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>	
		<script type='text/javascript'>if(new Date().getTime() < 1399471137000){var fc_CSS=document.createElement('link');fc_CSS.setAttribute('rel','stylesheet');var isSecured = (window.location && window.location.protocol == 'https:');fc_CSS.setAttribute('type','text/css');fc_CSS.setAttribute('href',((isSecured)? 'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets1.chat.freshdesk.com')+'/css/visitor.css');document.getElementsByTagName('head')[0].appendChild(fc_CSS);var fc_JS=document.createElement('script'); fc_JS.type='text/javascript';fc_JS.src=((isSecured)?'https://d36mpcpuzc4ztk.cloudfront.net':'http://assets.chat.freshdesk.com')+'/js/visitor.js';(document.body?document.body:document.getElementsByTagName('head')[0]).appendChild(fc_JS);window.freshchat_setting= 'eyJ3ZWJ1cmwiOiJzcG90aW8uZnJlc2hkZXNrLmNvbSIsIm5vZGV1cmwiOiJjaGF0LmZyZXNoZGVzay5jb20iLCJmY19pZCI6IjFhMjJkYjhjNGRlNDA1OWZmMTY1YWQ4YTNhZjAwMTFiIiwiZmNfc2UiOiI4ZTg4ZjBhNGRhODM5NjFjMTcyMzZjOWZiMmYwNmRmYTc1Zjg3MzM2Y2FhYTE0NWMxYTYwYjU1MGRjYTM0M2I5NDA5NmUxYWNhN2JiODdmODIwZmIyMTUwMGI3OTUyNWM4NzcxNTFjZDM4NTQ2MDMwNzk2YWRhZGEwZTE3Mzk5YSIsImRlYnVnIjoxLCJ0ZXh0X3BsYWNlIjoiWW91ciBNZXNzYWdlIiwibmFtZV9wbGFjZSI6Ik5hbWUiLCJtYWlsX3BsYWNlIjoiRW1haWwiLCJwaG9uZV9wbGFjZSI6IlBob25lIE51bWJlciIsImFnZW50X2xlZnRfbXNnIjoiJCBoYXMgbGVmdCB0aGUgY2hhdCIsImFnZW50X2pvaW5lZF9tc2ciOiIkIGhhcyBqb2luZWQgdGhlIGNoYXQiLCJjb25uZWN0aW5nX21zZyI6IldhaXRpbmcgZm9yIGFuIGFnZW50IiwiYmVnaW5fY2hhdCI6IkJlZ2luIGNoYXQiLCJtZSI6Ik1lIiwiZXhwaXJ5IjoxMzk5NDcxMTM3MDAwLCJjb2xvciI6IiM3Nzc3NzciLCJvZmZzZXQiOiIzMCIsIm1pbmltaXplZF90aXRsZSI6IkxldCdzIHRhbGshIiwibWF4aW1pemVkX3RpdGxlIjoiQ2hhdCBpbiBwcm9ncmVzcyIsIndlbGNvbWVfbWVzc2FnZSI6IkhpISBIb3cgY2FuIHdlIGhlbHAgeW91IHRvZGF5PyIsInRoYW5rX21lc3NhZ2UiOiJUaGFuayB5b3UgZm9yIGNoYXR0aW5nIHdpdGggdXMuIElmIHlvdSBoYXZlIGFkZGl0aW9uYWwgcXVlc3Rpb25zLCBmZWVsIGZyZWUgdG8gcGluZyB1cyEiLCJ3YWl0X21lc3NhZ2UiOiJBbGwgb3VyIGFnZW50cyBhcmUgYnVzeSBjaGF0dGluZyByaWdodCBub3cuIFBsZWFzZSBoYW5nIG9uIGZvciBhIGNvdXBsZSBvZiBtaW51dGVzLiIsInR5cGluZ19tZXNzYWdlIjoiaXMgdHlwaW5nLi4uIiwibm9uX2F2YWlsYWJpbGl0eV9tZXNzYWdlIjoiTG9va3MgbGlrZSBhbGwgb3VyIGFnZW50cyBhcmUgdGllZCB1cCByaWdodCBub3cgOiggU29ycnkgYWJvdXQgdGhhdCwgYnV0IHBsZWFzZSAjIGxlYXZlIHVzIGEgbWVzc2FnZSAjIGFuZCB3ZSdsbCBnZXQgcmlnaHQgYmFjay4iLCJwcmVjaGF0X21lc3NhZ2UiOiJXZSBjYW4ndCB3YWl0IHRvIHRhbGsgdG8geW91LiBCdXQgZmlyc3QsIHBsZWFzZSB0YWtlIGEgY291cGxlIG9mIG1vbWVudHMgdG8gdGVsbCB1cyBhIGJpdCBhYm91dCB5b3Vyc2VsZi4iLCJwcm9hY3RpdmVfdGltZSI6IjEwNSIsInRpY2tldF9saW5rX29wdGlvbiI6IjAiLCJwcmVjaGF0X2Zvcm0iOjEsInByZWNoYXRfcGhvbmUiOjAsInByZWNoYXRfbWFpbCI6MCwicHJvYWN0aXZlX2NoYXQiOjEsImJ1c2luZXNzX2NhbGVuZGFyIjoibnVsbCJ9';}</script>
	</body>
</html>