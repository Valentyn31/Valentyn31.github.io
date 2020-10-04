<?php

get_header();
?>

	<main class="main not-home">
		<div class="container">
			<?php
			while ( have_posts() ) :the_post(); ?>
				<div class="section-text">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php the_post_thumbnail('max-size'); ?>
					<p class="subtitle"><?php the_content(); ?></p>
				</div>

			<?php endwhile; // End of the loop.
			?>
		</div>
	</main>

<?php
get_footer();
