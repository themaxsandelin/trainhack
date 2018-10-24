
    <footer>
      <div class="container">
        <?php require(get_template_directory() . '/assets/img/logo.svg'); ?>
        <h6>Copyright © Trainhack <?php echo date('Y'); ?></h6>
      </div>
      <div>
        <?php wp_footer(); ?>

        <?php if (is_front_page()): ?>
          <script src="<?php echo get_template_directory_uri(); ?>/assets/js/navigation.js" defer></script>
          <script src="<?php echo get_template_directory_uri(); ?>/assets/js/event.js" defer></script>
          <script src="<?php echo get_template_directory_uri(); ?>/assets/js/video.js" defer></script>
        <?php endif; ?>
      </div>
    </footer>

  </body>
</html>
