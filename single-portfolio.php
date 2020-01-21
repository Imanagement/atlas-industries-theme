

<?php get_header(); ?>

</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-top: -150px;text-align: center;">
                <p><img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Image" class="img-fluid"></p>
            </div>
        </div>
        <div class="row justify-content-center">

        <?php the_post(); ?>
        <?php the_content(); ?>
        </div>
            <div class="row justify-content-center">
        <p><a href="<?php the_field('link_to_the_project_website')?>" class="btn btn-primary py-3 px-3">Visit Website</a></p>
        </div>
    </div>

</section>

<?php get_footer(); ?>

</body>
</html>