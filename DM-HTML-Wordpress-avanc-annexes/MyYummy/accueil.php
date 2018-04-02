<?php 
/*
Template name: accueil
*/
get_header();
?>
		<!-- zone des contenus -->
		<section id="banner" class="row">
		<!-- diaporama -->
			<div class="cycle-slideshow col-xs-12" data-cycle-slides="li">
				<ul>
				<?php if( get_field('banner_1') ): $image = get_field('banner_1'); ?>
					<li>
						<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</li>
				<?php endif; ?>
				<?php if( get_field('banner_2') ): $image = get_field('banner_2'); ?>
					<li>
						<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</li>
				<?php endif; ?>
				<?php if( get_field('banner_3') ): $image = get_field('banner_3'); ?>
					<li>
						<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</li>
				<?php endif; ?>						
				</ul>
				<div class="cycle-pager"></div>
			</div>

		</section>
		<section id="category" class="row">
		<?php if( get_field('category_1') ): $image = get_field('category_1'); ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		<?php endif; ?>
		<?php if( get_field('category_2') ): $image = get_field('category_2'); ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		<?php endif; ?>
		<?php if( get_field('category_3') ): $image = get_field('category_3'); ?>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		<?php endif; ?>			
		</section>
		<!-- présentation du produit -->
		<section id="presentation" class="row">			
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('presentation'); ?></p>
			<ul class="hidden-sm hidden-xs">
				<li class="layer" data-depth="1.00"><img src="<?php bloginfo('template_url');?>/img/panino.png"></li>
				<li class="layer" data-depth="0.80"><img src="<?php bloginfo('template_url');?>/img/txt4.png"></li>
				<li class="layer" data-depth="0.60"><img src="<?php bloginfo('template_url');?>/img/txt3.png"></li>
				<li class="layer" data-depth="0.40"><img src="<?php bloginfo('template_url');?>/img/txt2.png"></li>
				<li class="layer" data-depth="0.20"><img src="<?php bloginfo('template_url');?>/img/txt1.png"></li>
				<li class="layer" data-depth="0.00"><img src=""></li>
			</ul>
			<?php if( get_field('presentation_image') ): $image = get_field('presentation_image'); ?>
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>				
			<?php endif; ?>					
		</section>
		<section class="row" id="courses">
		<?php if( get_field('courses_1') ): $image = get_field('courses_1'); ?>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />					
				<div class="glow-wrap">
					<i class="glow"></i>
				</div>
			</div>				
		<?php endif; ?>
		<?php if( get_field('courses_2') ): $image = get_field('courses_2'); ?>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />					
				<div class="glow-wrap">
					<i class="glow"></i>
				</div>
			</div>				
		<?php endif; ?>
		<?php if( get_field('courses_3') ): $image = get_field('courses_3'); ?>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">	
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />					
				<div class="glow-wrap">
					<i class="glow"></i>
				</div>
			</div>				
		<?php endif; ?>
		<?php if( get_field('courses_4') ): $image = get_field('courses_4'); ?>
			<div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />					
				<div class="glow-wrap">
					<i class="glow"></i>
				</div>
			</div>				
		<?php endif; ?>										
		</section>
<?php get_footer();?>