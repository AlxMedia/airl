<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'airl', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'airl' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'airl' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'airl' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'airl' ),
	'button_url'  => 'https://wordpress.org/support/theme/airl/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'airl' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'airl' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'airl' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'airl' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'airl' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'airl' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'airl' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'airl' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'airl' ),
	'description'	=> esc_html__( 'Your blog heading', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'airl' ),
	'description'	=> esc_html__( 'Your blog subheading', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Blog Layout
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'blog-grid',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'airl' ),
		'blog-grid'		=> esc_html__( 'Grid', 'airl' ),
		'blog-list'		=> esc_html__( 'List', 'airl' ),
	),
) );
// Blog: Excerpt Length
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'airl' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'airl' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'airl' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'airl' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'airl' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '7',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '14',
		'step'	=> '1',
	),
) );
// Blog: Highlight Category
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'airl' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'airl' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'airl' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'airl' ),
	'section'		=> 'blog',
	'default'		=> '7',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Header Recent Comments
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-recent-comments',
	'label'			=> esc_html__( 'Header Recent Comments', 'airl' ),
	'description'	=> esc_html__( 'Shows 3 newest comments in blog home header', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'airl' ),
	'description'	=> esc_html__( '2 columns of widgets', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'airl' ),
	'description'	=> esc_html__( '2 columns of widgets', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'airl' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'airl' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'airl' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'airl' ),
		'categories'=> esc_html__( 'Related by categories', 'airl' ),
		'tags'		=> esc_html__( 'Related by tags', 'airl' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'airl' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'airl' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'airl' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'airl' ),
		'content'	=> esc_html__( 'Below content', 'airl' ),
	),
) );
// Header: Search
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'airl' ),
	'description'	=> esc_html__( 'Header search button', 'airl' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'airl' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'airl' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'airl' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'airl' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'airl' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'airl' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'airl' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'airl' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'airl' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'airl' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'airl' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'airl' ),
	'description'	=> esc_html__( 'Footer credit text', 'airl' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'airl' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'airl' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'airl' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'airl' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'airl' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'airl' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'airl' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'airl' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'airl' ),
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
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'airl' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'airl' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function airl_kirki_sidebars_select() { 
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
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'airl' ),
		'description'	=> esc_html__( '(is_home) Primary', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'airl' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'airl' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'airl' ),
		'description'	=> esc_html__( '(is_category) Primary', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'airl' ),
		'description'	=> esc_html__( '(is_search) Primary', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'airl' ),
		'description'	=> esc_html__( '(is_404) Primary', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	Kirki::add_field( 'airl_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'airl' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'airl' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'airl' ),
	) );
	
 } 
add_action( 'init', 'airl_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'airl' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'airl' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'airl' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'airl' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'airl' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'airl' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'airl' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'airl' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'airl' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'airl' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'airl' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'airl' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'airl' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'airl' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'airl' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'airl' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'airl' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'airl' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'airl' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'airl' ),
	'description'	=> esc_html__( 'Select font for the theme', 'airl' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'airl' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'airl' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'airl' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'airl' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'airl' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'airl' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'airl' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'airl' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'airl' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'airl' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'airl' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'airl' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'airl' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'airl' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'airl' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'airl' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'airl' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'airl' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'airl' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'airl' ),
		'arial'					=> esc_html__( 'Arial', 'airl' ),
		'georgia'				=> esc_html__( 'Georgia', 'airl' ),
		'verdana'				=> esc_html__( 'Verdana', 'airl' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'airl' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'airl' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '40',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'airl' ),
	'description'	=> esc_html__( 'Max-width of the container.', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Single Content Max-width
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width-single',
	'label'			=> esc_html__( 'Single Content Max-width', 'airl' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '680',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Page Content Max-width
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width-page',
	'label'			=> esc_html__( 'Page Content Max-width', 'airl' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '680',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Primary Color
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '#00a0ff',
) );
// Styling: Gradient Left
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Left', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '#00d4ff',
) );
// Styling: Gradient Right
Kirki::add_field( 'airl_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Right', 'airl' ),
	'section'		=> 'styling',
	'default'		=> '#0072ff',
) );