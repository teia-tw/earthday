<?php
/**
 * @file
 * earthday_news.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function earthday_news_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'term_view_panel_context_2';
  $handler->task = 'term_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -28;
  $handler->conf = array(
    'title' => 'Panels: 世界新聞台',
    'no_blocks' => 0,
    'pipeline' => 'ipe',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => 'grid-3-col',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'term',
          'settings' => array(
            'vid' => '2',
            4 => array(),
            2 => array(
              3 => '3',
              34 => '34',
              53 => '53',
              35 => '35',
              37 => '37',
            ),
            3 => array(),
            5 => array(),
          ),
          'context' => 'argument_term_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%term:name';
  $display->uuid = '2c9365d5-7742-41dc-9b98-b0a571e113c4';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-12d602c1-0d20-4e37-a2c6-265de815c8c7';
    $pane->panel = 'middle';
    $pane->type = 'block';
    $pane->subtype = 'menu_block-1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => 'menu-tab',
      'css_class' => '',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '12d602c1-0d20-4e37-a2c6-265de815c8c7';
    $display->content['new-12d602c1-0d20-4e37-a2c6-265de815c8c7'] = $pane;
    $display->panels['middle'][0] = 'new-12d602c1-0d20-4e37-a2c6-265de815c8c7';
    $pane = new stdClass();
    $pane->pid = 'new-24d5cb5f-022e-4626-a757-7522733f18b2';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'taxonomy_term-pane';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'arguments' => array(
        'term_node_tid_depth' => '%term:tid',
        'term_node_tid_depth_modifier' => '',
      ),
      'more_link' => 0,
      'items_per_page' => '9',
      'offset' => '0',
      'path' => 'taxonomy/term/%',
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '24d5cb5f-022e-4626-a757-7522733f18b2';
    $display->content['new-24d5cb5f-022e-4626-a757-7522733f18b2'] = $pane;
    $display->panels['middle'][1] = 'new-24d5cb5f-022e-4626-a757-7522733f18b2';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['term_view_panel_context_2'] = $handler;

  return $export;
}
