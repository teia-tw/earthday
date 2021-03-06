<?php
/**
 * @file
 * earthday_shop.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function earthday_shop_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function earthday_shop_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function earthday_shop_node_info() {
  $items = array(
    'earthday_shop' => array(
      'name' => t('好康情報站'),
      'base' => 'node_content',
      'description' => t('各單位廠商提供的優惠活動。會在首頁輪播，並且在「地球日好康」頁全部列出。'),
      'has_title' => '1',
      'title_label' => t('標題'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
