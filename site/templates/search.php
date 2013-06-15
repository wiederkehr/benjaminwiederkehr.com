<?php snippet('header') ?>

<?php
	$search = new search(array(
		'searchfield' => 'q',
		'ignore'      => array('search', 'error'),
		'paginate'    => 10
	));

	$results = $search->results();
      
?>

<div class="container">
  <div class="row">
    <div class="sidebar span3">
      <?php snippet('sidebar') ?>
    </div><!--/span-->
    <div class="span8 offset1">
			<h1>Search results for «<?= html($search->query()) ?>»</h1>
			<?php if($results): ?>
			<?php snippet('pagination', array('pagination' => $results->pagination())) ?>
			<ul class="results">
			  <?php foreach($results as $row): ?>
			  <li class="results-item">
			    <a href="<?= $row->url() ?>"><?= html($row->title()) ?></a>
			    <?= html($row->url()) ?>
			  </li>
			  <?php endforeach ?>
			</ul>
			<?php snippet('pagination', array('pagination' => $results->pagination())) ?>
			<?php elseif($search->query()): ?>
			<div class="no-results">No results for <strong><?= html($search->query()) ?></strong></div>
			<?php endif ?>
    </div><!--/span-->
  </div><!--/row-->
</div><!--/.container-->

<?php snippet('footer') ?>