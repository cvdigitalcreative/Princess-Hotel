	<!-- Breadcrumb Area Start-->
		<section class="breadcrumb-area overlay-dark-2 bg-3">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<div class="breadcrumb-bar">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li>Contact Us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->
        <!-- Google Map Area Start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="container">
                <div id="googleMap" style="width:100%;height:350px;"></div>
            </div>
        </div>
        <!-- Google Map Area End -->
        <!-- Contact Form Area Start -->
        <section class="contact-form-area pt-90" style="margin-bottom: 40px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="contact-title">contact info</h4>
                        <div class="contact-text">
                             <?php foreach ($footer_number->result() as $row): ?>
                            <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text"><?php echo $row->tulisan_isi?></span></p>
                            <?php endforeach ?>
                            <?php foreach ($footer_email->result() as $row): ?>
                            <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text"><?php echo $row->tulisan_isi?></span></p>
                            <?php endforeach ?>
                            <?php foreach ($footer_alamat->result() as $row): ?>
                            <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text"><?php echo $row->tulisan_isi?></span></p>
                            <?php endforeach ?>
                        </div>
                        <h4 class="contact-title">social media</h4>
                        <div class="link-social">
                            <a href="https://www.facebook.com/princesshtl/" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="https://www.instagram.com/princesshtl/" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="contact-title">send your massage</h4>
                        <form id="contact-form" action="<?php echo base_url().'Contact/kirim_pesan'?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Enter Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Enter Email">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" cols="30" rows="10" placeholder="Message here"></textarea>
                                    <button type="submit" class="default-btn">SUBMIT</button>
                                </div>

                                <?php echo $this->session->flashdata('msg');?>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Area End -->
        
<!-- Footer Area Start -->
    <footer class="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area bg-dark">
            <div class="container">
                <div class="row">
                     <?php foreach ($footer_deskripsi->result() as $row): ?>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href=""><img src="<?php echo base_url()?>assets/img/logo/logow.png" alt="" style="height: 44px;"></a>
                            </div>
                            <p><?php echo $row->tulisan_isi?></p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/princesshtl/" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="https://www.instagram.com/princesshtl/" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>contact us</h3>
                            <?php foreach ($footer_alamat->result() as $row): ?>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-pin"></i></span>
                                <span><?php echo $row->tulisan_isi?></span>
                            </div>
                            <?php endforeach ?>
                            <?php foreach ($footer_email->result() as $row): ?>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-email"></i></span>
                                <span><?php echo $row->tulisan_isi?></span>
                            </div>
                            <?php endforeach ?>
                            <?php foreach ($footer_number->result() as $row): ?>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-phone"></i></span>
                                <span><?php echo $row->tulisan_isi?></span>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="col-lg-2 hidden-md hidden-sm col-xs-12">
                        <div class="single-footer-widget">
                            <h3>quick links</h3>
                            <ul class="footer-list">
                                <li><a href="<?php echo base_url()?>">Home</a></li>
                                <li><a href="<?php echo base_url()?>Room">Accomodations</a></li>
                                <li><a href="<?php echo base_url()?>purtiselako">Putri Selako</a></li>
                                <li><a href="<?php echo base_url()?>neoPC">neoPC</a></li>
                                <li><a href="<?php echo base_url()?>gentaralam">Gentar Alam</a></li>
                                <li><a href="<?php echo base_url()?>Contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>Instagram</h3>
                          
                            <!-- SnapWidget -->
                            <script src="https://snapwidget.com/js/snapwidget.js"></script>
                            <iframe src="https://snapwidget.com/embed/537545" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->
        <!-- Footer Bottom Area Start -->
        <div class="footer-bottom-area bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-text text-center">
                            <span>Copyright © 2018 <a href="http://digitalcreative.web.id/" target="_blank">Digital Creative</a> All Right Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </footer>
    <!-- Footer Area End -->
       
		<!-- All js here -->
        <script src="<?php echo base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script> 
        <script src="<?php echo base_url()?>assets/js/ajax-mail.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>  	 	
        <script src="<?php echo base_url()?>assets/js/jquery.meanmenu.js"></script>  
        <script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>	
        <script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 20,
				scrollwheel: false,
				center: new google.maps.LatLng(-2.983336, 104.751875)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: '<?php echo base_url()?>assets/img/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
    </body>
</html>