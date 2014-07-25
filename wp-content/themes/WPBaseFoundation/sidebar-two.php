<div id="sidebar-2" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>