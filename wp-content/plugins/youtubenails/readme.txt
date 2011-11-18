=== YouTubeNails ===
Contributors: alvaron
Donate link: http://www.wpworks.wordpress.com/
Tags: youtube,thumbnails,video
Requires at least: 3.0.3
Tested up to: 3.0.3
Stable tag: 2.0.0

== Description ==

Create a dynamic gallery widget(works as shortcode too, if desired), with thumbnails of each post with youtube videos displayed on the content linked to the post permalink. It checks all you video posts, but you can filter them by category and choose the number of posts.

Based on 

Media Library Gallery 1.0.2 (http://www.cybwarrior.com/media-library-gallery/) by Raphael Verchere(http://www.cybwarrior.com)

Video Thumbnails 1.0.7(http://sutherlandboswell.com/2010/11/wordpress-video-thumbnails/) by Sutherland Boswell(http://sutherlandboswell.com)

and

Simple Video Embedder(http://www.press75.com/the-simple-video-embedder-wordpress-plugin/) by James Lao(http://jameslao.com/)

Special thanks to Felipe Caroé http://www.felipecaroe.com/ for suggesting the name!


== Installation ==

See it working on: http://www.felipecaroe.com/galeriavideos/

1. Upload `youtubenails` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Register a widget sidebar on your functions file, for example, just paste the code below on your theme functions.php

/*if ( function_exists('register_sidebar') )
register_sidebar(array(
	'name' => 'wp_youtubenails',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
));*/

Or

You if you have already registered any sidebar, you can drag the `YouTubeNails` widget inside it, at wp-admin

4. Configure the widget on your wp-admin pannel and save(see screenshot 1)
5. Use the PHP code bellow where you want the widget to show, on your theme pages
/* If ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('wp_youtubenails')) : endif; */
6. Always add the youtube video urls on your posts using the "add video" icon. To add object and iframe tags, use the html edition mode.
7. The table id for the result table wp_ytbnstb;

To work as short code

call it on php  youtubenails_show(8,1,'',2,3,3);

where the parameters are

$nop - the number of posts you want to show;
$ln - number of columns on each row;
$catg - a specific category;
$tbsz - the thumbnail type based on YouTube API http://code.google.com/intl/en-UK/apis/youtube/2.0/developers_guide_protocol.html;
$cpad - the result table cellpadding;
$cpin - the result table cellspacing;

== Frequently Asked Questions ==

It`s very easy to use as you see, let me know about doubts and issues alvaron8@gmail.com;

== Screenshots ==

Please let me know about the way you use the plugin, send some screenshots from it to alvaron8@gmail.com

1. Configuring the widget.
2. See it working on http://www.felipecaroe.com/galeriavideos/

== Changelog ==
2.0.0

Now YouTubeNails is a configurable widget. 


== Upgrade Notice ==
This is the second version, that works as a widget. If you need support for the first version, let me know alvaron8@gmail.com

== Arbitrary section ==
This Plugin supports all the kind of YouTube inserts bellow
Don't forget to include the video links using the midia icon, putting your link and a title
If you decide to use iframe and embed object, please use the html code insert on the post

<!--
<iframe title="YouTube video player" class="youtube-player" type="text/html" width="480" height="390" src="http://www.youtube.com/embed/yXYW4c-FndI" frameborder="0" allowFullScreen></iframe>

http://youtu.be/38W6G3Ud7ms

http://www.youtube.com/watch?v=38W6G3Ud7ms

<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/38W6G3Ud7ms?fs=1&amp;hl=pt_BR"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/38W6G3Ud7ms?fs=1&amp;hl=pt_BR" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>-->

This readme file were validated at http://wordpress.org/extend/plugins/about/validator/