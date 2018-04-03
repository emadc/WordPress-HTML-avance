<?php
/*
 * Plugin Name: My breadcrumb
 * Description: Fil d'Ariane pour les articles et les pages
 * Version: 1.0
 * License: GPLv2
 * Copyright 2018 Emanuele Di Carlo (email : emanueledc@gmail.com)
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License,
 * version 2, as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,
 * MA 02110-1301 USA
 */
if (! class_exists ( "My_Breadcrumb" )) {
	class My_Breadcrumb {
		function fil_ariane() {
			global $post;
			
			if (! is_home ()) {
				
				$fil = '<a href="' . get_bloginfo ( 'wpurl' ) . '">';
				$fil .= get_bloginfo ( 'name' );
				$fil .= '</a> > ';
				
				$parents = array_reverse ( get_ancestors ( $post->ID, 'page' ) );
				foreach ( $parents as $parent ) {
					$fil .= '<a href="' . get_permalink ( $parent ) . '">';
					$fil .= get_the_title ( $parent );
					$fil .= '</a> > ';
				}
				$fil .= $post->post_title;
			}
			return $fil;
		}
		function breadcrumb_page_content() {
			?>
<div class="wrap">

	<h2>My breadcrumb (fil d'Ariane)</h2>
	<h3>Installation et utilisation</h3>

	<div>

		Pour utiliser l'extension :
		<ul>
			<li>1/ Téléchargez le dossier de l'extension dans le répertoire wp-content/plugins.</li>
			<li>2/ Activez l'extension.</li>
			<li>
				3/ Insérez la fonction PHP :
				<input type="text" value="&lt;?php echo My_Breadcrumb::fil_ariane(); ?&gt; " size="40" readonly="readonly" />
				dans les fichiers PHP de votre thème,
				<br />
				ou utilisez le shortcode :
				<input type="text" value="[mybreadcrumb]" readonly="readonly" />
			</li>
		</ul>
	</div>
</div>
<?php
		}
		function breadcrumb_menu() {
			if (function_exists ( 'add_options_page' )) {
				add_options_page ( 'breadcrumb', 'My breadcrumb', 'administrator', 'breadcrumb', array (
						'My_Breadcrumb',
						'breadcrumb_page_content' 
				) );
			}
		}
	}
	
	if(class_exists("My_Breadcrumb")){
		$inst_My_Breadcrumb = new My_Breadcrumb();
	}
	
	if(isset($inst_My_Breadcrumb)){
		add_action('admin_menu', array($inst_My_Breadcrumb,
				'breadcrumb_menu'));
	}
	if(function_exists('add_shortcode')){
		add_shortcode('mybreadcrumb',array('My_Breadcrumb','fil_ariane'));
	}
}