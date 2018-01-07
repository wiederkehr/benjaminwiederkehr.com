<?= snippet('header') ?>
<?= snippet('navigation') ?>

<div class="container">
  <div class="header span-5">
    <h1 class="header__logo">
      <a class="header__link" href="<?= url('/talks') ?>" rel="me" title="<?= html($site->title()) ?>">
        <span class="header__title">Benjamin Wiederkehr</span>
        <span class="header__subtitle">Talks</span>
      </a>
    </h1>
  </div>
  <div class="content__header span-18 prepend-1 last">
    <h1 class="content__title"><?= html($page->title()) ?></h1>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div class="content span-18 prepend-1 last">
    <h3 class="section-title"><?= $page->event(); ?><span class="section-title__span--right"><?= $page->date('F j, Y'); ?></span></h3>
    <div class="content__body content__body--talk">
      <?= kirbytext($page->text()) ?>
    </div>
    <?= snippet('pagination') ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I document thoughts that I have shared in narrated form as talks, presentation and lectures.')) ?>
  <!-- ——————————————————————————————————————————————————————————————————— Credits -->
  <div class="credits span-18 prepend-6 last">
    <?= snippet('credits') ?>
  </div>
</div><!-- .container -->

<?= snippet('footer') ?>
