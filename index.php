<? 
  include "views/shared/_html_head.php" 
?>

<div id="site" class="home">
  <? include "views/shared/_primary_nav.php" ?>
  <? include "views/shared/_event_header.php" ?>

  <div class="tagline">
    <div class="site-width">
      <h2>Relax. Engage. Refresh.</h2>
      <section class="introduction">
        <p>UX Mad offers a fresh perspective on the the &ldquo;traditional&rdquo; user-centered design conference, hosted in beautiful Madison, WI .</p>
        <a href="conference.php">Learn what&rsquo;s on the agenda.</a>
      </section>
    </div>
  </div>

  <div class="speakers-list-and-sponsors-list">
    <div class="site-width">
      <section class="speakers-list">
        <ul>
          <?php for ($i=0; $i < 2; $i++) : ?>
            <li class="vcard">
              <a class="url" href="speaker.php">
                <img src="images/andrew.jpg" alt="Andrew Maier">
                <span class="fn">Andrew Maier</span>
              </a>
            </li>
            <li class="vcard">
              <a class="url" href="speaker.php">
                <img src="images/hampton.jpg" alt="Hampton Catlin">
                <span class="fn">Hampton Catlin</span>
              </a>
            </li>
            <li class="vcard">
              <a class="url" href="speaker.php">
                <img src="images/michael.jpg" alt="Michael Parenteau">
                <span class="fn">Michael Parenteau</span>
              </a>
            </li>
            <li class="vcard">
              <a class="url" href="speaker.php">
                <img src="images/russ.jpg" alt="Russ Unger">
                <span class="fn">Russ Unger</span>
              </a>
            </li>
          <? endfor; ?>
        </ul>      
      </section>
      <section class="sponsors-list">
        <h1>Sponsors</h1>
        <p>Interested in becoming a sponsor? Download our Sponsorship Information Pack.</p>
        <h2>Executive sponsors</h2>
        <ul>
          <li class="vcard"><a class="fn url" href="#">First sponsor</a></li>
        </ul>
        <h2>Associate sponsors</h2>
        <ul>
          <?php for ($i=0; $i < 3; $i++): ?>
            <li class="vcard"><a class="fn url" href="#">First sponsor</a></li>
          <? endfor; ?>
        </ul>
      </section>
    </div>
  </div>

  <?php include('views/shared/_footer.php'); ?>
</div>