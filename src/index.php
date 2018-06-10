<?php

get_header();

$content = get_fields();

// echo '<pre>';
// print_r($content['video_section']);
// echo '</pre>';

?>

<section class="hero" style="background: url(<?php echo $content['hero_section']['background']['url']; ?>) no-repeat center; background-size: cover;">
  <div class="container">

    <article class="hero-content">
      <h1><?php echo $content['hero_section']['title']; ?></h1>
      <h4><?php echo $content['hero_section']['paragraph']; ?></h4>
      <div class="button-wrapper">
        <a href="<?php echo $content['hero_section']['learn_more_button']['link']['url']; ?>" id="learn-more-link">
          <button class="border-light"><?php echo $content['hero_section']['learn_more_button']['text']; ?></button>
        </a>

        <a href="<?php echo $content['hero_section']['sign_up_button']['link']['url']; ?>" id="sign-up-link">
          <button><?php echo $content['hero_section']['sign_up_button']['text']; ?></button>
        </a>
      </div>
    </article>

  </div>
</section>

<section class="video">
  <div class="container">

    <article class="video-container">
      <div class="video-wrapper">
        <video>
          <source src="<?php echo $content['video_section']['video']['url']; ?>" type="video/mp4">
        </video>
      </div>
      <div class="info-wrapper">
        <div class="info">
          <button id="play-video">
            <span><?php echo $content['video_section']['play_button']; ?></span>
            <?php require(get_template_directory() . '/assets/img/play-icon.svg'); ?>
          </button>
          <h5><?php echo $content['video_section']['section_label']; ?></h5>
          <h2><?php echo $content['video_section']['quote']; ?></h2>
        </div>
      </div>
    </article>

  </div>
</section>

<section class="about" id="about">
  <div class="container">
    <div class="section-head">
      <h5><?php echo $content['about_section']['section_label']; ?></h5>
      <h3><?php echo $content['about_section']['section_title']; ?></h3>
      <hr>
    </div>
    <div class="about-paragraphs">
      <?php echo $content['about_section']['about_text']; ?>
    </div>
  </div>
</section>

<section class="newsletter" id="newsletter">
  <div class="container">
    <div class="section-head">
      <h5><?php echo $content['newsletter_section']['section_label']; ?></h5>
      <h3><?php echo $content['newsletter_section']['section_title']; ?></h3>
      <hr>
    </div>

    <article class="newsletter-container">
      <h3><?php echo $content['newsletter_section']['form_title']; ?></h3>
      <hr>
      <form class="form" action="https://script.google.com/macros/s/AKfycbxkK6ZHQerZSgJkSvRBsfn-ge0KnSRnwguectelXzyUowaAoPM/exec" method="POST">
        <input type="email" id="newsletter-email" placeholder="<?php echo $content['newsletter_section']['input_label']; ?>">
        <button id="subscribe-button" type="submit"><?php echo $content['newsletter_section']['button_text']; ?></button>
      </form>
    </article>

  </div>
</section>

<section class="contact" id="contact">
  <div class="container">
    <div class="section-head">
      <h5><?php echo $content['contact_section']['section_label']; ?></h5>
      <h3><?php echo $content['contact_section']['section_title']; ?></h3>
      <hr>
      <p><?php echo $content['contact_section']['section_paragraph']; ?></p>
    </div>

    <article class="contact-cards">

        <?php foreach ($content['contact_section']['contact_cards'] as $contact): ?>
          <div class="contact-card">
            <div class="card">
              <img src="<?php echo $contact['image']['sizes']['large']; ?>" alt="Contact person image">
              <div class="info">
                <h2><?php echo $contact['name']; ?></h2>
                <a href="mailto:<?php echo $contact['email']; ?>">
                  <h5><?php echo $contact['email']; ?></h5>
                </a>
                <a href="tel:<?php echo $contact['phone']; ?>">
                  <h5><?php echo $contact['phone']; ?></h5>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

    </article>

  </div>
</section>


<?php get_footer(); ?>
