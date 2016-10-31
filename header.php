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

    	 <div class="jumbotron jumbotron-fluid bg-info" id="top">

    	 <div class="container text-sx-center p-t-3 jumbo" id="jumbo">

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<h1 class="header-text">Ella Ruokokoski</h1>
</div>
</div>






