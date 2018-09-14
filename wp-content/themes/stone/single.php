<!--get category-->
<?php $category = get_the_category() ?>


<?php if ($category[0]->cat_name == 'Portfolio'): ?>
  <?php get_header('portfolio-page') ?>


  <div class="content-main">


    <?php if (have_posts()) : while (have_posts()) :the_post(); ?>
      <?php the_content() ?>


    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>


  </div>

  </section>


  <?php get_footer('portfolio-page') ?>
<?php else: ?>


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
      <?php if (have_posts()) : while (have_posts()) :
      the_post(); ?>

      <h1><?php the_title() ?></h1>
      <?php the_post_thumbnail() ?>
      <!--place, date, tickets for exhibition-->
      <?php $custom_fields = get_post_custom(get_the_ID()); ?>
      <?php if ($custom_fields['place'][0]): ?>
        <p class="ex-place"><?php echo $custom_fields['place'][0] ?></p>
      <?php endif ?>
      <?php if ($custom_fields['date'][0]): ?>
        <p class="ex-date"><?php echo $custom_fields['date'][0] ?></p>
      <?php endif ?>
      <?php if ($custom_fields['ticket'][0]): ?>
        <p class="ex-ticket"><?php echo $custom_fields['ticket'][0] ?></p>
      <?php endif ?>
      <!--end of place, date, tickets for exhibition-->

      <?php the_content() ?>
    </div>


  <?php get_sidebar() ?>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>


  </div>

  </section>


  <?php get_footer() ?>


<?php endif; ?>
