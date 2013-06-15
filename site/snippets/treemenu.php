<?php if(!isset($subpages)) $subpages = $site->pages() ?>
<?php if(!isset($depth)) $depth = 1 ?>
<?php $page_url = ''; ?>

<ul class="menu menu-depth-<?= $depth ?>">
  
  <?php foreach($subpages->visible() AS $p): ?>
  <li class="item-depth-<?= $p->depth() ?><?php if ($p->depth() >1 && $p->hasChildren()) echo ' hasChildren'; ?>">
    
  <a<?= ($p->isActive()) ? ' class="active"' : '' ?> href="<?= $p->url() ?>"><?= $p->title() ?></a>
      
      <?php
        $request_URI = $_SERVER['REQUEST_URI'];
        
        // Is this a subpage?
        if (strlen($request_URI) > 1) :
          $url = explode('/', substr($request_URI, 1));
          
          for ($i = 0; $i < count($url); $i++)
            $url_array[] = implode("/", array_slice($url, 0, $i+1));

          // Generate the uri of the menu link that will be generated (e. g. /how-we-work)
          $page_url = parse_url($p->url());
          $page_url = $page_url['path'];
          $page_url = substr($page_url, 1);
        
        endif;

        if (!empty($page_url) AND !empty($url_array) AND in_array($page_url, $url_array)) :
          snippet('treemenu', array('subpages' => $p->children(), 'depth' => $p->depth()+1));
        endif;
      ?>

  </li>

  <?php endforeach ?>

</ul>