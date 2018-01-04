<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= html($site->title()) ?></title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= html($site->description()) ?>" />
  <meta name="Keywords" content="<?= html($site->keywords()) ?>" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= html(date("Y").' '.$site->copyright()) ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="en" />
  <meta name="Robots" content="ALL" />
  <meta property="og:title" content="<?= html($site->title()) ?>" />
  <meta property="og:description" content="<?= html($site->description()) ?>" />
  <meta property="og:url" content="<?= html($site->url()) ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <link rel="image_src" href="<?= html($site->url()) ?>assets/img/logos/benjaminwiederkehr_logo.png" />
  <meta property="og:image" content="<?= html($site->url()) ?>assets/img/logos/benjaminwiederkehr_logo.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="<?= html($site->url()) ?>/assets/img/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('assets/css/style.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
  <script src="http://use.typekit.com/aea1puq.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <!-- ——————————————————————————————————————————————————————————————————— GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3202544-10"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-3202544-10');
  </script>
</head>

<body>
