<?= snippet('header') ?>
<?= snippet('navigation') ?>

<div class="container">
  <div class="header span-5 append-19 last">
    <h1 class="header__logo">
      <a class="header__link" href="<?= url('/talks') ?>" rel="me" title="<?= html($site->title()) ?>">
        <span class="header__title">Benjamin Wiederkehr</span>
        <span class="header__subtitle">Talks</span>
      </a>
    </h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div class="content span-18 prepend-1 last">
    <h3 class="section-title"><?= html($page->title()) ?></h3>
    <div class="articles">
      <?php
      $talks = $pages->find('talks')->children()->visible()->flip();
      foreach($talks as $talk):
      ?>
      <!-- ——————————————————————————————————————————————————————————————————— Talk -->
      <div class="articles__item">
        <h2 class="articles__title">
          <a class="articles__link" href="<?= $talk->url() ?>"><i class="fas fa-fw fa-chevron-right"></i> <?= html($talk->title()) ?></a>
        </h2>
        <span class="articles__item__date"><?= $talk->date('F j, Y'); ?></span>
      </div><!-- .talk-->
      <?php endforeach ?>
    </div><!-- .talks -->
  </div><!-- #content -->
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I document thoughts that I have shared in narrated form as talks, presentation and lectures.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Credits -->
  <div class="credits span-18 prepend-6 last">
    <?= snippet('credits') ?>
  </div>
</div><!-- .container -->

<?= snippet('footer') ?>
