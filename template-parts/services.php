<section class="section bg-light">
    <div class="container">
        <div class="row">
            <?php $args = array (
                'numberposts' => 3,
                'post_type' => services,
                'suppress_filters' => true,
                'order' => 'ASC'
            );
            $posts = get_posts( $args );
            foreach ($posts as $post){
            setup_postdata($post); ?>
            <div class="col-md-6 col-lg-4 element-animate fadeInUp element-animated">
                <div class="media block-6 d-block text-center">
                    <div class="icon mb-3"><span class="<?php the_field('icon')?> text-primary"></span></div>
                    <div class="media-body">
                        <h3 class="heading"><?php the_title() ?></h3>
                        <p><?php the_excerpt();?></p>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>
</section>