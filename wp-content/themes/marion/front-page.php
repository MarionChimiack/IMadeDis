<?php
get_header(); ?>
<section id="home">
  <div class="col visual-content">
    <img src="http://localhost:8888/wp-content/uploads/2018/07/phone.svg" alt="Design Time Infinity - Mockups"/>
  </div>
  <div class="col text-content">
    <h1>Build A World Inside<span style = "display: block;"> An App</h1>
      <p class="white-text">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    <a class="btn btn-white" href="/">Learn More</a>
  </div>
</section>
<section id="features">
  <div class="container">
    <div class="row">
      <h2>Features to Explore</h2>
      <p>Lorem ipsum dolor sit amet, consectetur, adipiscing elit.</p>
    </div>
    <div class="row">
      <div class="col icons">
        <img src="http://localhost:8888/wp-content/uploads/2018/07/feedback-06.svg" class="icon" alt="Customize"/>
        <h3>Dynamic</h3>
        <p>Fusce pulvinar dolor dapibus efficitur hendrerit. Morbi quis ex feugiat, interdum dolor id, congue eros. Sed purus nulla, dignissim sed dignissim sit amet, convallis a ex. In hac.</p>
      </div>
      <div class="col icons">
        <img src="http://localhost:8888/wp-content/uploads/2018/07/customize-02.svg" class="icon" alt="Customize"/>
        <h3>Customize</h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac quam vulputate neque malesuada posuere. Maecenas ultricies odio ac efficitur efficitur. Nam sed fringilla sem.</p>
      </div>
      <div class="col icons">
        <img src="http://localhost:8888/wp-content/uploads/2018/07/security-03.svg" class="icon" alt="Customize"/>
        <h3>Security</h3>
        <p>Fusce pulvinar dolor dapibus efficitur hendrerit. Morbi quis ex feugiat, interdum dolor id, congue eros. Sed purus nulla, dignissim sed dignissim sit amet, convallis a ex. In hac.</p>
      </div>
    </div>
  </div>
</section>
<section id="mockup">
    <div class="container">
      <div class="row">
        <div class="col two-col">
          <h2>Design time Infinity. And a solution for everyone.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed imperdiet ex, ac ultricies nunc. Mauris nibh augue, commodo in ex quis, rutrum interdum felis. Sed eros nibh, tincidunt nec.</p>
          <a class="btn btn-blue" href="/">Learn More</a>
        </div>
        <div class="col two-col visual"><img src="http://localhost:8888/wp-content/uploads/2018/07/mockup_app.png" alt="Design Time Infinity - Mockups"/></div>
      </div>
    </div>
</section>
<section id="testimonials">
  <div class="container">
    <div class="row">
      <h2>Let’s hear it from our clients</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

    <div class="owl-carousel owl-theme">
        <?php echo do_shortcode('[testimonials]'); ?>
    </div>

  </div>
</section>
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col three-col">
      <h2>Ready to get started?</h2>
      <p>Get in Touch!</p>
      </div>
      <div class="col three-col no-show"> &nbsp;</div>
      <div class="col three-col">
        <a class="btn btn-full-white" href="/"><span>Contact Us</span></a>
        <a class="btn btn-white" href="/">Book free trial</a>
      </div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>
