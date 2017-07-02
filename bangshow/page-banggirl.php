<?php /* Template Name: Шаблон Bang Girl */ ?>

<?php get_header(); ?>
<div class="main">
	<div class="list">
		
		<div class="list-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="list-title">Bang Girl</h2>
					</div>
				</div>
			</div>
		</div>
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
		<?php 
			$args = array(
				'posts_per_page' => 5,
				'post_type' => 'bang-girl',
				'r_sortby'   => 'highest_rated',
				'r_orderby'     => 'desc'
			);

			$query = new WP_Query( $args );

		?>
		<div class="bang-girl" id="bang-girl">
			<?php 
				if ( $query->have_posts()  ):
					while ( $query->have_posts() ):
						$query->the_post();
			?>

			<div class="bang-girl__item">
				<div class="bang-girl__gallery">
					<div class="bang-girl__id">№&nbsp;<span><?php if(get_field('id')){echo get_field('id');}?></span></div>
					<div class="fotorama"
						data-nav="thumbs"
						data-allowfullscreen="native"
						data-width="100%"
						data-ratio="265/170"
						data-minwidth="265"
						data-maxwidth="320"
						data-minheight="170"
						data-fit="contain"
						data-maxheight="100%"
						data-thumbfit="cover"
						data-loop="true"
						data-transition="crossfade">

						<?php 

						$images = acf_photo_gallery( 'photos', get_the_id() );

						if( count($images) ): ?>
						    <?php foreach( $images as $image ): ?>


						<?php 
							$id = $image['id']; // The attachment id of the media
							$title = $image['title']; //The title
							$caption= $image['caption']; //The caption
							$full_image_url= $image['full_image_url']; //Full size image url
							$medium_image_url = acf_photo_gallery_resize_image($full_image_url, 320, 205); //Resized size to 262px width by 160px height image url
							$small_image_url = acf_photo_gallery_resize_image($full_image_url, 64, 64);
							$thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
							$url= $image['url']; //Goto any link when clicked
							$target= $image['target']; //Open normal or new tab


						?>




						       	<img src="<?php echo $medium_image_url; ?>"
						       		data-thumb="<?php echo $small_image_url; ?>"
						       		data-full="<?php echo $full_image_url; ?>"> 	
						     <?php endforeach; ?>
						<?php endif; ?>

						<!-- <a href="img/girl.jpg" data-thumb="img/girl.jpg"></a>
						<a href="img/roshe.png" data-thumb="img/roshe.png"></a>
						<a href="img/roshe.png" data-thumb="img/roshe.png"></a>

						<a href="img/roshe.png" data-thumb="img/roshe.png"></a> -->
					</div>

					<p class="login-descr">Чтобы оставить свой голос, пожалуйста <a href="#">войдите</a> на сайт или <a href="#">зарегистрируйтесь</a>.</p>
				</div>
				<div class="bang-girl__descr">
					<h4><?php the_title(); ?></h4>
					<div class="bang-show-raiting bang-girl-raiting">
						<div class="bang-show-raiting__title">Рейтинг:</div>

						<?php $id = get_the_id();?>
						<?php echo do_shortcode( '[ratings id="$id"]' ); ?>

					</div>

					<ul class="bang-girl__about">
						<?php if(get_field('school')): ?>
							<li><span>Учится:&nbsp;</span><?php echo get_field('school'); ?></li>
						<?php endif; ?>

						<?php if(get_field('work')): ?>
							<li><span>Работает:&nbsp;</span><?php echo get_field('work'); ?></li>
						<?php endif; ?>

						<?php if(get_field('hobby')): ?>
							<li><span>Интересы:&nbsp;</span><?php echo get_field('hobby'); ?></li>
						<?php endif; ?>
					</ul>
				</div>

				<?php if( get_the_content() ): ?>
					<div class="bang-girl__prank">
						<h6>Шутка</h6>
						<div class="bang-girl__prank-text">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endif; ?>

			</div>
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
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata();?>
		</div>
	</div>

</div>
<?php 	get_footer(); ?>