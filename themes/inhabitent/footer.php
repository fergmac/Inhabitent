<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
			
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-block">
					<div class="footer-text">
					<div class="contact-info-container">
						<ul class="contact-info">
						<li><h3>contact info</h3></li>
						<li><i class="fa fa-envelope" aria-hidden="true" style="color: white"></i></i>
							<a href="fa fa-envelope"  aria-hidden="true">info@inhabitent.com</a></li>
						<li><i class="fa fa-phone" aria-hidden="true" style="color: white"></i>
							<a href="#">778-456-7891</a></li>
						<li><i class="fa fa-facebook-square" aria-hidden="true" style="color: white"></i><a href="#"></a>
							<i class="fa fa-twitter-square" aria-hidden="true" style="color: white"></i><a href="#"></a>
							<i class="fa fa-google-plus-square" aria-hidden="true" style="color: white"></i></i><a href="#"></a>
						</li>
						</ul>
					</div>
					<div class="business-hours-container">
						<ul class="business-hours">
						<li><h3>business hours</h3></li>
						<li><p><span class="footer-week-days">Monday-Friday:</span> 9am to 5pm</p></li>
						<li><p><span class="footer-week-days">Saturday:</span> 10am to 2pm</p></li>
						<li><p><span class="footer-week-days">Sunday:</span> Closed</p></li>
						</ul><li>
					</div>
					</div>
					<div class="brand-image-container">
						<a href="http://localhost:3000/inhabitent/"><img src="<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-text.svg"?>" class="brand-image" alt="Inhabitent logo"></a>	
					</div>
				</div>
				<div class="site-info">
					<div class="container">	
						<p>copyright &copy; 2016 inhabitent</p>
					</div>
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<script src="https://use.fontawesome.com/41a114f3c8.js"></script>
	</body>
</html>
