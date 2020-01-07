<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="  background: #ff000a !important; ">
        <h5 class="modal-title text-white" id="exampleModalLabel">Sign-in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form class="" action="index.html" method="post">
					<div class="form-group">
					  <label for="">Username/Email</label>
					  <input type="text" class="form-control" id="" placeholder="Username / Email">

					</div>
					<div class="form-group">
					  <label for="">Password</label>
					  <input type="password" class="form-control" id="" placeholder="Password ">
					</div>
					<a href="#" data-toggle="modal" data-target="#create">Belum mempunyai Akun? Buat akun</a>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger btn-outline-danger btnku">Sign -In</button>
      </div>
    </div>
  </div>
</div>

<div id="create" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-5 ">
						<div class="text-center d-flex">
							<img Src="<?php echo base_url(); ?>/assets/frontend/img/signup-image.jpg" class="rounded mx-auto my-auto" alt="login">
						</div>
					</div>
					<div class="col-lg-7">
						<br>

						<h3>Form Registrasi</h3>
						<hr>
            <?php echo form_open_multipart('User/Create') ?>
						<!-- <form class="" action="index.html" method="post"> -->
							<div class="form-group">
								<input name="email" type="email" class="form-control" id="" placeholder="Email">
							</div>
							<div class="form-group">
								<input name="nama" type="text" class="form-control" id="" placeholder="Nama Lengkap">
							</div>
							<div class="form-group">
								<input name="password" type="password" class="form-control" id="" placeholder="Password">
							</div>
							<div class="form-group">
								<input name="hp" type="text" class="form-control" id="" placeholder="Nomor Hp/Whatsapp">
							</div>
							<div class="form-group">
								<textarea placeholder="Alamat lengkap" name="alamat" class="form-control" rows="8" cols="80"></textarea>
							</div>
              <div class="form-group">
								<input name="foto" type="file" class="form-control" id="" placeholder="Foto">
							</div>
							<hr>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-danger btn-outline-danger btnku">Sign -UP</button>
							<br>
						  <?php echo form_close(); ?>
						<br>
					</div>
				</div>
			</div>

    </div>
  </div>
</div>
	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-4">
					<div class="footer-widger">
						<div class="about-widget">
							<div class="aw-text">
								<h6 class="font-weight-bolder font-size-26 text-white">Coworking Space BANYUWANGI</h6>
							</div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.170356960934!2d114.3675544!3d-8.2236019!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe46ebdb975993c84!2sTMP%20Wisma%20Raga%20Satria!5e0!3m2!1sid!2sid!4v1578228280374!5m2!1sid!2sid"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>

					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>Menu</h2>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Boking</a></li>
							<li><a href="#">Login</a></li>
							<!-- <li><a href="#">Testimonials</a></li>
							<li><a href="#">Carrers</a></li> -->
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>Hubungi Kami di</h2>
						<ul>
							<li><i class="fa fa-phone-square "></i> 08136869789</li>
						</ul>
					</div>
				</div>
				<!-- <div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Sellers</h2>
						<ul>
							<li><a href="#">Seel With us</a></li>
							<li><a href="#">What do You Need</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Guideline</a></li>
						</ul>
					</div>
				</div> -->
				<!-- <div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Renters</h2>
						<ul>
							<li><a href="#">Rent with us</a></li>
							<li><a href="#">Guidelines</a></li>
							<li><a href="#">Apartments</a></li>
							<li><a href="#">Flats</a></li>
							<li><a href="#">Houses</a></li>
						</ul>
					</div>
				</div> -->
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
