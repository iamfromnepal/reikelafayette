<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Reiki_Lafayette
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function reiki_lafayette_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'reiki_lafayette_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function reiki_lafayette_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'reiki_lafayette_pingback_header');

function content_box($attrs = array())
{
	extract(shortcode_atts(array(
		'paragraph' => '',
		'classes' => '',
		'heading' => '',
		'offtext' => '',
		'headingsig' => '',
		'heading' => '',
	), $attrs));

	if ($offtext) {
		$offtext = '<span class="box-text__off">' . $offtext . '</span>';
	} else {
		$offtext = '';
	}

	if ($headingsig) {
		$headingsig = '<span>' . $headingsig . '</span>';
	} else {
		$offtext = '';
	}

	if ($heading) {
		$heading = '<h2 class="heading-primary">' . $headingsig . $heading . '</h2>';
	} else {
		$heading = '';
	}

	if ($paragraph) {
		$paragraph = '<p>' . $paragraph . '</p>';
	} else {
		$paragraph = '';
	}

	$boxContent = $offtext . $heading . $paragraph;

	return
		'<div class="' . $classes . '">'
		. $boxContent .
		'</div>';
}
add_shortcode('contentbox', 'content_box');
