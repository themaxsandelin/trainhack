
    <footer>
      <div class="container">
        <?php require(get_template_directory() . '/assets/img/logo.svg'); ?>
        <h6>Copyright © Trainhack <?php echo date('Y'); ?></h6>
      </div>
    </footer>

    <div>
      <?php wp_footer(); ?>

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js"></script>

      <script src="https://vjs.zencdn.net/7.0.3/video.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/video.js"></script>
    </div>

  </body>
</html>
