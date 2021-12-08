<article <?php post_class( array( 'class' => 'secondary' ) ); ?>>
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?></a>
	</div>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="meta-info">
		<p>
			<?php _e( 'by', 'wpcurso' ); ?> <span><?php the_author_posts_link(); ?></span>
			<?php _e( 'Categories: ', 'wpcurso' ); ?> <span><?php the_category( ' ' ); ?></span>
			<?php the_tags( __( 'Tags: ', 'wpcurso' ), ', ' ); ?>
		</p>
	</div>
	<?php the_excerpt(); ?>
</article>