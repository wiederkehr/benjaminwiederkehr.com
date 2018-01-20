<?= snippet('header') ?>
<?= snippet('navigation', array('contrast' => true)) ?>

<!-- ——————————————————————————————————————————————————————————————————— Header -->
<header class='page-header page-header--image' style="background-image: url(<?= $page->image('header.png')->url() ?>);">
  <div class="container">
    <div class="span-18 prepend-6 last">
      <h1 class="page-header__title"><?= html($page->title()) ?></h1>
      <h2 class="page-header__subtitle"><?= html($site->title()) ?></h2>
      <p class="page-header__lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</header>

<!-- ——————————————————————————————————————————————————————————————————— Main -->
<section class="main">
  <div class="container">
    <!-- ——————————————————————————————————————————————————————————————————— Content -->
    <article class="content content--page content--sidebar span-18 prepend-1 last">
      <?= kirbytext($page->text()) ?>
    </article>
    <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
    <aside class="sidebar span-5">
      <div class="sidebar__section--sticky">
        <?= html($page->aside()) ?>
      </div>
    </aside>
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
