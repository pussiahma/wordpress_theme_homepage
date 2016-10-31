<?php

/*
Template Name: Portfolio
*/
?>

<?php 

//if(is_page(1618)) {
 //get_header('portfolio');
//}
//else {
 get_header();
//}
 //wp_head();
?>




 <div class="jumbotron jumbotron-fluid bg-info"><div class="container text-sx-center p-t-3">

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


      <h1 class="display-3"><?php the_title(); ?></h1>
</div>

</div>

 
<article>


<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      <?php the_content(); ?>       
	

  	<?php endwhile; endif; ?>
  


	<?php get_template_part('content', 'portfolio'); ?>

  
    
    </div>
  </div>
</section>



</article>
<?php get_footer(); ?>

