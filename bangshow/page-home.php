<?php /* Template Name: Шаблон Главной */ ?>

<?php get_header(); ?>
<?php
	global $bangshow_settings;

?>
<div class="main">
	<div class="list">
		<div class="h-about s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<?php

						$query = new WP_Query( 'page_id=225' );

					?>
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();

					?>

						<h2>Афиша</h2>
						<h3 class="with-line">О проекте</h3>
						<div class="h-about__text">
							<p><?php the_content(); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="h-kasting s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<h2>1 августа</h2>
						<h3 class="with-line">Кастинг</h3>
						<div class="h-kasting__text">
							<p>Мы приглашаем всех КВНщиков, стендап-комиков, участников СТЭМов, победителй и участников проектов Рассмеши комика и ComedyBattle принять участие в кастинге, который состоится <strong>1 августа в малом зале К/З Минск (ул. Октябрьская,5).</strong></p>

<p><strong>Начало кастинга в 10.00</strong></p>

<p>Для записи необходимо отправить заявку на эл.адрес <strong>kasting@bangshow.by</strong></p>

<p><strong>В заявке необходимо указать:</strong> ФИО, возраст, жанр выступления, опыт участия в других юмористических передачах, номер телефона.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="h-juri">
			<div class="h-juri__photo-wrapp">
				<div class="container">
					<div class="row">
						<div class="h-juri__photo">
							<div class="col-md-12">
								<h3>Члены жюри Bang Show</h3>
								<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/juri.png" alt="Члены жюри Bang Show">
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="h-juri-list-wrapp s-light">
				<div class="container">
					<div class="row">
						<ul class="h-juri-list">
							<li class="h-juri-list__item">
								<h4><a href="<?php echo get_permalink(24); ?>">Вадим Галыгин</a></h4>
								<div class="h-juri-list__item-descr">Комик, шоумен, продюссер <br>Аудитория 342 тыс.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="<?php echo get_permalink(24); ?>">Макс Корж</a></h4>
								<div class="h-juri-list__item-descr">Певец, <br>Аудитория 377 тыс.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="<?php echo get_permalink(24); ?>">Александр Солодуха</a></h4>
								<div class="h-juri-list__item-descr">Певец, звезда <br>Аудитория 5 млн.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="<?php echo get_permalink(24); ?>">Екатерина Иванчикова</a></h4>
								<div class="h-juri-list__item-descr">Певица, вокалистка группы IOWA <br>Аудитория 5 млн.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="<?php echo get_permalink(24); ?>">Натали Роше</a></h4>
								<div class="h-juri-list__item-descr">Стилист, ТВ-ведущая <br>Аудитория 42,5 тыс.</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>

		<div class="h-veduschie">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3>Ведущие нашего шоу</h3>
					</div>
					<?php
						$args = array(
							'posts_per_page' => 25,
							'post_type' => 'veduschie',
						);

						$query = new WP_Query( $args );

					?>
					<?php 
						if ( $query->have_posts()  ):
							while ( $query->have_posts() ):
								$query->the_post();

					?>
					<?php 
						$image = get_field('photo', get_the_ID());
						$image_thumb = $image['sizes']['veduschie-sircle-photo'];
						$image_alt = $image['alt'];
					?>
						<div class="col-md-6">
							<div class="h-veduschi wow slideInUp">
								<div class="h-veduschi__photo"><img class="lazy" data-original="<?php echo $image_thumb ?>" alt="<?php echo $image_alt ?>"></div>
								<div class="h-veduschi__content">
									<h4 class="h-veduschi__content-name">
										<a href="<?php echo get_permalink(22); ?>"><?php the_title(); ?></a>
									</h4>
								<div class="h-veduschi__content-descr">
								<?php echo get_field('excerpt', get_the_ID()); ?> 
								<br>Аудитория 
								<?php echo get_field('auditory_num', get_the_ID()); ?>&nbsp;
								<?php echo get_field('auditory_text', get_the_ID()); ?></div>
								</div>
								
							</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</div>
			</div>
		</div>

		<div class="h-special-guests s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="with-line">Почётные гости</h3>
					</div>
				</div>
				<div class="row">

					<div class="h-guest-card-wrapp  owl-carousel">
					<?php 
							$args = array(
								'post_type' => 'quests',
								'posts_per_page' => 9,
							);

							$query = new WP_Query( $args );

						?>

						<?php 
							if ( $query->have_posts()):
								while ( $query->have_posts() ):
									$query->the_post();
								
						?>
						<?php 
							$photo       = get_field('photo', get_the_ID());
							$photo_thumb = $photo['sizes']['junit-card-photo'];
							$photo_alt   =  $photo['alt'];
						?>

						<div class="col-md-4 col-sm-6 col-xs-12 ">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="<?php echo $photo_thumb;?>" alt="<?php echo $photo_alt;?>"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">
										<a href="<?php echo get_permalink(237); ?>" class="h-guest-link">
											<?php the_title(); ?></a>
									
										</h4>
									<div class="h-guest-card-content__descr"><?php the_content();?></div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
						<?php endif; ?>

					<?php wp_reset_postdata();?>
		</div>
				</div>
			</div>
		</div>

		<div class="h-junity">
			
			<div class="container gradient-wrapp">
				<div class="row">

					<div class="h-junity-wrapp">
						<div class="col-md-6 col-md-push-3 col-sm-12">
							<div class="h-junity__image">
								<img class="lazy image-responsive" data-original="<?php echo get_template_directory_uri();?>/img/junity.png" alt="Юниты">
							</div>
						</div>
						<?php
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$args = array(
								'post_type' => 'junits',
								'posts_per_page' => 25,
								'r_sortby'   => 'highest_rated',
								'r_orderby'     => 'desc',
							);

							$query = new WP_Query( $args );


						?>
						<div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-6">
							<div class="h-junity__list">
							<!-- список с 1	 -->
								<ol>
									<?php 
										$cnt = 0;
										if ( $query->have_posts() ):
											while ( $query->have_posts()  && $cnt < 13):
												$query->the_post();
											
									?>
									<?php if($cnt < 13): ?>
										<li><a href="<?php echo get_permalink(67); ?>"><?php echo the_title(); ?></a></li>
										<?php $cnt++; ?>
											<?php endif; ?>
										<?php endwhile; ?>

								</ol>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="h-junity__list ol-start-14">
							<!-- Список с 14 -->
								<ol>
									<?php
										while ( $query->have_posts()):
											$query->the_post();
									?>
										<li><a href="<?php echo get_permalink(67); ?>"><?php echo the_title(); ?></a></li>

										<?php endwhile; ?>
									<?php endif; ?>
									<?php wp_reset_postdata();?>									
								</ol>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="h-junity-action-block s-light">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="h-junity-action-block__text">
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="h-bloggers">
			<div class="container">
				<div class="row col md-12">
					<h3>Информационная поддержка</h3>
				</div>
			</div>
			<div class="h-bloggers-list">
				<?php
					$args = array(
						'post_type' => 'blogers',
						'posts_per_page' => 25,
					);

					$query = new WP_Query( $args );

				?>

				<?php
					if($query->have_posts()):
						$cnt = 0;
					while ( $query->have_posts()):
						$query->the_post();
				?>
				<?php 
					$image = get_field('photo', get_the_ID());
					$image_thumb = $image['sizes']['bloger-sircle-photo'];
					$image_alt = $image['alt'];
				?>
				<div class="h-bloggers-item wow fadeInUp" data-wow-delay="0.<?php echo $cnt;?>s">
					<div class="h-bloggers-item__image"><img alt="<?php echo $image_alt; ?>" data-original="<?php echo $image_thumb; ?>" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
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
					<h5><a href="<?php echo get_permalink(72); ?>"><?php the_title(); ?></a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count"><?php echo get_field('subscriber', get_the_ID()); ?></div>
						<div class="h-bloggers-item-subscr__descr"><?php echo get_field('subscriber_text', get_the_ID()); ?></div>
					</div>
				</div>
					<?php $cnt++ ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<!-- devider -->
