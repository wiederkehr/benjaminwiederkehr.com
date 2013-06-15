<?php snippet('header') ?>

<div class="container">
  <div class="row">
    <div class="sidebar span3">
      <?php snippet('sidebar') ?>
    </div><!--/span-->
    <div class="span8 offset1 introduction">
      <?= snippet('introduction') ?>
      <?= kirbytext($page->text()) ?>
      <?= snippet('breadcrumb') ?>
    </div><!--/span-->
  </div><!--/row-->
</div><!--/.container-->

<?php snippet('footer') ?>