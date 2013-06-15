<?php 

$tags = str::split($page->tags());

?>

<?php if($tags != NULL && count($tags)>0): ?>

<ul class="taglist">
  
  <?php foreach($tags as $tag): ?>
  <li class="taglist-item"><?php echo html($tag) ?></li>
  <?php endforeach ?>

</ul>

<?php endif; ?>