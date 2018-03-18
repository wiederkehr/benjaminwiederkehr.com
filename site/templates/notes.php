<?= snippet('header') ?>
<?= snippet('navigation') ?>

<!-- ——————————————————————————————————————————————————————————————————— Header -->
<header class='articles-header'>
  <div class="container">
    <div class="span-5">
      <h1 class="articles-header__logo">
        <a class="articles-header__link" href="<?= url('/notes') ?>" title="<?= html($page->title()) ?>">
          <span class="articles-header__title">Benjamin Wiederkehr</span>
          <span class="articles-header__subtitle">Notes</span>
        </a>
      </h1>
    </div>
  </div>
</header>

<!-- ——————————————————————————————————————————————————————————————————— Main -->
<section class="main">
  <div class="container">
    <!-- ——————————————————————————————————————————————————————————————————— Content -->
    <div class="content content--sidebar span-18 prepend-1 last">
      <h3 class="section-title"><?= html($page->title()) ?></h3>
      <div class="articles">
        <?php
        $articles = $pages->find('notes')->children()->visible()->flip();
        foreach($articles as $article):
        ?>
        <!-- ——————————————————————————————————————————————————————————————————— Note -->
        <article class="articles__item">
          <h2 class="articles__title">
            <a class="articles__link" href="<?= $article->url() ?>"><i class="fas fa-fw fa-chevron-right"></i> <?= html($article->title()) ?></a>
          </h2>
          <span class="articles__item__date"><?= $article->date('F j, Y'); ?></span>
        </article>
        <?php endforeach ?>
      </div>
    </div>
    <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
    <?php snippet('sidebar', array('about' => 'Hello, my name is Benjamin. I’m Interaction & Information Designer from Zürich. This is where I reflect on the things that keep me busy during the day and up at night.')) ?>
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
