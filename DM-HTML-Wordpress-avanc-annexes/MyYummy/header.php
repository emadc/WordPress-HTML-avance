<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		<!-- en-tête et menu -->
		<header class="row">
			<!-- menu responsive -->
			<nav class="col-xs-12 navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1" aria-expanded="false">
							<div class="spinner-master3">
								<input type="checkbox" id="spinner-form3" />
								<label for="spinner-form3" class="spinner-spin3">
									<div class="spinner3 diagonal part-1"></div>
									<div class="spinner3 horizontal"></div>
									<div class="spinner3 diagonal part-2"></div>
								</label>
							</div>
						</div>
						<a class="navbar-brand" href="#">
							<img alt="logo" src="<?php bloginfo('template_url');?>/img/logo.png" />
						</a>
					</div>
<!-- 					<div class="collapse navbar-collapse" id="nav1"> -->
<!-- 						<ul> -->
<!-- 							<li> -->
<!-- 								<a href="#">HAMBURGER</a> -->
<!-- 							</li> -->
<!-- 							<li class="dropdown"> -->
<!-- 								<a href="#" class="dropdown-toggle"> -->
<!-- 									PIZZA -->
<!-- 									<span class="caret"></span> -->
<!-- 								</a> -->
<!-- 								<ul class="dropdown-menu"> -->
<!-- 									<li> -->
<!-- 										<a href="#">POPULAR PIZZAS</a> -->
<!-- 									</li> -->
<!-- 									<li> -->
<!-- 										<a href="#">MEATS</a> -->
<!-- 									</li> -->
<!-- 									<li> -->
<!-- 										<a href="#">CHICKEN</a> -->
<!-- 									</li> -->
<!-- 									<li> -->
<!-- 										<a href="#">VEGGIE</a> -->
<!-- 									</li> -->
<!-- 								</ul> -->
<!-- 							</li> -->
<!-- 							<li> -->
<!-- 								<a href="#">FAST FOOD</a> -->
<!-- 							</li> -->
<!-- 							<li> -->
<!-- 								<a href="#">DRINKS</a> -->
<!-- 							</li> -->
<!-- 						</ul> -->
<!-- 					</div> -->
						<?php 
// 						wp_nav_menu( array(
//     							'menu' => 'Principal',
// 								container => 'div',
// 								container_class => 'collapse navbar-collapse',
// 								container_id => 'nav1',
// 								'items_wrap' => '<ul>%3$s</ul>'
// ) );
?>

<?php 
wp_nav_menu( array(
		'menu' => 'Principal',
		'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
		'container'			=> 'div',
		'container_class'	=> 'collapse navbar-collapse',
		'container_id'		=> 'nav1',
		'menu_class'		=> 'navbar-nav mr-auto',
		'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
		'walker'			=> new WP_Bootstrap_Navwalker()
) );
?>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</header>