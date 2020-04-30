<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

//////////////////////////////////////////////GENERAL SETTINGS START////////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'desc' => __('Enter Site name .', 'options_check'),
		'id' => 'sitename',
		'std' => 'Slux',
		'type' => 'text');
		
	$options[] = array(

		'name' => __('Upload Favicon Image', 'options_check'),

		'id' => 'fav',

		'type' => 'upload');
		
		
	$options[] = array(
		'name' => __('Upload Menu Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logo1',
		'type' => 'upload');
		
	 $options[] = array(
		'name' => __('Upload Banner Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logo2',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Enter Tagline', 'options_check'),
		'desc' => __('Enter Site here .', 'options_check'),
		'id' => 'tag',
		'std' => 'PURSUIT OF PERFECTION WITH THE LIGHT.',
		'type' => 'text');
		
 ////////////////////////////Swiss////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Swiss', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sw_brief',

		'type' => 'editor' );
		
	$options[] = array(

		'name' => __('Developing title', 'ptions_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'dev_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Developing Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'dev_brief',

		'type' => 'editor' );
////////////////////////////Technology////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Technology', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'tech_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Background Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'back_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Background Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'back-brief',

		'type' => 'editor' );
		
	$options[] = array(

		'name' => __('Li-Fi Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'li_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Li-Fi Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'li-brief',

		'type' => 'editor' );
		
		
  $options[] = array(

		'name' => __('Principal Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'pri_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Principal Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'pri-brief',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('Limit Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'lim_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Limit Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'lim-brief',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('Limit Video', 'options_check'),

		'desc' => sprintf( __( 'Enter Video Below:', 'options_check' ), '' ),

		'id' => 'lim-video',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('Future Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'fu_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Future Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'fu-brief',

		'type' => 'editor' );
		
   $options[] = array(

		'name' => __('First Example Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ex1_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('First Example Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ex1-brief',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('First Example Video', 'options_check'),

		'desc' => sprintf( __( 'Enter video Below:', 'options_check' ), '' ),

		'id' => 'ex1-video',

		'type' => 'editor' );

  $options[] = array(

		'name' => __('Second Example Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ex2_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Second Example Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ex2-brief',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('Second Example Video', 'options_check'),

		'desc' => sprintf( __( 'Enter video Below:', 'options_check' ), '' ),

		'id' => 'ex2-video',

		'type' => 'editor' );
		
		
////////////////////////////Products////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Products', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'prod_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Headphone Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'head_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Headphone Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'head_brief',

		'type' => 'editor' );
	
	$options[] = array(
		'name' => __('Upload headphone image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'head_i',
		'type' => 'upload');
		
		
  $options[] = array(

		'name' => __('Home Cinema Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ci_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Home Cinema Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ci_brief',

		'type' => 'editor' );
		
  $options[] = array(

		'name' => __('Home Cinema Advantages', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ci_ad',

		'type' => 'editor' );
		
		
  $options[] = array(

		'name' => __('Wireless Speaker Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'wi_title',

		'type' => 'editor' );
		
	$options[] = array(

		'name' => __('Wireless Speaker Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'wi_brief',

		'type' => 'editor' );
		
  $options[] = array(
		'name' => __('Wireless Speaker image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'w_i',
		'type' => 'upload');
		
		
$options[] = array(

		'name' => __('Microphone Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'mi_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Microphone Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'mi_brief',

		'type' => 'editor' );
		
  $options[] = array(
		'name' => __('Microphone image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'mi-i',
		'type' => 'upload');
		
 $options[] = array(

		'name' => __('Spectroreflective  Paint  Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Spectroreflective  Paint  Brief', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp_brief',

		'type' => 'editor' );
		
		
	$options[] = array(

		'name' => __('Spectroreflective  Paint  Advantages', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp_ad',

		'type' => 'editor' );
		
	
		
	$options[] = array(

		'name' => __('Example Content 1', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp-ex1_brief',

		'type' => 'editor' );
		
    $options[] = array(
		'name' => __('Example Content 1 image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'sp-ex1',
		'type' => 'upload');
		
		
	$options[] = array(

		'name' => __('Example Content 2', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp-ex2_brief',

		'type' => 'editor' );
		
    $options[] = array(
		'name' => __('Example Content 2 image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'sp-ex2',
		'type' => 'upload');
		
		
	$options[] = array(

		'name' => __('Example Content 3', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'sp-ex3_brief',

		'type' => 'editor' );
		
    $options[] = array(
		'name' => __('Example Content 3 image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'sp-ex3',
		'type' => 'upload');
		
////////////////////////////Benefits////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Benefits', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ben_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Section Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ben_brief',

		'type' => 'editor' );
		
  $options[] = array(
		'name' => __('Section Image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'ben_img',
		'type' => 'upload');
		
		
 ////////////////////////////Campaign////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Campaign', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'cam_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Section Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'cam_brief',

		'type' => 'editor' );
		
  $options[] = array(
		'name' => __('Section Image', 'options_check'),
		'desc' => __('Upload Image', 'options_check'),
		'id' => 'cam_img',
		'type' => 'upload');
		
		
 ////////////////////////////Gadget////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('Gadget', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'gad_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Section Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'gad_brief',

		'type' => 'editor' );
		
  $options[] = array(
		'name' => __('Section Image', 'options_check'),
		
		'desc' => __('Upload Image', 'options_check'),
		
		'id' => 'gad_img',
		
		'type' => 'upload');
		
		
////////////////////////////About Us////////////////////////////////////////////////////////////////////

    $options[] = array(

		'name' => __('About Us', 'options_check'),

		'type' => 'heading');
		
	$options[] = array(

		'name' => __('Section Title', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ab_title',

		'type' => 'text' );
		
	$options[] = array(

		'name' => __('Section Briefings', 'options_check'),

		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),

		'id' => 'ab_brief',

		'type' => 'editor' );
		

		

		
		


		

		
	
		
	
		
//////////////////////////////////////////////Footer/////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('Footer Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Contact', 'options_check'),
		'desc' => __('Enter contact info.', 'options_check'),
		'id' => 'q_con',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
	
	$options[] = array(
		'name' => __('Facebook Link', 'options_check'),
		'id' => 'fb',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'desc' => __('Enter Footer Copyright Text .', 'options_check'),
		'id' => 'copyright_ftext',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	
		
	
		



		

		

	

	return $options;
}
?>