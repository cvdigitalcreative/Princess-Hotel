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
									<li>Promo</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Breadcrumb Area End -->
        <!-- Room Area Start -->
        <section class="room-area pt-90" style="margin-bottom:40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($data->result_array() as $j):
                            $promo_id=$j['tulisan_id'];
                            $promo_judul=$j['tulisan_judul'];
                            $promo_isi=$j['tulisan_isi'];
                            $promo_author=$j['tulisan_author'];
                            $promo_image=$j['tulisan_gambar'];
                            $promo_tglpost=$j['tanggal'];
                            $promo_slug=$j['tulisan_slug'];
                        ?>
                        <div class="room-list">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <a href="<?php echo base_url().'Promo/detail/'.$promo_slug;?>"><img src="<?php echo base_url().'assets/images/'.$promo_image;?>" alt="" style="width:470px;height: 340px"></a>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="room-list-text">
                                        <h3><a href="<?php echo base_url().'Promo/detail/'.$promo_slug;?>"><?php echo $promo_judul;?></a></h3>
                                        <?php echo limit_words($promo_isi,30);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ;?>
                    </div>
                    <div class="col-md-12 fix">
                        <div class="pagination-content text-center">
                            <?php echo $page;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Room Area End -->