<?php the_title(); ?>
<?php
while ( have_posts() ) :the_post(); ?>
	<div class="entry-content-page">
		<?php the_content(); ?>
	</div>
	
	<?php endwhile; ?>