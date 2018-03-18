<?php
  $image = html($site->url() . '/assets/img/logos/benjaminwiederkehr_logo.png');
  if ($page->content()->has('teaser')) {
    $image = $page->contentURL() . '/' . $page->teaser();
  }else if ($page->hasImages()) {
    $image = $page->image()->url();
  }
  echo $image;
?>
