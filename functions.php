<?php
	//Stylesheets
	function circleoffunk_resources() {
		wp_enqueue_style('bootstrap', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'circleoffunk_resources');

	//Navigation Menus
    register_nav_menus(array(
        'primary' => __( 'Primary Menu' ),
        'footer' => __( 'Footer Menu' ),
    ));

    //Get top ancestor
    function get_top_ancestor_id() {

        global $post;
        
        if ($post->post_parent) {
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            return $ancestors[0];
        }

        return $post->ID;
    }

    //Does page have children?
    function has_children() {
        global $post;

        $pages = get_pages('child_of=' . $post->ID);
        return count($pages);
    }
	
    /**
     * Filter the "read more" excerpt string link to the post.
     *
     * @param string $more "Read more" excerpt string.
     * @return string (Maybe) modified "read more" excerpt string.
     */
    function wpdocs_excerpt_more( $more ) {
        return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( '[..read more]', 'textdomain' )
        );
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

    /* Add thumbnails support */
    add_theme_support( 'post-thumbnails' );
?>