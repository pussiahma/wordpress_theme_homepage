

<?php get_header(); ?>

 <div class="jumbotron jumbotron-fluid bg-info"><div class="container text-sx-center p-t-3">

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


		  <h1 class="display-3"><?php the_title(); ?></h1>
</div>

</div>


<article>
<section>
<hr>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          


          <?php get_template_part('content', get_post_format()); ?>

		<?php endwhile; else : ?>
		<p><?php _e( 'Sivua ei löytynyt' ); ?></p>
		<?php endif; ?>

		<hr>
</section>
</article>

 <?php get_footer(); ?>


<?php
get_header();
// define how pages will display
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
//start loop
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>
<div class='<?php echo "$slug" ?>'>
        <h1 class="display-3"><?php echo "$title" ?></h1>
			<?php echo "$content" ?>
</div>

<?php
}
get_footer();
?>

