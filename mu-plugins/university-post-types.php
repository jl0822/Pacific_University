<?php 
function university_post_types () {
	  // Campus Post type
  register_post_type('campus', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

	// Events Post Type
	register_post_type('event', array(
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'events'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
		   'name' => 'Events',
		   'add_new_item' => 'Add New Event',
		   'edit_item' => 'Edit Event',
		   'all_items' => 'All Events',
		   'singular_name' => 'Event'

		),
		'menu_icon' => 'dashicons-calendar'
	));

	// Program Post Type
	register_post_type('program', array(
		'supports' => array('title', 'editor',),
		'rewrite' => array('slug' => 'programs'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
		   'name' => 'programs',
		   'add_new_item' => 'Add New program',
		   'edit_item' => 'Edit program',
		   'all_items' => 'All programs',
		   'singular_name' => 'program',

		),
		'menu_icon' => 'dashicons-awards'
	));

	// Professor Post Type
	register_post_type('professor', array(
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => true,
		'labels' => array(
		   'name' => 'professor',
		   'add_new_item' => 'Add New profeesor',
		   'edit_item' => 'Edit professor',
		   'all_items' => 'All professors',
		   'singular_name' => 'professor',

		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));
}

add_action('init', 'university_post_types');

