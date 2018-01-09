<?= snippet('header', array('style' => 'dossier')) ?>
<?= snippet('navigation') ?>

<div class="container">
  <div class="content-header span-24">
    <h1 class="content-header__title"><?= html($page->title()) ?></h1>
    <h2 class="content-header__subtitle"><?= html($page->subtitle()) ?></h2>
    <p class="content-header__lead"><?= html($page->lead()) ?></p>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div class="content content--home span-24">
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
