<?php 
/* 
Plugin Name: My breadcrumb  
Description: Fil d'Ariane pour les articles et les pages 
Version: 1.0 
License: GPLv2 
Copyright 2018 Emanuele Di Carlo (email : emanueledc@gmail.com) 
 This program is free software; you can redistribute it and/or 
 modify it under the terms of the GNU General Public License, 
 version 2, as published by the Free Software Foundation. 
 
 This program is distributed in the hope that it will be useful, 
 but WITHOUT ANY WARRANTY; without even the implied warranty of 
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
 GNU General Public License for more details. 
 
 You should have received a copy of the GNU General Public License 
 along with this program; if not, write to the Free Software 
 Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, 
 MA 02110-1301 USA 
*/ 

function fil_ariane(){
	global $post;
	
	if (!is_home()) {
		
		$fil= '<a href="'.get_bloginfo('wpurl').'">';
		$fil.= get_bloginfo('name');
		$fil.= '</a> > ';
		
		$parents = array_reverse(get_ancestors($post->ID,'page'));
		foreach($parents as $parent){
			$fil.='<a href="'.get_permalink($parent).'">';
			$fil.= get_the_title($parent);
			$fil.= '</a> > ';
		}
		$fil.= $post->post_title;
	}
	return $fil;
} 	
?>