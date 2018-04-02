<?php
/*
 * Template name: contact
 */
get_header ();
?>
<section id="contact" class="row">
	<div class="col-md-7 col-sm-12 col-xs-12">
		
		<?php 	while ( have_posts() ) : the_post();?>
				<div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
		<?php endwhile;	?>
	</div>
<div class="col-md-5 col-sm-12 col-xs-12">
   	<?php get_sidebar(); ?>
</div>
</section>		
<?php get_footer();?>