<?php View::setLayout(false) ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>LBRY</title>

        <link href='//fonts.googleapis.com/css?family=Raleway:600,300' rel='stylesheet' type='text/css'>
        <link href="/css/app/all.css" rel="stylesheet" type="text/css" media="screen,print" />
        <link rel="icon" type="image/png" href="/img/fav/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/img/fav/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/img/fav/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/img/fav/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/img/fav/favicon-16x16.png" sizes="16x16">

        <meta name="msapplication-TileColor" content="#155B4A">
        <meta name="msapplication-TileImage" content="/img/fav/mstile-144x144.png">
        <meta name="theme-color" content="#155B4A">
    </head>
    <body>
      <div id="canvas"></div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.6/react.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.6/react-dom.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
      <script src="/js/gui/lbry.js"></script>
      <script type="text/babel" src="/js/gui/gui.js"></script>
    </body>
</html>