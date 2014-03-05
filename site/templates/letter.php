<?= snippet('letter-header') ?>

<div class="letters_container">
  <header>
    <p><?= date("F j, Y", $page->date()) ?></p>
  </header>
  <article>
    <header>
      <h1><?= html($page->title()) ?></h1>
    </header>
    <section>
      <?= kirbytext($page->text()) ?>
    </section>
  </article>
</div><!-- .letters_container -->

<?= snippet('letter-footer') ?>