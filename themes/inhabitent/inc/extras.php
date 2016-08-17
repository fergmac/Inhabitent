<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

/**
* Removing editor links from Appearance/Plugins sub-menus.
*/

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


/**
* Changing login logo
*/

function inhabitent_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px;
            height: 53px;
            width:	300px;
            background-size: 300px 53px;
        }
    </style>
<?php }
add_action( 'login_head', 'inhabitent_login_logo' );


/**
* Changing the login logo url
*/

function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );	

function inhabitent_login_logo_url_title() {
    return 'Inhabitent Supply Co.';
}
add_filter( 'login_headertitle', 'inhabitent_login_logo_url_title' );


/**
* Adjusting archive page loop for products
*/

function inhabitent_modifying_product_archive_query($query) {
    if (is_post_type_archive('product') && !is_admin() && $query->is_main_query()) {
        $query->set( 'posts_per_page', 16);
        $query->set( 'order', 'ASC');
        $query->set( 'orderby', 'title');
    }
}
add_action( 'pre_get_posts', 'inhabitent_modifying_product_archive_query' );

/**
* adding customizable image to about page
*/


function inhabitent_inline_styles_method() {
    if (!is_page_template('page-about.php')) {
            return;

    };
        $imageUrl = CFS()->get('header_image');
            if(!$imageUrl){
                return;

            };

        $custom_css = "
                .about-page-hero{

                        background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url({$imageUrl}) no-repeat bottom;
                        background-size: cover;
                        height: 100vh;
                        
                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
    
}

add_action( 'wp_enqueue_scripts', 'inhabitent_inline_styles_method' );



