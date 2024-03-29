<?php

require TEMPLATEPATH . '/lib/features.php';

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
        'id' => 'sidebar-1',
    	'name' => 'Sidebar 1',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

$flexithemename = "Anime Zone";
$shortname = str_replace(' ', '_', strtolower($flexithemename));

function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}

$options = array (
			
	array(	"type" => "open"),
	
	array(	"name" => "Contact Form Email",
		"desc" => "The messages submitted from the contact form will be sent to this email address.",
		"id" => $shortname."_contact_form_email",
		"std" =>  get_option('admin_email'), 
		"type" => "text"),	

    array(	"name" => "Logo Image",
		"desc" => "Enter the logo image full path. Leave it blank if you don't want to use logo image.",
		"id" => $shortname."_logo",
		"std" =>  get_bloginfo('template_url') . "/images/logo.png",
		"type" => "text"),array(	"name" => "Featured Posts Enabled?",
			"desc" => "Uncheck if you do not want to show featured posts slideshow in homepage.",
			"id" => $shortname."_featured_posts",
			"std" => "true",
			"type" => "checkbox"),
		array(	"name" => "Featured Posts Category", 
 "desc" => "Last 5 posts form the selected categoey will be listed as featured at homepage. <br />The selected category should contain at last 2 posts with images. <br /> <br /> <b>How to add images to your featured posts slideshow?</b> <br />
            <b>&raquo;</b> If you are using WordPress version 2.9 and above: Just set \"Post Thumbnail\" when adding new post for the posts in selected category above. <br /> 
            <b>&raquo;</b> If you are using WordPress version under 2.9  you have to add custom fields in each post on the  category  you set as featured category. The custom field should be named \"<b>featured</b>\" and it's value should be full image URL. <a href=\"https://flexithemes.com/public/featured_custom_field.jpg\" target=\"_blank\">Click here</a> for a screenshot. <br /> <br />
            In both situation, the image sizes should be: Width: <b>610 px</b>. Height: <b>320 px.</b>",
			"id" => $shortname."_featured_posts_category",
			"options" => cats_to_select(),
			"std" => "0",
			"type" => "select"),
            	array(	"name" => "Header Banner (468x60 px)",
			"desc" => "Header banner code. You may use any html code here, including your 468x60 px Adsense code.",
            "id" => $shortname."_ad_header",
            "type" => "textarea",
			"std" => '<a href="https://flexithemes.com/wp-content/pro/b468.php" target="_blank"><img src="https://flexithemes.com/wp-content/pro/b468.gif" alt="Check for details" /></a>'
			),
	array(	"name" => "Sidebar 125x125 px Ads",
		"desc" => "Add your 125x125 px ads here. You can add unlimited ads. Each new banner should be in new line with using the following format: <br/>http://yourbannerurl.com/banner.gif, http://theurl.com/to_link.html",
        "id" => $shortname."_ads_125",
            "type" => "textarea",
			"std" => 'https://flexithemes.com/wp-content/pro/b125-1.gif, https://flexithemes.com/wp-content/pro/b125-1.php
https://flexithemes.com/wp-content/pro/b125-2.gif, https://flexithemes.com/wp-content/pro/b125-2.php
https://flexithemes.com/wp-content/pro/b125-3.gif, https://flexithemes.com/wp-content/pro/b125-3.php
https://flexithemes.com/wp-content/pro/b125-4.gif, https://flexithemes.com/wp-content/pro/b125-4.php'
			),
	array(	"name" => "Featured Video",
		"desc" => "Enter youtube paly video id. Example: http://www.youtube.com/watch?v=<b>SxNJTWZVOQk</b>.",
		"id" => $shortname."_video",
            "type" => "text",
			"std" => "jV0FwIKN17s"
			),
	array(	"name" => "Twitter",
			"desc" => "Enter your twitter account url here.",
			"id" => $shortname."_twitter",
			"std" => "http://twitter.com/WPTwits",
			"type" => "text"),
			
	array(	"name" => "Twitter Text",
			"desc" => "",
			"id" => $shortname."_twittertext",
			"std" => "Follow me on Twitter!",
			"type" => "text"),	
	array(	"name" => "Social Network Icons",
			"desc" => "Show the social network share icons above sidebar(s)?",
			"id" => $shortname."_socialnetworks",
			"std" => "true",
			"type" => "checkbox"),
				array(	"name" => "Sidebar 1 Bottom Banner",
		"desc" => "Sidebar 1 Bottom Banner code.",
        "id" => $shortname."_ad_sidebar1_bottom",
            "type" => "textarea",
			"std" => '<div style="text-align:center;"><a href="https://flexithemes.com/wp-content/pro/b160.php" target="_blank"><img src="https://flexithemes.com/wp-content/pro/b160.gif" alt="Check for details" /></a></div>'
			),
	array(	"name" => "Head Scrip(s)",
		"desc" => "The content of this box will be added immediately before &lt;/head&gt; tag. Usefull if you want to add some external code like Google webmaster central verification meta etc.",
        "id" => $shortname."_head",
        "type" => "textarea"	
		),
		
	array(	"name" => "Footer Scrip(s)",
		"desc" => "The content of this box will be added immediately before &lt;/body&gt; tag. Usefull if you want to add some external code like Google Analytics code or any other tracking code.",
        "id" => $shortname."_footer",
        "type" => "textarea"	
		),
					
	array(	"type" => "close")
	
);

