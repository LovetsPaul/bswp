<?php /* Template Name: Шаблон Главной */ ?>

<?php get_header(); ?>

<div class="main">
	<div class="list">
		<div class="h-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Афиша</h2>
						<h3 class="with-line">О проекте</h3>
						<div class="h-about__text">
							<p>Мы рады сообщить вам реалистичный загнутый уголок страницы. Вам понадобится несколько простых техник деформации. Вы сможете создавать загнутые уголки для бумажных страниц, выбирать угол, размер изгиба и градиент.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="h-kasting s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>20 июля</h2>
						<h3 class="with-line">Кастинг</h3>
						<div class="h-kasting__text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ullam itaque illum atque cumque, eaque, voluptatibus sit dignissimos saepe maxime quis, optio iusto neque asperiores veniam soluta molestias repellendus suscipit.</p>
							<a href="#" class="action-button">Записаться на кастинг</a>
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
								<h4><a href="#">Вадим Галыгин</a></h4>
								<div class="h-juri-list__item-descr">Комик, шоумен, продюссер <br>Аудитория 342 тыс.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="#">Макс Корж</a></h4>
								<div class="h-juri-list__item-descr">Певец, <br>Аудитория 377 тыс.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="#">Александр Солодуха</a></h4>
								<div class="h-juri-list__item-descr">Певец, звезда <br>Аудитория 5 млн.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="#">Екатерина Иванчикова</a></h4>
								<div class="h-juri-list__item-descr">Певица, вокалистка группы IOWA <br>Аудитория 5 млн.</div>
							</li>
							<li class="h-juri-list__item">
								<h4><a href="#">Натали Роше</a></h4>
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
					<div class="col-md-6">
						<div class="h-veduschi wow slideInLeft">
							<div class="h-veduschi__photo"><img class="lazy" data-original="img/anna-bond.jpg" alt="Галыгин"></div>
							<div class="h-veduschi__content">
								<h4 class="h-veduschi__content-name"><a href="#">Анна Бонд</a></h4>
							<div class="h-veduschi__content-descr">Певец, звезда <br>Аудитория 5млн. человек</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="h-veduschi wow slideInRight">
							<div class="h-veduschi__photo"><img class="lazy" data-original="img/andrej-bond.jpg" alt="Галыгин"></div>
							<div class="h-veduschi__content">
								<h4 class="h-veduschi__content-name"><a href="#">Андрей Бонд</a></h4>
							<div class="h-veduschi__content-descr">Певец, звезда <br>Аудитория 5млн. человек</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="h-special-guests s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="with-line">Специальные гости</h3>
					</div>
				</div>
				<div class="row">
					<div class="h-guest-card-wrapp  owl-carousel">
						<div class="col-md-4 col-sm-6 col-xs-12 ">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="h-guest-card">
								<div class="h-guest-card__photo"><img class="lazy" data-original="img/guest.jpg" alt="Иванов Иван"></div>
								<div class="h-guest-card-content">
									<h4 class="h-guest-card-content__title">Иванов Иванович</h4>
									<div class="h-guest-card-content__descr">Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.<br>Lorem ipsum dolor sit amet.</div>
								</div>
							</div>
						</div>

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

						<div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-6">
							<div class="h-junity__list">
								<ol>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
								</ol>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="h-junity__list ol-start-14">
								<ol>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
									<li><a href="#">Название команды</a></li>
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
								<p>20 июля в «Мулен руж» пройдёт ... that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normalmaking i.</p>
								<a href="#" class="action-button">Записаться на кастинг</a>
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
				<div class="h-bloggers-item wow fadeInUp">
					<div class="h-bloggers-item__image"><img src="" alt="" data-original="img/galygin_s.jpg" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
					<h5><a href="#">Дмитрий Ермузевич</a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count">600</div>
						<div class="h-bloggers-item-subscr__descr">тыс. подписчиков</div>
					</div>
				</div>
				<div class="h-bloggers-item wow fadeInUp" data-wow-delay="0.1s">
					<div class="h-bloggers-item__image"><img src="" alt="" data-original="img/galygin_s.jpg" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
					<h5><a href="#">Влад Бумага</a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count">342</div>
						<div class="h-bloggers-item-subscr__descr">тыс. подписчиков</div>
					</div>
				</div>
				<div class="h-bloggers-item wow fadeInUp" data-wow-delay="0.2s">
					<div class="h-bloggers-item__image"><img src="" alt="" data-original="img/galygin_s.jpg" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
					<h5><a href="#">Максим Пушкин</a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count">144</div>
						<div class="h-bloggers-item-subscr__descr">тыс. подписчиков</div>
					</div>
				</div>
				<div class="h-bloggers-item wow fadeInUp" data-wow-delay="0.3s">
					<div class="h-bloggers-item__image"><img src="" alt="" data-original="img/galygin_s.jpg" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
					<h5><a href="#">Юлия годунова</a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count">278</div>
						<div class="h-bloggers-item-subscr__descr">тыс. подписчиков</div>
					</div>
				</div>
				<div class="h-bloggers-item wow fadeInUp" data-wow-delay="0.4s">
					<div class="h-bloggers-item__image"><img src="" alt="" data-original="img/galygin_s.jpg" class="lazy"></div>
					<nav>
						<ul class="social-links social-links_orange social-links_small">
							<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
					<h5><a href="#">Александр Солодуха</a></h5>
					<div class="h-bloggers-item-subscr">
						<div class="h-bloggers-item-subscr__count">500</div>
						<div class="h-bloggers-item-subscr__descr">тыс. подписчиков</div>
					</div>
				</div>
			</div>
		</div>

		<div class="h-bang-music chess-row s-light">
				<div class="chess-row__img">
					<a href="bang-music.html"><img class="lazy" data-original="img/89.jpg" alt="Bang Music"></a>
				</div>
				<div class="chess-row__text">
					<h3 class="with-line">Bang Music</h3>
					<p>Мы рады сообщить вам реалистичный загнутый уголок страницы. Вам понадобится несколько простых техник деформации. Вы сможете создавать загнутые уголки для бумажных страниц, выбирать угол, размер изгиба и градиент.</p>
				</div>
		</div>
		

		<div class="h-bang-girl s-light">
			<div class="chess-row chess-row_reverse s-light">
				<div class="chess-row__img">
					<div class="h-girl-container">
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
								<div class="h-bang-girl-raiting">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</a>
							
						</div>
						<div class="h-bang-girl__item" style="background-image: url('img/girl.jpg')">
							<a href="bang-girl.html#bang-girl" class="small">
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
					<p>Мы рады сообщить вам реалистичный загнутый уголок страницы. Вам понадобится несколько простых техник деформации. Вы сможете создавать загнутые уголки для бумажных страниц, выбирать угол, размер изгиба и градиент.</p>
				</div>
			</div>
		</div>
		
		<div class="h-bottom s-light">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="with-line">Спасибо текст</h3>
						<p>Мы рады сообщить вам реалистичный загнутый уголок страницы. Вам понадобится несколько простых техник деформации. Вы сможете создавать загнутые уголки для бумажных страниц, выбирать угол, размер изгиба и градиент.</p>
						<p>Мы рады сообщить вам реалистичный загнутый уголок страницы. Вам понадобится несколько простых техник деформации. Вы сможете создавать загнутые уголки для бумажных страниц, выбирать угол, размер изгиба и градиент.</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</div>

<?php 	get_footer(); ?>