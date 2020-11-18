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

get_header();
?>

<main id="site-content" role="main">

		<?php
			if( have_posts() ){
				// перебираем все имеющиеся посты и выводим их
				while( have_posts() ){
					the_post();
					?>

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
					</div>
					
					<?php
				}
				?>

				<div class="navigation">
					<div class="next-posts"><?php next_posts_link(); ?></div>
					<div class="prev-posts"><?php previous_posts_link(); ?></div>
				</div>
				
				<?php
			}
// постов нет
			else {
				echo "<h2>Записей нет.</h2>";
			} ?>

</main><!-- #site-content -->

<?php get_sidebar('sidebar'); ?>

<?php
get_footer();
