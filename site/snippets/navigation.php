<div class="navigation">
  <div class="navigation__container">
    <a href="#navigation__panel" class="navigation__trigger <?php if(isset($contrast)){ echo 'navigation__trigger--contrast'; } ?>"><span>Navigation</span></a>
    <nav class="navigation__panel navigation__panel--info">
      <!-- ——————————————————————————————————————————————————————————————————— About -->
      <div class="navigation__section span-5 append-1">
        <h3 class="navigation__heading section-title">About</h3>
        <p class="navigation__paragraph">
          <a class="navigation__link" href="<?= html($site->url()) ?>/about">
            Information about myself, who I am,what I do and how to get in touch with me.
          </a>
        </p>
      </div>
      <!-- ——————————————————————————————————————————————————————————————————— Notes -->
      <div class="navigation__section span-5 append-1">
        <h3 class="navigation__heading section-title">Notes</h3>
        <p class="navigation__paragraph">
          <a class="navigation__link" href="<?= html($site->url()) ?>/notes">
            Reflections on the things that keep me busy during the day and up at night.
          </a>
        </p>
      </div>
      <!-- ——————————————————————————————————————————————————————————————————— Talks -->
      <div class="navigation__section span-5 append-1">
        <h3 class="navigation__heading section-title">Talks</h3>
        <p class="navigation__paragraph">
          <a class="navigation__link" href="<?= html($site->url()) ?>/talks">
            Thoughts that I have shared in narrated form as talks, presentation and lectures.
          </a>
        </p>
      </div>
      <!-- ——————————————————————————————————————————————————————————————————— Letters -->
      <div class="navigation__section span-5 append-1 last">
        <h3 class="navigation__heading section-title">Letters</h3>
        <p class="navigation__paragraph">
          <a class="navigation__link" href="<?= html($site->url()) ?>/letters">
            Personal messages to the people that live, work, think, play, and travel with me.
          </a>
        </p>
      </div>
    </nav>
  </div>
</div>
