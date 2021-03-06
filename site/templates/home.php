<?= snippet('header') ?>
<?= snippet('navigation') ?>

<header class='page-header page-header--home'>
  <div class="container">
    <div class="span-24">
      <h1 class="page-header__title"><?= html($page->title()) ?></h1>
      <h2 class="page-header__subtitle"><?= html($page->subtitle()) ?></h2>
      <p class="page-header__lead"><?= html($page->lead()) ?></p>
    </div>
  </div>
  <div class="page-header__action">
    <div class="container">
      <a class="page-header__action__link" href="#roles-grid">
        <span class="page-header__action__label">More about me <i class="fas fa-chevron-down"></i></span>
      </a>
    </div>
  </div>
</header>

<!-- ——————————————————————————————————————————————————————————————————— Content -->
<section class="main" id="roles-grid">
  <div class="container container--card-grid">
    <h3 class="section-title" style="margin-left: 10px; margin-right: 10px">How I spend my time</h3>
    <div class="card card--l">
      <div class="card__figure card__figure--navy">
        <div class="card__content">
          <span class="card__supertitle">Work</span>
          <h2 class="card__title">Interactive Things</h2>
          <p class="card__subtitle">A design studio for data-driven digital products.</p>
          <a class="card__link" target="blank" href="<?= url('https://interactivethings.com') ?>">Work with us</a>
      </div>
      </div>
    </div>
    <div class="card card--s">
      <div class="card__figure card__figure--black">
        <div class="card__content">
          <span class="card__supertitle">Write</span>
          <h2 class="card__title">Datavisualization.ch</h2>
          <p class="card__subtitle">A blog on information and data visualization.</p>
          <a class="card__link" target="blank" href="<?= url('https://datavisualization.ch/') ?>">Read online</a>
      </div>
      </div>
    </div>
    <div class="card card--s">
      <div class="card__figure card__figure--black">
        <div class="card__content">
          <span class="card__supertitle">Write</span>
          <h2 class="card__title">Substratum Series</h2>
          <p class="card__subtitle">A series of inspirational interviews on creativity.</p>
          <a class="card__link" target="blank" href="<?= url('http://substratumseries.com/') ?>">Read online</a>
      </div>
      </div>
    </div>
    <div class="card card--s">
      <div class="card__figure card__figure--black">
        <div class="card__content">
          <span class="card__supertitle">Organize</span>
          <h2 class="card__title">Data Visualization Zürich Meetup</h2>
          <p class="card__subtitle">For everyone interested in data visualization.</p>
          <a class="card__link" target="blank" href="<?= url('https://www.meetup.com/datavis-zurich/') ?>">Join us</a>
        </div>
      </div>
    </div>
    <div class="card card--s">
      <div class="card__figure card__figure--black">
        <div class="card__content">
          <span class="card__supertitle">Organize</span>
          <h2 class="card__title">Hacks/Hackers Zürich Meetup</h2>
          <p class="card__subtitle">Where journalists and technologists meet.</p>
          <a class="card__link" target="blank" href="<?= url('https://www.meetup.com/Hacks-Hackers-Zurich/') ?>">Join us</a>
        </div>
      </div>
    </div>
    <div class="card card--m-h card--row-begin">
      <div class="card__figure card__figure--slate">
        <div class="card__content">
          <span class="card__supertitle">Speak</span>
          <p class="card__lead">Talks on interaction design, information visualization, and data-driven storytelling.</p>
          <a class="card__link" href="<?= url('/events') ?>">See all events</a>
      </div>
      </div>
    </div>
    <div class="card card--m-h">
      <div class="card__figure card__figure--slate">
        <div class="card__content">
          <span class="card__supertitle">Teach</span>
          <p class="card__lead">Lectures on data visualization at the Zürich University of the Arts and the Bern University of the Arts.</p>
      </div>
      </div>
    </div>
    <div class="card card--m-v">
      <div class="card__figure card__figure--dust">
        <div class="card__content">
          <span class="card__supertitle">Learn</span>
          <p class="card__lead">How to identify new paths at the intersection between data, design, and people.</p>
          <p class="card__tags">#datavis #datahumanism</p>
      </div>
      </div>
    </div>
    <div class="card card--m-v">
      <div class="card__figure card__figure--dust">
        <div class="card__content">
          <span class="card__supertitle">Learn</span>
          <p class="card__lead">How to design data systems that benefit individuals and not just corporations.</p>
          <p class="card__tags">#data4good #data4change</p>
      </div>
      </div>
    </div>
    <div class="card card--m-v">
      <div class="card__figure card__figure--dust">
        <div class="card__content">
          <span class="card__supertitle">Learn</span>
          <p class="card__lead">How to build a more human, more inclusive, and more resilient organization.</p>
          <p class="card__tags">#lean #teal #diversity #equity</p>
      </div>
      </div>
    </div>
    <p class="learn-more">Learn more about <a href="<?= url('/about') ?>" title="About Benjamin Wiederkehr">me</a>, my <a href="<?= url('/vita') ?>" title="Benjamin Wiederkehr Vita">vita</a>, and my <a href="<?= url('/events') ?>" title="Benjamin Wiederkehr Events">events</a>.</p>
  </div>
</section>

<!-- ——————————————————————————————————————————————————————————————————— Credits -->
<footer class="credits">
  <div class="container">
    <div class="span-24">
      <?= snippet('credits') ?>
    </div>
  </div>
</footer>

<?= snippet('footer') ?>
