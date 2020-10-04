<?php get_header(); ?>

<main class="main not-home author-main">

    <div class="container with-sidebar">

      <div class="blog-page-content">
        <div class="section-text">
          <?php $author = get_queried_object(); $ID = $author->data->ID ?>
          <h1 class="title"><?php echo $author->data->display_name; ?></h1>
        </div>
        <?php
          $args = array(
            'width' => '824',
            'height' => '560',
            'class' => 'wp-post-image'
          );
        echo get_avatar($ID, 600, 'mystery', 'avatar', $args); ?>

        <div class="blog-post-text">
          <p><?php the_author_meta('description', $ID); ?></p>
        </div>

      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
<?php get_footer(); ?>