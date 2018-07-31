        <!--Breadcrumb Area Start-->
        <section class="breadcrumb-area overlay-dark-2 bg-3">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text text-center">
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url()?>">Home</a></li>
                                    <li>Room detail</li>
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
                                    <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" >     
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
                        <div class="room-facilities">
                            <h3 class="room-details-title">room facilities</h3>
                            <div class="single-facility">
                                <?php foreach ($fasilitas1->result() as $row): ?>
                                    <span><i class="zmdi zmdi-check"></i><?php echo $row->galeri_judul?></span>
                                <?php endforeach ?>
                            </div>
                            <div class="single-facility">
                                <?php foreach ($fasilitas2->result() as $row): ?>
                                    <span><i class="zmdi zmdi-check"></i><?php echo $row->galeri_judul?></span>
                                <?php endforeach ?>
                            </div>
                            <div class="single-facility">
                                <?php foreach ($fasilitas3->result() as $row): ?>
                                    <span><i class="zmdi zmdi-check"></i><?php echo $row->galeri_judul?></span>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar-widget">
                            <div class="c-info-text">
                                 <p>If you have any question please contact us</p>
                            </div>
                            <?php foreach ($footer_number->result() as $row): ?>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-phone"></i></span>
                                <span><?php echo $row->tulisan_isi?></span>
                            </div>
                            <?php endforeach ?>
                            <?php foreach ($footer_email->result() as $row): ?>
                            <div class="c-info">
                                <span><i class="zmdi zmdi-email"></i></span>
                                <span><?php echo $row->tulisan_isi?></span>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Room Details Area End -->