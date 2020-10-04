<!DOCTYPE html>
<html <?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <?php  get_stylesheet_uri(); ?>
  <header>
    <div class="container">
      <h1>
        <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        <small><?php bloginfo('description'); ?></small>
      </h1>
      <div class="h_right">
        <form class="" action="<?php esc_url(home_url('/')); ?>" method="get">
          <input type="text" name="s" value="" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>
  <nav class="nav main-nav">
    <div class="container">
      <?php
        $args = array('theme_location' => 'primary');
        wp_nav_menu($args);
      ?>
    </div>
  </nav>
  <div class="container content">
    <div class="main block">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h2><?php the_title(); ?></h2>
          <p class="meta">
            Publicado el
            <?php the_time('j \d\e F \d\e Y \a \l\a\s g:i a'); ?>
            por admin</p>
          <?php the_content(); ?>
          <a class="button" href="#">Read More</a>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo apautop('Sorry, no posts were found'); ?>
    <?php endif; ?>
    </div>
    <div class="side">
      <div class="block">
        <h3>Sidebar Head</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non tincidunt ante, eget pulvinar mauris. Integer commodo enim ac tincidunt molestie. In finibus, velit ac ultricies imperdiet, nunc lorem rhoncus eros, nec imperdiet dui
          ipsum sit amet lectus. Nulla pulvinar, lectus in aliquet porttitor, lectus magna fermentum justo, viverra pretium sapien neque ut mauris. Donec sed ullamcorper ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
          inceptos himenaeos. Nulla congue pellentesque arcu, sit amet rutrum lorem bibendum eget. Nam quis quam gravida, placerat eros eu, ornare diam. Vestibulum consectetur orci sed lacus commodo pretium. Donec eu viverra lorem. Etiam facilisis
          dapibus velit, non scelerisque eros aliquet ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
          <a class="button" href="#">More</a>
      </div>
    </div>
  </div>
  <footer class="main-footer">
    <div class="container">
      <div class="f_left">
        <p>&copy; 2020 - Advanced WP Theme</p>
      </div>
      <div class="f_right">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Services</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
