<?= snippet('intro-header') ?>
<?= snippet('meta') ?>

<div class="intro_container">
  <header>
    <h1 class="logo"><a href="<?= url('/') ?>" title="<?= html($site->title()) ?>"><img src="assets/img/logos/benjaminwiederkehr_logo.png" width="230" height="110" alt="<?= html($site->author()) ?>" /></a></h1>
    <p>Wholeheartedly passionate about making things understandable.</p>
    <p>Director at Interactive Things,<br/>Editor at Datavisualization.ch.</p>
    <aside class="photobooth">
      <img src="assets/img/benjaminwiederkehr_photo.png" alt="Intro Photo"/>
    </aside><!-- .photobooth -->
    <a href="http://interactivethings.com" title="Work with me at Interactive Things" class="badge">Interactive Things</a>
  </header>
  <section class="intro_content">
    <div class="coda-slider-wrapper">
      <div id="coda-nav-1" class="coda-nav">
        <ul>
          <li class="tab1"><a href="#1" title="What I Do">What I Do</a></li>
          <li class="tab2"><a href="#2" title="Who I am">Who I am</a></li>
          <li class="tab3"><a href="#3" title="Connect with me">Connect</a></li>
          <li class="tab4"><a href="#4" title="Meet up at one of these occasions">Meet</a></li>
        </ul>
      </div>
      <div class="coda-slider preload" id="coda-slider-1">
        <div class="panel">
          <div class="panel-content">
            <ul class="cols-1">
              <li class="icon-list-item">
                <a href="http://interactivethings.com" title="Interactive Things">
                  <i class="icon-large icon-large-interactivethings"></i>
                  <h3>Work</h3>
                  <?= kirbytext($page->work()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://datavisualization.ch" title="Datavisualization.ch">
                  <i class="icon-large icon-large-datavisualization"></i>
                  <h3>Publish</h3>
                  <?= kirbytext($page->publish()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="<?= url('/notes') ?>" title="Notes, Talks and Letters">
                  <i class="icon-large icon-large-wiederkehr"></i>
                  <h3>Write</h3>
                  <?= kirbytext($page->write()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://substratumseries.com" title="Substratum Series">
                  <i class="icon-large icon-large-substratum"></i>
                  <h3>Interview</h3>
                  <?= kirbytext($page->interview()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://hackshackers.com" title="Hacks/Hackers ZRH">
                  <i class="icon-large icon-large-hackshackers"></i>
                  <h3>Organize</h3>
                  <?= kirbytext($page->organize()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://opendata.ch" title="Opendata.ch">
                  <i class="icon-large icon-large-opendata"></i>
                  <h3>Support</h3>
                  <?= kirbytext($page->support()) ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content bio">
            <h3 class="sub_headline">In Short</h3>
            <?= kirbytext($page->shortbio()) ?>
            <h3 class="sub_headline">A bit Longer</h3>
            <?= kirbytext($page->longbio()) ?>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content">
            <ul class="cols-2">
              <h3 class="sub_headline">Direct</h3>
              <li class="icon-list-item">
                <i class="icon-large icon-large-phone"></i>
                <h3>Phone</h3>
                <?= kirbytext($page->phone()) ?>
              </li>
              <li class="last icon-list-item">
                <a href="mailto:hello(put the 'at' sign here)benjaminwiederkehr.com" title="Send me an E-Mail">
                  <i class="icon-large icon-large-mail"></i>
                  <h3>E-Mail</h3>
                  <p>hello(put the 'at' sign here)benjaminwiederkehr.com</p>
                </a>
              </li>
              <h3 class="sub_headline">Networks</h3>
              <li class="last icon-list-item">
                <a href="http://facebook.com/benjamin.wiederkehr" title="Benjamin Wiederkehr on Facebook">
                  <i class="icon-large icon-large-facebook"></i>
                  <h3>Facebook</h3>
                  <?= kirbytext($page->facebook()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://twitter.com/wiederkehr" title="Benjamin Wiederkehr on Twitter">
                  <i class="icon-large icon-large-twitter"></i>
                  <h3>Twitter</h3>
                  <?= kirbytext($page->twitter()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://linkedin.com/in/benjaminwiederkehr" title="Benjamin Wiederkehr on LinkedIn">
                  <i class="icon-large icon-large-linkedin"></i>
                  <h3>LinkedIn</h3>
                  <?= kirbytext($page->linkedin()) ?>
                </a>
              </li>
              <li class="last icon-list-item">
                <a href="https://www.google.com/+BenjaminWiederkehr" title="Benjamin Wiederkehr on Google">
                  <i class="icon-large icon-large-google"></i>
                  <h3>Google</h3>
                  <?= kirbytext($page->google()) ?>
                </a>
              </li>
            </ul>
            <p class="read_more">
              <a href="http://archive.benjaminwiederkehr.com/category/contact" title="Go to my contact page">See more</a>
            </p>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content">
            <h3 class="sub_headline">Upcoming</h3>
            <ul class="cols-1 upcoming-dates">
              <li class="icon-list-item">
                <a href="http://www.srgssr.ch/en/news/hackdays/" title="SRG Hackdays">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>SRG Hackdays</h3>
                  <p><strong>Zürich, Switzerland</strong> Data and Media Hackathon</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://sciencecomm.ch/" title="ScienceComm 14">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">18</span>
                  </span>
                  <h3>ScienceComm 14</h3>
                  <p><strong>Lucerne, Switzerland</strong> Talk on Visualization in Science Communication</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://visualized.io/london" title="Visualized.io London">
                  <span class="icon-large cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">22</span>
                  </span>
                  <h3>Visualized.io London</h3>
                  <p><strong>London, United Kingdom</strong> Visual Storytelling Conference</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.data2day.de" title="Data 2 Day">
                  <span class="icon-large cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">26</span>
                  </span>
                  <h3>Data 2 Day</h3>
                  <p><strong>Karlsruhe, Germany</strong> Talk on Information Visualization</p>
                </a>
              </li>
            </ul>
            <h3 class="sub_headline">2014</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://www.meetup.com/hacks-hackers-nyc/events/162900752/" title="Hacks/Hackers NYC">
                  <span class="icon-large cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">03</span>
                  </span>
                  <h3>Hacks/Hackers NYC</h3>
                  <p><strong>New York, USA</strong> Talk on Interactive Storytelling</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://visualized.com/" title="Visualized Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">06</span>
                  </span>
                  <h3>Visualized</h3>
                  <p><strong>New York, USA</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.iuav.it/" title="Mobile Information Visualization">
                  <span class="icon-large cal">
                    <span class="cal_month">May</span>
                    <span class="cal_day">16</span>
                  </span>
                  <h3>Università Iuav di Venezia</h3>
                  <p><strong>Venice, Italy</strong> Lecture on Mobile Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.ifbookthen.com/" title="IfBookThen Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">May</span>
                    <span class="cal_day">22</span>
                  </span>
                  <h3>IfBookThen Conference</h3>
                  <p><strong>Milano, Italy</strong> Telling Data-Driven Stories</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.globaleditorsnetwork.org/programmes/data-journalism-awards/" title="Data Journalism Awards">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>Data Journalism Awards</h3>
                  <p><strong>Barcelona, Spain</strong> Won Best Team Portfolio</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://netzwerkrecherche.org/wordpress/nr14/" title="Netzwerk Recherche">
                  <span class="icon-large cal">
                    <span class="cal_month">Jul</span>
                    <span class="cal_day">04</span>
                  </span>
                  <h3>Netzwerk Recherche</h3>
                  <p><strong>Hamburg, Germany</strong> Panel on Data Journalism</p>
                </a>
              </li>
            </ul>
            <h3 class="sub_headline">2013</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://ux-schweiz.ch" title="UX Schweiz">
                  <span class="icon-large cal">
                    <span class="cal_month">Jan</span>
                    <span class="cal_day">31</span>
                  </span>
                  <h3>UX Schweiz</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Designing User-Centered Visualizations</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://liftconference.com/" title="Lift Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">06</span>
                  </span>
                  <h3>Lift Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Workshop on Persuasive Design</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.typotag.de" title="Typotag">
                  <span class="icon-large cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">22</span>
                  </span>
                  <h3>Typotag</h3>
                  <p><strong>Munich, Germany</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">20</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://eyeofestival.com" title="Eyeo Festival">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">05</span>
                  </span>
                  <h3>Eyeo Festival</h3>
                  <p><strong>Minneapolis, USA</strong> Converge to Inspire</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.eb-zuerich.ch/blog/veranstaltungen/" title="Digitale Wirklichkeiten">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">25</span>
                  </span>
                  <h3>Digitale Wirklichkeiten</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.namics.com" title="Namics Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Aug</span>
                    <span class="cal_day">29</span>
                  </span>
                  <h3>Namics Conference</h3>
                  <p><strong>Innsbruck, Austria</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.aec.at/" title="Basel Academy of Art and Design">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">5</span>
                  </span>
                  <h3>Ars Electronica</h3>
                  <p><strong>Linz, Austria</strong> Talk on Visualization & Narration</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.zhdk.ch/" title="ZHdK">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>Zürcher Hochschule der Künste</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Cultural Enterpreneurship</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.fhnw.ch/hgk" title="Basel Academy of Art and Design">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">14</span>
                  </span>
                  <h3>Hochschule für Gestaltung und Kunst Basel</h3>
                  <p><strong>Basel, Switzerland</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://okcon.org" title="Open Knowledge Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">16</span>
                  </span>
                  <h3>Open Knowledge Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Workshop on Data-Driven Storytelling</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://okcon.org" title="Open Knowledge Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">18</span>
                  </span>
                  <h3>Open Knowledge Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Talk on Data-Driven Storytelling</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="hhttp://www.hesge.ch/" title="Haute École de Gestion de Genève">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">19</span>
                  </span>
                  <h3>Haute École de Gestion</h3>
                  <p><strong>Geneva, Switzerland</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://centerforstorytelling.org" title="Center for Storytelling">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">20</span>
                  </span>
                  <h3>Storytelling Conference</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Data-Driven Journalism</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.zhdk.ch/?entrepreneurship" title="ZHdK Incubator">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">20</span>
                  </span>
                  <h3>ZHdK Incubator Inauguration</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Cultural Enterpreneurship</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="https://incom.org/workspace/4683" title="Urbane Ebenen">
                  <span class="icon-large cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">15</span>
                  </span>
                  <h3>Digitale Ebenen</h3>
                  <p><strong>Potsdam, Germany</strong> Talk on Urban Data Visualization</p>
                </a>
              </li>
            </ul>
            <h3 class="sub_headline">2012</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://liftconference.com/" title="Lift Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>Lift Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Presenting The Ville Vivante Project</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://sxsw.interactivethings.com/" title="SXSW Interactive">
                  <span class="icon-large cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>SXW Interactive</h3>
                  <p><strong>Austin, USA</strong> Intent &amp; Impact: How Visualization Makes A Change</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>LinkedIn</h3>
                  <p><strong>San Francisco, USA</strong> Introduction to Data Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">24</span>
                  </span>
                  <h3>UC Berkeley School of Information</h3>
                  <p><strong>Berkeley, USA</strong> Workshop on Data Visualization</p>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">07</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">27</span>
                  </span>
                  <h3>UNECE</h3>
                  <p><strong>Geneva, Switzerland</strong> Work Session on the Communication of Statistics</p>
              </li>
              <li class="icon-list-item">
                <a href="http://www.medienwoche.de/" title="Internationaler Medienkongress">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">04</span>
                  </span>
                  <h3>Int. Medienkongress</h3>
                  <p><strong>Berlin, Germany</strong> Experience Data: The Art of Visualizing Facts & Figures</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://visualized.com/" title="Visualized">
                  <span class="icon-large cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">08</span>
                  </span>
                  <h3>Visualized</h3>
                  <p><strong>New York, USA</strong> Parts of the Process</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://junior-research.ch" title="Junior Design Research Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">15</span>
                  </span>
                  <h3>Junior Design Research Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Persuasion in Information Design</p>
                </a>
              </li>
            </ul>
            <h3 class="sub_headline">2011</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://sxsw.interactivethings.com/" title="SXSW Interactive">
                  <span class="icon-large cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>SXW Interactive</h3>
                  <p><strong>Austin, USA</strong> Social Media Data Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="icon-large cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">09</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>Mozilla</h3>
                  <p><strong>San Francisco, USA</strong> Introduction to Everyday Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">25</span>
                  </span>
                  <h3>Data In Sight</h3>
                  <p><strong>San Francisco, USA</strong></p>
              </li>
              <li class="icon-list-item">
                <a href="http://eyeofestival.com/" title="Eyeo Festival">
                  <span class="icon-large cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">27</span>
                  </span>
                  <h3>Eyeo Festival</h3>
                  <p><strong>Minneapolis, USA</strong> Converge to Inspire</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">16</span>
                  </span>
                  <h3>Trend Forum Basel</h3>
                  <p><strong>Basel, Switzerland</strong> Introduction to Data Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="icon-large cal">
                    <span class="cal_month">Dez</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>Swiss Informatics Society</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Workshop on Data Visualization</p>
              </li>
            </ul>
          </div>
        </div>
      </div><!-- .coda-slider -->
    </div><!-- .coda-slider-wrapper -->
  </div><!-- #content -->
</div><!-- .container -->

<?= snippet('intro-footer') ?>