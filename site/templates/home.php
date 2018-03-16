<?= snippet('header') ?>
<?= snippet('navigation') ?>

<header class='page-header page-header--home'>
  <div class="container">
    <div class="span-24">
      <h1 class="page-header__title"><?= html($page->title()) ?></h1>
      <h2 class="page-header__subtitle"><?= html($page->subtitle()) ?></h2>
      <p class="page-header__lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</header>

<!-- ——————————————————————————————————————————————————————————————————— Content -->
<section class="main">
  <div class="container">
    <div class="role role--odd">
      <div class="role__figure">
        <a class="role__link" href="<?= url('interactivethings.com') ?>">Work</a>
      </div>
      <div class="role__content">
        <h2>Work</h2>
        <?= kirbytext($page->work()) ?>
      </div>
    </div>
    <div class="role role--even">
      <div class="role__figure">
        <a class="role__link" href="<?= url('#') ?>">Write</a>
      </div>
      <div class="role__content">
        <h2>Write</h2>
        <?= kirbytext($page->write()) ?>
      </div>
    </div>
    <div class="role role--odd">
      <div class="role__figure">
        <a class="role__link" href="<?= url('#') ?>">Speak</a>
      </div>
      <div class="role__content">
        <h2>Speak</h2>
        <?= kirbytext($page->speak()) ?>
      </div>
    </div>
    <div class="role role--even">
      <div class="role__figure">
        <a class="role__link" href="<?= url('#') ?>">Teach</a>
      </div>
      <div class="role__content">
        <h2>Teach</h2>
        <?= kirbytext($page->teach()) ?>
      </div>
    </div>
    <div class="role role--odd">
      <div class="role__figure">
        <a class="role__link" href="<?= url('#') ?>">Organize</a>
      </div>
      <div class="role__content">
        <h2>Organize</h2>
        <?= kirbytext($page->organize()) ?>
      </div>
    </div>
    <div class="role role--even">
      <div class="role__figure">
        <a class="role__link" href="<?= url('#') ?>">Learn</a>
      </div>
      <div class="role__content">
        <h2>Learn</h2>
        <?= kirbytext($page->learn()) ?>
      </div>
    </div>
  </div>
</section>

<!-- ——————————————————————————————————————————————————————————————————— Credits -->
<footer class="credits">
  <div class="container">
    <div class="span-24">
      <?= snippet('credits') ?>
    </div>
  </div>
</footer>

<?= snippet('footer') ?>
