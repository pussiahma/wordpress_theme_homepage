

 <?php get_header(); ?>

 <div class="jumbotron jumbotron-fluid bg-info"><div class="container text-sx-center p-t-3">

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


		  <h1 class="display-3"><?php the_title(); ?></h1>
</div>

</div>


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

