<?php

get_header(); ?>
	<div class="top-shadow"></div>

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url('<?php the_field('slider_image_#1'); ?>');">
			<div class="container">
				<div class="row slider-text align-items-center justify-content-center">
					<div class="col-lg-7 text-center col-sm-12 element-animate">
						<div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
						<h1 class="mb-4"><span>We Are Industrial Company</span></h1>
						<p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url('<?php the_field('slider_image_#2'); ?>');">
			<div class="container">
				<div class="row slider-text align-items-center justify-content-center">
					<div class="col-lg-7 text-center col-sm-12 element-animate">
						<div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
						<h1><span>Create, Enhance and Sustain</span></h1>
						<p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>

		</div>

	</section>


<div class="container-fluid">
	<?php
	the_post();
	the_content();
	?>
</div>
<section class="section blog">
	<div class="container">

		<div class="row justify-content-center mb-5 element-animate">
			<div class="col-md-8 text-center">
				<h2 class=" heading mb-4">Blog Posts</h2>
				<p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
		</div>

		<div class="row">

			<?php

			$args = array(
				'posts_per_page' => 4
			,   'post_type' => post
			,   'suppress_filters' => true
			,   'order' => "DESC"
			);

			$query = new WP_Query( $args );
			if( $query->have_posts() ):
				while ( $query->have_posts() ): $query->the_post();
					?>
					<div class="col-md-6 media mb-4 d-md-flex d-block element-animate">
						<a href="<?php the_permalink()?>" class="mr-5"><img src="<?php echo get_the_post_thumbnail_url()?>" alt="
" class="img-fluid"></a>
						<div class="media-body">
							<span class="post-meta"><?php echo get_post_time()?></span>
							<h3 class="mt-2 text-black"><a href="<?php the_permalink()?>">Separated they live in Bookmarksgrove right</a></h3>
							<p><a href="<?php the_permalink()?>" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
						</div>
					</div>
				<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>



</body>
</html>