<div class="tools">
  <div class="tools__container">
    <div class="tools__section tools__section--left">
      <a href="<?= html($site->url()) ?>/" class="home__link"><i class="fas fa-arrow-left"></i> <span class="home__link__label">Home</span></a>
    </div>
    <div class="tools__section tools__section--right">
      <a href="#navigation__panel" class="navigation__trigger <?php if(isset($contrast)){ echo 'navigation__trigger--contrast'; } ?>"><span class="navigation__trigger__label">Menu</span><span class="navigation__trigger__icon"></span></a>
    </div>
  </div>
</div>
<nav class="navigation">
  <div class="container">
    <div class="navigation__panel navigation__panel--info clearfix">
      <div class="navigation__column navigation__column--left span-11 append-1">
        <!-- ——————————————————————————————————————————————————————————————————— Information -->
        <h3 class="navigation__heading section-title">Information</h3>
        <ul class="navigation__list">
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/about">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> About</span>
              <span class="navigation__claim">Brief overview about who I am, what I do, and how to get in touch with me.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/vita">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> Vita</span>
              <span class="navigation__claim">Curriculum vitae with the most relevant achievements of my professional life so far.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/events">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> Events</span>
              <span class="navigation__claim">More or less complete list of professional appearances at past and future events.</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="navigation__column navigation__column--right span-11 prepend-1 last">
        <!-- ——————————————————————————————————————————————————————————————————— Content -->
        <h3 class="navigation__heading section-title">Content</h3>
         <ul class="navigation__list">
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/notes">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> Notes</span>
              <span class="navigation__claim">Reflections on the things that keep me busy during the day and up at night.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/talks">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> Talks</span>
              <span class="navigation__claim">Thoughts that I have shared in narrated form as talks, presentation and lectures.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/letters">
              <span class="navigation__title"><i class="fas fa-fw fa-chevron-right"></i> Letters</span>
              <span class="navigation__claim">Personal messages to the people that I live, work, think, play, and travel with.</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
