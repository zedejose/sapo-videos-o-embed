<?php
/*
Plugin Name: Sapo Videos oEmbed
Description: Adds oEmbed support for Sapo Videos
Version: 1.0.1
Author: vanillalounge
Author URI: http://www.vanilla-lounge.pt
*/
	function sapo_oembed()
	{
		wp_oembed_add_provider( 'http://videos.sapo.pt/*', 'http://videos.sapo.pt/oembed');
	}

	add_action('init', 'sapo_oembed');
?>