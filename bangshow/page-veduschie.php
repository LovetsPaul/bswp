<?php /*Template Name: Шаблон Ведущие*/ ?>
<?php get_header(); ?>
<div class="main">
	<div class="list">
		
		<div class="list-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="list-title"><?php wp_title(''); ?></h2>
					</div>
				</div>
			</div>
		</div>

		<div class="list-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if(have_posts()): ?>
							<?php while(have_posts()): the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

<?php 
	$args = array(
		'post_type' => 'veduschie',
		'posts_per_page' => 25,
	);

	$query = new WP_Query( $args );

?>
		<div class="people-list veduschie-list">

<?php 
	if ( $query->have_posts()  ):
		while ( $query->have_posts() ):
			$query->the_post();
		
?>
<?php 
	$photo       = get_field('photo_png');
	$photo_src       = $photo['url'];
	$photo_alt   =  $photo['alt'];
?>

			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo $photo_src; ?>" alt="<?php echo $photo_alt; ?>">
				</div>
				<div class="list-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
		</div>
		
	</div>

</div>

<?php get_footer(); ?>