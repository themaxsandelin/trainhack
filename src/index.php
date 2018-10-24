<?php
  $pageId = get_the_ID();
  $page = get_page($pageId);

  get_header();
?>

<section>
  <div class="container narrow">

    <?php echo apply_filters('the_content', $page->post_content); ?>

  </div>
</section>

<?php get_footer(); ?>
