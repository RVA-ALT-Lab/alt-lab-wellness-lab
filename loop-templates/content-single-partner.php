<?php
/**
 * Single partner partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="row">
			<div class="col-md-4">
					<?php echo get_the_post_thumbnail();?>
			</div>
			<div class="col-md-8">
				<?php $url = get_field('partner_link'); 
				  echo "<a href='{$url}'>{$url}</a>";
				?>
			</div>
		</div>
	
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
