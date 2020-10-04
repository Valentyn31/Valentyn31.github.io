<?php get_header(); ?>

  <main class="main not-home">

    <div class="container">
      <div class="section-text">
        <?php $category = get_queried_object(); ?>

        <h1 class="title"><?php echo $category->name; ?></h1>
        <p class="subtitle"><?php echo $category->category_description ?></p>
      </div>
    </div>

    <?php get_template_part('template-parts/blog', 'loop'); ?>
    
  </main>
<?php get_footer(); ?>