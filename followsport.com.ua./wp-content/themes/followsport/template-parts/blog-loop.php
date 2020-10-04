<div class="container with-sidebar">

      <div class="blog-page-content">
        
        <section class="blog">
          <div class="posts">
          <?php while ( have_posts() ) :the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <div class="post">
              <img src="<?php the_post_thumbnail_url('mediumSize'); ?>" class="post__img"/>
              <div class="shadow"></div>
              <!-- ./sidebar -->
              <ul class="sidebar">
              <?php $categories = wp_get_post_categories($post->ID, array('fields' => 'all')); 
                foreach ($categories as $cat) { ?>
                  <li> <a href="<?php echo get_category_link($cat->term_id) ?>" class="sidebar__category"><?php echo $cat->name; ?></a></li>
                <?php } ?>
                <li class="sidebar__date"><?php echo get_the_date(); ?></li>
              </ul>
              <!-- /.sidebar -->
              <!-- ./info -->
              <div class="info">
                <h2 class="info__title"><?php the_title(); ?></h2>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="info__author">Author: <span id="author"><?php echo get_the_author_meta('first_name') ?></span></a>                
              </div>
              <!-- /.info -->
            </div>
          </a>
          <?php endwhile; // End of the loop. ?> 
          </div>
        </section>
      </div>
      <?php get_sidebar(); ?>
    </div>