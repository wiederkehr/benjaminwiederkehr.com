<?php
  $image = html($site->url() . '/assets/img/benjaminwiederkehr_photo.png');
  if ($page->content()->has('teaser')) {
    $image = $page->contentURL() . '/' . $page->teaser();
  }else if ($page->hasImages()) {
    $image = $page->image()->url();
  }
  echo $image;
?>
