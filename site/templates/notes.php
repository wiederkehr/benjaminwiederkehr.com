<?= snippet('header') ?>
<?= snippet('navigation') ?>

<div class="container">
  <div class="header span-5 append-19 last">
    <h1 class="header__logo">
      <a class="header__link" href="<?= url('/notes') ?>" rel="me" title="<?= html($site->title()) ?>">
        <span class="header__title">Benjamin Wiederkehr</span>
        <span class="header__subtitle">Notes</span>
      </a>
    </h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div class="content span-18 prepend-1 last">
    <h3 class="section-title"><?= html($page->title()) ?></h3>
    <div class="articles">
      <?php
      $notes = $pages->find('notes')->children()->visible()->flip();
      foreach($notes as $note):
      ?>
      <!-- ——————————————————————————————————————————————————————————————————— Note -->
      <div class="articles__item">
        <h2 class="articles__title">
          <a class="articles__link" href="<?= $note->url() ?>"><i class="fas fa-fw fa-chevron-right"></i> <?= html($note->title()) ?></a>
        </h2>
        <span class="articles__item__date"><?= $note->date('F j, Y'); ?></span>
      </div><!-- .note-->
      <?php endforeach ?>
    </div><!-- .notes -->
  </div><!-- #content -->
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I reflect on the things that keep me busy during the day and up at night.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Credits -->
  <div class="credits span-18 prepend-6 last">
    <?= snippet('credits') ?>
  </div>
</div><!-- .container -->

<?= snippet('footer') ?>
