<?php /*Template Name: Шаблон Конкурс шуток*/ ?>
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
		'post_type' => 'competition_prank',
		'posts_per_page' => 25,
	);

	$query = new WP_Query( $args );
?>
<?php 
	if ( $query->have_posts()  ):
?>
		<div class="group-list">
			<div class="sircle-section sircle-section--with-line sircle-section--with-triangle">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Лучшие шутки</h3>
							<div class="sircle-section-list">

<?php
	while ( $query->have_posts() ):
		$query->the_post();
		
?>
<?php 
	$photo       = get_field('photo');
	$photo_thumb = $photo['sizes']['bangmusic-sircle-photo'];
	$photo_alt   =  $photo['alt'];
	$excerpt     = get_field('about');
?>
								<div class="sircle-section__item">
									<div class="sircle-section__img">
										<img class="lazy" data-original="<?php echo $photo_thumb;?>" width="125" height="125" alt="<?php echo $photo_alt;?>">
									</div>
									<div class="sircle-section__text-wrapp">
										<h4><?php the_title(); ?></h4>
										<div class="sircle-section__descr"><?php echo $excerpt; ?></div>
										<div class="sircle-section__text"><?php the_content(); ?></div>
									</div>
								</div>
<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
	</div>

</div>

<?php get_footer(); ?>