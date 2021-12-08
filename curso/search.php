<?php get_header(); ?>
	<div id="primary">
		<div id="main">
			<div class="container">

				<h2><?php _e( 'Search results for:', 'wpcurso' ); ?> <?php echo get_search_query(); ?></h2>

				<?php 

				get_search_form();

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'search' );

					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				the_posts_pagination(
					array(
						'prev_text' => __( 'Previous', 'wpcurso' ),
						'next_text' => __( 'Next', 'wpcurso')
					)
				);

				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>