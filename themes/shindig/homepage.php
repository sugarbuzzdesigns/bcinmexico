<?php
// Template Name: Home Page
/**
 *
 * @package progression
 * @since progression 1.0
 */

get_header(); ?>

	<?php if(get_post_meta($post->ID, 'progression_slider', true)): ?>
			<div id="pro-home-slider"><?php echo apply_filters('the_content', get_post_meta($post->ID, 'progression_slider', true)); ?></div>
		</header>
	<?php else: ?>
		</header>
		<div id="page-title" style="display: none;"><div class="width-container"><h1><?php the_title(); ?></h1></div></div><!-- close #page-title -->
	<?php endif; ?>


<div class="clearfix"></div>
	<div id="pyre_homepage_media-widget-product-feat-2" class="widget home-widget pyre_homepage_media-product-feat">
		<div class="pyre_homepage_media-widget-product-feat-2  homepage-widget-blog" style="background-color:#f2f2f4;">
			<div class="width-container">
				<h1 class="home-widget">ABOUT</h1>
				<div class="main-text-widgetpro">
					<div>
						<p>Meet up with our favorite Musician Brian Collins!
						Join us for 3 great days of Music, Food, Friends &amp; Fun!
						Hang out in an intimate tropical setting for 3 great events.
						It may be freezing back home,
						but you can escape and enjoy the sunshine.
						Hit the beaches and discover Cozumel all day,
						Then meet up for great Music and Fiestas all night!
						Bienvenidos Amigos!</p>
					</div>
					<div>
						<h2>BRIAN COLLINS</h2>
						<p>Hailing from the music hotbed of West Georgia, Brian’s hardworking nature has landed him opening slots for reputable artists in every genre. His debut single "Never Really Left" led Brian to be named an ‘Artist to Watch' by CMA, Billboard and CMT. Brian claimed the title of highest independent charting artist on the MusicRow Country Breakout Chart with his uplifting sophomore Top 10 single “Shine A Little Love” which celebrated national media recognition and went No. 1 on CMT's Pure 12-Pack Countdown for seven weeks in a row! Brian commemorated this success by launching his very own music festival (Shine A Little Love Fest 2015 and 2016) in Florida’s 30a and participating in the 49th and 50th Annual CMA Awards. Brian has performed his current Top 20 single, “Healing Highway” on eight affiliate TV stations across the country, including a cameo on FX Networks’ Archer,while on a nationwide tour as it continues to rise up the charts.</p>
						<p>For more information on Brian Collins visit <a href="http://www.briancollinsmusic.com/">www.BrianCollinsMusic.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php while(have_posts()): the_post(); ?>
	<?php if($post->post_content=="") : ?><?php else : ?>
	<div id="main">
		<div id="homepage-content-container">
		<div class="width-container">
			<?php the_content(); ?>
			<div class='clearfix'></div>
		</div><!-- close  .width-container -->
		</div>
	</div><!-- close  #main -->
	<?php endif; ?>
	<?php endwhile; ?>

<?php get_footer(); ?>