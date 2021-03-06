<?php session_start();

/**
 * Single Post Template
 *
 * @package WordPress
 * @subpackage Launch_Effect
 * 
 */
 
// STORE REFERRED BY CODE
$_SESSION['referredBy'] = $referralindex;

include('header.php'); // using this instead of get_header so we can pass $referralindex variable 

// LOG VISITS AND CONVERSIONS
logVisits($referralindex, $stats_table);

?>

<?php if(lefx_version() == 'premium'):
	
	include(TEMPLATEPATH . '/premium/theme-header.php'); ?>
	
	<?php get_sidebar(); ?>
	
	<div id="main">
		<?php get_template_part( 'loop', 'index' );?>
	</div>
	
	<?php include(TEMPLATEPATH . '/inc/launch-footer.php'); ?>
	
	</div> <!-- end #wrapper -->
	
<?php else: ?>

	<div id="wrapper">
		<header>
			<h1><a href="#">LAUNCH EFFECT</a></h1>
		</header>
		<div id="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="lepost">
				<h2 class="posttitle"><a href="#"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</div>
			<?php endwhile; else: endif; ?>
		</div>
	</div> <!-- end #wrapper -->

<?php endif; ?>

<?php get_footer();

?>