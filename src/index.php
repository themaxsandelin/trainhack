<?php
  $pageId = get_the_ID();
  $page = get_page($pageId);
  $pageContent = apply_filters('the_content', $page->post_content);

  get_header();
?>

<section>
  <div class="container narrow">

    <?php echo $pageContent; ?>

  </div>
</section>

<?php get_footer(); ?>
