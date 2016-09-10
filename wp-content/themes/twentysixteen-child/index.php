<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $categories = get_categories('orderby=count&order=DESC');  ?> 

			<?php 

				foreach($categories as $category) {

					 $category_link = sprintf( '<a href="%1$s" alt="%2$s">%3$s</a>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			        esc_html( $category->name )
    				);
     
				    echo "<p class = 'categoryLinkAndCount'>" . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) ."<span class = 'post_count'> (". sprintf( esc_html__( '%s', 'textdomain' ), $category->count ) . ")</span></p>";


				}

			?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>