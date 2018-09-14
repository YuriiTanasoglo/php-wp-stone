<footer class="footer-wrapper">
  <div class="footer-main">
    <div class="footer-left">

      <p>copyright 2011
        <a href="#">www.yoururl.com</a>
      </p>
    </div>

    <?php if (!dynamic_sidebar('footer')): ?>
    <?php endif ?>

  </div>
</footer>


<?php wp_footer();?>
</body>
</html>