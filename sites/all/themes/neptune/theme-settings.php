<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function neptune_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }
  // Add custom theme settings for Neptune.
  // The form is created using Forms API: http://api.drupal.org/api/7.
  $form['custom'] = array(
    '#type'   => 'fieldset',
    '#title'  => t('Custom settings'),
    '#weight' => -15,
  );
  $form['custom']['neptune_layout'] = array(
    '#type'          => 'radios',
    '#title'         => t('Layout'),
    '#options'       => array(0 => t('Single column'),
                              1 => t('Right sidebar'),
                              2 => t('Left sidebar')),
    '#default_value' => theme_get_setting('neptune_layout'),
  );
  $form['custom']['neptune_max_width'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Max width'),
    '#description'   => t('The maximum width of the site in pixels (px).'),
    '#default_value' => theme_get_setting('neptune_max_width'),
    '#size'          => 5,
    '#maxlength'     => 10,
  );
  $form['custom']['neptune_display_main_menu'] = array(
    '#type'          => 'checkbox',
    '#title'         => t("Display Drupal's default main menu"),
    '#default_value' => theme_get_setting('neptune_display_main_menu'),
    '#description'   => t("You may want to uncheck this option if you're using a different method to display the main menu, e.g. the main menu block."),
  );
  // We are editing the $form in place, so we don't need to return anything.
}
