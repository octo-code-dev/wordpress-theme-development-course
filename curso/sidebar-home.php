<?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
	<aside class="sidebar col-md-4 h-100">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php else: ?>
	<aside class="sidebar col-md-4 h-100">Barra Lateral
	<p>Hey, you still don't have a widget here. What if you include one?</p>
	</aside>
<?php endif; ?>