<?php

get_header();

$content = get_fields();

// Google Maps API key
// AIzaSyDU3-i_wURd0YhAGROFHbZJzJUQ_kC8tnM

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

        <a href="<?php echo $content['hero_section']['cta_button']['link']['url']; ?>" id="sign-up-link"<?php if ($content['hero_section']['cta_button']['link']['target']) echo 'target="' . $content['hero_section']['cta_button']['link']['target'] . '"'; ?>>
          <button><?php echo $content['hero_section']['cta_button']['text']; ?></button>
        </a>
      </div>
    </article>

  </div>
</section>

<section class="video">
  <div class="container">

    <article class="video-container">
      <div class="video-wrapper">
        <div id="video"></div>
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

<section class="background" id="background">
  <div class="container">
    <div class="section-head">
      <h5><?php echo $content['background_section']['section_label']; ?></h5>
      <h3><?php echo $content['background_section']['section_title']; ?></h3>
      <hr>
    </div>
    <div class="background-paragraphs">
      <?php echo $content['background_section']['background']; ?>
    </div>
  </div>
</section>

<?php
// echo '<pre>';
// print_r($content['event_section']);
// echo '</pre>';
?>

<section class="event" id="event">
  <div class="container">
    <div class="section-head">
      <h5><?php echo $content['event_section']['section_label']; ?></h5>
      <h3><?php echo $content['event_section']['section_title']; ?></h3>
      <hr>
    </div>

    <article class="event-overview">
      <div class="event-map" data-json='<?php echo json_encode($content['event_section']['map_settings']); ?>'></div>
      <div class="event-info-wrapper">
        <div class="info">
          <h2><?php echo $content['event_section']['overview_title']; ?></h2>
          <h5><?php echo str_replace('</p>', '', str_replace('<p>', '', $content['event_section']['overview_paragraph'])); ?></h5>
          <a href="<?php echo $content['event_section']['overview_cta_button']['url']; ?>" class="btn"<?php if ($content['event_section']['overview_cta_button']['target']) echo 'target="' . $content['event_section']['overview_cta_button']['target'] . '"'; ?>>
            <button><?php echo $content['event_section']['overview_cta_button']['title']; ?></button>
          </a>
        </div>
      </div>
    </article>

    <article class="info-columns">
      <div class="col">
        <ul class="info-blocks">
          <?php foreach ($content['event_section']['left_column_blocks'] as $block): ?>
            <li>
              <h4 class="block"><?php echo $block['headline']; ?></h4>
              <p><?php echo nl2br($block['paragraph']); ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col">
        <ul class="info-blocks">
          <?php foreach ($content['event_section']['right_column_blocks'] as $block): ?>
            <li>
              <h4 class="block"><?php echo $block['headline']; ?></h4>
              <p><?php echo nl2br($block['paragraph']); ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </article>

    <article class="api-overview">
      <div class="article-head">
        <h4 class="block"><?php echo $content['event_section']['api_headline']; ?></h4>
        <p><?php echo $content['event_section']['api_paragraph']; ?></p>
      </div>
      <ul class="api-list">
        <?php foreach ($content['event_section']['api_list'] as $api): ?>
          <li>
            <a href="<?php echo $api['api_link']['url']; ?>" <?php if ($api['api_link']['target']) echo 'target="' . $api['api_link']['target'] . '"'; ?>>
              <?php echo $api['api_link']['title']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </article>

    <article class="organizers">
      <div class="article-head">
        <h4 class="block"><?php echo $content['event_section']['organizers_headline']; ?></h4>
        <p><?php echo $content['event_section']['organizers_paragraph']; ?></p>
      </div>
      <ul class="organizer-list">
        <?php foreach ($content['event_section']['organizers'] as $org): ?>
          <li>
            <a href="<?php echo $org['link']['url'];?>"<?php if ($org['link']['target']) echo 'target="' . $org['link']['target'] . '"'; ?>>
              <div class="inner">
                <div class="image">
                  <img src="<?php echo $org['logo']['url']; ?>" alt="<?php echo $org['logo']['title']; ?>">
                </div>
                <p><?php echo $org['tagline']; ?></p>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </article>

  </div>
</section>

<section class="newsletter" id="newsletter">
  <div class="container">
    <article class="newsletter-container">
      <div class="section-head">
        <h5><?php echo $content['newsletter_section']['section_label']; ?></h5>
        <h3><?php echo $content['newsletter_section']['section_title']; ?></h3>
        <hr>
      </div>
      <form class="form" action="https://trainhack.us18.list-manage.com/subscribe/post?u=913d2c9f313ffe5c9ac4888ce&amp;id=af621a509d" method="POST" target="_blank" novalidate>
        <input type="email" value="" name="EMAIL" id="newsletter-email" placeholder="<?php echo $content['newsletter_section']['input_label']; ?>">
        <input type="hidden" type="text" name="b_913d2c9f313ffe5c9ac4888ce_af621a509d" tabindex="-1" value="">
        <input type="hidden" value="Subscribe" name="subscribe">
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
