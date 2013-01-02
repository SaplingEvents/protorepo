<? include "views/shared/_html_head.php" ?>
<div id="site" class="conference">
  <? include "views/shared/_primary_nav.php" ?>
  <? include "views/shared/_event_header.php" ?>
  <div id="content" role="main">
    <div class="site-width">
      <section id="conference">
        <div class="content-wrapper">
          <p role="introduction">UXMad is a one track conference with twenty-one sessions featuring speakers from near and far. The conference will showcase to locals the assets of the UX community and allow visitors to Madison a chance to experience one of the best, brainiest, and least expensive places in the US to live and work. And cheese.</p>
          <p>UXMad takes advantage of the beautiful and iconic community owned spaces in Downtown Madison. The workshops take place at Madison College's Downton Campus. The conference proper takes place at the breathtaking Overture Center for the Arts.</p>          
        </div>
        <aside class="schedule">
          <article class="vevent">
            <h1 class="summary">Registration</h1>
            <time datetime="2012-09-07T09:00" class="dtstart">
              9:
              <span class="mins">00</span>
            </time>
          </article>
          <article class="vevent">
            <h1 class="summary">Opening remarks</h1>
            <time datetime="2012-09-07T010:00" class="dtstart">
              10:
              <span class="mins">00</span>
            </time>
            <span>with Jim Remsik</span>
          </article>
          <? for ($i = 0; $i < 2; $i++) : ?>
            <article class="vevent vevent-talk">
              <h1 class="summary vcard">
                <a href="speaker.php" class="url fn">Martin Atkins</a>
              </h1>
              <time datetime="2012-09-07T01<?= $i ?>:00" class="dtstart">
                1<?= $i ?>:
                <span class="mins">30</span>
              </time>
              <span>The title of Martin&rsquo;s Talk</span>
            </article>        
          <? endfor; ?>
          <article class="vevent">
            <h1 class="summary">Lunch</h1>
            <time datetime="2012-09-07T010:00" class="dtstart">
              12:
              <span class="mins">30</span>
            </time>
          </article>        
          <? for ($i = 2; $i < 6; $i++) : ?>
            <article class="vevent vevent-talk">
              <h1 class="summary vcard">
                <a href="speaker.php" class="url fn">Martin Atkins</a>
              </h1>
              <time datetime="2012-09-07T01<?= $i ?>:00" class="dtstart">
                <?= $i ?>:
                <span class="mins">30</span>
              </time>
              <span>The title of Martin&rsquo;s Talk</span>
            </article>        
          <? endfor; ?>
        </aside>
      </section>
    </div>
  </div>
  <?php include('views/shared/_footer.php'); ?>
</div>