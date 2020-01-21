
<?php get_header(); ?>

<section class="section blog element-animate">
    <div class="container">

        <div class="row justify-content-center mb-5 ">
            <div class="col-md-8 ">
                <h2 class=" heading mb-4"><?php the_title()?></h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                the_post();
                the_content(); ?>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
</body>
</html>