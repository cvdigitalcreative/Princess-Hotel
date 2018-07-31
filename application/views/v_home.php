    <!-- Background Area Start -->

    <section class="slider-area">
        <div class="slider-wrapper">
            <?php foreach ($Background->result() as $row): ?>
            <div class="single-slide" style="background-image: url('<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>');background-attachment: scroll;background-clip: initial;background-color: rgba(0, 0, 0, 0);background-origin: initial;background-position: center center;background-repeat: no-repeat;background-size: cover;">
                <div class="banner-content overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h1 class="pt-180"><?php echo $row->galeri_judul?></h1>
                                        <p><?php echo $row->galeri_deskripsi?></p>
                                        <div class="banner-btn">
                                            <a class="default-btn" href="<?php echo base_url()?>Room">explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php foreach ($promo->result() as $row): ?>
             <div class="single-slide" style="background-image: url('<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>');background-attachment: scroll;background-clip: initial;background-color: rgba(0, 0, 0, 0);background-origin: initial;background-position: center center;background-repeat: no-repeat;background-size: cover;">
                <div class="banner-content overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h1 class="pt-180"><?php echo $row->galeri_judul?></h1>
                                        <p><?php echo $row->galeri_deskripsi?></p>
                                        <div class="banner-btn">
                                            <a class="default-btn" href="<?php echo base_url()?>Promo">explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <!-- <?php foreach ($header2->result() as $row): ?>
             <div class="single-slide" style="background-image: url('<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>');">
                <div class="banner-content overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-center">
                                        <h1 class="pt-180"><?php echo $row->galeri_judul?></h1>
                                        <p><?php echo $row->galeri_deskripsi?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?> -->
        </div>
    </section>
    <!-- Background Area End -->
    <!-- <section class="room-area pt-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h3>INSTAGRAM FEED</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2" style="margin-left: 17%"> -->
            <!-- SnapWidget -->
            <!-- <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/542253" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
            </div>
        </div>
    </section> -->
    <!-- Room Area Start -->
    <section class="room-area pt-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <?php foreach ($judul_room_favorite->result() as $row): ?>
                        <h3><?php echo $row->tulisan_judul;?></h3>
                        <?php echo $row->tulisan_isi;?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
             <?php foreach ($Room->result() as $row): ?>
            <div class="single-room">
                <a href="room-details.html" style="background-image: url('<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>')"></a>
                <div class="room-hover text-center">
                    <div class="hover-text">
                        <h3><a href="<?php echo base_url().'Room/detail/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h3>
                        <div class="room-btn">
                            <a href="<?php echo base_url().'Room/detail/'.$row->tulisan_slug;?>" class="default-btn">DETAILS</a>
                        </div>
                    </div>
                    <div class="p-amount">
                        <span><?php echo $row->tulisan_harga?></span>
                        <span class="count">Per Night</span>
                    </div>
                </div>
            </div>
             <?php endforeach ?>
            <div class="banner-btn section-title text-center">
                <a class="default-btn" href="<?php echo base_url()?>Room">explore</a>
            </div>
        </div>
    </section>
    <!-- Room Area End -->
    <!-- Services Area Start -->
    <section class="services-area ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <?php foreach ($judul_service->result() as $row): ?>
                        <h3><?php echo $row->tulisan_judul;?></h3>
                        <?php echo $row->tulisan_isi;?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <!-- Nav tabs -->
                    <ul role="tablist" class="nav nav-tabs">
                        <li class="active" role="presentation">
                            <a data-toggle="tab" role="tab" aria-controls="spa" href="#spa" aria-expanded="true">
                                <span class="image p-img"><img src="<?php echo base_url()?>assets/img/icon/spa.png" alt=""></span>
                                <span class="image s-img"><img src="<?php echo base_url()?>assets/img/icon/spa-hover.png" alt=""></span>
                                <?php foreach ($service1->result() as $row): ?>
                                <span class="title"><?php echo $row->tulisan_judul;?></span>
                                <span class="text"><?php echo $row->tulisan_isi?></span>
                                <?php endforeach ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" role="tab" aria-controls="restaurant" href="#restaurant" aria-expanded="true">
                                <span class="image p-img"><img src="<?php echo base_url()?>assets/img/icon/restaurent.png" alt=""></span>
                                <span class="image s-img"><img src="<?php echo base_url()?>assets/img/icon/restaurent-hover.png" alt=""></span>
                                <?php foreach ($service2->result() as $row): ?>
                                <span class="title"><?php echo $row->tulisan_judul;?></span>
                                <span class="text"><?php echo $row->tulisan_isi?></span>
                                <?php endforeach ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" role="tab" aria-controls="meeting" href="#meeting" aria-expanded="true">
                                <span class="image p-img"><img src="<?php echo base_url()?>assets/img/icon/conference.png" alt=""></span>
                                <span class="image s-img"><img src="<?php echo base_url()?>assets/img/icon/conference-hover.png" alt=""></span>
                                <?php foreach ($service3->result() as $row): ?>
                                <span class="title"><?php echo $row->tulisan_judul;?></span>
                                <span class="text"><?php echo $row->tulisan_isi?></span>
                                <?php endforeach ?>
                            </a>
                        </li>
                        <li role="presentation">
                            <a data-toggle="tab" role="tab" aria-controls="gathering" href="#gathering" aria-expanded="true">
                                <span class="image p-img"><img src="<?php echo base_url()?>assets/img/icon/conference.png" alt=""></span>
                                <span class="image s-img"><img src="<?php echo base_url()?>assets/img/icon/conference-hover.png" alt=""></span>
                                <?php foreach ($service4->result() as $row): ?>
                                <span class="title"><?php echo $row->tulisan_judul;?></span>
                                <span class="text"><?php echo $row->tulisan_isi?></span>
                                <?php endforeach ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="tab-content">
                        <div id="spa" class="tab-pane active" role="tabpanel">
                            <?php foreach ($service1->result() as $row): ?>
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Wings Terrace">
                            <?php endforeach ?>
                        </div>
                        <div id="restaurant" class="tab-pane" role="tabpanel">
                            <?php foreach ($service2->result() as $row): ?>
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Wings Terrace">
                            <?php endforeach ?>
                        </div>
                        <div id="meeting" class="tab-pane" role="tabpanel">
                            <?php foreach ($service3->result() as $row): ?>
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Wings Terrace">
                            <?php endforeach ?>
                        </div>
                        <div id="gathering" class="tab-pane" role="tabpanel">
                            <?php foreach ($service4->result() as $row): ?>
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="Wings Terrace">
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->