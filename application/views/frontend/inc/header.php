<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Header Section -->

<header class="header-section">
  <a href="index.html" class="site-logo text-decoration-none">
  <p class="font-weight-bolder font-size-26 text-white">Coworking Space Banyuwangi</p>
    <!-- <img src="<?php echo base_url(); ?>/assets/frontend/img/logo.png" alt=""> -->
  </a>
  <nav class="header-nav">
    <ul class="main-menu">
      <li><a href="index.html" class="active">Home</a></li>
      <li><a href="<?php echo base_url();?>Booking
        ">Booking</a></li>
      <!-- <li><a href="#">Buy</a></li>
      <li><a href="#">Pages</a>
        <ul class="sub-menu">
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="search-result.html">Search Result</a></li>
          <li><a href="single-property.html">Property</a></li>
        </ul>
      </li>
      <li><a href="news.html">News</a></li>
      <li><a href="contact.html">Contact</a></li> -->
    </ul>
    <div class="header-right">
      <div class="user-panel">
          <?php if ($this->session->userdata('user_role') == '2') {?>
            <a href="<?php echo base_url();?>/User/"  class="login">Dashboard</a>
            <a href="<?php echo base_url();?>/User/Logout" class="register">Log out</a>
          <?php } else{?>
            <a href="#" data-toggle="modal" data-target="#login" class="login">Sign in</a>
        <?php  }?>

        <!-- <a href="#" class="register">Join us</a> -->
      </div>
    </div>
  </nav>
</header>
<!-- Header Section end -->

<!-- Hero Section end -->
<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>/assets/frontend/img/DSC01199.jpg">
  <div class="container">
    <?php echo $this->session->flashdata('error');?>
    <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>  <?php echo validation_errors(); ?></strong>
                  </div>
    <div class="hero-warp">
      <?php echo form_open_multipart('Booking/') ?>
      <form class="main-search-form">
        <div class="search-type">
          <div class="st-item">
            <input type="radio" name="st" id="buy" checked>
            <label for="buy">Cek Tanggal</label>
          </div>
        </div>
        <div class="search-input">

          <input type="date" name="tanggal" placeholder="Search by state, postcode or suburb">
          <div class="form-group">
          <div class="input-group time" >
            <input id="timepicker" name="jam" class="form-control" placeholder="HH:MM AM/PM"/><span class="input-group-append input-group-addon">
          </div>
        </div>
          <button class="site-btn" style="height: 71px;">Search</button>
        </div>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p> -->
      </form>
    </div>
  </div>
</section>
<!-- Hero Section end -->

<!-- Intro Section end -->

<!-- Property Section end -->
