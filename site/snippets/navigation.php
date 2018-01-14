<div class="tools">
  <div class="tools__container">
    <div class="tools__section tools__section--left">
      <a href="<?= html($site->url()) ?>/" class="home__link"><i class="fas fa-arrow-left"></i> <span>Home</span></a>
    </div>
    <div class="tools__section tools__section--right">
      <a href="#navigation__panel" class="navigation__trigger <?php if(isset($contrast)){ echo 'navigation__trigger--contrast'; } ?>"><span>Navigation</span></a>
    </div>
  </div>
</div>
<div class="navigation">
  <div class="navigation__container">
    <nav class="navigation__panel navigation__panel--info clearfix">
      <div class="span-11 append-1">
        <!-- ——————————————————————————————————————————————————————————————————— Information -->
        <h3 class="navigation__heading section-title">Information</h3>
        <ul class="navigation__list">
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/about">
              <span class="navigation__title">About</span>
              <span class="navigation__claim">Who I am, what I do and how to get in touch with me.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/resume">
              <span class="navigation__title">Résumé</span>
              <span class="navigation__claim">How I spend my time and energy.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/events">
              <span class="navigation__title">Events</span>
              <span class="navigation__claim">Upcoming and past appearances.</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="span-11 prepend-1 last">
        <!-- ——————————————————————————————————————————————————————————————————— Content -->
        <h3 class="navigation__heading section-title">Content</h3>
         <ul class="navigation__list">
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/notes">
              <span class="navigation__title">Notes</span>
              <span class="navigation__claim">Reflections on the things that keep me busy during the day and up at night.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/talks">
              <span class="navigation__title">Talks</span>
              <span class="navigation__claim">Thoughts that I have shared in narrated form as talks, presentation and lectures.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/letters">
              <span class="navigation__title">Letters</span>
              <span class="navigation__claim">Personal messages to the people that live, work, think, play, and travel with me.</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
