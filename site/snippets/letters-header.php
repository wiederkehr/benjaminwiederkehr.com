<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= html($page->title()) ?></title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= excerpt($page->text(), 300) ?>" />
  <meta name="Keywords" content="<?= html($site->keywords()) ?>" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= $site->copyright() ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="en" />
  <meta name="Robots" content="ALL" />
  <meta property="og:title" content="<?= html($page->title()) ?>" />
  <meta property="og:description" content="<?= excerpt($page->text(), 300) ?>" />
  <meta property="og:url" content="<?= html($page->url()) ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <link rel="image_src" href="<?= html($site->url()) ?>/assets/img/logos/benjaminwiederkehr_letters_logo_dark.png" />
  <meta property="og:image" content="<?= html($site->url()) ?>/assets/img/logos/benjaminwiederkehr_letters_logo_dark.png" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('http://fonts.googleapis.com/css?family=Cutive+Mono') ?>
  <?= css('assets/css/style.css') ?>
  <?= css('assets/css/responsive.css') ?>
  <?= css('assets/css/letters.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
</head>

<body>