<?php
/*
Plugin Name: WP PHP
Plugin URI: https://digitalpci.com/
Description: Use PHP via shortcodes in your posts and pages.
Author: Andrew Currie
Version: 1.0
*/

if( ! function_exists('worpdpress_php_parser') )
{

	function worpdpress_php_parser($content)
	{
		$wordpress_content = $content;
		preg_match_all('!\[wpphp[^\]]*\](.*?)\[/wpphp[^\]]*\]!is',$wordpress_content,$wordpress_content_matches);
		$wordpress_content_nummatches = count($wordpress_content_matches[0]);
		for( $wordpress_content_increment=0; $wordpress_content_increment<$wordpress_content_nummatches; $wordpress_content_increment++ )
		{
			ob_start();
			eval($wordpress_content_matches[1][$wordpress_content_increment]);
			$wordpress_content_replacement = ob_get_contents();
			ob_clean();
			ob_end_flush();
			$wordpress_content = preg_replace('/'.preg_quote($wordpress_content_matches[0][$wordpress_content_increment],'/').'/',$wordpress_content_replacement,$wordpress_content,1);
		}
		return $wordpress_content;
	} 

	add_filter( 'the_content', 'worpdpress_php_parser', 9 );

} 
?>