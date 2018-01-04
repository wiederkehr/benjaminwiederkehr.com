<?= snippet('notes-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5">
    <h1 class="logo">
      <a href="<?= url('/notes') ?>" rel="me" title="<?= html($site->title()) ?>">
        <span class="title">Benjamin Wiederkehr</span>
        <span class="subtitle">Notes</span>
      </a>
    </h1>
  </div>
  <div id="content-header" class="span-18 prepend-1 last">
    <h1><?= html($page->title()) ?></h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last note">
    <h3 class="note-date ui"><?= $page->date('F j, Y'); ?></h3>
    <div class="note-body">
      <?= kirbytext($page->text()) ?>
    </div>
    <div class="pagination">
      <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-previous" href="<?= $page->prevVisible()->url() ?>"><i class="fas fa-fw fa-chevron-left"></i> <?= $page->prevVisible()->title() ?></a>
      <?php endif ?>
      <a class="pagination-overview" href="<?= url('/notes') ?>">Index</a>
      <?php if($page->hasNextVisible()): ?>
      <a class="pagination-next" href="<?= $page->nextVisible()->url() ?>"><?= $page->nextVisible()->title() ?> <i class="fas fa-fw fa-chevron-right"></i></a>
      <?php endif ?>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I reflect on the things that keep me busy during the day and up at night.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <?= snippet('acknowledgement') ?>
</div><!-- .container -->
<?= snippet('notes-footer') ?>
