<?php
/**
* 
* propMan v3.0
* Property Template. Lots of stuff below.
* 
* Last Update: Version 3.0
* 
**/ 
?>

<?php get_header(); ?>

<?php
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
                    
?>  
<div class="flexslider" style="width: 700px; left: 50%; margin-left: -350px;">
          <ul class="slides">
            		<li data-thumb="<?php echo @$property_img_1; ?>">
  	    	    <img src="<?php echo @$property_img_1; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_2; ?>">
  	    	    <img src="<?php echo @$property_img_2; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_3; ?>">
  	    	    <img src="<?php echo @$property_img_3; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_4; ?>">
  	    	    <img src="<?php echo @$property_img_4; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_5; ?>">
  	    	    <img src="<?php echo @$property_img_5; ?>" />
  	    		</li>
			<li data-thumb="<?php echo @$property_img_6; ?>">
  	    	    <img src="<?php echo @$property_img_6; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_7; ?>">
  	    	    <img src="<?php echo @$property_img_7; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_8; ?>">
  	    	    <img src="<?php echo @$property_img_8; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_9; ?>">
  	    	    <img src="<?php echo @$property_img_9; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_10; ?>">
  	    	    <img src="<?php echo @$property_img_10; ?>" />
  	    		</li>
            		<li data-thumb="<?php echo @$property_img_11; ?>">
  	    	    <img src="<?php echo @$property_img_11; ?>" />
  	    		</li>
  	    		<li data-thumb="<?php echo @$property_img_12; ?>">
  	    	    <img src="<?php echo @$property_img_12; ?>" />
  	    		</li>
          </ul>
        </div>
      
<div class="flexslider" style="width: 700px; left: 50%; margin-left: -350px;">

<div id="right" style="margin-left: 5%;"><h1><?php if (@$property_short_desc != ""){ echo @$property_short_desc; } else { echo 'N/A'; } ?></div></h1>

<div id="right" style="left: 50%; width:500px; padding-left: 15%;"><h2><?php if (@$property_full_desc != ""){ echo @$property_full_desc; } else { echo 'N/A'; } ?><h2></div><br><br>

<div id="left" style="float:left; padding-left: 10px;"><h3><?php _e("MLS ID:",'propman'); ?></h3><?php if (@$property_title != ""){ echo @$property_title; } else { echo 'N/A'; } ?></div>
<div id="left" style="float:left; padding-left: 10px;"><h3><?php _e("Address:",'propman'); ?></h3><?php if (@$property_add_1 != ""){ echo @$property_add_1; } else { echo 'N/A'; } ?><br><?php if (@$property_add_2 != ""){ echo @$property_add_2; } else { echo ''; } ?></div>
<div id="left" style="float:left; padding-left: 10px;"><h3><?php _e("City:",'propman'); ?></h3><?php if (@$property_city != ""){ echo @$property_city; } else { echo 'N/A'; } ?></div>
<div id="left" style="float:left; padding-left: 10px;"><h3><?php _e("State:",'propman'); ?></h3><?php if (@$property_state != ""){ echo @$property_state; } else { echo 'N/A'; } ?></div>
<div id="left" style="float:left; padding-left: 10px;"><h3><?php _e("Zip:",'propman'); ?></h3><?php if (@$property_zip != ""){ echo @$property_zip; } else { echo 'N/A'; } ?></div>

<div id="right" style="float:right; padding-left: 10px;"><h3><?php _e("Lot SF:",'propman'); ?></h3><?php if (@$property_lot_sf != ""){ echo @$property_lot_sf; } else { echo 'N/A'; } ?></div>

<div id="right" style="float:right; padding-left: 10px;"><h3><?php _e("Building SF:",'propman'); ?></h3><?php if (@$property_building_sf != ""){ echo @$property_building_sf; } else { echo 'N/A'; } ?></div>

<div id="right" style="float:right; padding-left: 10px;"><h3><?php _e("Bedrooms:",'propman'); ?></h3><?php if (@$property_bed != ""){ echo @$property_bed; } else { echo 'N/A'; } ?></div>

<div id="right" style="float:right; padding-left: 10px;"><h3><?php _e("Bathrooms:",'propman'); ?></h3><?php if (@$property_bath != ""){ echo @$property_bath; } else { echo 'N/A'; } ?></div>
</div>
<div class="flexslider" style="width: 700px; left: 50%; margin-left: -350px;">
<div id="centered" style="left:50%; margin-left:150px;"><iframe width="420" height="349" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $property_add_1; ?>,+<?php echo $property_city; ?>,+<?php echo $property_state; ?>&amp;output=embed"></iframe><br />
</div>
<?php
//Add Additional Stylesheet & JS to Template Generated Pages and Posts
$prop_pluginsurl = plugins_url();
?>

<!-- Main CSS file -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/prop_style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/flexslider.css" />
  <!-- Syntax Highlighter -->
	<link href="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/flexslider.css" type="text/css" media="screen" />
  <!-- Modernizr -->
  <script src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/modernizr.js"></script>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/jquery.flexslider.js"></script><script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
prevText: "Previous",           //String: Set the text for the "previous" directionNav item
nextText: "Next",               //String: Set the text for the "next" directionNav item
 
// Secondary Navigation
keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
pausePlay: false,               //Boolean: Create pause/play dynamic element
pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
playText: 'Play',               //String: Set the text for the "play" pausePlay item
 
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/shCore.js"></script>
  <script type="text/javascript" src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/shBrushXml.js"></script>
  <script type="text/javascript" src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/shBrushJScript.js"></script>
  
  <!-- Optional FlexSlider Additions -->
  <script src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/jquery.easing.js"></script>
  <script src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/jquery.mousewheel.js"></script>
  <script defer src="<?php echo $prop_pluginsurl ?>/propmanpress/themefiles/js/demo.js"></script>

        
<?php get_footer(); ?>
