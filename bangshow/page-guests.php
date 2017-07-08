<?php /*Template Name: Шаблон Почётные гости*/ ?>
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
		<!-- <div class="list-img-galleryy">
			<div class="container">
				<div class="row">
					<div class="popup-gallery owl-carousel">
						<div class="col-md-4"><a href="<?php echo get_template_directory_uri();?>/img/galygin.png" title="Группа Звери"><img class="lazy image-responsive" src="<?php echo get_template_directory_uri();?>/img/galygin.png"></a></div>
						<div class="col-md-4"><a href="<?php echo get_template_directory_uri();?>/img/galygin.png" title="Bang Music"><img class="lazy image-responsive" src="<?php echo get_template_directory_uri();?>/img/galygin.png"></a></div>
						<div class="col-md-4"><a href="<?php echo get_template_directory_uri();?>/img/galygin.png" title="Bang Music"><img class="lazy image-responsive" src="<?php echo get_template_directory_uri();?>/img/galygin.png"></a></div>
					</div>
				</div>
			</div>		
		</div> -->
		
		<div class="group-list">
<?php 
$args = array(
	'post_type' => 'quests',
	'posts_per_page' => 25,
);

$query = new WP_Query( $args );

?>

		<div class="sircle-section sircle-section--with-line sircle-section--with-triangle">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Книга почётных гостей</h3>
							<div class="sircle-section-list">


<?php 
	if ( $query->have_posts()  ):
		while ( $query->have_posts() ):
			$query->the_post();		
?>
<?php 
	$photo       = get_field('photo');
	$photo_thumb = $photo['sizes']['quests-sircle-photo'];
	$photo_alt   =  $photo['alt'];
?>
	
								<div class="sircle-section__item">
									<div class="sircle-section__img">
										<img class="lazy" data-original="<?php echo $photo_thumb;?>" width="125" height="125" alt="<?php echo $photo_alt; ?>">
									</div>
									<div class="sircle-section__text-wrapp">
										<h4><?php the_title(); ?></h4>
										<div class="sircle-section__descr"><?php the_content(); ?></div>
										<div class="sircle-section__text"><?php echo get_field('reviews', get_the_ID()); ?></div>
									</div>
								</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
	</div>

</div>

<?php get_footer(); ?>