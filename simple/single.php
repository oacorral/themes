
<?php get_header(); ?>
<div class="container">
  <div class="main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h3><?php the_title(); ?></h3>
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <div class="meta">
            Escrito por
            <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>
            el <?php the_time('l j \d\e F \d\e Y \a \l\a\s H:i:s'); ?>
          </div>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
      <?php else :?>
        <?php echo wpautop('Es triste decir que no hay ni un simple post escrito. ¡Qué vergüenza!'); ?>
      <?php endif; ?>
      <?php comments_template(); ?>
  </div>
<?php get_footer(); ?>
