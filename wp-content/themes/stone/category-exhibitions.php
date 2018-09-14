<?php get_header() ?>

  <div class="content-main">


    <div class="content-main-bocks">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
          <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></h1>

          
          <!--place, date, tickets-->
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
          <!--end of place, date, tickets-->


          <?php the_excerpt() ?>
          <p><a href="<?php the_permalink() ?>" class="read-more">read more</a></p>
        </div>

      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>


    </div>
  </div>

  </section>

<?php get_footer() ?>