<?php
/**
 * Template Name: Archive
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<div class="one_half">	
				<h3 class="page-title"><?php _e( 'Pages', 'renden' ); ?>:</h3>
				<ul class="archive-pages">
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div>

			<div class="one_half last">
				<h3 class="page-title"><?php _e( 'Recent Posts', 'renden' ); ?>:</h3>
				<ul class="archive-recent">
					<?php 	$recent_posts = wp_get_recent_posts();
							foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> '; } ?>
				</ul>

				<h3 class="page-title"><?php _e( 'Monthly', 'renden' ); ?>:</h3>
				<ul class="archive-monthly">
					<?php wp_get_archives( 'show_post_count=1' ); ?>
				</ul>

				<h3 class="page-title"><?php _e( 'Categories', 'renden' ); ?>:</h3>
				<ul class="archive-categories">
					<?php wp_list_categories( 'show_count=1&title_li=' ); ?>
				</ul>

				<h3 class="page-title"><?php _e( 'Author(s)', 'renden' ); ?>:</h3>
				<ul class="archive-authors">
					<?php wp_list_authors( 'optioncount=1' ); ?>
				</ul>
			</div><div class="clearboth"></div>

<?php get_footer(); ?>  