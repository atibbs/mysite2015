<?php get_header(); ?>


<!-- <section class="current-work">
	<div class="row">
		<div class="medium-6 columns">
			<h2>Currently</h2>
			<h3>Senior Interface Designer <span>at</span> <a href="http://rallygroup.com" target="_blank">Rally</a></h3>
		</div>
		<div class="medium-6 columns">
			<h2>Working on</h2>
			<h3>New Speakman.com</h3>
			<p>Lead Front End Developer, Lead UX Designer</p>
		</div>
	</div>
	
</section> -->

<section class="introduction">
	<div class="row">
		<div class="medium-12 columns">
			<h2>Hello</h2>
			<p>I'm a UI designer and developer from Portland, OR.</p>
		</div>
	</div>
</section>

<section id="portfolio" class="portfolio-section">

			<?php 
				$args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
			 ?>

			 <div class="row">
			 <div class="medium-7 columns">
			 	<h2>Portfolio</h2>
				 <ul class="portfolio">
				
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<li>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<h4><?php the_title(); ?></h4>
						</a>
					</li>

				<?php endwhile; ?>

				</ul>
			</div>
		<div class="medium-4 columns">
			<h2>Past Projects</h2>
			<ul class="projects">
				<li> 
					<h3><a href="http://travelportland.com" target="_blank">Travel Portland <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer, UX Designer</p>
				</li>
				<li>
					<h3><a href="http://travelportland.com/now" target="_blank">Portland is Happening Now <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer, UX Designer</p>
				</li>
				<li>
					<h3><a href="http://portlandopera.org" target="_blank">Portland Opera <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer, Lead UX Designer</p>
				</li>
				<li>
					<h3><a href="http://galois.com" target="_blank">Galois <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer, Lead UX Designer</p>
				</li>
				<li>
					<h3><a href="http://pica.org" target="_blank">PICA <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer</p>
				</li>
				<li>
					<h3><a href="http://pacifichorticulture.org" target="_blank">Pacific Horticulture Society <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer</p>
				</li>
				<li>
					<h3><a href="http://switchyardcreative.com" target="_blank">Switchyard Creative <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer, Lead Designer</p>
				</li>
				<li>
					<h3><a href="http://designspeaks.org/" target="_blank">Design Speaks <i class="fa fa-external-link"></i></a></h3>
					<p>The Developer &amp; Designer</p>
				</li>
				<li>
					<h3><a href="http://cupcakejones.net/" target="_blank">Cupcake Jones <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer</p>
				</li>
				<li>
					<h3><a href="http://voiceboxpdx.com" target="_blank">Voicebox Karaoke <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Front End Developer</p>
				</li>
				<li>
					<h3><a href="http://crackerjackd.com" target="_blank">Cracker Jack'D <i class="fa fa-external-link"></i></a></h3>
					<p>Lead Developer, Lead UX Designer</p>
				</li>
<!-- 				<li>
	<h3><a href="http://bydesignlegal.com/" target="_blank">By Design Legal Graphics <i class="fa fa-external-link"></i></a></h3>
	<p>Lead UX Designer, Lead Designer</p>
</li>
<li>
	<h3><a href="http://zidell.com/the-yards/" target="_blank">Zidell <i class="fa fa-external-link"></i></a></h3>
	<p>Lead Front End Developer</p>
</li> -->
			</ul>
			
		</div>
</div>

</section>

<section id="contact" class="contact-section">
	<div class="row">
		<div class="medium-12 columns">
			<h2>Say "hello"</h2>
			<ul class="contact-links">
					<li><a href="mailto:tibbs.andrew@gmail.com" title="Email me">Email me <i class="fa fa-angle-right"></i></a></li>
					<li><a href="https://twitter.com/tibbspdx" title="Twitter" target="_blank">Follow me <i class="fa fa-angle-right"></i></a></li>
					<li><a href="https://www.linkedin.com/in/andrewtibbs" title="Linkedin" target="_blank">Connect <i class="fa fa-angle-right"></i></a></li>
				</ul>
		</div>
	</div>
</section>
<!-- 
<section class="photography">

			<?php 
				// $args = array( 'post_type' => 'photo', 'posts_per_page' => 10 );
				// $loop = new WP_Query( $args );
			 ?>
			 <?php // ul here... ?>
				<?php 
					// while ( $loop->have_posts() ) : $loop->the_post(); 
				?>

			<?php // li here... the_permalink(), the_title(), the_post_thumbnail(); ?>

				<?php 
					// endwhile; 
				?>

</section> -->




<?php get_footer(); ?>
