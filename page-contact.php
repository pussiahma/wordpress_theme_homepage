<?php

/*
Template Name:Contact
*/
?>
<?php 


 get_header();
?>



<article>
<section>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          


          <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile; else : ?>
    <p><?php _e( 'Sivua ei löytynyt' ); ?></p>
    <?php endif; ?>

    
</section>
</article>

 <?php get_footer(); ?>

