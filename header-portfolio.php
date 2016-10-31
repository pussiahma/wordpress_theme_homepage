<!doctype html>
<html<?php language_attributes(); ?>>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset=<?php bloginfo('charset'); ?>>
		<title><?php bloginfo( 'name' );?><?php wp_title('| ', true, 'right');?></title>
	
		<meta name="description" content="<?php bloginfo('description');?>">
		<?php wp_head(); ?>

	</head>

<?php
	if(is_home()):

	$kotisivu_classes = array('kotisivu_class', 'my_class');
else:
		$kotisivu_classes =array('not_kotisivu_class');
	endif;



	?>



<body <?php body_class($kotisivu_classes);  ?>>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </div>

        <div class="navbar-collapse collapse">

          <?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => 'false',
									'menu_class' => 'nav navbar-nav'
									)
								);
							?>
        </div><!--/.navbar-collapse -->

      </div>
    </div>


<div class="container">

		
<?php $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts,
    'order' => 'ASC'
  );
  $the_query = new WP_Query( $args );

?> 

       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>
            
            <?php endwhile; endif; ?>
          </ol>

          <?php rewind_posts(); ?>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

              <?php
                $thumbnail_id = get_post_thumbnail_id(); 
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
              ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
              <div class="carousel-caption">	<h3><?php the_title();?> </h3>
			<p><?php the_field('kuvaus');?></p>

              </div>
            </div>
            
            <?php endwhile; endif; ?>
    </div>
    ...


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




		  
</div>





