
<?php get_header(); ?>
    <div class="main">
      <div class="container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h3><?php the_title(); ?></h3>
          <div class="meta">
            Escrito por <?php the_author(); ?> el <?php the_time('l j \d\e F \d\e Y \a \l\a\s H:i:s'); ?>
          </div>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else :?>
          <?php echo wpautop('Es triste decir que no hay ni un simple post escrito. ¡Qué vergüenza!'); ?>
        <?php endif; ?>
      </div>
    </div>
<?php get_footer(); ?>
