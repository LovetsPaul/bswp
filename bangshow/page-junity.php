<?php /* Template Name: Шаблон Юниты */ ?>

<?php get_header(); ?>
<?php
	global $bangshow_settings;
	$posts_per_page = $bangshow_settings['posts-per-page'];

?>
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
		
		<div class="junit-list">

			<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'posts_per_page' => $posts_per_page,
					'paged'  => $paged,
					'post_type' => 'junits',
					'r_sortby'   => 'highest_rated',
					'r_orderby'     => 'desc'
				);

				$query = new WP_Query( $args );

			?>
			<?php 
				if ( $query->have_posts()  ):
					while ( $query->have_posts() ):
						$query->the_post();
					$the_content = get_the_content();
			?>
			<?php $id_junit_post = get_the_ID(); ?>
				<div class="junit-list__item">
					<div class="junit-card junit-card--justify <?php if(get_post_meta( get_the_ID(), 'disable', true )){echo 'junit-disabled';} ?>">
						
						<div class="junit-card__photo">
							<?php 
								$photo       = get_field('photo');
								$photo_thumb = $photo['sizes']['junit-card-photo'];
								$photo_alt   =  $photo['alt'];
							?>
							<img class="lazy" data-original="<?php echo $photo_thumb; ?>" alt="<?php echo $photo_alt; ?>">
						</div>
						<div class="junit-card-content">
							<h4 class="junit-card-content__title">
								<?php echo the_title(); ?>
							</h4>

							<div class="bang-show-raiting junit-raiting">
								<div class="bang-show-raiting__title">Рейтинг:</div>
								<?php echo do_shortcode( '[ratings id="$id_junit_post"]' ); ?>
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
										$id_mentor_post = get_field('junits_mentor');
										$id_mentor_post = $id_mentor_post[0];
								 ?>
								
								<span>Ментор:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(24); ?>"><?php echo get_the_title($id_mentor_post ); ?></a>

							</div>
							<div class="junit-card-content__blogger">
								<?php
									$posts = get_field('bloger');
									if ($posts) { ?>
									    <?php foreach($posts as $post) { setup_postdata($post); ?>
								
											<span>Блогер:&nbsp;&nbsp;</span><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a>
											<a target="_blank" href="<?php echo get_post_meta( get_the_ID(), 'youtube', true ); ?>">&nbsp;<i class="fa fa-youtube-play"></i></a>
									<?php } ?>

									<?php wp_reset_postdata();?>
								<?php } ?>
							</div>				
						</div>
					</div>
					<div class="junit-card__about">
						<div class="junit-card__about-text">

						<?php echo $the_content; ?>
						</div>
						<p class="login-descr">Чтобы оставить свой голос, пожалуйста <a href="#">войдите</a> на сайт или <a href="#">зарегистрируйтесь</a>.</p>
					</div>
				</div>
			<?php endwhile; ?>
				<div class="pagination">
				<?php // пагинация для произвольного запроса
					$big = 999999999; // уникальное число

					echo paginate_links( array(
						'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'  => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total'   => $query->max_num_pages,
						'prev_next' => true,
						'show_all'  => false,
						'end_size' => 1,
						'mid_size' => 1,
						'prev_text' => __('<i class="fa fa-caret-square-o-left" aria-hidden="true"></i>'),
						'next_text' => __('<i class="fa fa-caret-square-o-right" aria-hidden="true"></i>'),

					) );
				?>
			</div>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
		</div>
	</div>

</div>
<?php 	get_footer(); ?>