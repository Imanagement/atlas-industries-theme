<?php
/**
* Template Name: Blog

*/

 get_header(); ?>

<section class="section blog">
    <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-8 text-center">
                <h2 class=" heading mb-4">Our Latest Blog Posts</h2>
                <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array (
               'post_type' => post
            );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ):
                    while ( $query->have_posts() ): $query->the_post();
            ?>
                        <div class="col-md-6">
                            <div class="media mb-4 d-md-flex d-block element-animate">
                                <a href="<?php echo get_permalink() ?>" class="mr-5"><img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="img-fluid"></a>
                                <div class="media-body">
                                    <span class="post-meta"><?php the_time() ?></span>
                                    <h3 class="mt-2 text-black"><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
                                    <p><a href="<?php echo get_permalink() ?>" class="readmore">Read More <span class="ion-android-arrow-dropright-circle"></span></a></p>
                                </div>
                            </div>
                        </div>
            <?php
                    endwhile;
                endif;
            ?>



        </div>
    </div>
</section>

<?php get_footer() ;?>
</body>
</html>