<?= snippet('header', array('style' => 'dossier')) ?>
<?= snippet('navigation') ?>

<div class="image-container header-image--<?= strtolower($page->title()) ?>">
  <div class="container">
    <div id="content-header" class="span-18 prepend-6 last">
      <h1><?= html($page->title()) ?></h1>
      <h2><?= html($site->title()) ?></h2>
      <p class="lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
</div>
<div class="container">
  <!-- ——————————————————————————————————————————————————————————————————— Content -->
  <div id="content" class="span-18 prepend-1 last page-content">
    <?= kirbytext($page->text()) ?>
  </div>
  <!-- ——————————————————————————————————————————————————————————————————— Sidebar -->
  <div class="sidebar span-5">
    <div class="sidebar__section--sticky">
      <h3 class="sidebar__title section-title"><span class="chapter__id">1. </span>Résumé</h3>
      <ul class="sidebar__content sidebar__list">
        <li><a class="sidebar__link" href="#resume-section-1"><span class="chapter__id">1.1</span> Practice</a></li>
        <li><a class="sidebar__link" href="#resume-section-2"><span class="chapter__id">1.2</span> Research</a></li>
        <li><a class="sidebar__link" href="#resume-section-3"><span class="chapter__id">1.3</span> Writing</a></li>
        <li><a class="sidebar__link" href="#resume-section-4"><span class="chapter__id">1.4</span> Mandates</a></li>
        <li><a class="sidebar__link" href="#resume-section-5"><span class="chapter__id">1.5</span> Speaking</a></li>
        <li><a class="sidebar__link" href="#resume-section-6"><span class="chapter__id">1.6</span> Exhibitions</a></li>
        <li><a class="sidebar__link" href="#resume-section-7"><span class="chapter__id">1.7</span> Features</a></li>
        <li><a class="sidebar__link" href="#resume-section-8"><span class="chapter__id">1.8</span> Publications</a></li>
        <li><a class="sidebar__link" href="#resume-section-9"><span class="chapter__id">1.9</span> Recognitions</a></li>
      </ul>
      <h3 class="sidebar__title section-title"><span class="chapter__id">2.</span> Curriculum Vitae</h3>
      <ul class="sidebar__content sidebar__list">
        <li><a class="sidebar__link" href="#cv-section-1"><span class="chapter__id">2.1</span> Personal</a></li>
        <li><a class="sidebar__link" href="#cv-section-2"><span class="chapter__id">2.2</span> Education</a></li>
        <li><a class="sidebar__link" href="#cv-section-3"><span class="chapter__id">2.3</span> Experience</a></li>
        <li><a class="sidebar__link" href="#cv-section-4"><span class="chapter__id">2.4</span> Activities</a></li>
        <li><a class="sidebar__link" href="#cv-section-5"><span class="chapter__id">2.5</span> Languages</a></li>
        <li><a class="sidebar__link" href="#cv-section-6"><span class="chapter__id">2.6</span> Expertiese</a></li>
        <li><a class="sidebar__link" href="#cv-section-7"><span class="chapter__id">2.7</span> Tuition</a></li>
        <li><a class="sidebar__link" href="#cv-section-8"><span class="chapter__id">2.8</span> Presentations</a></li>
        <li><a class="sidebar__link" href="#cv-section-9"><span class="chapter__id">2.9</span> Advisory</a></li>
      </ul>
    </div>
  </div>
</div><!-- .container -->
<?= snippet('footer') ?>
