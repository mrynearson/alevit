<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?> ">
  <div id="page" class="container-12 clearfix">

    <div id="site-header" class="clearfix">
    
    <div class="grid-7 push-5"><img src ="http://69.36.11.79/~alevit/alexandralevit.com/drupal-6.20/sites/all/themes/zen_ninesixty/images/money.png" /></div>
 
            <div id="social-buttons" class="grid-3 push-2">
            <img src ="http://69.36.11.79/~alevit/alexandralevit.com/drupal-6.20/sites/all/themes/zen_ninesixty/images/social_linkedin.png" />
               <img src ="http://69.36.11.79/~alevit/alexandralevit.com/drupal-6.20/sites/all/themes/zen_ninesixty/images/social_twitter.png" />
                  <img src ="http://69.36.11.79/~alevit/alexandralevit.com/drupal-6.20/sites/all/themes/zen_ninesixty/images/social_facebook.png" />
                     <img src ="http://69.36.11.79/~alevit/alexandralevit.com/drupal-6.20/sites/all/themes/zen_ninesixty/images/social_email.png" />            
            
            
            </div>
  
  
      
      <div id="branding" class="grid-3 clearfix">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-1  alpha"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      
      
          
      
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class="grid-2 omega"><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      
      
      
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="grid-2 omega"><?php print $site_slogan; ?></div>
      <?php endif; ?>
      </div>

    <?php if ($main_menu_links || $secondary_menu_links): ?>
      <div id="site-menu" class="grid-9">
        <?php print $main_menu_links; ?>
        <?php print $secondary_menu_links; ?>
      </div>
    <?php endif; ?>

    <?php if ($search_box): ?>
      <div id="search-box" class="grid-4 prefix-8"><?php print $search_box; ?></div>
    <?php endif; ?>
    </div>
    


    
  <?php if ($mission || $header): ?>
    <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
    <?php if ($mission): ?>
      <div id="mission" class="<?php print ns('grid-10', $header, 5); ?>">
        <?php print $mission; ?>
      </div>
    <?php endif; ?>

    <?php if ($header): ?>
      <div id="header-region" class="region<?php print ns(' grid-10', $mission, 5); ?>">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>
  <?php endif; ?>


    <div id="main" class="column<?php print ns(' grid-12', $left, 3, $right, 2) . ns(' push-3', !$left, 3); ?>">
      <?php print $breadcrumb; ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title">
        <?php print $title; ?>
      </h1>
    <?php endif; ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print $tabs; ?>
      </div>
    <?php endif; ?>
      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region">
        <?php print $content; ?>
      </div>

      <?php print $feed_icons; ?>
    </div>

  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-3<?php print ns(' pull-9', $right, 2); ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-2">
      <?php print $right; ?>
    </div>
  <?php endif; ?>


    <div id="footer" class="clear clearfix prefix-1 suffix-1">
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-10">
        <?php print $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-10">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
    </div>


  </div>
  <?php print $closure; ?>
</body>
</html>

