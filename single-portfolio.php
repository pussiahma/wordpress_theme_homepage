
<?php get_header(); ?>

<article class ="portfolio-page">
<section  class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
		
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">
			
		
						
						
						  <?php the_field('kuva');?>
						 
		
			 </div>
		</div>
          <!-- Secondary Column -->
          <div class="small-12 medium-4 medium-pull-8 columns">



          
            <div class="secondary">
           
			<h1><?php the_title();?> </h1>
			<p><?php the_field('kuvaus');?></p>
			
			<hr>
			 	<p><small>lisätty: <?php the_time('F, j, Y'); ?> <?php the_time('g:i; a'); ?><?php the_category();?></small></p>
			 	<p><small><? $tagit = wp_get_post_terms($post->ID, 'tagit' );
			
			 	$i = 0; 
			 	foreach($tagit as $tag) { $i++;
			 		if($i > 1){echo ', ';};
			 		echo $tag -> name;
			 	}


			 		?></small></p>
		<hr>
			<p class="text-center"><?php previous_post_link();?></p>
			<p class="text-center"><a href="<?php bloginfo('url'); ?>/galleria" style="color: #85C33F;">Takaisin Galleriaan</a></p>
			<p class="text-center"><?php next_post_link();?>
			</p>
				</div>
				

			</div>
				
	<?php endwhile; endif; ?>
		</div>
	
    </section>

</article>

	
<?php

get_footer(); ?>
