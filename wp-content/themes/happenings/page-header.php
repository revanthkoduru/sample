<?php
/*
Template Name: Header Page
*/
 ?>
<?php get_header(); ?>
<header>
		<div class="mobileNav"><span class="heavy"> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></span><span id="menuTab"><i class="fa fa-bars"></i></span></div>
<nav class="navPush">
           <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
       </nav><!--//top_navlist-->

	</header>
<div class="wrapper">
		<div class="slides">
		<?php if ( get_theme_mod( 'first_slide' ) ) : ?>
	    <div><img src="<?php echo esc_url( get_theme_mod('first_slide') ); ?>" ></div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'second_slide' ) ) : ?>
	    <div><img src="<?php echo esc_url( get_theme_mod('second_slide') ); ?>" ></div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'third_slide' ) ) : ?>
	    <div><img src="<?php echo esc_url( get_theme_mod('third_slide') ); ?>" ></div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'fourth_slide' ) ) : ?>
	    <div><img src="<?php echo esc_url( get_theme_mod('fourth_slide') ); ?>" ></div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'fifth_slide' ) ) : ?>
	    <div><img src="<?php echo esc_url( get_theme_mod('fifth_slide') ); ?>"></div>
		<?php endif; ?>
	</div>

	<div class="custom-header">
		<?php $header_image = get_header_image();
		if ( ! empty ($header_image)) : ?>
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
		<?php endif; ?>
	</div>

<div class="content">


		<?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('large');
} ?>

		<?php if (have_posts()) :?>
         <?php while (have_posts()) : the_post();?>

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
         <!--//post-->
         	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'happenings'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content();?>
            <?php edit_post_link( sprintf( ' %s', __( '<i class="fa fa-pencil"></i> Edit', 'happenings' ) ) ); ?>
         <?php wp_link_pages(); ?><!--//.entry-content-->
		</article>
		
		<?php endwhile; ?>

		<?php else : ?>

	       <article><h2><?php _e("Can't find it!", "happenings"); ?></h2>
              <p><?php _e("Sorry, but you are looking for something that isn't here.", "happenings"); ?></p>
		<p><?php _e("Would you like to try again?", "happenings"); ?></p><br>
        <?php get_search_form() ?></article>
     
		<?php endif; ?>
		
	</div><!-- end content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>