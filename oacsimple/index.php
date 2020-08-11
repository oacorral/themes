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
          MENÚ DE NAVEGACIÓN AQUÍ
        </nav>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <article class="post">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              Escrito por <a href="<?php the_author_url(); ?>"><?php the_author(); ?></a>  el <?php the_time('l j \d\e F \d\e Y'); ?>
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php endif; ?>
              <?php the_excerpt(); ?>
              <br>
              <a class="button" href="<?php the_permalink(); ?>">Leer más</a>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
            <p>¡Ups! No tenemos ni una simple entrada. Estamos trabajando en ello.</p>
        <?php endif; ?>
      </div>
      <div class="sidebar">
        BARRA LATERAL AQUÍ
      </div>
    </div>
    <footer>
      <small>&copy;<?php the_time('Y'); ?> <?php bloginfo('name'); ?> </small>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
