<?= snippet('notes-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5 append-19 last">
    <h1 class="logo">
      <a href="<?= url('/notes') ?>" rel="me" title="<?= html($site->title()) ?>">
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
      $notes = $pages->find('notes')->children()->visible()->flip();
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
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I reflect on the things that keep me busy during the day and up at night.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <?= snippet('acknowledgement') ?>
</div><!-- .container -->

<?= snippet('notes-footer') ?>
