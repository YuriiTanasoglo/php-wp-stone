<?php get_header() ?>
  <section class="main-wrapper">
    <div class="main">
      <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1 class="wow fadeInDown"><?php the_title() ?></h1>
          <?php the_content() ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </section>
<?php get_footer() ?>