<?= snippet('header', array('style' => 'letters')) ?>
<?= snippet('navigation') ?>

<div class="letters_container">
  <div class="letters">
    <h3 class="section-title"><?= html($page->title()) ?></h3>
    <div class="letters-list">
    <?php
    $letters = $pages->find('letters')->children()->visible()->flip();
    foreach($letters as $letter):
    ?>
    <!-- ——————————————————————————————————————————————————————————————————— Letter -->
      <div class="letter">
        <a class="letter__link" href="<?= $letter->url() ?>">
          <span class="letter__date"><?= $letter->date('F j, Y'); ?></span>
          <h2 class="letter__title" ><?= html($letter->title()) ?></h2>
          <span class="letter__readmore">Read…</span>
        </a>
      </div>
      <?php endforeach ?>
    </div>
    <p class="remark"><?= html($page->text()) ?></p>
  </div>
</div>

<?= snippet('footer') ?>
