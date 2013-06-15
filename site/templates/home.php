<?= snippet('intro-header') ?>

<div class="container">
  <header>
    <h1><a href="<?= url('/') ?>" title="<?= html($site->title()) ?>"><img src="assets/img/logos/benjaminwiederkehr_logo.png" width="230" height="110" alt="<?= html($site->author()) ?>" /></a></h1>
    <p>Wholeheartedly passionate about making things understandable.</p>
    <p>Partner at Interactive Things,<br/>Editor at Datavisualization.ch.</p>
    <aside class="photobooth">
      <div class="skim">
        <img src="assets/img/photobooth/wiederkehr_00.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_01.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_02.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_03.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_04.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_05.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_06.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_07.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_08.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_09.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_10.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_11.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_12.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_13.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_14.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_15.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_16.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_17.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_18.jpg" width="178" height="178"/>
        <img src="assets/img/photobooth/wiederkehr_19.jpg" width="178" height="178"/>
      </div><!-- .skim -->
      <img src="assets/img/benjaminwiederkehr_photo.png" width="178" height="178" alt="Intro Photo"/>
    </aside><!-- .photobooth -->
    <a href="http://interactivethings.com" title="Work with me at Interactive Things" class="badge">Interactive Things</a>
  </header>
  <section class="content">
    <div class="coda-slider-wrapper">
      <div id="coda-nav-1" class="coda-nav">
        <ul>
          <li class="tab1"><a href="#1" title="What I Do">What I Do</a></li>
          <li class="tab2"><a href="#2" title="Who I am">Who I am</a></li>
          <li class="tab3"><a href="#3" title="Connect with me">Connect</a></li>
          <li class="tab4"><a href="#4" title="Contact me">Contact</a></li>
          <li class="tab5"><a href="#5" title="Meet up at one of these occasions">Meet</a></li>
        </ul>
      </div>
      <div class="coda-slider preload" id="coda-slider-1">
        <div class="panel">
          <div class="panel-content">
            <ul class="cols-1">
              <li class="icon-list-item">
                <a href="http://interactivethings.com" title="My Company Interactive Things">
                  <img src="assets/img/icons/ixt-32x32.png" width="32" height="32" alt="InteractiveThings.com" />
                  <h3>Work</h3>
                  <?= kirbytext($page->work()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://datavisualization.ch" title="My Online Magazine Datavisualization.ch">
                  <img src="assets/img/icons/datavis-32x32.png" width="32" height="32" alt="Datavisualization.ch" />
                  <h3>Publish</h3>
                  <?= kirbytext($page->publish()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://master.benjaminwiederkehr.com" title="My Master Thesis">
                  <img src="assets/img/icons/master-32x32.png" width="32" height="32" alt="Master Thesis" />
                  <h3>Study</h3>
                  <?= kirbytext($page->study()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="<?= url('/notes') ?>" title="My Blog">
                  <img src="assets/img/icons/blog-32x32.png" width="32" height="32" alt="Blog" />
                  <h3>Write</h3>
                  <?= kirbytext($page->write()) ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content bio">
            <?= kirbytext($page->bio()) ?>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content">
            <ul class="cols-2">
              <li class="icon-list-item">
                <a href="http://twitter.com/wiederkehr" title="Benjamin Wiederkehr on Twitter">
                  <img src="assets/img/icons/twitter-32x32.png" width="32" height="32" alt="Twitter" />
                  <h3>Twitter</h3>
                  <?= kirbytext($page->twitter()) ?>
                </a>
              </li>
              <li class="last icon-list-item">
                <a href="http://facebook.com/benjamin.wiederkehr" title="Benjamin Wiederkehr on Facebook">
                  <img src="assets/img/icons/facebook-32x32.png" width="32" height="32" alt="Facebook" />
                  <h3>Facebook</h3>
                  <?= kirbytext($page->facebook()) ?>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://linkedin.com/in/benjaminwiederkehr" title="Benjamin Wiederkehr on LinkedIn">
                  <img src="assets/img/icons/linkedin-32x32.png" width="32" height="32" alt="LinkedIn" />
                  <h3>LinkedIn</h3>
                  <?= kirbytext($page->linkedin()) ?>
                </a>
              </li>
              <li class="last icon-list-item">
                <a href="https://www.xing.com/profile/Benjamin_Wiederkehr" title="Benjamin Wiederkehr on Xing">
                  <img src="assets/img/icons/xing-32x32.png" width="32" height="32" alt="Xing" />
                  <h3>Xing</h3>
                  <?= kirbytext($page->xing()) ?>
                </a>
              </li>
            </ul>
            <p class="read_more">
              <a href="http://blog.benjaminwiederkehr.com/category/contact" title="Go to my contact page">See more</a>
            </p>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content">
            <ul class="cols-2">
              <li class="icon-list-item">
                <img src="assets/img/icons/phone-32x32.png" width="32" height="32" alt="Phone" />
                <h3>Phone</h3>
                <?= kirbytext($page->phone()) ?>
              </li>
              <li class="last icon-list-item">
                <a href="mailto:hello(put the 'at' sign here)benjaminwiederkehr.com" title="Send me an E-Mail">
                  <img src="assets/img/icons/email-32x32.png" width="32" height="32" alt="E-Mail" />
                  <h3>E-Mail</h3>
                  <p>hello(put the 'at' sign here)benjaminwiederkehr.com</p>
                </a>
              </li>
            </ul>
            <p class="read_more">
              <a href="http://blog.benjaminwiederkehr.com/category/contact" title="Go to my contact page">See more</a>
            </p>
          </div>
        </div>
        <div class="panel">
          <div class="panel-content">
            <h3 class="cal_headline">Upcoming</h3>
            <ul class="cols-1 upcoming-dates">
              <li class="icon-list-item">
                <a href="http://www.eb-zuerich.ch/blog/veranstaltungen/" title="Digitale Wirklichkeiten">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">25</span>
                  </span>
                  <h3>Digitale Wirklichkeiten</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.namics.com" title="Namics Conference">
                  <span class="cal">
                    <span class="cal_month">Aug</span>
                    <span class="cal_day">29</span>
                  </span>
                  <h3>Namics Conference</h3>
                  <p><strong>Innsbruck, Austria</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.aec.at/" title="Basel Academy of Art and Design">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">5</span>
                  </span>
                  <h3>Ars Electronica</h3>
                  <p><strong>Linz, Austria</strong> Talk on Visualization & Narration</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.fhnw.ch/hgk" title="Basel Academy of Art and Design">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">14</span>
                  </span>
                  <h3>HGK Basel</h3>
                  <p><strong>Basel, Switzerland</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://okcon.org" title="Open Knowledge Conference">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">17</span>
                  </span>
                  <h3>Open Knowledge Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Curating of the Visualization Track</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://centerforstorytelling.org" title="Center for Storytelling">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">20</span>
                  </span>
                  <h3>Storytelling Conference</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Talk on Data-Driven Journalism</p>
                </a>
              </li>
            </ul>
            <h3 class="cal_headline">2013</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://ux-schweiz.ch" title="UX Schweiz">
                  <span class="cal">
                    <span class="cal_month">Jan</span>
                    <span class="cal_day">31</span>
                  </span>
                  <h3>UX Schweiz</h3>
                  <p><strong>Z&uuml;rich, Switzerland</strong> Designing User-Centered Visualizations</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://liftconference.com/" title="Lift Conference">
                  <span class="cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">06</span>
                  </span>
                  <h3>Lift Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Workshop on Persuasive Design</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://www.typotag.de" title="Typotag">
                  <span class="cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">22</span>
                  </span>
                  <h3>Typotag</h3>
                  <p><strong>Munich, Germany</strong> Talk on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">20</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://eyeofestival.com" title="Eyeo Festival">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">05</span>
                  </span>
                  <h3>Eyeo Festival</h3>
                  <p><strong>Minneapolis, USA</strong> Converge to Inspire</p>
                </a>
              </li>
            </ul>
            <h3 class="cal_headline">2012</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://liftconference.com/" title="Lift Conference">
                  <span class="cal">
                    <span class="cal_month">Feb</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>Lift Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Presenting The Ville Vivante Project</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://sxsw.interactivethings.com/" title="SXSW Interactive">
                  <span class="cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>SXW Interactive</h3>
                  <p><strong>Austin, USA</strong> Intent &amp; Impact: How Visualization Makes A Change</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>LinkedIn</h3>
                  <p><strong>San Francisco, USA</strong> Introduction to Data Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">24</span>
                  </span>
                  <h3>UC Berkeley School of Information</h3>
                  <p><strong>Berkeley, USA</strong> Workshop on Data Visualization</p>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">07</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">27</span>
                  </span>
                  <h3>UNECE</h3>
                  <p><strong>Geneva, Switzerland</strong> Work Session on the Communication of Statistics</p>
              </li>
              <li class="icon-list-item">
                <a href="http://www.medienwoche.de/" title="Internationaler Medienkongress">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">04</span>
                  </span>
                  <h3>Int. Medienkongress</h3>
                  <p><strong>Berlin, Germany</strong> Experience Data: The Art of Visualizing Facts & Figures</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://visualized.com/" title="Visualized">
                  <span class="cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">08</span>
                  </span>
                  <h3>Visualized</h3>
                  <p><strong>New York, USA</strong> Parts of the Process</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://junior-research.ch" title="Junior Design Research Conference">
                  <span class="cal">
                    <span class="cal_month">Nov</span>
                    <span class="cal_day">15</span>
                  </span>
                  <h3>Junior Design Research Conference</h3>
                  <p><strong>Geneva, Switzerland</strong> Persuasion in Information Design</p>
                </a>
              </li>
            </ul>
            <h3 class="cal_headline">2011</h3>
            <ul class="cols-1 past-dates">
              <li class="icon-list-item">
                <a href="http://sxsw.interactivethings.com/" title="SXSW Interactive">
                  <span class="cal">
                    <span class="cal_month">Mar</span>
                    <span class="cal_day">12</span>
                  </span>
                  <h3>SXW Interactive</h3>
                  <p><strong>Austin, USA</strong> Social Media Data Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                <a href="http://see-conference.org" title="SEE Conference">
                  <span class="cal">
                    <span class="cal_month">Apr</span>
                    <span class="cal_day">09</span>
                  </span>
                  <h3>SEE Conference</h3>
                  <p><strong>Wiesbaden, Germany</strong> The Conference on Information Visualization</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">23</span>
                  </span>
                  <h3>Mozilla</h3>
                  <p><strong>San Francisco, USA</strong> Introduction to Everyday Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">25</span>
                  </span>
                  <h3>Data In Sight</h3>
                  <p><strong>San Francisco, USA</strong></p>
              </li>
              <li class="icon-list-item">
                <a href="http://eyeofestival.com/" title="Eyeo Festival">
                  <span class="cal">
                    <span class="cal_month">Jun</span>
                    <span class="cal_day">27</span>
                  </span>
                  <h3>Eyeo Festival</h3>
                  <p><strong>Minneapolis, USA</strong> Converge to Inspire</p>
                </a>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
                    <span class="cal_month">Sep</span>
                    <span class="cal_day">16</span>
                  </span>
                  <h3>Trend Forum Basel</h3>
                  <p><strong>Basel, Switzerland</strong> Introduction to Data Visualization</p>
              </li>
              <li class="icon-list-item">
                  <span class="cal">
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