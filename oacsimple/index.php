<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <div class="main">
        <header>
          <h1><?php bloginfo('name'); ?></h1>
          <span><?php bloginfo('description'); ?></span>
        </header>
        <nav>

        </nav>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <div class="post">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
            <p>¡Ups! No tenemos ni una simple entrada. Estamos trabajando en ello.</p>
        <?php endif; ?>
      </div>
      <div class="sidebar">

      </div>
    </div>
    <footer>
      <small>&copy;<?php the_time('Y'); ?> <?php bloginfo('name'); ?> </small>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
