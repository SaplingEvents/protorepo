<? include('data/speakers.php'); ?>
<? include "views/shared/_html_head.php" ?>

<div id="site" class="speaker">
  <? include "views/shared/_primary_nav.php" ?>
  <? include "views/shared/_event_header.php" ?>
  <header role="masthead">
    <div class="site-width">
      <h1>Martin Atkins</h1>
      <img src="images/atkins.jpg" alt="">
    </div>
  </header>
  <div id="content" role="main">
    <div class="site-width">
      <p role="introduction"><a href="#">Martin Atkins</a> has been in the music business for over thirty years. He was a member of Public Image Ltd and Killing Joke. He also founded industrial supergroup Pigface, The Damage Manual, and Murder Inc., and has contributed to Nine Inch Nails and Ministry. Martin is the owner of Invisible Records and Mattress Factory Recording Studios. He is the author of Tour:Smart, a Suicide Girls columnist, taught at Columbia College Chicago for six years and currently teaches at Madison Media Institute. Most recently, Martin started his own entrepreneurial school revolution number three.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
      <iframe width="560" height="315" src="http://www.youtube.com/embed/rM1IJGV4w1o" frameborder="0" allowfullscreen></iframe>
      <aside>
        <h1>Martin&rsquo;s talk(s)</h1>
        <?php for ($i=0; $i < 3; $i++) : ?>
          <article class="vevent">
            <h1 class="summary">Lunch</h1>
            <time datetime="2012-09-07T010:00" class="dtstart">
              12:
              <span class="mins">30</span>
            </time>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </article>
        <?php endfor; ?>
      </aside>
    </div>
  </div>
  <section class="speakers-index">
    <h1>Other speakers</h1>
    <ul>
      <? foreach($speakers as $speaker): ?>
        <li class="vcard"><a class="fn url" href="#"><?= $speaker ?></a></li>
      <? endforeach; ?>
    </ul>  
  </section>  
  <?php include('views/shared/_footer.php'); ?>
</div>