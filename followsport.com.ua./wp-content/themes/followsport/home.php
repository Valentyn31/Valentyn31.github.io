<?php get_header(); ?>

  <main class="main not-home">

    <div class="container">
      <div class="section-text">
        <h1 class="title">Тренування</h1>
        <p class="subtitle">Це сторінка нашого блогу. 
        Тут ви знайдете багато цікавої інформації про тренування 
        та харчування! На даній сторінці ви можете знайти найсвіжіші пости.
        Усі пости поділено по рубрикам, завдяки
        чому ви швидко знайдете те що вас цікавить.</p>
      </div>
    </div>

    <?php get_template_part('template-parts/blog', 'loop'); ?>
    
  </main>
<?php get_footer(); ?>  