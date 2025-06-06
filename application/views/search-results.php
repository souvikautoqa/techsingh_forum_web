<section class="vine-social vine-main common-page-wrapper">

    <div class="container-fluid">
        <div class="row">
		    <div class="col-lg-9 main-col-9">
				<div class="outer-main-wrapper">
					<div class="sidebar-wrapper">
						<?php $this->load->view('layouts/left-sidebar.php'); ?>
					</div>

					<div class="forum-main-sec">



						<?php 
							foreach($search_results as $result){
								$url_slug = "#";
								if($result['type'] == 'job'){
									$url_slug = base_url() . "job/" . $result['url_slug'];
								}else if($result['type'] == 'page'){
									$url_slug = base_url() .   $result['url_slug'];
								}else if($result['type'] == 'post'){
									$url_slug = base_url() . $result['cat_slug'] . "/" . $result['url_slug'];
								}
						?>
							<a href="<?= $url_slug ?>">
								<div class="header-home">
									
									<h1 class="text-light"><i class="fas fa-book"></i> <?= $result['title'] ?></h1>
								</div>

								<div class="container-home">

									<div class="homesections">
										
										<p>
											<?= mb_strimwidth(strip_tags($result['content']), 0, 150, '...'); ?>
										</p>
										
									</div>
									
								</div>
							</a>

						<?php 
							}
						?>

					




					

					</div>
					
				</div>
			</div>


            <!--/col-lg-9-->

            <div class="col-lg-3 main-col-3">

                <div class="vine-categories mb-4 pb-3">

                    <ul class="navbar-nav flex-column">

						<?php $this->load->view('layouts/right-sidebar.php'); ?>

                    </ul>

                </div>
                <!--/Vine-categories-->

            </div>
            <!--/ad-section-->


        </div>
        <!--/col-lg-3-->
    </div>

</section>
