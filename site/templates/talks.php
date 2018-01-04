<?= snippet('talks-header') ?>
<?= snippet('meta') ?>

<div class="container">
  <div id="header" class="span-5 append-19 last">
    <h1 class="logo">
      <a href="<?= url('/talks') ?>" rel="me" title="<?= html($site->title()) ?>">
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
      $talks = $pages->find('talks')->children()->visible()->flip();
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
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I document thoughts that I have shared in narrated form as talks, presentation and lectures.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Acknowledgement -->
  <?= snippet('acknowledgement') ?>
</div><!-- .container -->
<?= snippet('talks-footer') ?>
