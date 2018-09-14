<div class="sidebar">

    <?php $args = array(
      'post-type' => 'post',
      'orderby' => 'rand',
      'category_name' => 'photo-shoot,exhibitions',
      'posts_per_page' => 1
    ) ?>
    <?php $rend_post = new WP_Query($args); ?>
    <?php if ($rend_post->have_posts()) : while ($rend_post->have_posts()) : $rend_post->the_post(); ?>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
        <?php the_excerpt() ?>
        <p><a class="read-more" href="<?php the_permalink() ?>">read more</a></p>
    <?php endwhile; ?>
    <?php else: ?>

    <?php endif; ?>


</div>