<?php
/*
Plugin Name: LST jobs
Plugin URI: www.uklst.com
This will help you to post jobs on website . WITH MORE FEATURE 

Version: 1.1.1.2
Author: Imran niaz (UKLST  Developers team)
Author URI: www.uklst.com
License: GPLv2
*/


 

function uklst_job_new () {
	$testimoniallabels = array (	

		'name' => __('Testimonial','uklst_job_new'),

		'singular_name' => __('Testimonial','uklst_job_new'),

		'add_new' => __('Add testimonial',' uklst_job_new'),

		'add_new_item' => __('Add new testimonial',' uklst_job_new'),

		'edit_item' => __('Edit testimonial',' uklst_job_new'),

		'new_item' => __('Add new testimonial',' uklst_job_new'),

		'all_items' => __('All testimonial',' uklst_job_new'),

		'view_item' => __('View testimonial',' uklst_job_new'),

		'search_item' => __('Search testimonial',' uklst_job_new'),

		'not_found' => __('No testimonial found..',' uklst_job_new'),

		'not_found_in_trash' => __('No testimonial found in Trash.',' uklst_job_new'),

		'menu_name' => 'Testimonial'

	

	);

	$args = array(

		'labels' => $testimoniallabels,
		'hierarchical' => true,
		'description' => 'Manages testimonial',
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
		'menu_icon' => plugins_url( 'images/testimonial.png', __FILE__ ),		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('testimonial',$args);
	}
add_action ('init','uklst_job_type ');

function  uklst_job_new_taxonomy () {
	$taxonomylabels = array(

	'name' => __('Category testimonial',' uklst_job_new'),

	'singular_name' => __('Category testimonial',' uklst_job_new'),

	'search_items' => __('Search Category testimonial',' uklst_job_new'),

	'all_items' => __('All Category testimonial',' uklst_job_new'),

	'edit_item' => __('Edit Category testimonial',' uklst_job_new'),

	'add_new_item' => __('Add new Category testimonial',' uklst_job_new'),

	'menu_name' => __('Category testimonial',' uklst_job_new'),

	);

	$args = array(

	'labels' => $taxonomylabels,

	'hierarchical' => true,

);
	register_taxonomy('category_testimonial','testimonial',$args);
}
add_action ('init','ot_testimonial_taxonomy',0);

?>