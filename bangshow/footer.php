<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-4">
				<?php dynamic_sidebar('footer-1' ); ?>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				<?php dynamic_sidebar('footer-2' ); ?>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-4">
				<?php dynamic_sidebar('footer-3' ); ?>
			</div>
			<div class="col-md-2 col-sm-6 col-xs-5">
				
				<div class="contacts-phone">
					<h6>Телефоны для справок:</h6>
					<?php global $bangshow_settings; ?>
					<a href="tel:<?php echo $bangshow_settings['phone-1']; ?>"><?php echo $bangshow_settings['phone-1']; ?></a>
					<a href="tel:<?php echo $bangshow_settings['phone-2']; ?>"><?php echo $bangshow_settings['phone-2']; ?></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-7">
				<div class="f-social  to-right">
					<ul class="social-links social-links_white">
						<?php if($bangshow_settings['vk']): ?>
							<li>
								<a target="_blank" href="<?php echo $bangshow_settings['vk']; ?>">
									<i class="fa fa-vk" aria-hidden="true"></i>
								</a>
							</li>
						<?php endif; ?>
						<?php if($bangshow_settings['fb']): ?>
							<li>
								<a target="_blank" href="<?php echo $bangshow_settings['fb']; ?>">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
						<?php endif; ?>
						<?php if($bangshow_settings['tw']): ?>
							<li>
								<a target="_blank" href="<?php echo $bangshow_settings['tw']; ?>">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
						<?php endif; ?>
						<?php if($bangshow_settings['instagram']): ?>
							<li>
								<a target="_blank" href="<?php echo $bangshow_settings['instagram']; ?>">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
						<?php endif; ?>
						<?php if($bangshow_settings['youtube']): ?>
							<li>
								<a target="_blank" href="<?php echo $bangshow_settings['youtube']; ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i>
								</a>
							</li>
						<?php endif; ?>
					</ul>
					<div class="f-email"><a href="<?php echo $bangshow_settings['email']; ?>"><?php echo $bangshow_settings['email']; ?></a></div>
				</div>

				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<?php 
				$args = array(
					'theme_location' => 'registration',
					'menu' => '',
					'container' => 'div',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'registration',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '<i class="fa fa-circle" aria-hidden="true"></i>',
					'link_after' => '',
					'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth' => 1,
					'walker' => ''
				);
			
				wp_nav_menu( $args ); ?>
			</div>
		</div>
	</div>
	<div class="copyright">
		&copy;&nbsp;&nbsp;&nbsp;<a href="/">bang-show.by</a>&nbsp;&nbsp;&nbsp;<span>Все права защищены</span>
	</div>
</div>


<div class="preloader">
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

	<?php 
	$args = array(
		'theme_location' => 'registration',
		'menu' => '',
		'container' => 'div',
		'container_class' => '',
		'container_id' => '',
		'menu_class' => 'registration',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '<i class="fa fa-circle" aria-hidden="true"></i>',
		'link_after' => '',
		'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth' => 1,
		'walker' => ''
	);

	wp_nav_menu( $args ); ?>
	<a href="#" class="mobile-menu-close-toogle mobile-menu-close"><i class="fa fa-close"></i></a>
</div>
	
	<?php wp_footer(); ?>
	<?php if( is_page(162) ): ?>
		<script>
			function initMap() {
				var uluru = {lat: 53.9050563, lng: 27.5371577};
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 16,
				  center: uluru,
				  scrollwheel: false,
				  styles: [{"featureType":"all","elementType":"geometry","stylers":[{"color":"#e5ce63"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi.attraction","elementType":"labels.text.stroke","stylers":[{"saturation":"49"},{"visibility":"simplified"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20}]}]
				});
				var marker = new google.maps.Marker({
				  position: uluru,
				  map: map,
				  icon: '<?php echo get_template_directory_uri(); ?>/img/map-marker.png'
				});
			}
		</script>
		<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsKvdyprBMDqXAGrQUdUqA2Wl_LVXI5Sw&callback=initMap&hl=ru"></script>
	<?php endif; ?>
</body>
</html>
