<?= snippet('header') ?>
<?= snippet('navigation') ?>

<!-- ——————————————————————————————————————————————————————————————————— Header -->
<header class='articles-header'>
  <div class="container">
    <div class="span-5">
      <h1 class="articles-header__logo">
        <a class="articles-header__link" href="<?= url('/talks') ?>" title="<?= html($page->title()) ?>">
          <span class="articles-header__title">Benjamin Wiederkehr</span>
          <span class="articles-header__subtitle">Talks</span>
        </a>
      </h1>
    </div>
    <div class="article-header span-18 prepend-1 last">
      <h2 class="article-header__title"><?= html($page->title()) ?></h2>
    </div>
  </div>
</header>

<!-- ——————————————————————————————————————————————————————————————————— Main -->
<section class="main">
  <div class="container">
    <!-- ——————————————————————————————————————————————————————————————————— Content -->
    <div class="content content--sidebar span-18 prepend-1 last">
      <h3 class="section-title">
        <?= $page->date('F j, Y'); ?>
        <span class="section-title__part--right"><?= $page->event(); ?></span>
      </h3>
      <article class="article-body article-body--talk">
        <?= kirbytext($page->text()) ?>
      </article>
      <?= snippet('pagination') ?>
    </div>
    <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
    <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I document thoughts that I have shared in narrated form as talks, presentation and lectures.')) ?>
  </div>
</section>

<!-- ——————————————————————————————————————————————————————————————————— Footer -->
<footer class="credits">
  <div class="container">
    <div class="span-18 prepend-6 last">
      <?= snippet('credits') ?>
    </div>
  </div>
</footer>

<?= snippet('footer') ?>
