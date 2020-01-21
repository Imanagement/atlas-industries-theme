<section class="section">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-4">Meet The Team</h2>
                <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
            </div>
        </div>
        <div class="row">
            <?php $args = array (
                'numberposts' => 4,
                'post_type' => members,
                'suppress_filters' => true,
                'order' => 'ASC'
            );
            $posts = get_posts( $args );
            foreach ($posts as $post){
                setup_postdata($post); ?>
            <div class="col-lg-3">
                <div class="media d-block media-custom text-center">
                    <a href="javascript:void(0)" style="padding:0"><img src="<?php echo get_the_post_thumbnail_url()  ?>"  alt="Image Placeholder" class="img-fluid"></a>
                    <div class="media-body">
                        <h3 class="mt-0 text-black"><?php the_title() ?></h3>
                    </div>
                </div>
            </div>

          <?php } ?>

        </div>

    </div>
</section>