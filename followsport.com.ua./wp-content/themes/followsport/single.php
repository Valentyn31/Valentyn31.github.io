<?php get_header(); ?>
  <main class="main not-home single">
    <div class="container with-sidebar">
      <div class="blog-page-content">

			<?php while ( have_posts() ) :the_post(); ?>
        <div class="section-text">
          <h1 class="title"><?php the_title(); ?></h1>
        </div>
        <?php the_post_thumbnail('blog'); ?>
        <div class="blog-post-text">
          <?php the_content(); ?>
        </div>
			<?php endwhile; // End of the loop.
			?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
<?php get_footer(); ?>
