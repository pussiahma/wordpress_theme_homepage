<?php 

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts,
    'order' => 'ASC'
  );
  $query = new WP_Query( $args );

?>


<section class="row" >
  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns" id="photo-container">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>


  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
