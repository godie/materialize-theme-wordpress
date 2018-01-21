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


add_theme_support( 'title-tag' );

