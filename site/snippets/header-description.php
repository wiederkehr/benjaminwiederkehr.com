<?php
  $description = $site->description()->excerpt(200);
  if ($page->description() != '') {
    $description = $page->description()->excerpt(200);
  }else if ($page->text() != '') {
    $description = $page->text()->excerpt(200);
  }
  echo $description;
?>
