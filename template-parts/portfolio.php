<section class="section border-t pb-0">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
                <h2 class=" heading mb-4">Our Latest Projects</h2>
                <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <?php $args = array (
                'numberposts' => 8,
                'post_type' => portfolio,
                'suppress_filters' => true,
                'order' => 'ASC'
            );
            $posts = get_posts( $args );
            foreach ($posts as $post){
            setup_postdata($post); ?>
            <div class="col-md-4 element-animate">
                <a href="<?php echo get_permalink(); ?>" class="link-thumbnail" style="padding:0">
                    <h3><?php the_title(); ?></h3>
                    <span class="ion-plus icon"></span>
                    <img src="<?php echo get_the_post_thumbnail_url()?>" alt="Image" class="img-fluid">
                </a>
            </div>
            <?php } ?>

        </div>

    </div>
</section>