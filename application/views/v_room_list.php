        <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
        ?>
		<!-- Breadcrumb Area Start-->
		<section class="breadcrumb-area overlay-dark-2 bg-3">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<div class="breadcrumb-bar">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li>Room</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->
        <!-- Room Area Start -->
        <section class="room-area pt-90 room-grid" style="   margin-bottom: 41px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center">
                            <?php foreach ($subjudul->result() as $row): ?>
                                <h3><?php echo $row->galeri_judul?></h3>
                                <p><?php echo $row->galeri_deskripsi?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($data->result() as $row): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-room">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar?>" alt="" style="width:370px;height: 460px">
                            <div class="room-hover text-center">
                                <div class="hover-text">
                                    <h3><a href="room-details.html"><?php echo $row->tulisan_judul?></a></h3>
                                    <div class="p-amount">
                                        <span><?php echo $row->tulisan_harga?></span>
                                        <span class="count">Per Night</span>
                                    </div>
                                    <?php echo limit_words($mice_isi,15);?>
                                    <div class="room-btn">
                                        <a href="<?php echo base_url().'Room/detail/'.$row->tulisan_slug;?>" class="default-btn">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="col-md-12 fix">
                        <div class="pagination-content text-center">
                           <?php echo $page;?>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
        <!-- Room Area End -->

       