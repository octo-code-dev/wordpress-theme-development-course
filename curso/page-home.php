<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<?php 

				$design = get_theme_mod( 'set_slider_option' );
				$limit = get_theme_mod( 'set_slider_limit' );
				echo do_shortcode( '[recent_post_slider design="design-' . $design . ' " limit=" '. $limit . ' "]' ); 
				?>
			</section>
			<section class="services">
				<div class="container">
					<h1><?php _e( 'Our Services', 'wpcurso' ); ?></h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item">
								<?php
								if( is_active_sidebar( 'services-1' )){
									dynamic_sidebar( 'services-1' );
								}

								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php
								if( is_active_sidebar( 'services-2' )){
									dynamic_sidebar( 'services-2' );
								}

								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php 
								if( is_active_sidebar( 'services-3' )){
									dynamic_sidebar( 'services-3' );
								}

								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<?php get_sidebar( 'home' ); ?>
						<div class="news col-md-8">
							<div class="container">
								<h1><?php _e( 'Latest News', 'wpcurso' ); ?></h1>
								<div class="row">
									<?php

									$loop1_number_posts = get_theme_mod( 'set_loop1_number_posts' );
									$loop1_shown_categories = get_theme_mod( 'set_loop1_shown_categories' );

									$featured = new WP_Query( 'post_type=post&posts_per_page=' . $loop1_number_posts . '&cat=' . $loop1_shown_categories);
									
									/*
									echo 'Posts per loop: ' . $loop1_number_posts;
									echo 'Shown Categories: ' . $loop1_shown_categories;
									echo 'Featured: ' . $featured->have_posts() . '<br>';
									*/

									if( $featured->have_posts() ):
										while( $featured->have_posts() ): $featured->the_post();
									?>

									<div class="col-12">
										<?php get_template_part( 'template-parts/content', 'featured' ); ?>
									</div>

									<?php
										endwhile;
										wp_reset_postdata();
									endif;


									// Segundo Loop

									$loop2_number_posts = get_theme_mod( 'set_loop2_number_posts' );
									$loop2_shown_categories = get_theme_mod( 'set_loop2_shown_categories' );
									$loop2_hidden_categories = get_theme_mod( 'set_loop2_hidden_categories' );

									/*
									echo 'Posts per loop: ' . $loop2_number_posts;
									echo 'Shown Categories: ' . $loop2_shown_categories;
									echo 'Featured: ' . $featured->have_posts() . '<br>';
									*/

									$args = array(
										'post_type' => 'post',
										'posts_per_page' => $loop2_number_posts,
										'category__not_in' => $loop2_hidden_categories,
										'category__in' => $loop2_shown_categories,
										'offset' => 1
									);

									$secondary = new WP_Query( $args );

									if( $secondary->have_posts() ):
										while( $secondary->have_posts() ): $secondary->the_post();
									?>

									<div class="col-sm-6">
										<?php get_template_part( 'template-parts/content', 'secondary' ); ?>
									</div>

									<?php
										endwhile;
										wp_reset_postdata();
									endif;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<?php 

				$key = get_theme_mod( 'set_map_apikey' );
				$address = urlencode( get_theme_mod( 'set_map_address' ) );
				?>
				<iframe
				  width="100%"
				  height="350"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>
				    &q=<?php echo $address; ?>&zoom=15" allowfullscreen>
				</iframe>
			</section>
		</main>
	</div>
<?php get_footer(); ?>