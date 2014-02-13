<?= snippet('letters-header') ?>

<div class="container">
  <div class="letters">
    <h3 class="ui"><?= html($page->title()) ?></h3>
    <?php
    $letters = $pages->find('letters')->children()->visible()->flip();
    foreach($letters as $letter):
    ?>
    <!-- ——————————————————————————————————————————————————————————————————— Letter -->
    <div class="letter-list">
      <div class="letter">
        <a class="letter__link" href="<?= $letter->url() ?>">
          <span class="letter__date"><?= $letter->date('F j, Y'); ?></span>
          <h2 class="letter__title" ><?= html($letter->title()) ?></h2>
          <span class="letter__readmore">Read…</span>
        </a>
      </div><!-- .letter-->
    </div>
    <?php endforeach ?>
    <p class="remark"><?= html($page->text()) ?></p>
  </div>
</div><!-- .container -->

<?= snippet('letters-footer') ?>