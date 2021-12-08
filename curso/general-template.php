<?php 

/*

Template Name: General Template

*/

?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">

						<div class="general-template">
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<article>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</article>

							<?php 
								endwhile;
							else:
							?>

							 <p><?php _e( 'There&rsquo;s nothing yet to be displayed...', 'wpcurso' ); ?></p>

							<?php endif; ?>

						</div>						

				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>