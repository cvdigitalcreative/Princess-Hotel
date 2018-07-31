        <!--Breadcrumb Area Start-->
        <section class="breadcrumb-area overlay-dark-2 bg-3">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text text-center">
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url()?>">Home</a></li>
                                    <li>MICE</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Area End -->
        <!-- Room Details Area Start -->
        <section class="room-details pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div class="room-slider-wrapper">
                            <div class="room-slider">
                                <?php foreach ($gambar->result() as $row): ?>
                                <div class="slider-image">
                                    <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" style="width:870px;height: 600px">     
                                </div>
                                <?php endforeach ?>     
                            </div>
                            <div class="row nav-row">
                                <div class="slider-nav">
                                    <?php foreach ($gambar->result() as $row): ?>
                                    <div class="nav-image">
                                        <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="">
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="room-details-text">
                            <?php foreach ($deskripsi->result() as $row): ?>
                            <h3 class="room-details-title"><?php echo $row->tulisan_judul;?></h3>
                            <?php echo $row->tulisan_isi;?>
                            <?php endforeach ?>
                        </div>    
                       <!--  <div class="room-facilities">
                            <h3 class="room-details-title">room facilities</h3>
                            <div class="single-facility">
                                <span><i class="zmdi zmdi-check"></i>Single Room</span>
                                <span><i class="zmdi zmdi-check"></i>70 sq mt</span>
                                <span><i class="zmdi zmdi-check"></i>3 Persons</span>
                                <span><i class="zmdi zmdi-check"></i>Free Internet</span>
                            </div>
                            <div class="single-facility">
                                <span><i class="zmdi zmdi-check"></i>Breakfast Inclide</span>
                                <span><i class="zmdi zmdi-close"></i>Free wi-fi</span>
                                <span><i class="zmdi zmdi-check"></i>Private Balcony</span>
                                <span><i class="zmdi zmdi-check"></i>Free Newspaper</span>
                            </div>
                            <div class="single-facility">
                                <span><i class="zmdi zmdi-check"></i>Full AC</span>
                                <span><i class="zmdi zmdi-close"></i>Flat Screen TV</span>
                                <span><i class="zmdi zmdi-check"></i>Beach View</span>
                                <span><i class="zmdi zmdi-close"></i>Room Service</span>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar-widget">
                            <div class="c-info-text">
                                 <p>If you have any question please contact us</p>
                            </div>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-phone"></i></span>
                                <span>+62-711-313131<br>+62-711-312801 / 313801</span>
                            </div>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-email"></i></span>
                                <span>gm@princess-hotel.com<br>sales@princess-hotel.com<br>clubpc@princess-hotel.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Room Details Area End -->