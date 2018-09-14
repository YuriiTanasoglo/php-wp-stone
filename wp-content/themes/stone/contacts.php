<?php
/**
 * Template Name: Contacts
 */
?>

<?php get_header('page') ?>

  <div class="content-main">

    <div class="content-left">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <h1><?php the_title() ?></h1>

        <div class="contact-form">
          <?php the_content() ?>
        </div>


      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>


    </div>


    <div class="sidebar">

      <div>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_post_thumbnail() ?>

          <!--get title or default title-->
          <?php $custom_fields = get_post_custom(get_the_ID()); ?>
          <?php if ($custom_fields['custom-title'][0]): ?>
            <h1><?php echo $custom_fields['custom-title'][0] ?></h1>
          <?php else: ?>
            <h1>Contact Details</h1>
          <?php endif; ?>

          <!-- get mote info-->


          <?php
          foreach ($custom_fields as $key => $value)
            if (preg_match('#^contact-#', $key)) {
              echo "<p class='{$key}'>{$value[0]}</p>";
            }
          ?>




          <?php $custom_fields = get_post_custom(get_the_ID()); ?>
          <?php if ($custom_fields['custom-message'][0]): ?>
            <p><?php echo $custom_fields['custom-message'][0] ?></p>
          <?php endif; ?>


        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>


        <!--        <img src="images/contact-img.jpg" alt=""/>-->
        <!--        <h1>Contact Details</h1>-->
        <!--        <p class="contact-address">18, Your Street, Yourareaname, Cityname,-->
        <!--          Countyname, DE1 2WX, United Kingdom.</p>-->
        <!---->
        <!--        <p class="contact-phone">0800 900 0003</p>-->
        <!---->
        <!--        <p class="contact-mail">youremail@yoursite.com</p>-->
        <!---->
        <!--        <p class="contact-license">Registered photographer No. 09900-CCC</p>-->
        <!---->
        <!--        <p>VAT registered business number 455-5559-000</p>-->
      </div>
    </div>


  </div>
  </section>

<?php get_footer('page') ?>