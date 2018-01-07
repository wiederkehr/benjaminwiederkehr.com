<div class="pagination">
  <?php if($page->hasPrevVisible()): ?>
  <a class="pagination__link pagination__link--previous" href="<?= $page->prevVisible()->url() ?>"><i class="fas fa-fw fa-chevron-left"></i> <?= $page->prevVisible()->title() ?></a>
  <?php endif ?>
  <a class="pagination__link pagination__link--overview" href="<?= url('/talks') ?>">Index</a>
  <?php if($page->hasNextVisible()): ?>
  <a class="pagination__link pagination__link--next" href="<?= $page->nextVisible()->url() ?>"><?= $page->nextVisible()->title() ?> <i class="fas fa-fw fa-chevron-right"></i></a>
  <?php endif ?>
</div>
