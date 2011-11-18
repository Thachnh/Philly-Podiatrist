<?php
/*
Plugin Name: YouTubeNails
Plugin URI: http://youtubenails.sourceforge.net/
Description:Create a dynamic gallery of thumbnails of each post with youtube videos displayed on the content linked to the post permalink
Version: 2.0.0
Author: Alvaro Neto
Author URI: http://wpworks.wordpress.com/
License: GPL2
*/

/*  Copyright 2011  Alvaro Neto  (email : alvaron8@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function partrat($par,$def)
{
  // echo "par:".$par;
    if($par =='' || $par < 0){		
		$par = $def;
		//echo "teste:".$par;
	}
	//echo "teste2:".$par;
	return $par;
}
 
function youtubenails_show($nop=8,$ln=3,$catg='',$tbsz=2,$cpad=3,$cpin=3)
{
	$nop = partrat($nop,8);
	$ln = partrat($ln,3);
	$catg = partrat($catg,'');
	$tbsz = partrat($tbsz,2);
	$cpad = partrat($cpad,3);
	$cpin = partrat($cpin,3);
	
	//echo "cpad:".$cpad."<br>";
	// $nop - the number of posts you want to show
	// $ln - number of columns on each row
	// $catg - a specific category
	// $tbsz - the thumbnail type based on YouTube API 			http://code.google.com/intl/en-UK/apis/youtube/2.0/developers_guide_protocol.html
	// $cpad - the result table cellpadding
	// $cpin - the result table cellspacing
	
	
	// here we check what type of thumbnail the user is asking for
	if($tbsz==2){
		$tbsz=rand(1,3);
	}
	
	if (have_posts()) : 
	 // Gets the post's content
	 global $post;
	 	// we check if the user wants posts from specific a category
		if($catg!=''):
			$myposts = get_posts("numberposts=".$nop."&category_name='".$catg."'");
			//get_posts('category_name='.$catg);
		else:
			$myposts = get_posts("numberposts=".$nop);
			//get_posts();
		endif;
		
	 // gets the total count for the posts and checks if you have something to return
	 $lmtcnt = sizeof($myposts);
	 	if($lmtcnt>0):
			 $tbhtml = "<table cellpadding='".$cpad."' cellspacing='".$cpin."' border='0' id='wp_ytbnstb'>";
			 foreach($myposts as $post) :
			    $post_id = $post->ID;
				$post_array = get_post($post_id); 
				//$markup = get_the_content();
				
				//$markup = apply_filters('the_content',$markup);
				
				
				// Simple Video Embedder Compatibility
				//$markup = ytGetVideo($post_id);
	
	
				//if(function_exists('p75HasVideo')) {
				//	if ( p75HasVideo($post->ID) ) {
				//		$markup = p75GetVideo($post->ID);
				//	}
				//}
				$new_thumbnail = null;
				$markup = "";
				$markup = $post->post_content;
				
			
				//echo $markup;
				
				// Checks for a standard YouTube embed
				preg_match('#<object[^>]+>.+?http://www.youtube.com/v/([A-Za-z0-9\-_]+).+?</object>#s', $markup, $matches);
				
				
				
				// Checks for YouTube iframe
				if(!isset($matches[1])) {
					//echo "teste 1";
					preg_match('#http://www.youtube.com/embed/([A-Za-z0-9\-_]+)#s', $markup, $matches);
				}
			
				// Checks for any YouTube URL
				if(!isset($matches[1])) {
					//echo "teste 2";
					preg_match('#http://w?w?w?.?youtube.com/watch\?v=([A-Za-z0-9\-_]+)#s', $markup, $matches);
				}
				
				// Checks for any YouTube Short URL
				if(!isset($matches[1])) {
					//echo "teste 3";
					preg_match('#http://youtu.be/([A-Za-z0-9\-_]+)#s', $markup, $matches);
				}
				
				// If no standard YouTube embed is found, checks for one embedded with JR_embed
				if(!isset($matches[1])) {
					//echo "teste 4";
					preg_match('#\[youtube id=([A-Za-z0-9\-_]+)]#s', $markup, $matches);
				}
				
				//echo isset($matches[1]);
				
				// If we've found a YouTube video ID, create the thumbnail URL
				if(isset($matches[1])) {
					//echo "teste 5";
					$youtube_thumbnail = 'http://img.youtube.com/vi/' . $matches[1] . '/'.$tbsz.'.jpg';
					//echo $youtube_thumbnail;
					// Check to make sure it's an actual thumbnail
					if (!function_exists('curl_init')) {
						//echo "teste6";
						$new_thumbnail = $youtube_thumbnail;
					} else {
						//echo "teste7";
						$ch = curl_init($youtube_thumbnail);
						curl_setopt($ch, CURLOPT_NOBODY, true);
						curl_exec($ch);
						$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						// $retcode > 400 -> not found, $retcode = 200, found.
						curl_close($ch);
						//echo $retcode."<br>";
						if($retcode==200) {
							$new_thumbnail = $youtube_thumbnail;
						}
					}
				}
				//echo $new_thumbnail;
				$rwcnt = $rwcnt + 1;			
					if($new_thumbnail!=null):
					//echo "teste8";
						if($rwcnt==1):
							$tbhtml .= "<tr>";	
						endif;				
						$tbhtml .= "<td><a href='".get_post_permalink()."' title='".get_the_title()."'><img src='".$new_thumbnail."' alt='".get_the_title()."' border='0'></a></td>";
						if($rwcnt==$ln){
							$tbhtml .= "</tr>";
							$rwcnt=0;
						}
					endif;
				endforeach;
			$tbhtml .= "</table>";
			echo $tbhtml;
		endif;		
	endif; 
}

 
function widget_youtubenails_show($args) {


 extract($args);
 
  $options = get_option("widget_youtubenails_show");
  if (!is_array( $options ))
{
$options = array(
	  'nop' => '',
	  'ln' => '',
	  'catg' => '',
	  'tbsz' => '',
	  'cpad' => '',
	  'cpin ' => ''
      );
  }


    youtubenails_show($options['nop'],$options['ln'],$options['catg'],$options['tbsz'],$options['cpad'],$options['cpin']);
}
 
function youtubenails_control()
{
  $options = get_option("widget_youtubenails_show");
  if (!is_array( $options ))
{
$options = array(
	  'nop' => '',
	  'ln' => '',
	  'catg' => '',
	  'tbsz' => '',
	  'cpad' => '',
	  'cpin ' => ''
      );
  }
  
  if ($_POST['youtubenails-Submit'])
  {
	$options['nop'] = htmlspecialchars($_POST['youtubenails-Nop']);
	$options['ln'] = htmlspecialchars($_POST['youtubenails-Ln']);
	$options['catg'] = htmlspecialchars($_POST['youtubenails-Catg']);
	$options['tbsz'] = htmlspecialchars($_POST['youtubenails-Tbsz']);
	$options['cpad'] = htmlspecialchars($_POST['youtubenails-Cpad']);
	$options['cpin'] = htmlspecialchars($_POST['youtubenails-Cpin']);
    update_option("widget_youtubenails_show", $options);
  }
  // $nop - the number of posts you want to show
	// $ln - number of columns on each row
	// $catg - a specific category
	// $tbsz - the thumbnail type based on YouTube API 			http://code.google.com/intl/en-UK/apis/youtube/2.0/developers_guide_protocol.html
	// $cpad - the result table cellpadding
	// $cpin - the result table cellspacing
	//youtubenails_show($nop=8,$ln=3,$catg='',$tbsz=2,$cpad=3,$cpin=3)
?>
  <p>    
    <label for="youtubenails-Nop">Number of Posts(default is 8): </label><br />
    <input type="text" id="youtubenails-Nop" name="youtubenails-Nop" value="<?php echo $options['nop'];?>" size="4"/>
    <br />
    <label for="youtubenails-Ln">Number of columns on each row(default is 3): </label><br />
    <input type="text" id="youtubenails-Ln" name="youtubenails-Ln" value="<?php echo $options['ln'];?>" size="4"/>
    <br />
    <label for="youtubenails-Catg">A specific category of posts(default is all, leave it blank): </label><br />
    <input type="text" id="youtubenails-Catg" name="youtubenails-Catg" value="<?php echo $options['catg'];?>" size="20"/>
    <br />  
    <label for="youtubenails-Tbsz">The thumbnail type based on YouTube API(default is 2, see the list below): </label><br />
    <input type="text" id="youtubenails-Tbsz" name="youtubenails-Tbsz" value="<?php echo $options['tbsz'];?>" size="4"/>
    <br /><label style="font-size:9px">YouTube API sizes and types:<br /> 0 = big 480 x 360<br />
       		1 = small 120 x 90 different from 2 & 3<br />
       		2 = small 120 x 90 different from 1 & 3<br />
       		3 = small 120 x 90 different from 2 & 1</label><br />
    <br />  
     <label for="youtubenails-Cpad">The result table cellpadding(default is 3): </label><br />
    <input type="text" id="youtubenails-Cpad" name="youtubenails-Cpad" value="<?php echo $options['cpad'];?>" size="4"/>
    <br />
    <label for="youtubenails-Cpin">The result table cellspacing(default is 3): </label><br />
    <input type="text" id="youtubenails-Cpin" name="youtubenails-Cpin" value="<?php echo $options['cpin'];?>" size="4"/>
    <br />
    <label>The result list will be a table, that uses the css class 'wp_ytbnstb', so you can play with the table properties, and the inside elements.</label><br />
    <input type="hidden" id="youtubenails-Submit" name="youtubenails-Submit" value="1" />
  </p>  
<?php
}
 
function youtubenails_init()
{
  register_sidebar_widget(__('YouTubeNails'), 'widget_youtubenails_show');  
  register_widget_control(   'YouTubeNails', 'youtubenails_control', 400, 400 );
}
add_action("plugins_loaded", "youtubenails_init");
?>