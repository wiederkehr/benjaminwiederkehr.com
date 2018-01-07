<?= snippet('header', array('style' => 'dossier')) ?>
<?= snippet('navigation') ?>

<div class="container">
  <div id="content-header" class="span-24">
    <h1><?= html($page->title()) ?></h1>
    <h2><?= html($page->subtitle()) ?></h2>
    <p class="lead"><?= html($page->lead()) ?></p>
  </div>
</div>
<div class="container container--home">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-24">
    <div class="span-8">
      <div class="teaser teaser--vita">
        <a href="<?= url('/vita') ?>">Vita</a>
      </div>
    </div>
    <div class="span-8">
      <div class="teaser teaser--work">
        <a href="<?= url('/work') ?>">Work</a>
      </div>
    </div>
    <div class="span-8 last">
      <div class="teaser teaser--studio">
        <a href="<?= url('/studio') ?>">Studio</a>
      </div>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Credits -->
  <div class="credits span-24">
    <?= snippet('credits') ?>
  </div>
</div><!-- .container -->
<?= snippet('footer') ?>
