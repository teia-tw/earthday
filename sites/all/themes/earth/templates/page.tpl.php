<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page">

  <div id="header-wrapper">
    <header id="header" role="banner">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <hgroup id="name-and-slogan">
          <?php if ($site_slogan): ?>
            <h1 id="site-slogan"><?php print $site_slogan; ?></h1>
          <?php endif; ?>
          <?php if ($site_name): ?>
            <h2 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h2>
          <?php endif; ?>
        </hgroup><!-- /#name-and-slogan -->
      <?php endif; ?>

      <div id="links">
        <a href="https://www.facebook.com/EarthDayTW" target="_blank"><img src="/sites/all/themes/earth/images/fb.png" alt="台灣地球日粉絲團" title="台灣地球日粉絲團"/></a>
        <a href="http://www.e-info.org.tw/" target="_blank"><img src="/sites/all/themes/earth/images/teia.png" alt="台灣環境資訊協會" title="台灣環境資訊協會"/></a>
        <a href="https://e-info.neticrm.tw/civicrm/profile/create?gid=56&amp;reset=1" target="_blank"><img src="/sites/all/themes/earth/images/epaper.png" alt="地球日電子報" title="地球日電子報"/></a></div>

      <?php print render($page['header']); ?>

      <?php if ($secondary_menu): ?>
        <nav id="secondary-menu" role="navigation">
          <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => $secondary_menu_heading,
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
    </header>
  </div>
  <div id="navigation-wrapper">
    <div id="navigation">

      <?php
        $navigation = render($page['navigation']);
        if ($main_menu || $navigation): ?>
        <nav id="main-menu" role="navigation">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
          <?php print $navigation; ?>
        </nav>
      <?php endif; ?>
    </div><!-- /#navigation -->
  </div>
  <?php
    $highlighted = render($page['highlighted']);
    if ($highlighted) : ?>
  <div id="highlighted-wrapper">
    <div id="highlighted">
      <?php print $highlighted; ?>
    </div>
  </div>
  <?php endif; ?>

  <div id="main-wrapper">
    <div id="main">

      <div id="content" class="column" role="main">
        <?php // print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div><!-- /#content -->

    </div><!-- /#main -->
  </div>

  <div id="footer-wrapper">
    <?php
      // Render the sidebars to see if there's anything in them.
      $footer_left  = render($page['footer_left']);
      $footer_right = render($page['footer_right']);
    ?>

    <?php if ($footer_left || $footer_right): ?>
      <footer id="footer-left-right">
        <?php print $footer_left; ?>
        <?php print $footer_right; ?>
      </footer><!-- /.footers -->
    <?php endif; ?>

    <?php print render($page['footer']); ?>

  </div>

</div><!-- /#page -->

<?php print render($page['bottom']); ?>
