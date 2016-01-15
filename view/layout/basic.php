<!DOCTYPE html>
<html>
    <head prefix="og: http://ogp.me/ns#">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        
        <?php $title = Response::getMetaTitle() ?: Response::guessMetaTitle($content) ?>
        <?php $title = $title ? 
                          $title . (strpos($title, 'LBRY') === false ? ' - LBRY' : '') :
                          'LBRY' ?>
        <title><?php echo $title ?></title>
        
        <link href='//fonts.googleapis.com/css?family=Raleway:600,300' rel='stylesheet' type='text/css'>
        <link href="/css/all.css" rel="stylesheet" type="text/css" media="screen,print" />
        <link rel="apple-touch-icon" sizes="60x60" href="/img/fav/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/fav/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/fav/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/fav/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/fav/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/img/fav/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/img/fav/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/img/fav/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/img/fav/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/img/fav/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/img/fav/manifest.json">

        <meta name="description" content="<?php echo Response::getMetaDescription() ?>">
        <meta name="msapplication-TileColor" content="#155B4A">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#155B4A">        
        <!-- Twitter Card data -->
        <meta name="twitter:site" content="@lbryio">
        <meta name="twitter:creator" content="@lbryio">

        <meta property="fb:app_id" content="1673146449633983" />

        <!-- Open Graph data -->
        <meta property="og:title" content="<?php echo $title ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php echo Response::getMetaImage() ?>" />
        <meta property="og:description" content="<?php echo Response::getMetaDescription() ?>"/>
        <meta property="og:site_name" content="LBRY" />
        
        <base target="_parent" />
    </head>
    <body>
      <?php echo $content ?>
      <div class="hide">
        <div id="fb-root"></div>
        <div id="js">
          <script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1477813539180850"></script>
          <script id="twitter-oct" src="https://platform.twitter.com/oct.js"></script>
          <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
          <?php foreach(Response::getJsAssets() as $src): ?>
            <script src="<?php echo $src ?>"></script>
          <?php endforeach ?>
          <?php echo View::render('analytics/track') ?>
          <?php $js = Response::getJsCalls() ?>
          <?php if ($js): ?>
            <script><?php echo implode("\n", $js) ?></script>
          <?php endif ?>
        </div>
      </div>
    </body>
</html>