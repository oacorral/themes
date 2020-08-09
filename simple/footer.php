  <div class="sidebar">
    <?php if (is_active_sidebar('barralateral')) : ?>
      <?php dynamic_sidebar('barralateral'); ?>
    <?php endif; ?>
  </div>
  <div class="clr">
  </div>
</div>
<footer>
  <div class="container">
    <p>&copy;<?php the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
