
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
                                <li><a href="<?php echo base_url()?>putriselako">Putri Selako</a></li>
                                <li><a href="<?php echo base_url()?>neoPC">neoPC</a></li>
                                <li><a href="<?php echo base_url()?>gentaralam">Gentar Alam</a></li>
                                <li><a href="<?php echo base_url()?>Contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-3 col-sm-3 col-xs-10">
                        <div class="single-footer-widget">
                            <h3>Facebook</h3>
                            
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprincesshtl&tabs=timeline&width=350&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="350" style="border:none;overflow:hidden" scrolling="none" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10">
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
                            <span>Copyright © 2018 <a href="https://digitalcreative.web.id/" target="_blank">Digital Creative</a> All Right Reserved.</span>
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
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>

</html>