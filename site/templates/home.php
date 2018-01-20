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
    <div class="content content--home span-24">
      <div class="span-8">
        <div class="teaser teaser--vita">
          <a href="<?= url('/vita') ?>">Vita</a>
        </div>
      </div>
      <div class="span-8">
        <div class="teaser teaser--work">
          <a href="<?= url('/work') ?>">Work</a>
        </div>
      </div>
      <div class="span-8 last">
        <div class="teaser teaser--studio">
          <a href="<?= url('/studio') ?>">Studio</a>
        </div>
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
