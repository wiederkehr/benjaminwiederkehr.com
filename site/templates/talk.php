<?= snippet('talks-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5">
    <h1 class="logo">
      <a href="<?= url('/talks') ?>" rel="me" title="<?php echo h($site->title()) ?>">
        <img src="<?= url('assets/img/logos/benjaminwiederkehr_talks_logo.png') ?>" width="230" height="150" alt="<?= html($site->title()) ?>" />
      </a>
    </h1>
  </div>
  <div id="content-header" class="span-18 prepend-1 last">
    <h1><?= html($page->title()) ?></h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last talk">
    <h3 class="talk-date ui"><?= $page->event(); ?><span class="talk-date--right"><?= $page->date('F j, Y'); ?></span></h3>
    <div class="talk-body">
      <?= kirbytext($page->text()) ?>
    </div>
    <div class="pagination">
      <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-previous" href="<?= $page->prevVisible()->url() ?>"><i class="icon-arrow-left"></i> <?= $page->prevVisible()->title() ?></a>
      <?php endif ?>
      <a class="pagination-overview" href="<?= url('/talks') ?>">Index</a>
      <?php if($page->hasNextVisible()): ?>
      <a class="pagination-next" href="<?= $page->nextVisible()->url() ?>"><?= $page->nextVisible()->title() ?> <i class="icon-arrow-right"></i></a>
      <?php endif ?>
    </div>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div id="sidebar" class="span-5 secondary">
    <?php snippet('talks-sidebar') ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <div id="credits" class="span-18 prepend-6 last secondary">
    <h3 class="ui">Acknowledgement</h3>
    <p><?= html($site->copyright()) ?>. Built with <a href="http://getkirby.com/">Kirby</a> and running smoothly on a <a href="http://hostpoint.ch" title="">Hostpoint</a> Server.</p>
  </div>
</div><!-- .container -->
<?= snippet('talks-footer') ?>