<div class="h-junity-action-block s-light">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="h-junity-action-block__text">
				<p></p>
			</div>
		</div>
	</div>
</div>
</div>
<!-- devider -->

		<div class="h-bang-music chess-row s-light">
				<div class="chess-row__img">
					<a href="<?php echo get_permalink(209); ?>"><img class="lazy" data-original="<?php echo get_template_directory_uri();?>/img/89.jpg" alt="Bang Music"></a>
				</div>
				<div class="chess-row__text">
					<h3 class="with-line">Bang Music</h3>
					<p>В каждом выпуске на сцене BangShow перед основными юмористическими сражениями вас будут радовать своим творчеством молодые самобытные, харизматичные музыкальные коллективы со своей индивидуальностью. Уверены, что вам понравится, то, что мы приготовили. Вас поразят и удивят таланты, которые наполняют наш город и нашу страну.</p>
					<p>Будем надеяться, что для многих из этих ребят сцена BangShowстанет начальной точкой перед восхождением на музыкальный Олимп.</p>
				</div>
		</div>
		

		<div class="h-bang-girl s-light">
			<div class="chess-row chess-row_reverse s-light">
				<div class="chess-row__img">
					<div class="h-girl-container">
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('<?php echo get_template_directory_uri();?>/img/girl.jpg')">
							<a href="<?php echo get_permalink(117); ?>" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						
					</div>
				</div>
				<div class="chess-row__text">
					<h3 class="with-line">Bang Girl</h3>
					<p>Изюминка вечера. На протяжении всего сезона параллельно юмористическому турниру мы проведем и небольшой конкурс красоты, где будем выбирать самых лучших BangGirl.</p>
					<p>Для девушек мы подготовили отдельный подарок. Победительница конкурса отправится на следующий вечер отдыхать на Канарские острова.</p>
				</div>
			</div>
		</div>
		
		<div class="h-bottom s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<h3 class="with-line">Спасибо</h3>
						<p>Мы хотим выразить благодарность юмористам, менторам, блогерам, музыкальным коллективам, девушкам, зрителям, светотехнику, диджею, smm-специалистам, разработчику сайта, операторам, режиссеру, телеканалк и идейным вдохновителям проекта.</p>
						<blockquote><strong>Спасибо за то, что вместе мы сделали лучшее шоу нашей страны!</strong></blockquote>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</div>

<?php 	get_footer(); ?>