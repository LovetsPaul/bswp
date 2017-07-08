<?php /*Template Name: Шаблон Bang Music */ ?>
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
		<div class="list-img-galleryy">
			<div class="container">
				<div class="row">
					<div class="popup-gallery owl-carousel">
						<div class="col-md-4"><a href="img/zveri.jpg" title="Группа Звери"><img class="lazy image-responsive" data-original="img/zveri.jpg"></a></div>
						<div class="col-md-4"><a href="img/zveri.jpg" title="Bang Music"><img class="lazy image-responsive" data-original="img/zveri.jpg"></a></div>
						<div class="col-md-4"><a href="img/zveri.jpg" title="Bang Music"><img class="lazy image-responsive" data-original="img/zveri.jpg"></a></div>
					</div>
				</div>
			</div>		
		</div>

<?php 
	$args = array(
		'post_type' => 'bangmusics',
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
							<h3>Выступившие группы</h3>
							<div class="sircle-section-list">


<?php
		while ( $query->have_posts() ):
			$query->the_post();
		
?>
<?php 
	$photo       = get_field('photo');
	$photo_thumb = $photo['sizes']['bangmusic-sircle-photo'];
	$photo_alt   =  $photo['alt'];
	$excerpt     = get_field('excerpt');
?>
								<div class="sircle-section__item">
									<div class="sircle-section__img">
										<img class="lazy" data-original="<?php echo $photo_thumb; ?>" width="125" height="125" alt="<?php echo $photo_alt; ?>">
									</div>
									<div class="sircle-section__text-wrapp">
										<h4><?php the_title(); ?></h4>
										<div class="sircle-section__descr"><?php if($excerpt){echo $excerpt;} ?></div>
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
		<div class="list-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident similique omnis quo mollitia repudiandae minima, quis, expedita ipsam nostrum accusamus neque natus, suscipit doloribus cum excepturi reprehenderit modi eos obcaecati magni officia voluptatem odio, nobis dolorem nesciunt. Quae autem, eum, dolorum neque quibusdam quis eveniet a nulla, et tempore non.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident similique omnis quo mollitia repudiandae minima.</p>
						<a href="#" class="action-button">Принять участие</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>