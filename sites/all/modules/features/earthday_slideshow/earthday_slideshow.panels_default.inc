<?php
/**
 * @file
 * earthday_slideshow.panels_default.inc
 */

/**
 * Implements hook_default_panels_mini().
 */
function earthday_slideshow_default_panels_mini() {
  $export = array();

  $mini = new stdClass();
  $mini->disabled = FALSE; /* Edit this to true to make a default mini disabled initially */
  $mini->api_version = 1;
  $mini->name = 'highlighted';
  $mini->category = 'Earthday TW';
  $mini->admin_title = '首頁輪播';
  $mini->admin_description = '';
  $mini->requiredcontexts = array();
  $mini->contexts = array();
  $mini->relationships = array();
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
  $display->title = '';
  $display->uuid = '7bc34d1c-14a3-4e2d-817e-5bbc24f61304';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-d3603972-8920-4a8d-969e-7466994885f7';
    $pane->panel = 'middle';
    $pane->type = 'views_panes';
    $pane->subtype = 'earthday_slideshow-earthday_slideshow_pane';
    $pane->shown = TRUE;
    $pane->access = array(
      'plugins' => array(
        0 => array(
          'name' => 'front',
          'settings' => NULL,
          'not' => FALSE,
        ),
      ),
    );
    $pane->configuration = array(
      'arguments' => array(
        'field_category_tid' => '',
      ),
      'items_per_page' => '8',
      'fields_override' => array(
        'path' => 0,
        'field_link' => 0,
        'field_image' => 1,
        'title_field' => 0,
        'body' => 0,
        'nothing' => 1,
      ),
      'override_title' => 1,
      'override_title_text' => '',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'd3603972-8920-4a8d-969e-7466994885f7';
    $display->content['new-d3603972-8920-4a8d-969e-7466994885f7'] = $pane;
    $display->panels['middle'][0] = 'new-d3603972-8920-4a8d-969e-7466994885f7';
  $display->hide_title = PANELS_TITLE_NONE;
  $display->title_pane = 'new-d3603972-8920-4a8d-969e-7466994885f7';
  $mini->display = $display;
  $export['highlighted'] = $mini;

  return $export;
}
