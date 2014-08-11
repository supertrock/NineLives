<article <?php post_class( "article" ); ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article">
  <article class="post-content">
    <?php the_title(); ?>
    <?php the_excerpt(); ?>
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post_thumb', array( 'class'=>'aligncenter' ) ); } ?>
  </article><!-- .post-content -->
</article><!-- .article -->