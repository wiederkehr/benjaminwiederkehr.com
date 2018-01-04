<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= html($page->title()) ?></title>
  <!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?= $page->excerpt() ?>" />
  <meta name="Keywords" content="<?= html($site->keywords()) ?>" />
  <meta name="Author" content="<?= html($site->author()) ?>" />
  <meta name="Copyright" content="<?= $site->copyright() ?>" />
  <meta name="Distribution" content="Global" />
  <meta name="Language" content="EN" />
  <meta name="Robots" content="ALL" />
  <!-- ——————————————————————————————————————————————————————————————————— OPEN GRAPH -->
  <meta property="og:url" content="<?= html($page->url()) ?>" />
  <meta property="og:title" content="<?= html($page->title()) ?>" />
  <meta property="og:site_name" content="<?= html($site->name()) ?>" />
  <meta property="og:description" content="<?= $page->excerpt() ?>" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@wiederkehr">
  <meta name="twitter:creator" content="@wiederkehr">
  <!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
  <?php $image_src = ($page->images()->first() != NULL ? $page->images()->first()->url() : $site->url().'/assets/img/logos/benjaminwiederkehr_letters_logo.png') ?>
  <meta property="og:image" content="<?= $image_src ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
  <link rel="icon" href="<?= html($site->url()) ?>/assets/img/favicon.ico" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
  <?= css('http://fonts.googleapis.com/css?family=Cutive+Mono') ?>
  <?= css('assets/css/style.css') ?>
  <?= css('assets/css/responsive.css') ?>
  <?= css('assets/css/letters.css') ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
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
