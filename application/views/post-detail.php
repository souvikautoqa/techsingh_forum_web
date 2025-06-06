
<style>
	#page-detail-content ul{
		list-style: disc;
	}

	#page-detail-content p{
		font-size: 16px;
		line-height: 1.8;
	}

	#page-detail-content table {
		border-collapse: collapse;
		width: 100%;
		border: 2px solid #333;
		margin-top: 20px;
		margin-bottom: 20px;
	}

	#page-detail-content th, #page-detail-content td {
		border: 1px solid #666;
		padding: 10px;
		text-align: left;
		background: #FFF;
	}

	#page-detail-content th {
		background-color: #f4f4f4;
	}

	#page-detail-content h1, #page-detail-content h2, #page-detail-content h3, #page-detail-content h4 {
		margin-top: 20px;
		margin-bottom: 20px;
		line-height: 1.6;
	}
</style>

		<section class="vine-social vine-main common-page-wrapper">
			<div class="container-fluid job-post-single-wrapper">
				<div class="row">

				    <div class="col-lg-9 main-col-9">
						<div class="outer-main-wrapper">
							<div class="sidebar-wrapper">
								<?php $this->load->view('layouts/left-sidebar.php'); ?>
							</div>
			
							<div class="forum-main-sec">

								<div class="discussions">

									<div class = "create_btn_wrapper">
										<a href="<?=base_url()?>create-post/<?= $data['forum_post']['category_id'] ?>" class = "btn btn-create-post"><i class="fa-solid fa-circle-plus"></i> Create Post</a>
									</div>

									<div class="post-box d-flex" data-aos="fade-up" data-aos-easing="linear">
										<div class="card">
											<div class="card-header card-header-action">
												<div class="media align-items-center">
													<div class="media-head me-2">
														<!-- <div class="avatar">
															<a href="<?=base_url() . 'members/member-' . $data['forum_post']['added_by'] ?>"><img src="https://avatar.iran.liara.run/public?username=<?= $data['student']['name'] ?>" alt="user"
																	class="avatar-img rounded-circle"></a>
														</div> -->

														<?= generate_letter_avatar($data['student']['name']) ?>
													</div>
													<div class="media-body">
														<div>
															<a href="<?=base_url() . 'members/member-' . $data['forum_post']['added_by'] ?>"><?= $data['student']['name'] ?></a> 
															<!-- <i class="bi bi-patch-check-fill text-red"></i> -->
														</div>
														<div class="fs-7"><span> <?= time_elapsed_string($data['forum_post']['created_at']) ?> in </span> <a href="<?= base_url() . 'forum/' . $data['category']['url_slug'] ?>"
																class="cat"><?= $data['category']['name']?></a></div>
													</div>
												</div>
												
											</div>
											<div class="card-body">
												<h3>
													<a href="#"><?= $data['forum_post']['title'] ?></a>
												</h3>

												<img class = "my-4" src="<?= base_url() . $data['forum_post']['featured_image'] ?>" alt="">


												<div id = "page-detail-content">
													<?= $data['forum_post']['content']; ?>
												</div>
											
												


												<div class="post-links d-flex mt-4 ms-2">
													<a href="javascript:void(0)" id = "like-btn" data-id = "<?= $data['forum_post']['id'] ?>" data-type = "post" class="p-0 me-3">
														<span id = "like-icon" class="bi <?= $user_liked ? 'bi-heart-fill text-danger' : 'bi-heart' ?> me-1"></span> <span id = "like-count"><?= $likes_count ?></span> Likes
													</a>

													<a href="javascript:void(0)" id="bookmark-btn" data-id="<?= $data['forum_post']['id'] ?>" data-type="post" class="p-0 me-3">
														<span id="bookmark-icon" class="bi <?= $user_bookmarked ? 'bi-bookmark-fill text-danger' : 'bi-bookmark' ?> me-1"></span> 
														<span id = "bookmark-count"><?= $bookmark_count ?></span>
														<span id="bookmark-text"><?= $user_bookmarked ? 'Bookmarked' : 'Bookmark' ?></span>
													</a>


													<a href="#" class="p-0 me-3">
														<span class="bi bi-chat-dots me-1"></span> <?=($comment_count) ?> Comments
													</a>

													<?php 

														$postUrl = current_url();
														$postTitle = urlencode($data['forum_post']['title']);
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

											<div class="d-flex align-items-center my-2 mx-3">
												<!-- <div class="avatar avatar-sm me-2">
													<img class="rounded-circle" src="<?=base_url()?>assets/img/avatar/1.jpg" alt="alt">
												</div> -->
												<?= generate_letter_avatar() ?>

												<div class="flex-1">
													<input class="w-100" type="text" name = "comment" id = "comment" placeholder="Add comment">
												</div>


												
											</div>

											<div class="d-flex my-2 mx-3">
												<!-- Google reCAPTCHA (using test site key) -->
												<div class="g-recaptcha mb-4 w-100" data-sitekey="<?= GOOGLE_SITE_KEY ?>"></div> 
												
											</div>

											<div class="d-flex align-items-center my-2 mx-3">
												<button type = "button" id = "add-comment-btn" data-id = "<?= $data['forum_post']['id']?>" data-type = "post" class = "btn btn-success">Add Comment</button>
											</div>

											<h5 class="my-4 mx-3">Comments (<span id = "comment-count"><?=($comment_count) ?></span>)</h5>

											<?php 
												if(!empty($comments)){
											?>
													<div class="comments-5 px-3">
													
														<?php foreach ($comments as $comment) { ?>
															<?= displayThreadedComment($comment, 'post'); ?>
														<?php } ?>
													
													</div>

											<?php 
												}
											?>
											
											

										</div>
									</div><!--/post-box-->


								</div>

					        </div>
						</div>
					</div>

					<div class="col-lg-3 main-col-3">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php $this->load->view('layouts/right-sidebar.php'); ?>

							</ul>
						</div><!--/row-->
					</div><!--/container-->
				</div>
			</div>
		</section>

	