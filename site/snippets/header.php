<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $page->title() ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— META -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= snippet('header-description') ?>" />
  <meta name="keywords" content="<?= $site->keywords() ?>" />
  <meta name="author" content="<?= $site->author() ?>" />
  <meta name="copyright" content="<?= date("Y") . ' ' . $site->author() ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— TWITTER -->
	<meta name="twitter:title" content="<?= $page->title() ?>" />
	<meta name="twitter:description" content="<?= snippet('header-description') ?>" />
	<meta name="twitter:image" content="<?= snippet('header-image') ?>" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@wiederkehr">
	<!-- ——————————————————————————————————————————————————————————————————— OPEN GRAPH -->
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:title" content="<?= $page->title() ?>" />
  <meta property="og:description" content="<?= snippet('header-description') ?>" />
  <meta property="og:image" content="<?= snippet('header-image') ?>" />
  <!-- ——————————————————————————————————————————————————————————————————— ICON -->
  <link rel="icon" href="<?= $site->url() . '/assets/img/favicon.ico' ?>" type="image/x-icon" />
  <!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<?= css('http://fonts.googleapis.com/css?family=Cutive+Mono') ?>
  <?= css('assets/css/global.css') ?>
  <?= css('assets/css/main.css') ?>
  <?php if(isset($style)) { echo css('assets/css/' . $style . '.css'); } ?>
  <!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
	<script src="http://use.typekit.com/aea1puq.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3202544-10"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-3202544-10');
	</script>
</head>
<body>
