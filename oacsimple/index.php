<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>" dir="<?php bloginfo('text_direction'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
  </head>
  <body>
    <header>
      <h1><?php bloginfo('name'); ?></h1>
      <span><?php bloginfo('description'); ?></span>
    </header>
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
    <footer>
      <small>&copy;<?php bloginfo('name'); ?> <?php the_time('Y'); ?></small>
    </footer>
  </body>
</html>
