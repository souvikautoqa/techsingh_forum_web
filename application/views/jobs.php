        
		<!-- ==============================================
		 Hero
		=============================================== -->
		<section class="vine-hero-2 bg-img-1">
			<div class="container">
				<div class="row">


					<div class="col-lg-12">
						<div class="hero-content" data-aos="fade-down" data-aos-easing="linear">


							<h1>Ask Questions, Get Answers</h1>


							<p>Ask questions, find support, and connect with the community.</p>


							<div class="vine-join">
								<a href="#" class="btn btn-md btn-mint rounded-pill">Create an Account</a>
								<ul class="ms-3">
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/6.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/7.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/8.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/9.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/10.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="<?=base_url()?>assets/img/avatar/11.jpg" class="avatar-sm"
												alt="image"></a></li>
								</ul>
								<p>Join Over 3000+ Users.</p>
							</div>

						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- ==============================================
		 Main
		=============================================== -->


		<section class="vine-social vine-main common-page-wrapper">
			<div class="container-fluid">
				<div class="row">


				    <div class="col-lg-9 main-col-9">
						<div class="outer-main-wrapper">
							<div class="sidebar-wrapper">
								<?php $this->load->view('layouts/left-sidebar.php'); ?>
							</div>


							<div class="forum-main-sec">

								
								<div class="questions">

									<?php 
										foreach($jobs as $job){
									?>
											<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
												<!-- <div class="qa-avatar">
													<a href="#"><img src="assets/img/avatar/1.jpg" alt="User"></a>
												</div> -->
												<div class="qa-holder ">

													<!-- <div class="qa-badge"> <i class="bi bi-check2-circle"></i> Solved</div> -->

													<div class="qa-content mb-">
														<h1><a href="<?= base_url()?>job/<?= $job['url_slug'] ?>"><?= $job['title'] ?></a></h1>
														<div class="d-flex align-items-center flex-wrap mb-">
															<!-- <span class="qa-name"><a href="#"> Abram Marvyn</a></span> -->
															<span class="qa-category"><a href="<?= base_url()?>job/<?= $job['url_slug'] ?>"><?= $job['category_name']?></a></span>
															<span class="qa-text"><i class="bi bi-clock-history"></i> <?= time_elapsed_string($job['created_at']) ?></span>
														</div>

													</div>

													<div class="qa-stats">
														<div class="qa-item">
															<a href="#">
																<div class="qa-icon"><i class="bi bi-heart"></i></div>
																<div class="qa-text"><?= $job['total_likes'] ?></div>
																<div class="qa-text">Likes</div>
															</a>
														</div>
														<div class="qa-item">
															<ul>

																<li>
																	<i class="bi bi-eye"></i>
																</li>
																<!-- <li>
																<a href="#"><img src="assets/img/avatar/9.jpg" alt=""></a>
															</li>
															<li>
																<a href="#"><img src="assets/img/avatar/10.jpg" alt=""></a>
															</li> -->
															</ul>
															<div class="qa-text"><?= $job['total_views'] ?></div>
															<div class="qa-text">Views</div>
														</div>
														<div class="qa-item">
															<a href="#">
																<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
																<div class="qa-text"><?= $job['total_comments'] ?></div>
																<div class="qa-text">Comments</div>
															</a>
														</div>

														<!-- <div class="qa-item">
															<a href="#">
																<div class="qa-icon"><i class="bi bi-share"></i></div>
																<div class="qa-text">54</div>
																<div class="qa-text">Shares</div>
															</a>
														</div> -->


														<?php 

															$postUrl = base_url()   . "job/" . $job['url_slug'];
															$postTitle = urlencode($job['title']);
															$encodedUrl = urlencode($postUrl); 
														?>

														<div class="dropdown">
															<a href="#" class="p-0 me-2" data-bs-toggle="dropdown">
																<span class="bi bi-share me-1"></span> Share
															</a>
															<ul class="dropdown-menu">
																<li>
																	<a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=<?= $encodedUrl ?>" target="_blank">
																		<i class="bi bi-facebook me-2"></i> Facebook
																	</a>
																</li>
																<!-- <li>
																	<a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?= $postTitle ?>%20<?= $encodedUrl ?>" target="_blank">
																		<i class="bi bi-whatsapp me-2"></i> WhatsApp
																	</a>
																</li> -->
																<li>
																	<a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?= $encodedUrl ?>&text=<?= $postTitle ?>" target="_blank">
																		<i class="bi bi-twitter me-2"></i> Twitter
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $encodedUrl ?>&title=<?= $postTitle ?>" target="_blank">
																		<i class="bi bi-linkedin me-2"></i> LinkedIn
																	</a>
																</li>
															</ul>
														</div>

														
													</div>
												</div>
											</div>
									<?php 
										}
									?>

								</div>

								

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


				</div><!--/col-lg-3-->
			</div>

		</section>
