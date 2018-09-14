<?php get_header(); ?>
  <section class="start-screen">
    <div class="main-background-wrapper">
      <img class="main_background" src="http://test.loc/wp-content/uploads/2018/04/main_background.jpg">
    </div>
  </section>
  <section class="main-wrapper">
    <div class="main">
      <div class="content">
        <?php
        $main_page = get_post(25)->post_content;
        echo $main_page; ?>
      </div>
    </div>
  </section>
<?php get_footer() ?>