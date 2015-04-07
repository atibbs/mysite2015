<?php include('header.php'); ?>


		<section class="front-banner">
			<p>I design and build responsive interfaces.</p>
		</section>
		<div class="row">
			<div class="medium-12 columns">
				<ul class="links">
					<li><a href="https://twitter.com/tibbspdx" title="Twitter" target="_blank"><i class="fa fa-twitter"></i>twitter</a></li>
					<li><a href="https://www.linkedin.com/in/andrewtibbs" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i>linkedin</a></li>
					<li><a href="mailto:tibbs.andrew@gmail.com" title="Email me" target="_blank"><i class="fa fa-envelope"></i>email</a></li>
					<li class="right"><a href="" title="Download Resume" target="_blank"><i class="fa fa-save"></i>resume</a></li>
				</ul>
			</div>
		</div>



<section class="current-work">
	<div class="row">
		<div class="medium-6 columns">
			<h2>Currently</h2>
			<h3>Senior Interface Designer <span>at</span> <a href="http://rallygroup.com" target="_blank">Rally</a></h3>
		</div>
		<div class="medium-6 columns">
			<h2>Working on</h2>
			<h3>Unannounced Ecommerce Project</h3>
			<p>Lead Front End Developer, Lead UX Designer</p>
		</div>
	</div>
	
</section>

<section class="previous-work">
	<div class="row">
		<div class="medium-12 columns">
			<h2>Previous Projects</h2>
			<ul class="medium-block-grid-2">
				<li>
					<h3><a href="http://travelportland.com" target="_blank">Travel Portland</a></h3>
					<p>Lead Front End Developer, UX Designer</p>
				</li>
				<li>
					<h3><a href="http://portlandopera.org" target="_blank">Portland Opera</a></h3>
					<p>Lead Front End Developer, Lead UX Designer</p>
				</li>
				<li>
					<h3><a href="http://galois.com" target="_blank">Galois</a></h3>
					<p>Lead Front End Developer, Lead UX Designer</p>
				</li>
				<li>
					<h3><a href="http://pica.org" target="_blank">PICA</a></h3>
					<p>Lead Front End Developer</p>
				</li>
				<li>
					<h3><a href="http://switchyardcreative.com" target="_blank">Switchyard Creative</a></h3>
					<p>Lead Front End Developer, Lead Designer</p>
				</li>
			</ul>
			
		</div>
	</div>
	
</section>

<section class="photography">
	<div class="row">
		<div class="medium-12 columns">
			
			<h2><i class="fa fa-camera-retro"></i></h2>
			<?php 
				$args = array( 'post_type' => 'photo', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
			 ?>
			<ul class="medium-block-grid-2">
				<?php 
					while ( $loop->have_posts() ) : $loop->the_post(); 
				?>
				<li>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</li>
				<?php 
					endwhile; 
				?>
			</ul>
			
		</div>
	</div>
	
</section>




<?php get_footer(); ?>
