        
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

								<div class = "create_btn_wrapper mb-3">
									<a href="<?=base_url()?>create-post/<?= $category['id'] ?>" class = "btn btn-create-post"><i class="fa-solid fa-circle-plus"></i> Create Post</a>
								</div>

								<!-- <form class="form" id="filterForm" method="GET">
									<div class="filter-toolbar">
										<div class="filter-bar">
											
											<div class="filter-item" id="sorting">
												<label>Sort By</label>
												<a class="filter-item-content dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">
													<span class="filter-value">Sort by</span>
													<span class="dropdown-btn"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="selected" data-value="">Sort by</li>
													<li data-value="latest">Newest First</li>
													<li data-value="oldest">Oldest First</li>
													<li data-value="most_viewed">Most Viewed</li>
													<li data-value="most_liked">Most Liked</li>
													<li data-value="most_commented">Most Commented</li>
												</ul>
											</div>

											

											<div class="search-bar">
												<input type="text" placeholder="Search" name="search_term" id="searchInput" placeholder="Search by title..." aria-label="Search">
											</div>

											
											<input type="hidden" name="sort" id="sortInput" value="">

											
											<button type="submit" class="btn btn-md btn-mint">Apply</button>
										</div>
									</div>
								</form> -->

								<div class="filter mb-5">
									<form class="form" id="filterForm" method="GET">
										<div class="filter-toolbar">
											
											<div class="filter-item" id="sorting">
												<label>Sorting</label>
												<a class="filter-item-content dropdown-toggle" href="javascript:void(0)"
													data-bs-toggle="dropdown">
													<span class="filter-value">Select </span>
													<span class="dropdown-btn"></span>
												</a>
												<ul class="dropdown-menu">
													<li class="selected" data-value="">Sort by</li>
													<li data-value="latest">Newest First</li>
													<li data-value="oldest">Oldest First</li>
													<li data-value="most_viewed">Most Viewed</li>
													<li data-value="most_liked">Most Liked</li>
													<li data-value="most_commented">Most Commented</li>
												</ul>
											</div>
											
											<!-- Nav Search START -->
											<div class="w-100 mt-3 mb-3">
												<div class="nav px-4 flex-nowrap align-items-center">
													<div class="search-form nav-item w-100">
														<input class="border-0" type="search" placeholder="Search" name="search_term" id="searchInput" placeholder="Search by title..." aria-label="Search">
													</div>
												</div>
											</div>

											<input type="hidden" name="sort" id="sortInput" value="">
											
											<!-- Nav Search END -->
											<button type="submit" class="btn btn-md btn-mint">Apply</button>
										</div>
									</form>
								</div>

								<!--/filter-->
								
								<div class="questions">

									

									<?php 
										foreach($forum_posts as $post){
									?>
											<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
												<div class="qa-avatar">
													<a href="#"><img src="https://avatar.iran.liara.run/public?username=<?= $post['author_name'] ?>" alt="User"></a>
												</div>
												<div class="qa-holder ">

													<!-- <div class="qa-badge"> <i class="bi bi-check2-circle"></i> Solved</div> -->

													<div class="qa-content mb-">
														<h1><a href="<?= base_url() . $post['category_slug'] . '/' . $post['url_slug'] ?>"><?= $post['title'] ?></a></h1>
														<div class="d-flex align-items-center flex-wrap mb-">
															<span class="qa-name"><a href="#"> <?= $post['author_name']?></a></span>
															<span class="qa-category"><a href="<?= base_url() .  $post['category_slug'] ?>"><?= $post['category_name']?></a></span>
															<span class="qa-text"><i class="bi bi-clock-history"></i> <?= time_elapsed_string($post['created_at']) ?></span>
														</div>




													</div>

													<div class="qa-stats">
														<div class="qa-item">
															<a href="#">
																<div class="qa-icon"><i class="bi bi-heart"></i></div>
																<div class="qa-text"><?= $post['total_likes'] ?></div>
																<div class="qa-text">Likes</div>
															</a>
														</div>
														<div class="qa-item">
															<ul>

																<li>
																	<i class="bi bi-eye"></i>
																</li>
															
															</ul>
															<div class="qa-text"><?= $post['total_views'] ?></div>
															<div class="qa-text">Views</div>
														</div>
														<div class="qa-item">
															<a href="#">
																<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
																<div class="qa-text"><?= $post['total_comments'] ?></div>
																<div class="qa-text">Comments</div>
															</a>
														</div>

														<?php 

															$postUrl = base_url()  . $post['category_slug'] . "/" . $post['url_slug'];
															$postTitle = urlencode($post['title']);
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


								<div class="pagination-container">
									
										<?= $pagination_links; ?>
									
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