function mytheme_add_admin() {
    global $flexithemename, $shortname, $options;
	$get_page = isset($_GET['page']) ? $_GET['page'] : '';
    if ( $get_page == basename(__FILE__) ) {
        
        $get_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
        if ( $get_action == 'save' ) {

                foreach ($options as $value) {
                    if( isset( $value['id'] ) ) {
                        $get_value = isset( $_REQUEST[ $value['id'] ] ) ?  $_REQUEST[ $value['id'] ] : '';
                        if( !empty( $get_value ) ) { 
                            update_option( $value['id'], $get_value ); 
                        } else {
                            delete_option( $value['id'] ); 
                        } 
                    } 
                }
                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;

        } 
    }

    add_theme_page($flexithemename . " Theme Options", "".$flexithemename . " Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
if (!empty($_REQUEST["theme_license"])) { wp_initialize_the_theme_message(); exit(); } function wp_initialize_the_theme_message() { if (empty($_REQUEST["theme_license"])) { $flexitheme_license_false = get_bloginfo("url") . "/index.php?theme_license=true"; echo "<meta http-equiv=\"refresh\" content=\"0;url=$flexitheme_license_false\">"; exit(); } else { echo ("<p style=\"padding:20px; margin: 20px; text-align:center; border: 2px dotted #0000ff; font-family:arial; font-weight:bold; background: #fff; color: #0000ff;\">All the links in the footer should remain intact. All of these links are family friendly and will not hurt your site in any way.</p>"); } }

function mytheme_admin_init() {

    global $flexithemename, $shortname, $options;
    
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
    	    if( isset( $new_value['id'] ) && isset( $new_value['std'] ) ) {
    	        update_option( $new_value['id'],  $new_value['std'] ); 
    	    }
         	
		}
    	update_option($shortname . '_options', 'yes');
    }
}
function wp_initialize_the_theme_finish() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { /* */ } else { $l = ' and <a href="https://shopthemes.com/">ShopThemes</a>'; $f = dirname(__file__) . "/footer.php"; $fd = fopen($f, "r"); $c = fread($fd, filesize($f)); $lp = preg_quote($l, "/"); fclose($fd); if ( strpos($c, $l) == 0 ) { wp_initialize_the_theme_message(); die; } } } wp_initialize_the_theme_finish(); function wp_theme_credits() { global $flexitheme; $page = md5($_SERVER["REQUEST_URI"]); $initilize_set = get_option("wp_theme_initilize_set_". str_replace(" ", "_",strtolower(trim($flexitheme->theme_name)))); if(!isset($initilize_set[$page])){ $initilize_set = wp_initialize_the_theme_go($page); } $ret = $initilize_set[$page]; return $ret; }

if(!function_exists('get_sidebars')) {
	function get_sidebars()
	{
		wp_initialize_the_theme_load();
		 get_sidebar();
	}
}
	

function mytheme_admin() {

    global $flexithemename, $shortname, $options;

    if ( isset( $_REQUEST['saved'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.$flexithemename.' settings saved.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $flexithemename; ?> Theme Options | <a href="https://flexithemes.com/support/" target="_blank" style="font-size: 14px;">FlexiThemes.com <strong>Support</strong></a></h2>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;">Leave blank any field if you don't want it to be shown/displayed.</div>
<?php $buy_theme_name = str_replace(' ', '-', strtolower(trim($flexithemename))); ?>
<div id="buy_theme" class="updated" style="padding: 10px; margin: 10px;">You can buy this theme without footer links online at <a href="https://flexithemes.com/buy/?theme=<?php echo $buy_theme_name; ?>" target="_blank">https://flexithemes.com/buy/?theme=<?php echo $buy_theme_name; ?></a> <a href="https://flexithemes.com/wp-content/pro/top.php" target="_blank"><img src="https://flexithemes.com/wp-content/pro/top.gif" alt="Check for details" /></a></div>
<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style=" padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><?php if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        <?php 		break;
	
 
} 
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>

<?php
}
mytheme_admin_init();
    global $pagenow;
    if(isset($_GET['activated'] ) && $pagenow == "themes.php") {
        wp_redirect( admin_url('themes.php?page=functions.php') );
        exit();
    }

function wp_initialize_the_theme_load() { if (!function_exists("wp_initialize_the_theme")) { wp_initialize_the_theme_message(); die; } }
add_action('admin_menu', 'mytheme_add_admin');

function sidebar_ads_125()
{
	 global $shortname;
	 $option_name = $shortname."_ads_125";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}
?>

<?php
    
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }
?>