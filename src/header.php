<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title><?php echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); ?></title>

    <link rel="stylesheet" href="https://use.typekit.net/xqa6tqu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,600,700,700i">

    <link rel="stylesheet" href="https://vjs.zencdn.net/7.0.3/video-js.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/first.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/libs/js/jump.js"></script>

    <?php
      $headerMenu = get_term(get_nav_menu_locations()['header'], 'nav_menu');
      $headerMenuItems = wp_get_nav_menu_items($headerMenu);

      wp_head();
    ?>
  </head>
  <body>

    <header <?php if (is_front_page()) echo 'class="light"'; ?>>
      <div class="container">
        <a href="/" class="logo">
          <span>2018</span>
          <?php require(get_template_directory() . '/assets/img/logo.svg'); ?>
        </a>

        <ul class="menu">
          <?php foreach ($headerMenuItems as $item): ?>
            <li>
              <a href="<?php echo $item->url; ?>" <?php if ($item->target) echo 'target="' . $item->target . '"'; ?>><?php echo $item->title; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </header>
