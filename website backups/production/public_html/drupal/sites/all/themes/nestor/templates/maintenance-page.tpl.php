<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */

?>

<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,700%7cBitter:400,700' rel='stylesheet' type='text/css'>
    <link href='<?php print $nestor_base_url; ?>/sites/default/files/fontyourface/font.css' rel='stylesheet' type='text/css' />
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    
    <div class="mainWrapper">

      <header class="bg-color-grayLight1" style="background-color: white !important;">
        <div class="container">
          <div class="row">

            <?php if ($logo) : ?>
              <div id="logo-region" class="logo col-md-12 text-center">
                <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" /></a>
              </div> <!-- /logo-region -->
            <?php elseif ($site_name) : ?>
              <div id="logo-region" class="logo col-md-12 text-center">
                <a href="<?php print $front_page; ?>"><h1><?php print $site_name; ?></h1></a>
              </div> <!-- /logo-region -->
            <?php endif; ?>

          </div> <!-- /row -->
        </div> <!-- container -->
      </header>

      <div id="content-region" class="region">

        <div id="maintenance-content-block" class="maintenance-content block">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-offset-2 col-md-8 text-center">

                <?php if ($maintenanceOrConstruction === "maintenance") : ?>
                  <i class="icon ion-ios7-medkit-outline size-128 text-color-theme"></i>
                  <?php if ($title): ?>
                    <h2><b><?php print $title; ?></b></h2>
                  <?php endif; ?>
                <?php else : ?>
                  <i class="icon ion-ios7-time-outline size-128 text-color-theme"></i>
                  <h2><b><?php print t('Site under construction'); ?></b></h2>
                <?php endif; ?>
                
                <p><?php print $content; ?></p>                
              
              </div> <!-- /col-xs-12 -->
            </div> <!-- /row -->
          </div> <!-- /container -->
        </div> <!-- /maintenance-content-block -->

      </div> <!-- /content-region -->

    </div> <!-- /mainWrapper -->

    <?php print $scripts; ?>
    <!--[if lte IE 9]>
      <script src="<?php print $nestor_base_url; ?>/sites/all/themes/nestor/js/jquery.placeholder.js"></script>
    <![endif]-->
  </body>

</html>
