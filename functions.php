<?php


function register_my_menus(){
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
	        'footer-menu' => __('Footer Menu')
        )
    );
}
add_action( 'init', 'register_my_menus');



function theme_setup(){
    add_theme_support( 'custom-header' );

    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','theme_setup');


add_action('init', portfolio_post_type_init);
function portfolio_post_type_init(){
    register_post_type('portfolio', array(
        'labels'             => array(
            'name'               => 'Portfolio', // Основное название типа записи
            'singular_name'      => 'Portfolio', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new portfolio',
            'edit_item'          => 'Edit portfolio',
            'new_item'           => 'New portfolio',
            'view_item'          => 'View portfolio',
            'search_items'       => 'Find portfolio',
            'not_found'          => 'No portfolio found',
            'not_found_in_trash' => 'No portfolio found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Portfolio'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
        'menu_icon'          => 'dashicons-format-gallery',
        'exclude_from_search' => false,
    ) );
}

add_action('init', members_post_type_init);
function members_post_type_init(){
    register_post_type('members', array(
        'labels'             => array(
            'name'               => 'Members', // Основное название типа записи
            'singular_name'      => 'Member', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new member',
            'edit_item'          => 'Edit member',
            'new_item'           => 'New member',
            'view_item'          => 'View member',
            'search_items'       => 'Find member',
            'not_found'          => 'No members found',
            'not_found_in_trash' => 'No members found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Members'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
        'menu_icon'          => 'dashicons-businessperson',
        'exclude_from_search' => false,
    ) );
}

add_action('init', 'services_post_type_init');
function services_post_type_init(){
    register_post_type('services', array(
        'labels'             => array(
            'name'               => 'Services', // Основное название типа записи
            'singular_name'      => 'Service', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new service',
            'edit_item'          => 'Edit service',
            'new_item'           => 'New service',
            'view_item'          => 'View service',
            'search_items'       => 'Find service',
            'not_found'          => 'No services found',
            'not_found_in_trash' => 'No services found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Services'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
        'menu_icon'          => 'dashicons-format-aside',
        'exclude_from_search' => false,
    ) );
}

function testtheme_scripts() {
// Add custom fonts, used in the main stylesheet.

// Theme stylesheet.
wp_enqueue_style( 'testtheme-style', get_stylesheet_uri());

// Theme extra stylesheets.
wp_enqueue_style( 'testtheme-animate', get_template_directory_uri() . '/css/animate.css', false );

wp_enqueue_style( 'testtheme-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', false );

wp_enqueue_style( 'testtheme-jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', false );

wp_enqueue_style( 'testtheme-ionicons', get_template_directory_uri() . '/fonts/ionicons/css/ionicons.min.css', false );

wp_enqueue_style( 'testtheme-font-awesome', get_template_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css', false );

// Theme scripts
wp_enqueue_script( 'testtheme-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', false, 1.1, true);

wp_enqueue_script( 'testtheme-popper', get_template_directory_uri() . '/js/popper.min.js', false, 1.1, true);

wp_enqueue_script( 'testtheme-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, 1.1, true);

wp_enqueue_script( 'testtheme-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, 1.1, true);

wp_enqueue_script( 'testtheme-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, 1.1, true);

wp_enqueue_script( 'testtheme-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, 1.1, true);

// Theme main script
wp_enqueue_script( 'testtheme-main', get_template_directory_uri() . '/js/main.js', false, 1.1, true);


}
add_action( 'wp_enqueue_scripts', 'testtheme_scripts' );
add_shortcode('members_section', members_in_shortcode);
function members_in_shortcode($atts) {

    ob_start();

    $atts = shortcode_atts(
        array(
        'order' => "ASC"
        ,   'count' => "4"
        ,   'section_title' => "Meet The Team"
        ,   'section_description' => "Far far away, behind the word mountains, far from the countries Vokalia and
                                      Consonantia, there live the blind texts. Separated they live in Bookmarksgrove."
        ), $atts);

    $section_title = $atts['section_title'];
    $section_description = $atts['section_description'];

    $args = array (
        'posts_per_page' => $atts['count']
        ,   'post_type' => members
        ,   'suppress_filters' => true
        ,   'order' => $atts['order']
    );

    $my_wp_query = new WP_Query();
    $posts = $my_wp_query->query( $args );


    print "                                                            

<section class='section'>
    <div class='container'>
        <div class='row justify-content-center mb-5 element-animate'>
            <div class='col-md-8 text-center'>
                <h2 class='heading mb-4'>$section_title</h2>
                <p class='mb-5 lead'>$section_description</p>
            </div>
        </div>
        <div class='row'>
        ";

    foreach ($posts as $post){
            $page = $post->ID;
            $page_data = get_post($page);
            $thumbnail_uri = get_the_post_thumbnail_url($page);
            $title = $page_data -> post_title;
            setup_postdata($post);

            print "
<div class='col-lg-3'>
                <div class='media d-block media-custom text-center'>
                    <a href='javascript:void(0)' style='padding:0'><img src=$thumbnail_uri  alt='Image Placeholder' class='img-fluid'></a>
                    <div class='media-body'>
                        <h3 class='mt-0 text-black'>$title</h3>
                    </div>
                </div>
            </div>
            ";
        };

        print '
        </div>
    </div>
</section>';
   return ob_get_clean();
}
add_shortcode('portfolio_section', portfolio_in_shortcode);
function portfolio_in_shortcode($atts) {

    ob_start();

    $atts = shortcode_atts(
        array(
            'order' => "ASC"
        ,   'count' => "6"
        ,   'section_title' => "Our Latest Projects"
        ,   'section_description' => "Far far away, behind the word mountains, far from the countries Vokalia and 
                                      Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                      right at the coast of the Semantics, a large language ocean."
        ), $atts);

    $section_title = $atts['section_title'];
    $section_description = $atts['section_description'];

    $args = array (
        'posts_per_page' => $atts['count']
    ,   'post_type' => portfolio
    ,   'suppress_filters' => true
    ,   'order' => $atts['order']
    );

    $my_wp_query = new WP_Query();
    $posts = $my_wp_query->query( $args );

    print "
<section class=\"section border-t pb-0\">
    <div class=\"container\">
        <div class=\"row justify-content-center mb-5 element-animate\">
            <div class=\"col-md-8 text-center\">
                <h2 class=\" heading mb-4\">$section_title</h2>
                <p class=\"mb-5 lead\">$section_description</p>
            </div>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row no-gutters\">
        ";

    foreach ($posts as $post){

        $page = $post->ID;
        $page_data = get_post($page);

        $thumbnail_uri = get_the_post_thumbnail_url($page);
        $title = $page_data -> post_title;
        $link = get_permalink( $page );

        setup_postdata($post);

        print "
<div class=\"col-md-4 element-animate\">
                <a href=$link class=\"link-thumbnail\" style=\"padding:0\">
                    <h3><?php the_title(); ?></h3>
                    <span class=\"ion-plus icon\"></span>
                    <img src=$thumbnail_uri alt=\"Image\" class=\"img-fluid\">
                </a>
            </div>
            ";
    };

    print '
        </div>
    </div>
</section>';
    return ob_get_clean();
}

add_shortcode('services_section', services_in_shortcode);
function services_in_shortcode($atts) {

    ob_start();

    $atts = shortcode_atts(
        array(
            'order' => "ASC"
        ,   'count' => "3"
        ), $atts);

    $args = array (
            'posts_per_page' => $atts['count']
        ,   'post_type' => services
        ,   'suppress_filters' => true
    ,   'order' => $atts['order']
    );

    $my_wp_query = new WP_Query();
    $posts = $my_wp_query->query( $args );

    print "
<section class=\"section bg-light\">
    <div class=\"container\" >
        <div class=\"row\">
        ";
    foreach ($posts as $post){

        $page = $post->ID;
        $page_data = get_post($page);

        $thumbnail_uri = get_the_post_thumbnail_url($page);
        $title = $page_data -> post_title;
        $field = get_field('icon', $page);
        $excerpt = $page_data -> post_excerpt;

        setup_postdata($post);

        print "
<div class=\"col-md-6 col-lg-4 element-animate fadeInUp element-animated\">
                <div class=\"media block-6 d-block text-center\">
                    <div class=\"icon mb-3\"><span class=\"$field text-primary\"></span></div>
                    <div class=\"media-body\">
                        <h3 class=\"heading\">$title</h3>
                        <p>$excerpt</p>
                    </div>
                </div>

            </div>
            ";
    };

    print '
        </div>
    </div>
</section>';
    return ob_get_clean();
}
add_shortcode('services_with_image_section', services_with_image_in_shortcode);
function services_with_image_in_shortcode($atts) {

    ob_start();

    $atts = shortcode_atts(
        array(
            'order' => "ASC"
	        ,   'section_title' => "We Are Reliable Engineering In House"
	        ,   'image_url' => "http://atlas/wp-content/themes/testtheme/images/about_1.jpg"
        ), $atts);

    $args = array (
        'posts_per_page' => 4
    ,   'post_type' => services
    ,   'suppress_filters' => true
    ,   'order' => $atts['order']
    );

    $my_wp_query = new WP_Query();
    $posts = $my_wp_query->query( $args );

	$section_title = $atts['section_title'];
	$image_url = $atts['image_url'];

    print "
<section class=\"section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-12 text-center\">
                    <h2>$section_title</h2>
                </div>
            </div>
            <div class=\"row align-items-stretch\">
                <div class=\"col-lg-4 order-lg-1\">
                    <div class=\"h-100\"><div class=\"frame h-100\"><div class=\"feature-img-bg h-100\" style=\"background-image: url($image_url);\"></div></div></div>
                </div>
        ";

	print "<div class=\"col-md-6 col-lg-4 element-animate fadeInUp element-animated order-lg-1 \">"; // open first column
    foreach ($posts as $key => $post){

        $page = $post->ID;
        $page_data = get_post($page);


        $thumbnail_uri = get_the_post_thumbnail_url($page);
        $title = $page_data -> post_title;
        $field = get_field('icon', $page);
	    $excerpt = $page_data -> post_excerpt;

        setup_postdata($post);
		switch ($key){

			case 0:
			case 1:
				print "
					<div class=\"feature-1 d-md-flex\">
                        <div class=\"align-self-center\">
                            <span class=\"ion $field display-4 text-primary\"></span>
                            <h3>$title</h3>
                            <p>$excerpt</p>
                        </div>
                    </div>";
				break;

			case 2:
				print " 
 				</div>
 				<div class=\"col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3\"> 
 				<div class=\"feature-1 d-md-flex\">
                        <div class=\"align-self-center\">
                            <span class=\"ion $field display-4 text-primary\"></span>
                            <h3>$title</h3>
                            <p>$excerpt</p>
                        </div>
                    </div>";
				break;

			case 3:
				print "
		    		<div class=\"feature-1 d -md-flex\">
                        <div class=\"align-self-center\">
                            <span class=\"ion $field display-4 text-primary\"></span>
                            <h3>$title</h3>
                            <p>$excerpt</p>
                        </div>
                    </div>
                </div>";
				break;
		}
    };
    print '
        </div>
    </div>
</section>';
    return ob_get_clean();
}
add_shortcode('simple_section', simple_section_in_shortcode);
function simple_section_in_shortcode($atts) {

	ob_start();

	$atts = shortcode_atts(
		array(
			'section_title' => "Create, Enhance and Sustain"
		,   'section_description' => "Far far away, behind the word mountains, far from the countries Vokalia and
		                              Consonantia, there live the blind texts. Separated they live in Bookmarksgrove 
		                              right at the coast of the Semantics, a large language ocean. "
		,   'section_image' => "http://atlas/wp-content/uploads/2020/01/about_2.jpg"
		,   'section_link' => "http://atlas/index.php/2020/01/16/separated-they-live-in-bookmarksgrove-right/"
		,   'section_button' => "Read More"
		), $atts);

	$section_title = $atts['section_title'];
	$section_description = $atts['section_description'];
	$section_image = $atts['section_image'];
	$section_link = $atts['section_link'];
	$section_button = $atts['section_button'];

	print "
	    <section class=\"section element-animate\">
        	<div class=\"container\">
            	<div class=\"row align-items-center mb-5\">
                	<div class=\"col-lg-7 order-md-2\">
                    	<div class=\"\"><div class=\"frame\"><img src=$section_image></div></div>
                	</div>
                	<div class=\"col-md-5 pr-md-5 mb-5\">
                    	<div class=\"block-41\">
                        	<h2 class=\"block-41-heading mb-5\">$section_title</h2>
                        	<div class=\"block-41-text\">
                            	<p>$section_description</p>
                            	<p><a href=\"$section_link\" class=\"readmore\">$section_button <span class=\"ion-android-arrow-dropright-circle\"></span></a></p>
                        	</div>
                    	</div>
                	</div>
            	</div>
        	</div>
   		</section>
	";
	return ob_get_clean();
}
add_shortcode('comments_section', comments_section_in_shortcode);
function comments_section_in_shortcode($atts) {

	ob_start();

	$atts = shortcode_atts(
		array(
			'count' => 4
			,   'order' => "DESC"
		), $atts);


	$args = array(
		'number'  => $atts['count']
		,   'orderby' => 'comment_date'
		,   'order'   => $atts['order']
		,   'status'  => 'approve'
		,   'type'    => 'comment'
	);

	print "
	<section class=\"section bg-light block-11\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-5\">
                <div class=\"col-md-8 text-center\">
                    <h2 class=\" heading mb-4\">Happy Clients</h2>
                </div>
            </div>
            <div class=\"nonloop-block-11 owl-carousel\">
	";

	$comments = get_comments( $args );

	foreach ($comments as $comment){

		$id = $comment -> comment_ID;
		$author = $comment -> comment_author;
		$content = $comment -> comment_content;
		$image = get_avatar_url($id);
		$email = $comment -> comment_author_email;

		print "
			<div class=\"item\">
                    <div class=\"block-33 h-100\">
                        <div class=\"vcard d-flex mb-3\">
                            <div class=\"image align-self-center\"><img src=\"$image\"></div>
                            <div class=\"name-text align-self-center\">
                                <h2 class=\"heading\">$author</h2>
                                <span class=\"meta\">$email</span>
                            </div>
                        </div>
                        <div class=\"text\">
                            <blockquote>
                                <p>&rdquo; $content &ldquo;</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
		";
	}
	print "
					</div>
        		</div>
        	</div>
        </section>
	";


	return ob_get_clean();
}


