<?php /*
	Template Name: Шаблон страницы Контакты

*/?>
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
		<div class="contacts">
			<div class="contacts__phone"><i class="fa fa-phone"></i>
				<?php global $bangshow_settings; ?>
				<a href="tel:<?php echo $bangshow_settings['phone-1']; ?>"><?php echo $bangshow_settings['phone-1']; ?>
				</a><br>
				<a href="tel:<?php echo $bangshow_settings['phone-2']; ?>"><?php echo $bangshow_settings['phone-2']; ?>
				</a>
			</div>
			<div class="contacts__address">
				<i class="fa fa-map-marker"></i>
				<?php echo $bangshow_settings['adress']; ?>
			</div>
			<div class="contacts__email"><i class="fa fa-envelope"></i>
				<a href="mailto:<?php echo $bangshow_settings['email']; ?>"><?php echo $bangshow_settings['email']; ?></a>
			</div>
		</div>
		<div class="map">
			<nav>
				<ul class="social-links to-right">
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
			</nav>	
			<div id="map"></div>
		</div>
		
	</div>

</div>
<?php get_footer(); ?>