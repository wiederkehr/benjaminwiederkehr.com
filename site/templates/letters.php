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
          <span class="letter__part letter__part--top">
            <span class="letter__date"><?= $letter->date('F j, Y'); ?></span>
          </span>
          <span class="letter__part letter__part--middle">
            <h2 class="letter__title" ><?= html($letter->title()) ?></h2>
          </span>
          <span class="letter__part letter__part--bottom">
            <span class="letter__readmore">Read…</span>
          </span>
        </a>
      </div>
      <?php endforeach ?>
    </div>
    <p class="remark"><?= html($page->text()) ?></p>
  </div>
</div>

<?= snippet('footer') ?>
