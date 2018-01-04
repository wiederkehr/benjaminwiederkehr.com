<?= snippet('talks-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5 append-19 last">
    <h1 class="logo">
      <a href="<?= url('/talks') ?>" rel="me" title="<?php echo h($site->title()) ?>">
        <span class="title">Benjamin Wiederkehr</span>
        <span class="subtitle">Talks</span>
      </a>
    </h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last talks">
    <h3 class="ui"><?= html($page->title()) ?></h3>
    <div class="talks">
      <?php
      if(param('tag')) {
        $talks = $pages->find('talks')->children()->visible()->filterBy('tags', param('tag'), ',')->flip();
      } else {
        $talks = $pages->find('talks')->children()->visible()->flip();
      }
      foreach($talks as $talk):
      ?>
      <!-- ——————————————————————————————————————————————————————————————————— Talk -->
      <div class="talks-item">
        <h2><a href="<?= $talk->url() ?>"><i class="fas fa-fw fa-chevron-right"></i> <?= html($talk->title()) ?></a></h2>
        <span class="talks-item-date"><?= $talk->date('F j, Y'); ?></span>
      </div><!-- .talk-->
      <?php endforeach ?>
    </div><!-- .talks -->
  </div><!-- #content -->
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
