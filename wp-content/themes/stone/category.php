<?php get_header() ?>

  <div class="content-main">

    <!-- Elastislide Carousel -->


    <?php if (!dynamic_sidebar('slider_index')): ?>
      <ul id="carousel" class="elastislide-list">
        <li><p>This is the Main Carousel</p></li>
      </ul>
    <?php endif ?>
    <!-- End Elastislide Carousel -->

    <div class="content-left">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="portfolio-image">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
        </div>

      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <div class="clear"></div>

      <?php the_posts_pagination( array(
        'mid_size' => 1,
        'prev_text' => __( 'Back', 'textdomain' ),
        'next_text' => __( 'Next', 'textdomain' ),
        'screen_reader_text' => __( ' ', 'textdomain' )
      ) ); ?>

    </div>

    <?php get_sidebar() ?>
  </div>

  </section>

<?php get_footer() ?>