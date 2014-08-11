<?php get_header() ?>

  <section class="section-wide" role="main">

    <?php $loop = new WP_Query(array('post_type' => 'product', 'posts_per_page' => 3)); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="title"><?php the_title(); ?></div>
      <dive class"product-image"><?php the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'carousel'); ?></div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </section><!-- .section -->

  <?php get_sidebar(); ?>

<?php get_footer(); ?>