<?php /* Template Name: Шаблон Менторы */ ?>

<?php get_header(); ?>
<div class="main">
	<div class="list">
		
		<div class="list-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="list-title"><?php wp_title('',true,''); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="list-featured-image">
			<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/mentory-with-bg.jpg" alt="Менторы">
		</div>


		<?php 
			$args = array(
				'post_type' => 'junits',
				'posts_per_page' => 25,
				'r_sortby'   => 'highest_rated',
				'r_orderby'     => 'desc',
			);

			$query = new WP_Query( $args );

		?>
		<div class="list-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<?php if (have_posts()) : ?>
				        <?php while (have_posts()) : the_post(); ?>    
				    		<?php the_content(); ?>
				     	<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="people-list">
			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Юниты Вадима Галыгина</h3>
						</div>
					</div>
				</div>
				
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/galygin.png" alt="Юниты Вадима Галыгина">
				</div>
				<div class="junits-list owl-carousel">
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();
							$id_mentors = get_field('junits_mentor');
							
					?>
				
					<?php foreach($id_mentors as $id):

						if($id == 65):

					?>							
						
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							
							<div class="junit-card__photo">
							<?php 
								$photo       = get_field('photo');
								$photo_thumb = $photo['sizes']['junit-card-photo'];
								$photo_alt   =  $photo['alt'];
							?>
								<img class="lazy" 
									data-original="<?php echo $photo_thumb; ?>" 
									alt="<?php echo $photo_alt; ?>">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link"><?php the_title(); ?></a>
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
								<div class="junit-card-content__blogger">
									<?php
										$posts = get_field('bloger');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
												<a href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>	
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

				</div>
			</div>

			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Юниты Александра Солодухи</h3>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/soloduha.png" alt="Юниты Александра Солодухи">
				</div>
				<div class="junits-list owl-carousel">
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();
							$id_mentors = get_field('junits_mentor');
					?>
					<?php $id_junit_post = get_the_ID(); ?>
					<?php foreach($id_mentors as $id):
						if($id == 36):
					?>							
					
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							
							<div class="junit-card__photo">
								<img class="lazy" data-original="<?php echo get_template_directory_uri();?>/img/guest.jpg" alt="Иванов Иван">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link"><?php the_title(); ?></a>
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
								<div class="junit-card-content__blogger">
									<?php
										$posts = get_field('bloger');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
												<a href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>	
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

				</div>
			</div>
			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Юниты Екатерины Иванчиковой</h3>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/iowa.png" alt="Юниты Екатерины Иванчиковой">
				</div>
				<div class="junits-list owl-carousel">
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();
							$id_mentors = get_field('junits_mentor');
					?>
					<?php $id_junit_post = get_the_ID(); ?>
					<?php foreach($id_mentors as $id):
						if($id == 78):
					?>							
					
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							
							<div class="junit-card__photo">
								<img class="lazy" data-original="<?php echo get_template_directory_uri();?>/img/guest.jpg" alt="Иванов Иван">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link"><?php the_title(); ?></a>
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
								<div class="junit-card-content__blogger">
									<?php
										$posts = get_field('bloger');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
												<a href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>	
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

				</div>
			</div>
			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Юниты NaviBand</h3>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/naviband.png" alt="Юниты NaviBand">
				</div>
				<div class="junits-list owl-carousel">
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();
							$id_mentors = get_field('junits_mentor');
					?>
					<?php $id_junit_post = get_the_ID(); ?>
					<?php foreach($id_mentors as $id):
						if($id == 77):
					?>							
					
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							
							<div class="junit-card__photo">
								<img class="lazy" data-original="<?php echo get_template_directory_uri();?>/img/guest.jpg" alt="Иванов Иван">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link"><?php the_title(); ?></a>
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
								<div class="junit-card-content__blogger">
									<?php
										$posts = get_field('bloger');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
												<a href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>	
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

				</div>
			</div>
			<div class="people-list__item">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Юниты Дмитрия Колдуна</h3>
						</div>
					</div>
				</div>
				<div class="people-item-header">
					<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/koldun.png" alt="Юниты Дмитрия Колдуна">
				</div>
				<div class="junits-list owl-carousel">
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();
							$id_mentors = get_field('junits_mentor');
					?>
					<?php $id_junit_post = get_the_ID(); ?>
					<?php foreach($id_mentors as $id):
						if($id == 79):
					?>							
					
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="junit-card <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
							
							<div class="junit-card__photo">
								<img class="lazy" data-original="<?php echo get_template_directory_uri();?>/img/guest.jpg" alt="Иванов Иван">
							</div>
							<div class="junit-card-content">
								<h4 class="junit-card-content__title">
									<a href="<?php echo get_permalink(67); ?>" class="junit-page-link"><?php the_title(); ?></a>
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
								<div class="junit-card-content__blogger">
									<?php
										$posts = get_field('bloger');
										if ($posts) { ?>
										    <?php foreach($posts as $post) { setup_postdata($post); ?>
									
												<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
												<a href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
										<?php } ?>

										<?php wp_reset_postdata();?>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>	
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata();?>

				</div>
			</div>

		</div>
		
	</div>

</div>
<?php 	get_footer(); ?>