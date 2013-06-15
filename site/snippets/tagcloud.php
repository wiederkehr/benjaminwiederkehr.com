<?php 

$tagcloud = tagcloud($pages->find('notes'), array('limit' => 20))

?>

<?php if($tagcloud != NULL): ?>

<ul class="tagcloud">
  
  <?php foreach($tagcloud as $tag): ?>
    <li class="tagcloud-item"><a<?php echo ($tag->isActive()) ? ' class="active"' : '' ?> href="<?php echo $tag->url() ?>"><?php echo $tag->name() ?></a></li>
  <?php endforeach ?>

</ul>