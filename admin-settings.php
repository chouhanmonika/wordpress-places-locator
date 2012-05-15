<?php

add_action('admin_menu', 'wppl_admin');

function wppl_admin() {
	add_options_page('Places Locator', 'Places Locator', 'manage_options', 'places-locator', 'wppl_plugin_options_page');
}

add_action('admin_init', 'wppl_plugin_admin_init');
	function wppl_plugin_admin_init(){
		register_setting( 'wppl_plugin_options', 'wppl_fields', 'address_validate' );
		register_setting( 'wppl_plugin_options', 'wppl_post_tax');
		}
		
// display the admin options page
function wppl_plugin_options_page() {

	echo '<div class="wrap">';  
    screen_icon('themes'); 
	echo '<h2>Word Press Places Locator</h2>';
	
	echo '<form action="options.php" method="post">';
	settings_fields('wppl_plugin_options'); 
	$options = get_option('wppl_fields');
	$options_r = get_option('wppl_post_tax');
	
	echo '<table class="widefat fixed">';
		echo '<tr>';
			echo '<td>';
				echo '<p>posts or custom post types (slug) where you want the address fields to appear (comma separated) (ex. post,page):';
			echo '</td>';
			echo '<td>';
				echo '<input id="address_fields" name="wppl_fields[address_fields]" size="40" type="text" value="' . $options[address_fields] . '" /></p>'; 
			echo '</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo '<p>Distance values(comma separated) (ex. 5,10,15,25,50,100):';
			echo '</td>';
			echo '<td>';
				echo '<input id="distance_values" name="wppl_fields[distance_values]" size="40" type="text" value="' . $options[distance_values] .'" /></p>';
			echo '</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo '<p>Posts type Title:';
			echo '</td>';
			echo '<td>';
				echo '<input id="post_type_title" name="wppl_fields[post_type_title]" size="40" type="text" value="'; if ($options[post_type_title]){ echo $options[post_type_title];} else { echo "What are you looking for"; }; echo '" /></p>'; 
			echo '</td>';
		echo '</tr>';
	/*	echo '<tr>';
			echo '<td>';
				echo '<p>Categoty Title:';
			echo '</td>';
			echo '<td>';
				echo '<input id="categories_title" name="wppl_fields[categories_title]" size="40" type="text" value="'; if ($options[categories_title]){ echo $options[categories_title];} else { echo "Choose category"; }; echo '" /></p>'; 
			echo '</td>';
		echo '</tr>'; */
		echo '<tr>';
			echo '<td>';
				echo '<p>Address field title:';
			echo '</td>';
			echo '<td>';
				echo '<input id="address_field_title" name="wppl_fields[address_title]" size="40" type="text" value="'; if ($options[address_title]){ echo $options[address_title];} else { echo "Enter zip code, city or full address"; }; echo '" /></p>'; 
			echo '</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo '<p>Distance field title:';
			echo '</td>';
			echo '<td>';
				echo '<input id="distance_field_title" name="wppl_fields[distance_title]" size="40" type="text" value="'; if ($options[distance_title]){ echo $options[distance_title];} else { echo "Within "; }; echo '" /></p>'; 
			echo '</td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td>';
				echo '<p>Different styling for each post type in results. :';
			echo '</td>';
			echo '<td>';
 				echo '<input name="wppl_fields[different_style] " type="checkbox" value="1"'; if ($options['different_style'] == 1) {echo "checked";}; echo ' /> Yes</p>';
		echo '</td>';
		echo '</tr>';
		
	echo '</table>';
/*		
	echo '<h3>Posts Type And Taxonomies</h3>';  		
	echo '<ul id="posts-taxonomies-list">'; 
    
    $element_counter = 0;
	if (!empty($options_r)) {
		foreach ($options_r as $option) :
			echo '<li class="wppl-post-info-holder" id="wppl-post-info-holder-' . $element_counter . '">';
			echo '<table class="widefat fixed">';
			echo	'<tr>';
			echo		'<td>';
			echo  			'<label for="label-mile-' . $element_counter . '">Post Type (Slug), Post Type Name, Taxonomy(slug)</label><br />';
			echo		'</td>';
			echo		'<td>';
			echo    		'<input type="text" name="wppl_post_tax[post_tax_' . $element_counter . ']" value="' . $option . '" size="45">';
			echo    	'</td>';
			echo    	'<td>';
		?>
			<a href="#" onclick="removeElement(jQuery(this).closest('.wppl-post-info-holder'));">Remove</a> 
		<?php
			echo		'</td>';
			echo   		'</tr>';
			echo	'</table>';
			echo '</li>'; 
			$element_counter++; 
			endforeach;		
			}
    
    echo	'</ul>'; 
    echo 	'<a href="#" id="add-featured-post">Add Post Type</a>';
    
    */
    
    echo 	'</div>'; // wrap //
  	echo 	'<input type="hidden" name="element-max-id" value="' . $element_counter . '" />';
	echo 	'<input name="Submit" type="submit" value="'; esc_attr_e('Save Changes'); echo '" />';
 	echo 	'</form>'; 
 	/*
 	
	echo 	'<div style="display:none;">';
	echo		'<li class="wppl-post-info-holder" id="wppl-post-info-holder-placeholder">';
	echo 			'<table class="widefat fixed">';
	echo				'<tr>';
	echo					'<td>';
	echo  						'<label for="element-page-id">Post Type (Slug), Post Type Name, Taxonomy(slug):</label><br />';
	echo					'</td>';
	echo					'<td>';
	echo    					'<input type="text" name="post_tax" value="" size="45">';
	echo    				'</td>';
	echo    				'<td>';
	echo   						'<a href="#">Remove</a>'; 
	echo					'</td>';
	echo   				'</tr>';
	echo			'</table>';
	echo 		'</li>';	
	echo	'</div>';
	echo 	'<script src="' . plugins_url('js/admin.js', __FILE__) . '" type="text/javascript"></script>';
*/


	 } 

function address_validate($input) {
	// Our first value is either 0 or 1
	$input['where_address'];
	
	// Say our second option must be safe text with no HTML tags
	$input['distance_values'];
	
	
	return $input;
}
?>