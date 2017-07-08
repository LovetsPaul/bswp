<?php /*Template Name: Шаблон Блогеры*/ ?>
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
		'post_type' => 'blogers',
		'posts_per_page' => 10,
	);

	$query = new WP_Query( $args );

?>
		<div class="people-list">

<?php 
	if ( $query->have_posts()  ):
		while ( $query->have_posts() ):
			$query->the_post();
			$bloger_post_id = get_the_ID();
		
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
							<h3>Блогер&nbsp;<?php the_title(); ?></h3>
							<nav>
								<ul class="social-links to-right social-links_red">
									<?php if( get_field('vk', get_the_ID()) ): ?>
										<li><a target="_blank" href="<?php echo get_field('vk', get_the_ID()); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('fb', get_the_ID()) ): ?>
										<li><a target="_blank" href="<?php echo get_field('fb', get_the_ID()); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('tw', get_the_ID()) ): ?>	
										<li><a target="_blank" href="<?php echo get_field('tw', get_the_ID()); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('instagram', get_the_ID()) ): ?>
										<li><a target="_blank" href="<?php echo get_field('instagram', get_the_ID()); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('youtube', get_the_ID()) ): ?>
										<li><a target="_blank" href="<?php echo get_field('youtube', get_the_ID()); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<?php endif; ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo $photo_src; ?>" alt="<?php echo $photo_alt; ?>">
				</div>
				<div class="junits-list owl-carousel">
					
		<?php 
			$args2 = array(
				'post_type' => 'junits',
				'posts_per_page' => 333,
				'r_sortby'   => 'highest_rated',
				'r_orderby'     => 'desc',
			);

			$query2 = new WP_Query( $args2 );

		?>
			
		<?php 

			if ( $query2->have_posts()  ):
				while ( $query2->have_posts() ):
					$query2->the_post();
					$blogers = get_field('bloger');


					foreach($blogers as $bloger):
						if(($bloger->ID) == $bloger_post_id):
					setup_postdata($bloger);
				
		?>			


					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							<?php 
								$photo_junit       = get_field('photo');
								$photo_thumb = $photo_junit['sizes']['junit-card-photo'];
								$photo_alt   =  $photo['alt'];
							?>
							<div class="junit-card__photo">
								<img class="lazy" data-original="<?php echo $photo_thumb;?>" alt="<?php echo $photo_alt;?>">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link">
										<?php the_title(); ?>
									</a>
								</h4>
								<div class="bang-show-raiting junit-raiting"><a class="rate_button" href="<?php echo get_permalink(67); ?>">Голосовать</a>
									<div class="bang-show-raiting__title">Рейтинг:</div>
									<?php if(function_exists('the_ratings')) { 
										echo expand_ratings_template('<span class="rating">%RATINGS_IMAGES%</span><br>(<em><strong>%RATINGS_USERS%</strong> голосов, средний балл: <strong>%RATINGS_AVERAGE%</strong> из %RATINGS_MAX%</em>)', get_the_ID()); 
									} ?>
								</div>
								<div class="junit-card-content__descr"><span>Состав:&nbsp;&nbsp;</span>
									<?php $members = array();
										if(get_post_meta( get_the_ID(), 'member_1', true )){
									 		$members[] = get_post_meta( get_the_ID(), 'member_1', true );
										} 
										if(get_post_meta( get_the_ID(), 'member-2', true )){
											$members[] = get_post_meta( get_the_ID(), 'member-2', true );
										} 

										if(get_post_meta( get_the_ID(), 'member-3', true )){
											$members[] = get_post_meta( get_the_ID(), 'member-3', true );
										}
										echo implode(', ', $members);
									?>
								</div>
								<div class="junit-card-content__mentor">
									<?php
										$posts = get_field('junits_mentor');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(24); ?>"><?php the_title(); ?></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>


				</div>
			</div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
		</div>
		
	</div>

</div>

<?php get_footer(); ?>