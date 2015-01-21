<?php
// REGISTER THE Video POST TYPE
add_action('init', 'cptui_register_my_cpt_classified');
function cptui_register_my_cpt_classified() {
register_post_type('classified', array(
'label' => 'Classifieds',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'classified', 'with_front' => true),
'query_var' => true,
'has_archive' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Classifieds',
  'singular_name' => 'Classified',
  'menu_name' => 'Classifieds',
  'add_new' => 'Add Classified',
  'add_new_item' => 'Add New Classified',
  'edit' => 'Edit',
  'edit_item' => 'Edit Classified',
  'new_item' => 'New Classified',
  'view' => 'View Classified',
  'view_item' => 'View Classified',
  'search_items' => 'Search Classifieds',
  'not_found' => 'No Classifieds Found',
  'not_found_in_trash' => 'No Classifieds Found in Trash',
  'parent' => 'Parent Classified',
)
) ); }