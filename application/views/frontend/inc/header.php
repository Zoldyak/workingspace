<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Header Section -->
<header class="header-section">
  <a href="index.html" class="site-logo">
    <img src="<?php echo base_url(); ?>/assets/frontend/img/logo.png" alt="">
  </a>
  <nav class="header-nav">
    <ul class="main-menu">
      <li><a href="index.html" class="active">Home</a></li>
      <li><a href="about-us.html">About</a></li>
      <li><a href="#">Buy</a></li>
      <li><a href="#">Pages</a>
        <ul class="sub-menu">
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="search-result.html">Search Result</a></li>
          <li><a href="single-property.html">Property</a></li>
        </ul>
      </li>
      <li><a href="news.html">News</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <div class="header-right">
      <div class="user-panel">
        <a href="#" class="login">Sign in</a>
        <a href="#" class="register">Join us</a>
      </div>
    </div>
  </nav>
</header>
<!-- Header Section end -->

<!-- Hero Section end -->
<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>/assets/frontend/img/hero-bg.jpg">
  <div class="container">
    <div class="hero-warp">
      <form class="main-search-form">
        <div class="search-type">
          <div class="st-item">
            <input type="radio" name="st" id="buy" checked>
            <label for="buy">Buy1</label>
          </div>
          <div class="st-item">
            <input type="radio" name="st" id="rent">
            <label for="rent">Rent</label>
          </div>
          <div class="st-item">
            <input type="radio" name="st" id="sell">
            <label for="sell">Sell</label>
          </div>
          <div class="st-item">
            <input type="radio" name="st" id="property">
            <label for="property">Property Value</label>
          </div>
          <div class="st-item">
            <input type="radio" name="st" id="agents">
            <label for="agents">Agents</label>
          </div>
        </div>
        <div class="search-input">
          <input type="text" placeholder="Search by state, postcode or suburb">
          <button class="site-btn">Search</button>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
      </form>
    </div>
  </div>
</section>
<!-- Hero Section end -->

<!-- Intro Section end -->

<!-- Property Section end -->
