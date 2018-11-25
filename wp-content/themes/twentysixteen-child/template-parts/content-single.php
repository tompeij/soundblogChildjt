<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php

			the_content();
			if(get_field('info_box_title')){
				echo '<div class="info-box">';
				echo '<h1>' . get_field('info_box_title') . '</h1>';
				the_field('info_box_content');
				echo '</div>';
			}?>

			<?php 
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
			?>

			<?php 

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
