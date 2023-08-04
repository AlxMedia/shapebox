<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'shapebox', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'shapebox' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'shapebox' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'shapebox' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'shapebox' ),
	'button_url'  => 'https://wordpress.org/support/theme/shapebox/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'shapebox' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'shapebox' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'shapebox' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'shapebox' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'shapebox' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'shapebox' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'shapebox' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'shapebox' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'shapebox' ),
	'description'	=> esc_html__( 'Your blog heading', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'shapebox' ),
	'description'	=> esc_html__( 'Your blog subheading', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'shapebox' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'shapebox' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'shapebox' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'shapebox' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'shapebox' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'shapebox' ),
	'description'	=> esc_html__( '2 columns of widgets', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'shapebox' ),
	'description'	=> esc_html__( '2 columns of widgets', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: More Button
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'more-button',
	'label'			=> esc_html__( 'More Button', 'shapebox' ),
	'description'	=> esc_html__( 'Show the more buttons', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Author Avatar
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-avatar',
	'label'			=> esc_html__( 'Author Avatar', 'shapebox' ),
	'description'	=> esc_html__( 'Show the circle avatars', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Comment Count
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'shapebox' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'shapebox' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'shapebox' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'shapebox' ),
		'categories'=> esc_html__( 'Related by categories', 'shapebox' ),
		'tags'		=> esc_html__( 'Related by tags', 'shapebox' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'shapebox' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'shapebox' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'shapebox' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'shapebox' ),
		'content'	=> esc_html__( 'Below content', 'shapebox' ),
	),
) );
// Header: Search
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'shapebox' ),
	'description'	=> esc_html__( 'Header search button', 'shapebox' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'shapebox' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'shapebox' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'shapebox' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'shapebox' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'shapebox' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'shapebox' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'shapebox' ),
	'description'	=> esc_html__( 'A short description of you', 'shapebox' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'shapebox' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'shapebox' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'shapebox' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'shapebox' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'shapebox' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'shapebox' ),
	'description'	=> esc_html__( 'Footer credit text', 'shapebox' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'shapebox' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'shapebox' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'shapebox' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'shapebox' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'shapebox' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'shapebox' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'shapebox' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'shapebox' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'shapebox' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function shapebox_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'shapebox' ),
		'description'	=> esc_html__( '(is_home) Primary', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'shapebox' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'shapebox' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'shapebox' ),
		'description'	=> esc_html__( '(is_category) Primary', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'shapebox' ),
		'description'	=> esc_html__( '(is_search) Primary', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'shapebox' ),
		'description'	=> esc_html__( '(is_404) Primary', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	Kirki::add_field( 'shapebox_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'shapebox' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'shapebox' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'shapebox' ),
	) );
	
 } 
add_action( 'init', 'shapebox_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'shapebox' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'shapebox' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'shapebox' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'shapebox' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'shapebox' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'shapebox' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'shapebox' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'shapebox' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'shapebox' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'shapebox' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'shapebox' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'shapebox' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'shapebox' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'shapebox' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'shapebox' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'shapebox' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'shapebox' ),
	'description'	=> esc_html__( 'Select font for the theme', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'shapebox' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'shapebox' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'shapebox' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'shapebox' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'shapebox' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'shapebox' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'shapebox' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'shapebox' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'shapebox' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'shapebox' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'shapebox' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'shapebox' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'shapebox' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'shapebox' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'shapebox' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'shapebox' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'shapebox' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'shapebox' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'shapebox' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'shapebox' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'shapebox' ),
		'arial'					=> esc_html__( 'Arial', 'shapebox' ),
		'georgia'				=> esc_html__( 'Georgia', 'shapebox' ),
		'verdana'				=> esc_html__( 'Verdana', 'shapebox' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'shapebox' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'shapebox' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'shapebox' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '740',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'shapebox' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'shapebox' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'shapebox' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'shapebox' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Primary Color
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '#9754e9',
) );
// Styling: Gradient Left
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Left', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '#c14bff',
) );
// Styling: Gradient Right
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Right', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '#6c5dd3',
) );
// Styling: Background Color
Kirki::add_field( 'shapebox_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'shapebox' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );