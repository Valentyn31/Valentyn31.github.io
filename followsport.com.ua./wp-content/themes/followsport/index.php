<?php get_header('home'); ?>

<main>
    <!-- NEWS -->
    <section class="news">
      <!-- ./container -->
      <div class="container">
        <!-- ./slider -->
        <div class="news-slider">
          
          <?php $query = new WP_Query(array(
            'post_type' => 'followsport_news'
          )); 
          if ($query->have_posts()) {
            while ($query->have_posts()): $query->the_post(); ?>
            <!-- ./slide -->
            <div class="news-slide">
              <!-- ./info -->
              <div class="info">
                <div class="news-slide__category"><?php the_field('news_category'); ?></div>
                <!-- text -->
                <div class="text">
                  <h1 class="news-slide__title"><?php the_title(); ?></h1>
                  <div class="news-slide__paragraph">
                    <?php the_content(); ?>
                  </div>
                </div>
                <!-- /.text -->
                <?php if (get_field('is_button')): ?>
                  <a href="<?php the_field('news_button_link'); ?>"><button style="background-color: <?php the_field('button_color'); ?> !important" class="news-slide__btn button blick">Дізнатись більше</button></a>
                <?php endif; ?>
                <!-- /.info-btn -->
              </div>
              <!-- /.info -->
              <!-- /.slider-img -->
              <div class="news-slider-img">
                <img src="<?php the_post_thumbnail_url(); ?>" />
              </div>
              <!-- /.slider-img -->
            </div>
            <!-- /.slide -->
          <?php endwhile; 
          }
          else {

          }
          wp_reset_postdata();
          ?>
          
        </div>
        <!-- /.slider -->
      </div>
      <!-- /.container -->
    </section>
    <!-- NEWS -->
    <!-- BLOG -->
    <section class="blog home-page-blog">
      <div class="container">
        <!-- ./section-text -->
        <div class="section-text">
          <h1 class="section-text__title title"><?php the_field('blog_tItle'); ?></h1>
          <p class="section-text__subtitle subtitle"><?php the_field('blog_subtitle'); ?></p>
        </div>
        <!-- /.section-text -->
        <!-- ./posts -->
        <div class="posts">
          <!-- ./post -->
          <?php $query = new WP_Query(array(
            'post_type' => 'post',
            'orderby' => 'rand',
            'posts_per_page' => '2',
          )); 
          
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="post">
                  <picture>
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
                    <h2 class="info__title"><?php the_title(); ?></h2> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="info__author">Author: <span id="author"><?php echo get_the_author_meta('first_name') ?></span></a>
                  </div>
                  <!-- /.info -->
                </div>
              </a>
              <!-- /.post -->
            <?php 
            }
          } else {
            // Постов не найдено
          }
          // Возвращаем оригинальные данные поста. Сбрасываем $post.
          wp_reset_postdata();
          
          ?>
        </div>
        <!-- /.posts -->
        <div class="section-text">
          <p class="subtitle"><?php the_field('blog_end_text'); ?></p>
          <p class="subtitle bottom">Перейти на сторінку <a href="http://followsport.com.ua/index.php/blog/">Тренування</a></p>
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- BLOG -->
    <!-- TARIFS -->
    <section class="tarifs" style="background: #070707 url(<?php echo get_template_directory_uri() . '/assets/img/tarifs-bg.png'?>);">
      <div class="container">
        <!-- ./section-text -->
        <div class="section-text">
          <h1 class="title tarifs__title"><?php the_field('tarifs_title'); ?></h1>
          <p class="subtitle tarifs__subtitle"><?php the_field('tarifs_subtitle'); ?></p>
        </div>
        <!-- /.section-text -->
        <!-- ./cards -->
        <div class="cards">
          <!-- ./diet card -->
          <div class="card">
            <div class="front" id="diet">
              <h1 class="card__title"><?php the_field('first_card_name'); ?></h1>
              <img src="<?php the_field('first_card_img'); ?>"></img>
              <span class="card__price"><?php the_field('first_card_price'); ?> ₴</span>
              <svg class="flip-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M38.5 20C38.5 30.2533 30.4056 38.5 20.5 38.5C10.5944 38.5 2.5 30.2533 2.5 20C2.5 9.74671 10.5944 1.5 20.5 1.5C30.4056 1.5 38.5 9.74671 38.5 20Z"
                stroke-width="3" />
                <path d="M18.0103 23.5435C18.0103 22.4041 18.1486 21.4967 18.4253 20.8213C18.702 20.1458 19.2065 19.4826 19.939 18.8315C20.6795 18.1724 21.1719 17.6393 21.416 17.2324C21.6602 16.8174 21.7822 16.382 21.7822 15.9263C21.7822 14.5509 21.1475 13.8633 19.8779 13.8633C19.2757 13.8633 18.7915 14.0505 18.4253 14.4248C18.0672 14.791 17.88 15.2996 17.8638 15.9507H14.3237C14.34 14.3963 14.8405 13.1797 15.8252 12.3008C16.818 11.4219 18.1689 10.9824 19.8779 10.9824C21.6032 10.9824 22.9419 11.4015 23.894 12.2397C24.8462 13.0698 25.3223 14.2458 25.3223 15.7676C25.3223 16.4593 25.1676 17.1144 24.8584 17.7329C24.5492 18.3433 24.008 19.0228 23.2349 19.7715L22.2461 20.7114C21.6276 21.3055 21.2736 22.0013 21.1841 22.7988L21.1353 23.5435H18.0103ZM17.6562 27.291C17.6562 26.7458 17.8394 26.2982 18.2056 25.9482C18.5799 25.5902 19.056 25.4111 19.6338 25.4111C20.2116 25.4111 20.6836 25.5902 21.0498 25.9482C21.4242 26.2982 21.6113 26.7458 21.6113 27.291C21.6113 27.8281 21.4282 28.2716 21.062 28.6216C20.7039 28.9715 20.2279 29.1465 19.6338 29.1465C19.0397 29.1465 18.5596 28.9715 18.1934 28.6216C17.8353 28.2716 17.6562 27.8281 17.6562 27.291Z"
                fill="white" /> </svg>
            </div>
            <!-- /.front -->
            <!-- back -->
            <div class="back">
              <p><?php the_field('first_card_info'); ?></p>
              <a href="#" class="order-btn blick">Замовити</a>
              <svg class="close-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M20 0C8.90909 0 0 8.90909 0 20C0 31.0909 8.90909 40 20 40C31.0909 40 40 31.0909 40 20C40 8.90909 31.0909 0 20 0ZM23 30.4545C22.4545 30.6364 21.8182 30.1818 21.8182 29.5455V27.6364C21.8182 27.2727 22 26.9091 22.3636 26.8182C25.1818 25.8182 27.2727 23.0909 27.2727 20C27.2727 16 24 12.7273 20 12.7273C16 12.7273 12.7273 16 12.7273 20C12.7273 21.2727 13.0909 22.5455 13.7273 23.6364C13.8182 23.8182 14.0909 23.9091 14.3636 23.8182C14.5455 23.7273 14.5455 23.5455 14.5455 23.4545V22.7273C14.5455 22.1818 14.9091 21.8182 15.4545 21.8182H17.2727C17.8182 21.8182 18.1818 22.1818 18.1818 22.7273V30C18.1818 30.5455 17.8182 30.9091 17.2727 30.9091H10C9.45455 30.9091 9.09091 30.5455 9.09091 30V28.1818C9.09091 27.6364 9.45455 27.2727 10 27.2727H10.9091C11.1818 27.2727 11.3636 27.0909 11.3636 26.8182C11.3636 26.7273 11.3636 26.6364 11.2727 26.5455C9.81818 24.7273 9.09091 22.4545 9.09091 20C9.09091 14 14 9.09091 20 9.09091C26 9.09091 30.9091 14 30.9091 20C30.9091 25 27.5455 29.1818 23 30.4545Z"
                /> </svg>
            </div>
            <!-- back -->
            <div class="card-shadow"></div>
            <!-- /.shadow -->
          </div>
          <!-- /.diet card -->
          <!-- ./body card -->
          <div class="card">
            <div class="front" id="body">
              <h1 class="card__title"><?php the_field('second_card_name'); ?></h1>
              <img src="<?php the_field('second_card_img'); ?>"></img>
              <span class="card__price"><?php the_field('second_card_price'); ?> ₴</span>
              <svg class="flip-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M38.5 20C38.5 30.2533 30.4056 38.5 20.5 38.5C10.5944 38.5 2.5 30.2533 2.5 20C2.5 9.74671 10.5944 1.5 20.5 1.5C30.4056 1.5 38.5 9.74671 38.5 20Z"
                stroke-width="3" />
                <path d="M18.0103 23.5435C18.0103 22.4041 18.1486 21.4967 18.4253 20.8213C18.702 20.1458 19.2065 19.4826 19.939 18.8315C20.6795 18.1724 21.1719 17.6393 21.416 17.2324C21.6602 16.8174 21.7822 16.382 21.7822 15.9263C21.7822 14.5509 21.1475 13.8633 19.8779 13.8633C19.2757 13.8633 18.7915 14.0505 18.4253 14.4248C18.0672 14.791 17.88 15.2996 17.8638 15.9507H14.3237C14.34 14.3963 14.8405 13.1797 15.8252 12.3008C16.818 11.4219 18.1689 10.9824 19.8779 10.9824C21.6032 10.9824 22.9419 11.4015 23.894 12.2397C24.8462 13.0698 25.3223 14.2458 25.3223 15.7676C25.3223 16.4593 25.1676 17.1144 24.8584 17.7329C24.5492 18.3433 24.008 19.0228 23.2349 19.7715L22.2461 20.7114C21.6276 21.3055 21.2736 22.0013 21.1841 22.7988L21.1353 23.5435H18.0103ZM17.6562 27.291C17.6562 26.7458 17.8394 26.2982 18.2056 25.9482C18.5799 25.5902 19.056 25.4111 19.6338 25.4111C20.2116 25.4111 20.6836 25.5902 21.0498 25.9482C21.4242 26.2982 21.6113 26.7458 21.6113 27.291C21.6113 27.8281 21.4282 28.2716 21.062 28.6216C20.7039 28.9715 20.2279 29.1465 19.6338 29.1465C19.0397 29.1465 18.5596 28.9715 18.1934 28.6216C17.8353 28.2716 17.6562 27.8281 17.6562 27.291Z"
                fill="black" /> </svg>
            </div>
            <!-- /.front -->
            <!-- back -->
            <div class="back">
              <p><?php the_field('second_card_info'); ?></p>
              <a href="#" class="order-btn blick">Замовити</a>
              <svg class="close-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M20 0C8.90909 0 0 8.90909 0 20C0 31.0909 8.90909 40 20 40C31.0909 40 40 31.0909 40 20C40 8.90909 31.0909 0 20 0ZM23 30.4545C22.4545 30.6364 21.8182 30.1818 21.8182 29.5455V27.6364C21.8182 27.2727 22 26.9091 22.3636 26.8182C25.1818 25.8182 27.2727 23.0909 27.2727 20C27.2727 16 24 12.7273 20 12.7273C16 12.7273 12.7273 16 12.7273 20C12.7273 21.2727 13.0909 22.5455 13.7273 23.6364C13.8182 23.8182 14.0909 23.9091 14.3636 23.8182C14.5455 23.7273 14.5455 23.5455 14.5455 23.4545V22.7273C14.5455 22.1818 14.9091 21.8182 15.4545 21.8182H17.2727C17.8182 21.8182 18.1818 22.1818 18.1818 22.7273V30C18.1818 30.5455 17.8182 30.9091 17.2727 30.9091H10C9.45455 30.9091 9.09091 30.5455 9.09091 30V28.1818C9.09091 27.6364 9.45455 27.2727 10 27.2727H10.9091C11.1818 27.2727 11.3636 27.0909 11.3636 26.8182C11.3636 26.7273 11.3636 26.6364 11.2727 26.5455C9.81818 24.7273 9.09091 22.4545 9.09091 20C9.09091 14 14 9.09091 20 9.09091C26 9.09091 30.9091 14 30.9091 20C30.9091 25 27.5455 29.1818 23 30.4545Z"
                /> </svg>
            </div>
            <!-- back -->
            <div class="card-shadow"></div>
            <!-- /.shadow -->
          </div>
          <!-- /.body card -->
          <!-- ./full card -->
          <div class="card">
            <div class="front" id="full">
              <h1 class="card__title"><?php the_field('third_card_name'); ?></h1>
              <img src="<?php the_field('third_card_img'); ?>"></img>
              <span class="card__price"><?php the_field('third_card_price'); ?> ₴</span>
              <svg class="flip-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M38.5 20C38.5 30.2533 30.4056 38.5 20.5 38.5C10.5944 38.5 2.5 30.2533 2.5 20C2.5 9.74671 10.5944 1.5 20.5 1.5C30.4056 1.5 38.5 9.74671 38.5 20Z"
                stroke-width="3" />
                <path d="M18.0103 23.5435C18.0103 22.4041 18.1486 21.4967 18.4253 20.8213C18.702 20.1458 19.2065 19.4826 19.939 18.8315C20.6795 18.1724 21.1719 17.6393 21.416 17.2324C21.6602 16.8174 21.7822 16.382 21.7822 15.9263C21.7822 14.5509 21.1475 13.8633 19.8779 13.8633C19.2757 13.8633 18.7915 14.0505 18.4253 14.4248C18.0672 14.791 17.88 15.2996 17.8638 15.9507H14.3237C14.34 14.3963 14.8405 13.1797 15.8252 12.3008C16.818 11.4219 18.1689 10.9824 19.8779 10.9824C21.6032 10.9824 22.9419 11.4015 23.894 12.2397C24.8462 13.0698 25.3223 14.2458 25.3223 15.7676C25.3223 16.4593 25.1676 17.1144 24.8584 17.7329C24.5492 18.3433 24.008 19.0228 23.2349 19.7715L22.2461 20.7114C21.6276 21.3055 21.2736 22.0013 21.1841 22.7988L21.1353 23.5435H18.0103ZM17.6562 27.291C17.6562 26.7458 17.8394 26.2982 18.2056 25.9482C18.5799 25.5902 19.056 25.4111 19.6338 25.4111C20.2116 25.4111 20.6836 25.5902 21.0498 25.9482C21.4242 26.2982 21.6113 26.7458 21.6113 27.291C21.6113 27.8281 21.4282 28.2716 21.062 28.6216C20.7039 28.9715 20.2279 29.1465 19.6338 29.1465C19.0397 29.1465 18.5596 28.9715 18.1934 28.6216C17.8353 28.2716 17.6562 27.8281 17.6562 27.291Z"
                fill="red" /> </svg>
            </div>
            <!-- /.front -->
            <!-- back -->
            <div class="back">
              <p><?php the_field('third_card_info'); ?></p>
              <a href="#" class="order-btn blick">Замовити</a>
              <svg class="close-btn" width="40" height="40"
              viewBox="0 0 40 40" fill="none"
              xmlns="http://www.w3.org/2000/svg">
                <path d="M20 0C8.90909 0 0 8.90909 0 20C0 31.0909 8.90909 40 20 40C31.0909 40 40 31.0909 40 20C40 8.90909 31.0909 0 20 0ZM23 30.4545C22.4545 30.6364 21.8182 30.1818 21.8182 29.5455V27.6364C21.8182 27.2727 22 26.9091 22.3636 26.8182C25.1818 25.8182 27.2727 23.0909 27.2727 20C27.2727 16 24 12.7273 20 12.7273C16 12.7273 12.7273 16 12.7273 20C12.7273 21.2727 13.0909 22.5455 13.7273 23.6364C13.8182 23.8182 14.0909 23.9091 14.3636 23.8182C14.5455 23.7273 14.5455 23.5455 14.5455 23.4545V22.7273C14.5455 22.1818 14.9091 21.8182 15.4545 21.8182H17.2727C17.8182 21.8182 18.1818 22.1818 18.1818 22.7273V30C18.1818 30.5455 17.8182 30.9091 17.2727 30.9091H10C9.45455 30.9091 9.09091 30.5455 9.09091 30V28.1818C9.09091 27.6364 9.45455 27.2727 10 27.2727H10.9091C11.1818 27.2727 11.3636 27.0909 11.3636 26.8182C11.3636 26.7273 11.3636 26.6364 11.2727 26.5455C9.81818 24.7273 9.09091 22.4545 9.09091 20C9.09091 14 14 9.09091 20 9.09091C26 9.09091 30.9091 14 30.9091 20C30.9091 25 27.5455 29.1818 23 30.4545Z"
                /> </svg>
            </div>
            <!-- back -->
            <div class="card-shadow"></div>
            <!-- /.shadow -->
          </div>
          <!-- /.full card -->
        </div>
        <!-- /.cards -->
        <div class="section-text">
          <p class="subtitle bottom">Клацніть по
            <img id="ico" width="25px" height="25px" src="<?php echo get_template_directory_uri() . '/assets/img/tarif-more-btn.svg'; ?>"></img> щоб дізнатись
            більше деталей про тариф, або
            для замовлення тарифу. </p>
        </div>
        <!-- /.subtitle bottom -->
      </div>
    </section>
    <!-- TARIFS -->
    <!-- TESTIMONIALS -->
    <section class="test">
      <div class="container">
        <!-- ./section-text -->
        <div class="section-text">
          <h1 class="title test__title"><?php the_field('test_title'); ?></h1>
          <p class="subtitle test__subtitle"><?php the_field('test_subtitle'); ?></p>
        </div>
        <!-- /.section-text -->
        <div class="test-wrapper">
          <!-- ./form -->
          <?php echo do_shortcode('[contact-form-7 id="161" title="Contact form 1"]'); ?>
          <!-- <form action="#" class="form">
            <input class="form__input" type="text" placeholder="Ваше імʼя">
            <input class="form__input" type="text" placeholder="Посилання на соц inst, facebook, ін.">
            <textarea class="form__area" name="test"
            placeholder="Відгук"></textarea>
            <button class="button form__submit blick"
            type="submit">Надіслати</button>
          </form> -->
          <!-- /.form -->
          <!-- ./testimonial -->
          <div class="testimonial">
            <!-- ,.slider -->
            <div class="test-slider">
              <!-- ./slide -->
              <?php $query = new WP_Query(['post_type' => 'Testimonials']);
              if ($query->have_posts()) {
                while ($query->have_posts()): $query->the_post(); ?>

              <div class="test-slide slide">
                <h2 class="slide__name"><?php the_title(); ?></h2>
                <div class="slide__text"><?php the_content(); ?></div>
                <?php $field = get_field('social_link'); ?>
                <span class="slide__social">My social: <a target="_blank" href="<?php echo $field['url']; ?>"><?php echo $field['title']; ?></a>								
                </span> 
                <span class="date">Date: <?php echo get_the_date(); ?></span></div>
              <!-- /.slide -->
              <?php endwhile; }
              else {

              }
              wp_reset_postdata(); ?>

            </div>
            <!-- /.test-slider -->
          </div>
          <!-- /.testimonial -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- TESTIMONIALS -->
    <!-- STATISTIC -->
    <section class="statistic">
      <div class="container">
        <!-- /.section-text -->
        <div class="section-text">
          <h1 class="title stat__title"><?php the_field('join_title'); ?></h1>
          <!-- /.title stat__title -->
          <p class="subtitle stat__subtitle"><?php the_field('join_subtitle'); ?></p>
          <!-- /.subtitle stat__subtitle -->
        </div>
        <!-- /.section-text -->

        <!-- ./info -->
        <div class="info">
					<span class="info__now"><?php the_field('pre_text'); ?></span>
						<div class="stat">
							<p><?php the_field('count_of_members'); ?>/<?php the_field('count_of_we need'); ?></p>
						</div>
					<span class="info__will"><?php the_field('end_text'); ?></span>
        </div>
        <!-- ./info -->
      </div>
      <!-- /.container -->
    </section>
    <!-- STATISTIC -->
    <!-- MAP -->
    <section class="map">
    <?php echo do_shortcode('[followsport_location]'); ?>

    </section>
    <!-- MAP -->
  </main>

<?php get_footer() ?>