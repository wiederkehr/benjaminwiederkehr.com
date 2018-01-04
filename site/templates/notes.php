<?= snippet('notes-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5 append-19 last">
    <h1 class="logo">
      <a href="<?= url('/notes') ?>" rel="me" title="<?php echo h($site->title()) ?>">
        <span class="title">Benjamin Wiederkehr</span>
        <span class="subtitle">Notes</span>
      </a>
    </h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last notes">
    <h3 class="ui"><?= html($page->title()) ?></h3>
    <div class="notes">
      <?php
      if(param('tag')) {
        $notes = $pages->find('notes')->children()->visible()->filterBy('tags', param('tag'), ',')->flip();
      } else {
        $notes = $pages->find('notes')->children()->visible()->flip();
      }
      foreach($notes as $note):
      ?>
      <!-- ——————————————————————————————————————————————————————————————————— Note -->
      <div class="notes-item">
        <h2><a href="<?= $note->url() ?>"><i class="fas fa-fw fa-chevron-right"></i> <?= html($note->title()) ?></a></h2>
        <span class="notes-item-date"><?= $note->date('F j, Y'); ?></span>
      </div><!-- .note-->
      <?php endforeach ?>
    </div><!-- .notes -->
  </div><!-- #content -->
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div id="sidebar" class="span-5 secondary">
    <?php snippet('notes-sidebar') ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <div id="credits" class="span-18 prepend-6 last secondary">
    <h3 class="ui">Acknowledgement</h3>
    <p><?= html($site->copyright()) ?>. Built with <a href="http://getkirby.com/">Kirby</a> and running smoothly on a <a href="http://hostpoint.ch" title="">Hostpoint</a> Server.</p>
  </div>
</div><!-- .container -->

<?= snippet('notes-footer') ?>
