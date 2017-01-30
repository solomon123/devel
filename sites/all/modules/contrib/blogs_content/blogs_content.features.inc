<?php
/**
 * @file
 * blogs_content.features.inc
 */

/**
 * Implements hook_views_api().
 */
function blogs_content_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function blogs_content_node_info() {
  $items = array(
    'blogs' => array(
      'name' => t('Blogs'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
