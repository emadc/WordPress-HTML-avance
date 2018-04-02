<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
		<!-- pied de page avec le sitemap -->
		<?php if( get_field('footer_image') ): $image = get_field('footer_image'); ?>
			<section class="row">
				<div class="col-xs-12">
					<img class="img-responsive img_bottom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
				</div>
			</section>
		<?php endif; ?>			
		<footer class="row">
			<?php 
				wp_nav_menu( array(
    					'menu'				=> 'Footer',
						'container'			=> 'nav',
						'container_class'	=> 'col-xs-12',
						'items_wrap'		=> '<ul>%3$s</ul>'
				) );
			?>
			<div class="col-xs-12">Copyright &copy; 2018 Fast Food. All Rights Reserved</div>
		</footer>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.parallax.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
