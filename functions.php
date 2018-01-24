<?php 

function materializegb_scripts(){
	wp_enqueue_style('materializecss', get_template_directory_uri().'/assets/css/materialize.min.css', array(), '1.0.0');
	wp_enqueue_script('materializejs', get_template_directory_uri().'/assets/js/materialize.min.js', array(), '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'materializegb_scripts');

function materializegb_google_fonts(){
	wp_register_style('MaterialIcons', 'http://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style( 'MaterialIcons');

}

add_action( 'wp_print_styles', 'materializegb_google_fonts');


// Custom settings
function materializegb_settings_add_menu() {
  add_menu_page('Custom Settings', 'Materialize Settings', 'manage_options', 'materializegb-settings', 'materializegb_settings_page', null, 99 );
}
add_action( 'admin_menu', 'materializegb_settings_add_menu' );


function materializegb_settings_page(){
	?> 
	<div class="wrap">
		<h1>Materialize Panel</h1>
		<form method="POST" action="options.php">
			<?php 
				settings_fields( 'section' );
				do_settings_sections( 'theme-options' );
				submit_button();
			?>
		</form>
	</div>
	<?php 
}


function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_layout_element(){
	?>
		<input type="checkbox" name="theme_layout" value="1" <?php checked(1, get_option('theme_layout'), true); ?> />
	<?php
}

function my_custom_post(){
	register_post_type( 'info', array(
		'labels' => array(
			'name' => __( 'infopost' ),
			'singular_name' => __( 'infopost'),
		),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields'
		)
	) );
}

add_action( 'init', 'my_custom_post');

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field( "theme_layout", "Do you want the layout to be responsive?", "display_layout_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting( "section", "theme_layout");
}

add_action("admin_init", "display_theme_panel_fields");


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


