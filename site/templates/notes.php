<?= snippet('notes-header') ?>

<div class="container">
  <div id="header" class="span-5 append-19 last">
    <h1>
      <a href="<?= url('/notes') ?>" rel="me" title="<?php echo h($site->title()) ?>">
        <img src="<?= url('assets/img/logos/benjaminwiederkehr_notes_logo.png') ?>" width="230" height="150" alt="<?= html($site->title()) ?>" />
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
        <h2><a href="<?= $note->url() ?>"><?= html($note->title()) ?></a></h2>
        <span class="notes-item-date"><?= $note->date('F j, Y'); ?></span>
      </div><!-- .note-->
      <?php endforeach ?>
    </div><!-- .notes -->
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div id="sidebar" class="span-5 secondary">
    <?php snippet('notes-sidebar') ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <div id="credits" class="span-18 prepend-6 last secondary">
    <h3 class="ui">Acknowledgement</h3>
    <p><?= html($site->copyright()) ?>. Built with <a href="http://getkirby.com/">Kirby</a> and running smoothly on a <a href="http://www.novacompany.ch" title="">NovaCompany</a> Server.</p>
  </div>
</div><!-- .container -->

<?= snippet('notes-footer') ?>