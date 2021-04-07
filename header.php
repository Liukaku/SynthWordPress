<?php

// All the <head> contentent and then the top of the <body> content>

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="sticky-top">
    <div class="container">
      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu'
        )
      );
      ?>
    </div>
  </header>