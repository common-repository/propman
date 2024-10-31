<?php 
/**
 * 
 * propMan
 * Custom post type and admin input fields for property data
 * 
**/

add_action('init', 'properties');

function properties(){
  $labels = array(
    'name' => _x('Properties', 'post type general name'),
    'singular_name' => _x('Property', 'post type singular name'),
    'add_new' => _x('New Property', 'property'),
    'add_new_item' => __('Create New Property'),
    'edit_item' => __('Edit Property'),
    'new_item' => __('New Property'),
    'view_item' => __('View Property'),
    'search_items' => __('Search Properties'),
    'not_found' =>  __('No properties found'),
    'not_found_in_trash' => __('No properties found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 42,
    'menu_icon' => plugins_url() . '/propmanpress/themefiles/images/house-icon.png',
    'supports' => array('')
  ); 
  register_post_type('properties',$args);
}

// Add filter to insure the property is displayed when user updates a property

add_filter('post_updated_messages', 'property_updated_messages');
function property_updated_messages( $messages ) {

  $messages['properties'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => sprintf( __('Property updated. <a href="%s">View Property</a>'), esc_url( get_permalink(@$post_id) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Property updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Property restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Property published. <a href="%s">View property</a>'), esc_url( get_permalink(@$post_ID) ) ),
    7 => __('Property saved.'),
    8 => sprintf( __('Property submitted. <a target="_blank" href="%s">Preview property</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink(@$post_ID) ) ) ),
    9 => sprintf( __('Property scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview property</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( @$post->post_date ) ), esc_url( get_permalink(@$post_ID) ) ),
    10 => sprintf( __('Property draft updated. <a target="_blank" href="%s">Property</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink(@$post_ID) ) ) ),
  );

  return @$messages;
}

  
/*========================= First Custom Field Section ========================*/
	function property_metadata(){  
        global $post; 
 
        $custom = get_post_custom($post->ID);          
	$property_title = $custom["property_title"][0]; 
        $property_short_desc = $custom["property_short_desc"][0]; 
        $property_full_desc = $custom["property_full_desc"][0]; 
        
	$property_add_1 = $custom["property_add_1"][0]; 
        $property_add_2 = $custom["property_add_2"][0]; 
        $property_city = $custom["property_city"][0]; 
        $property_state = $custom["property_state"][0]; 
        $property_zip = $custom["property_zip"][0];

	$property_lot_sf = $custom["property_lot_sf"][0]; 
        $property_building_sf = $custom["property_building_sf"][0]; 
        
	$property_bed = $custom["property_bed"][0]; 
        $property_bath = $custom["property_bath"][0]; 
        
	$property_img_1 = $custom["property_img_1"][0]; 
        $property_img_2 = $custom["property_img_2"][0]; 
        $property_img_3 = $custom["property_img_3"][0]; 
        $property_img_4 = $custom["property_img_4"][0]; 
        $property_img_5 = $custom["property_img_5"][0]; 
        $property_img_6 = $custom["property_img_6"][0]; 
        $property_img_7 = $custom["property_img_7"][0]; 
        $property_img_8 = $custom["property_img_8"][0]; 
        $property_img_9 = $custom["property_img_9"][0]; 
        $property_img_10 = $custom["property_img_10"][0]; 
        $property_img_11 = $custom["property_img_11"][0]; 
        $property_img_12 = $custom["property_img_12"][0]; 
        $property_img_13 = $custom["property_img_13"][0]; 
        $property_img_14 = $custom["property_img_14"][0]; 
        $property_img_15 = $custom["property_img_15"][0]; 
        $property_img_16 = $custom["property_img_16"][0]; 
        $property_img_17 = $custom["property_img_17"][0]; 
        $property_img_18 = $custom["property_img_18"][0]; 
        $property_img_19 = $custom["property_img_19"][0]; 
        $property_img_20 = $custom["property_img_20"][0]; 
                    

        
        echo '<input type="hidden" name="property-nonce" id="property-nonce" value="' .wp_create_nonce('pr-m'). '" />';
?>  
<div class="property_metadata">
    
<label><?php _e("MLS ID:",'propman'); ?></label><br/><input name="property_title" value="<?php echo $property_title; ?>" ><br>
<label><?php _e("Short Desc.:",'propman'); ?></label><br/><textarea name="property_short_desc"><?php echo $property_short_desc; ?></textarea><br>
<label><?php _e("Full Desc:",'propman'); ?></label><br/><textarea name="property_full_desc"><?php echo $property_full_desc; ?></textarea><br>
<label><?php _e("Address 1:",'propman'); ?></label><br/><input name="property_add_1" value="<?php echo $property_add_1; ?>" ><br>
<label><?php _e("Address 2:",'propman'); ?></label><br/><input name="property_add_2" value="<?php echo $property_add_2; ?>" ><br>
<label><?php _e("City:",'propman'); ?></label><br/><input name="property_city" value="<?php echo $property_city; ?>" ><br>
<label><?php _e("State:",'propman'); ?></label><br/><input name="property_state" value="<?php echo $property_state; ?>" ><br>
<label><?php _e("Zip:",'propman'); ?></label><br/><input name="property_zip" value="<?php echo $property_zip; ?>" ><br>
<label><?php _e("Lot SF:",'propman'); ?></label><br/><input name="property_lot_sf" value="<?php echo $property_lot_sf; ?>" ><br>
<label><?php _e("Building SF:",'propman'); ?></label><br/><input name="property_building_sf" value="<?php echo $property_building_sf; ?>" ><br>
<label><?php _e("Bedrooms:",'propman'); ?></label><br/><input name="property_bed" value="<?php echo $property_bed; ?>" ><br>
<label><?php _e("Bathrooms:",'propman'); ?></label><br/><input name="property_bath" value="<?php echo $property_bath; ?>" ><br>
<label><?php _e("Image 1 URL:",'propman'); ?></label><br/><input name="property_img_1" value="<?php echo $property_img_1; ?>" ><br>
<label><?php _e("Image 2 URL:",'propman'); ?></label><br/><input name="property_img_2" value="<?php echo $property_img_2; ?>" ><br>
<label><?php _e("Image 3 URL:",'propman'); ?></label><br/><input name="property_img_3" value="<?php echo $property_img_3; ?>" ><br>
<label><?php _e("Image 4 URL:",'propman'); ?></label><br/><input name="property_img_4" value="<?php echo $property_img_4; ?>" ><br>
<label><?php _e("Image 5 URL:",'propman'); ?></label><br/><input name="property_img_5" value="<?php echo $property_img_5; ?>" ><br>
<label><?php _e("Image 6 URL:",'propman'); ?></label><br/><input name="property_img_6" value="<?php echo $property_img_6; ?>" ><br>
<label><?php _e("Image 7 URL:",'propman'); ?></label><br/><input name="property_img_7" value="<?php echo $property_img_7; ?>" ><br>
<label><?php _e("Image 8 URL:",'propman'); ?></label><br/><input name="property_img_8" value="<?php echo $property_img_8; ?>" ><br>
<label><?php _e("Image 9 URL:",'propman'); ?></label><br/><input name="property_img_9" value="<?php echo $property_img_9; ?>" ><br>
<label><?php _e("Image 10 URL:",'propman'); ?></label><br/><input name="property_img_10" value="<?php echo $property_img_10; ?>" ><br>
<label><?php _e("Image 11 URL:",'propman'); ?></label><br/><input name="property_img_11" value="<?php echo $property_img_11; ?>" ><br>
<label><?php _e("Image 12 URL:",'propman'); ?></label><br/><input name="property_img_12" value="<?php echo $property_img_12; ?>" ><br>
<label><?php _e("Image 13 URL:",'propman'); ?></label><br/><input name="property_img_13" value="<?php echo $property_img_13; ?>" ><br>
<label><?php _e("Image 14 URL:",'propman'); ?></label><br/><input name="property_img_14" value="<?php echo $property_img_14; ?>" ><br>
<label><?php _e("Image 15 URL:",'propman'); ?></label><br/><input name="property_img_15" value="<?php echo $property_img_15; ?>" ><br>
<label><?php _e("Image 16 URL:",'propman'); ?></label><br/><input name="property_img_16" value="<?php echo $property_img_16; ?>" ><br>
<label><?php _e("Image 17 URL:",'propman'); ?></label><br/><input name="property_img_17" value="<?php echo $property_img_17; ?>" ><br>
<label><?php _e("Image 18 URL:",'propman'); ?></label><br/><input name="property_img_18" value="<?php echo $property_img_18; ?>" ><br>
<label><?php _e("Image 19 URL:",'propman'); ?></label><br/><input name="property_img_19" value="<?php echo $property_img_19; ?>" ><br>
<label><?php _e("Image 20 URL:",'propman'); ?></label><br/><input name="property_img_20" value="<?php echo $property_img_20; ?>" >
      

</div>

<?php  
}  
/*===================== Create Post Title Using Meta Data=================*/
   

function create_property_title_meta($property_meta_title){
     global $post;
    	
	if ($post->post_type == 'properties') {
         $property_meta_title = $_POST['property_title'];
     }
     return $property_meta_title;
}
add_filter('title_save_pre','create_property_title_meta');
    
function add_property_metadata(){  
        add_meta_box('property_metadata', __('Property Details', 'csp_property_metadata'), 'property_metadata', 'properties', 'normal', 'low');  
} 
    
add_action('admin_init', 'add_property_metadata'); 
   

    
/*====================== Saves all Custom Field Data ======================*/    
function save_meta_properties($post_id){  
		
		if (!wp_verify_nonce($_POST['property-nonce'], 'pr-m')) return $post_id;
		
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	
	update_post_meta($post_id, "property_title", $_POST["property_title"]);
        update_post_meta($post_id, "property_short_desc", $_POST["property_short_desc"]);
        update_post_meta($post_id, "property_full_desc", $_POST["property_full_desc"]);
        update_post_meta($post_id, "property_add_1", $_POST["property_add_1"]);
        update_post_meta($post_id, "property_add_2", $_POST["property_add_2"]);
        update_post_meta($post_id, "property_city", $_POST["property_city"]);
        update_post_meta($post_id, "property_state", $_POST["property_state"]);
        update_post_meta($post_id, "property_zip", $_POST["property_zip"]);
	update_post_meta($post_id, "property_lot_sf", $_POST["property_lot_sf"]);
        update_post_meta($post_id, "property_building_sf", $_POST["property_building_sf"]);
        update_post_meta($post_id, "property_bed", $_POST["property_bed"]);
        update_post_meta($post_id, "property_bath", $_POST["property_bath"]);
        update_post_meta($post_id, "property_img_1", $_POST["property_img_1"]);
        update_post_meta($post_id, "property_img_2", $_POST["property_img_2"]);
        update_post_meta($post_id, "property_img_3", $_POST["property_img_3"]);
        update_post_meta($post_id, "property_img_4", $_POST["property_img_4"]);
        update_post_meta($post_id, "property_img_5", $_POST["property_img_5"]);
        update_post_meta($post_id, "property_img_6", $_POST["property_img_6"]);
        update_post_meta($post_id, "property_img_7", $_POST["property_img_7"]);
        update_post_meta($post_id, "property_img_8", $_POST["property_img_8"]);
        update_post_meta($post_id, "property_img_9", $_POST["property_img_9"]);
        update_post_meta($post_id, "property_img_10", $_POST["property_img_10"]);
        update_post_meta($post_id, "property_img_11", $_POST["property_img_11"]);
        update_post_meta($post_id, "property_img_12", $_POST["property_img_12"]);
        update_post_meta($post_id, "property_img_13", $_POST["property_img_13"]);
        update_post_meta($post_id, "property_img_14", $_POST["property_img_14"]);
        update_post_meta($post_id, "property_img_15", $_POST["property_img_15"]);
        update_post_meta($post_id, "property_img_16", $_POST["property_img_16"]);
        update_post_meta($post_id, "property_img_17", $_POST["property_img_17"]);
        update_post_meta($post_id, "property_img_18", $_POST["property_img_18"]);
        update_post_meta($post_id, "property_img_19", $_POST["property_img_19"]);
        update_post_meta($post_id, "property_img_20", $_POST["property_img_20"]);
}  
	
	
add_action('save_post', 'save_meta_properties'); 


// Creating the column layout when viewing list of propertys in the backend
add_action("manage_posts_custom_column",  "properties_custom_columns");
add_filter("manage_edit-properties_columns", "properties_edit_columns");
 
function properties_edit_columns($columns){
	$columns = array(
	"cb" => "<input type=\"checkbox\" />",
	'title' => __('Title', 'trans' ),
	"property_add_1" => __( 'Address 1', 'trans' ),
	"property_add_2" => __( 'Address 2', 'trans' ),
	"property_city" => __( 'City', 'trans' ),
	"property_state" => __( 'State', 'trans' ),
	"property_zip" => __( 'Zip', 'trans' ),
	"property_lot_sf" => __( 'Lot SF', 'trans' ),    
	"property_building_sf" => __( 'Building SF', 'trans' ),
	"property_bed" => __( 'Bedrooms', 'trans' ),
	"property_bath" => __( 'Bath', 'trans' ),


  );
 
  return $columns;
}

function properties_custom_columns($column)
{
	global $post;
	@$custom = get_post_custom($post->ID);
	$property_title = $custom["property_title"][0];         
	$property_add_1 = $custom["property_add_1"][0]; 
        $property_add_2 = $custom["property_add_2"][0]; 
        $property_city = $custom["property_city"][0]; 
        $property_state = $custom["property_state"][0]; 
        $property_zip = $custom["property_zip"][0];
	$property_lot_sf = $custom["property_lot_sf"][0]; 
        $property_building_sf = $custom["property_building_sf"][0]; 
	$property_bed = $custom["property_bed"][0]; 
        $property_bath = $custom["property_bath"][0]; 

if ('ID' == $column) echo $post->ID; //displays title
elseif ('property_add_1' == $column) if (@$property_add_1 != ""){ echo @$property_add_1; } else { echo 'N/A'; }
elseif ('property_add_2' == $column) if (@$property_add_2 != ""){ echo @$property_add_2; } else { echo 'N/A'; }
elseif ('property_city' == $column) if (@$property_city != ""){ echo @$property_city; } else { echo 'N/A'; }
elseif ('property_state' == $column) if (@$property_state != ""){ echo @$property_state; } else { echo 'N/A'; }
elseif ('property_zip' == $column) if (@$property_zip != ""){ echo @$property_zip; } else { echo 'N/A'; }
elseif ('property_lot_sf' == $column) if (@$property_lot_sf != ""){ echo @$property_lot_sf; } else { echo 'N/A'; }
elseif ('property_building_sf' == $column) if (@$property_building_sf != ""){ echo @$property_building_sf; } else { echo 'N/A'; }
elseif ('property_bed' == $column) if (@$property_bed != ""){ echo @$property_bed; } else { echo 'N/A'; }
elseif ('property_bath' == $column) if (@$property_bath != ""){ echo @$property_bath; } else { echo 'N/A'; }


	}

function prop_sortable_columns() {
return array(

'property_add_1'      => 'property_add_1',
'property_add_2'      => 'property_add_2',
'property_city'      => 'property_city',
'property_state'      => 'property_state',
'property_zip'      => 'property_zip',
'property_lot_sf'      => 'property_lot_sf',
'property_building_sf'      => 'property_building_sf',
'property_bed'      => 'property_bed',
'property_bath'      => 'property_bath',

   );
}

add_filter( "manage_edit-properties_sortable_columns", "prop_sortable_columns" );
?>
