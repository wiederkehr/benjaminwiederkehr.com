<?= snippet('header', array('style' => 'dossier')) ?>
<?= snippet('navigation', array('contrast' => true)) ?>

<div class="image-container header-image--<?= strtolower($page->title()) ?>">
  <div class="container">
    <div id="content-header" class="span-18 prepend-6 last">
      <h1><?= html($page->title()) ?></h1>
      <h2><?= html($site->title()) ?></h2>
      <p class="lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last page-content">
    <?= kirbytext($page->text()) ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div class="sidebar span-5">
    <div class="sidebar__section--sticky">
      <?= html($page->table_of_content()) ?>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Credits -->
  <div class="credits span-18 prepend-6 last">
    <?= snippet('credits') ?>
  </div>
</div><!-- .container -->
<?= snippet('footer') ?>
