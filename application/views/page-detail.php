
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


	#page-detail-content .blockquote-box {
      background-color: #fff8e1; /* Soft yellow */
      border-left: 5px solid #ff9800; /* Orange patti */
      padding: 15px;
      margin: 20px 0;
      font-size: 18px;
      font-weight: 500;
      font-style: italic;
      color: #444;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
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

									<div class="post-box d-flex" data-aos="fade-up" data-aos-easing="linear">
										<div class="card">
											
											<div class="card-body">
												
												<h1><?= $page_detail['title'] ?></h1>

												<img class = "my-4" src="<?= ADMIN_URL . $page_detail['featured_image'] ?>" alt="">

												<div id = "page-detail-content">
													<?= $page_detail['content']; ?>
												</div>
													
												





												<div class="post-links d-flex mt-4 ms-2">
													<a href="javascript:void(0)" id = "like-btn" data-id = "<?= $page_detail['id'] ?>" data-type = "page" class="p-0 me-3">
														<span id = "like-icon" class="bi <?= $user_liked ? 'bi-heart-fill text-danger' : 'bi-heart' ?> me-1"></span> <span id = "like-count"><?= $likes_count ?></span> Likes
													</a>

													<a href="#" class="p-0 me-3">
														<span class="bi bi-chat-dots me-1"></span> <?= $total_comments ?> Comments
													</a>

													<!-- <a href="#" class="p-0 me-2">
														<span class="bi bi-share me-1"></span> 18 shares
													</a> -->
												</div><!--/post links-->

											</div>

											<div class="d-flex align-items-center my-2 mx-3">
												<div class="avatar avatar-sm me-2">
													<img class="rounded-circle" src="<?=base_url()?>assets/img/avatar/1.jpg" alt="alt">
												</div>
												<div class="flex-1">
													<input class="w-100" type="text" name = "comment" id = "comment" placeholder="Add comment">
												</div>
											</div>


											<div class="d-flex align-items-center my-2 mx-3">
												<button type = "button" id = "add-comment-btn" data-id = "<?= $page_detail['id']?>" data-type = "page" class = "btn btn-success">Add Comment</button>
											</div>

											<h5 class="my-4 mx-3">Comments (<span id = "comment-count"><?=($total_comments) ?></span>)</h5>

											<?php 
												if(!empty($comments)){
											?>
													<div class="comments-5 px-3">
													
														<?php foreach ($comments as $comment) { ?>
															<?= displayThreadedComment($comment, 'page'); ?>
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

	