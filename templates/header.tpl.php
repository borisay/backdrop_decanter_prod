<?php
/**
 * @file
 * Display generic site information such as logo, site name, etc.
 *
 * Available variables:
 *
 * - $base_path: The base URL path of the Backdrop installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $front_page: The URL of the front page. Use this instead of $base_path, when
 *   linking to the front page. This includes the language domain or prefix.
 * - $site_name: The name of the site, empty when display has been disabled.
 * - $site_slogan: The site slogan, empty when display has been disabled.
 * - $menu: The menu for the header (if any), as an HTML string.
 */
?>
<a href="#main-content" class="su-skiplinks ">Skip to main content</a>
<div class="su-brand-bar ">
  <div class="su-brand-bar__container">
    <a class="su-brand-bar__logo" href="https://stanford.edu">
      Stanford University
      <span class="su-brand-bar__link--a11y">(link is external)</span>
    </a>
  </div>
</div>
<section class="container">
  <section class="flex-container">
    <?php if ($site_name || $logo || $site_slogan): ?>
      <a class="su-lockup" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        <?php endif; ?>
        <?php if ($site_name): ?>
          <span><?php print $site_name; ?></span>
        <?php endif; ?>
      </a>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div class="header-site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>

    <?php if ($navigation or $menu): ?>
      <?php if ($menu) print $menu; ?>
      <?php if ($navigation) print $navigation; ?>
    <?php endif; ?>
  </section>
</section>
