<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-4">
				<ul class="f-menu">
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				
				<ul class="f-menu">
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
				</ul>

			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				
				<ul class="f-menu">
					<li><a href="#">О проекте</a></li>
					<li><a href="#">О проекте</a></li>
				</ul>

			</div>
			<div class="col-md-2 col-sm-6 col-xs-5">
				
				<div class="contacts-phone">
					<h6>Телефоны для справок:</h6>
					<a href="tel:+375-33-333-33-33">+375-333-33-33</a>
					<a href="tel:+375-33-333-33-33">+375-333-33-33</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-7">
				<div class="f-social  to-right">
					<ul class="social-links social-links_white">
						<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
					<div class="f-email"><a href="mailto:mail@bang-show.by">mail@bang-show.by</a></div>
				</div>

				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul class="registration">
						<li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Вход</a></li>
						<li><a href="#"><i class="fa fa-circle" aria-hidden="true"></i>Регистрация</a></li>
					</ul>
			</div>
		</div>
	</div>
	<div class="copyright">
		&copy;&nbsp;&nbsp;&nbsp;<a href="/">bang-show.by</a>&nbsp;&nbsp;&nbsp;<span>Все права защищены</span>
	</div>
</div>


<div class="preloader">
	<!-- <h2>Bang Show</h2> -->
	<div class="preloader_dots">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>	
</div>


<div class="mobile-menu-popup-wrapp">

	<?php 
	$args = array(
		'theme_location' => 'menu-1',
		'menu' => '',
		'container' => 'div',
		'container_class' => '',
		'container_id' => '',
		'menu_class' => 'nav-menu',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth' => 1,
		'walker' => ''
	);

	wp_nav_menu( $args ); ?>
	
	<a href="#" class="mobile-menu-close-toogle mobile-menu-close"><i class="fa fa-close"></i></a>
</div>
	
	<?php wp_footer(); ?>

</body>
</html>
