<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= html($page->title()) ?> — A Letter from Benjamin</title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= $page->excerpt() ?>" />
  <meta name="Keywords" content="Benjamin, Wiederkehr, Benjamin Wiederkehr" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= $site->copyright() ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="en" />
  <meta name="Robots" content="ALL" />
  <meta property="og:title" content="<?= html($page->title()) ?>" />
  <meta property="og:description" content="<?= $page->excerpt() ?>" />
  <meta property="og:url" content="<?= html($page->url()) ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <link rel="image_src" href="<?= $page->images()->first()->url() ?>" />
  <meta property="og:image" content="<?= $page->images()->first()->url() ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('http://fonts.googleapis.com/css?family=Cutive+Mono') ?>
  <?= css('assets/css/style.css') ?>
  <?= css('assets/css/letters.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
</head>

<body>