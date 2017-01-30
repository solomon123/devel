<div class="l-page">
  <header class="l-header" role="banner">
    <div class="l-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php //print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($page['branding']); ?>
    </div>

    <?php print render($page['header']); ?>
    <?php print render($page['navigation']); ?>
  </header>

  <div class="l-top">
    <div class="l-main--video">
       <?php print render($page['main_video']); ?>
    </div>
    <div class="l-main--audio">
      <?php print render($page['main_audio']); ?>
    </div>
  </div>
  <div class="l-sectional" role="main">
      <?php print render($page['sectional_one']); ?>
      <?php print render($page['sectional_two']); ?>
      <?php print render($page['sectional_three']); ?>
    
  </div>

  <div class="l-main">
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <?php //print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if(drupal_is_front_page()){?>
      <?php $page['content']['system_main']['default_message']=array(); ?>
      <?php print render($page['content']); ?>
      <?php } ?>
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer_gallary']); ?>

    <?php print render($page['footer']); ?>
   
  </footer>


</div>
