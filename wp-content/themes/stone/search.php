<?php get_header() ?>

    <div class="content-wrapper">
        <div class="content-main">
            <section class="content">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="articles">

                        <div class="articles-gen-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail() ?>
                                <?php else: ?>
                                    <img src="<?php bloginfo(template_url); ?>/images/no_img.jpg" alt="">
                                <?php endif; ?>
                        </div>

                        <div class="articles-head">
                    <span class="articles-date">
                        <img src="<?php bloginfo(template_url); ?>/images/articles-autor.jpg" alt="">
                        <span>
                            <?php the_author() ?>
                        </span>
                        <?php
                        the_time('M jS, Y');
                        ?>
                    </span>
                    <span class="articles-comments">
                        <img src="<?php bloginfo(template_url); ?>/images/articles-comment.jpg" alt="">
                        <a href="#"><?php
                            comments_popup_link(
                                'No Comments',
                                '1 Comment',
                                '%1$s Comments'
                            );
                            ?></a>
                    </span>
                        </div>
                        <h1>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <?php the_excerpt(); ?>
                        <p>
                            <a href="<?php the_permalink(); ?>">
                                Read More
                            </a>
                        </p>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>Your search did not match</p>
                <?php endif; ?>


                <div class="pager">
                    <?php the_posts_pagination( array(
                      'mid_size' => 1,
                      'prev_text' => __( 'Back', 'textdomain' ),
                      'next_text' => __( 'Next', 'textdomain' ),
                      'screen_reader_text' => __( ' ', 'textdomain' )
                    ) ); ?>
                </div>
            </section>

            <?php get_sidebar() ?>
        </div>
    </div>

<?php get_footer() ?>