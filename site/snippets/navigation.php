<div class="tools">
  <div class="tools__container">
    <a href="#navigation__panel" class="navigation__trigger <?php if(isset($contrast)){ echo 'navigation__trigger--contrast'; } ?>"><span>Navigation</span></a>
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
              <span class="navigation__claim">Who I am and how to get in touch.</span>
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
              <span class="navigation__claim">Reflections on what keeps me busy.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/talks">
              <span class="navigation__title">Talks</span>
              <span class="navigation__claim">Thoughts that I have shared as talks.</span>
            </a>
          </li>
          <li class="navigation__item">
            <a class="navigation__link" href="<?= html($site->url()) ?>/letters">
              <span class="navigation__title">Letters</span>
              <span class="navigation__claim">Personal messages to my friends.</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
