<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package WordPress
	 * @subpackage Travel
	 * @since Travel 1.0
	 */
	
	get_header() ?>
	<div class="container">
	<div class="row">
		<div class="col-sm-8 order-md-1">
			<div>
				<h1><?php the_title() ?></h1>
				<p><a href="<?php get_the_author_link() ?>"><?php the_author() ?></a></p>
				<?php the_content() ?>
			</div>
		</div>
		<?php get_sidebar() ?>
	</div>
<?php get_footer() ?>