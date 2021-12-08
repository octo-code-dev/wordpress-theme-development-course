<?php if( is_active_sidebar( 'sidebar-2' ) ): ?>
	<aside class="sidebar col-md-4 h-100">
		<?php get_search_form(); ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
<?php else: ?>
	<aside class="sidebar col-md-4 h-100">Barra Lateral
	<p>Hey, you still don't have a widget here. What if you include one?</p>
	</aside>
<?php endif; ?>