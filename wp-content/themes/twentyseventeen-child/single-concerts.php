<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'concerts', get_post_format() );

				// var_dump(get_field('google_map'));

				echo the_field('colour-picker');

				$mood = get_field('current_mood');
				if($mood) {
					echo '<h1 class="current-mood">'.$mood.'</h1>';
				}
			

				if(get_field('info_box_title')){
					echo '<div class="info-box">';
					echo '<h1>' . get_field('info_box_title') . '</h1>';
					the_field('info_box_content');
					echo '</div>';
				}
		
		
				$posts = get_field('related_posts');
				
				if( $posts ) {
		
					echo '<h1>Further Reading </h1>';
					echo '<ul class="related-list">';
					foreach($posts as $post):
						setup_postdata($post);
						echo '<li><a href="' . get_the_permalink() . '">';
						echo '<h3>' . get_the_title() . '</h3>';
						the_excerpt();
						echo '</a></li>';
					endforeach;
					echo '</ul>';
					wp_reset_postdata();
				}
			

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// the_post_navigation( array(
				// 	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
				// 	'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				// ) );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
