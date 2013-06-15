<?= snippet('header') ?>

<div class="container">
  <header>
    <h1><?= html($page->title()) ?></h1>
  </header>
  <article>
    <section>
      <?= kirbytext($page->text()) ?>
    </section>
  </article>
</div><!-- .container -->

<?= snippet('footer') ?>