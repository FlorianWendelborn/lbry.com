<?php Response::setMetaDescription(__('description.guns')) ?>
<?php Response::setMetaTitle(__('title.guns')) ?>
<?php echo View::render('nav/_header', ['isDark' => true, 'isAbsolute' => true]) ?>
<main>
  <div class="cover cover-dark cover-center cover-full cover--dark-overlay" style="background-image:url(/img/firearm.jpg); min-height: 40vh !important; max-height: 60vh">    
  </div>
  <div class="cover cover-light" id="about">
    <div class="content content-light content-readable">
      <h2>It’s tough being a gun owner in 2018.</h2>

<p>That’s one of the many reasons we’re building LBRY for everyone. LBRY is decentralized, which means there’s no secret panel that gets to decide what is and isn’t acceptable. As long as your videos are legal, they’ll stay up. If people like your videos, they can tip you immediately right in the app.
</p>

<p>And to those who think they can restrict our free speech? Molṑn labé.</p>

      <img src="https://spee.ch/5a3e08d52dd2d7cb1c63a480b45dea8b4679cf01/lbryget-gif-mastertest.gif" />

<p>You can <a href="/get?src=FA">download the LBRY app here.</a> If you have any questions or need help, <a href="http://chat.lbry.io">join our Discord community.</a></p>
<div class="text-center"><a href="/get?src=FA" class="btn-primary btn-large">Get LBRY App</a></div>
      <h3>Want to hear from us when we get new firearms-related content? Sign up for our mailing list below.</h3>
      <?php echo View::render('mail/_subscribeForm', [
        'tag' => 'guns',
        'submitLabel' => 'Keep Me In The Loop',
        'hideDisclaimer' => true,
        'largeInput' => true,
        'btnClass' => 'btn-alt btn-large',
      ]) ?>
    </div>
  </div>
</main>
<?php echo View::render('nav/_footer') ?>
