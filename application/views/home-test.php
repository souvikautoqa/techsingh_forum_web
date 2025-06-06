        <!-- ==============================================
		 Hero
		=============================================== -->
        <section class="vine-hero-2 bg-img-1">
        	<div class="container-fluid px-lg-5">
        		<div class="row">

        			<div class="col-lg-12">
        				<div class="hero-content" data-aos="fade-down" data-aos-easing="linear">

        					<h1>Ask Questions, Get Answers</h1>

        					<p>Ask questions, find support, and connect with the community.</p>

        					<div class="vine-join align-items-center mb-0">
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
        						<p class="m-0">Join Over 3000+ Users.</p>
        					</div>

        				</div>
        			</div>

        		</div>
        	</div>
        </section>

        <section class="vine-main">

        	<div class="container-fluid job-post-single-wrapper">
        		<div class="row ">

        			<div class="col-lg-9 main-col-9">
        				<div class="outer-main-wrapper">
        					<div class="sidebar-wrapper">
        						<?php $this->load->view('layouts/left-sidebar-1.php'); ?>
        					</div>

        					<div class="forum-main-sec">

        						<?php 
									// foreach($category_with_stats as $c_w_s){
								?>
        						<!-- <a href="<?=base_url() . "forum/" . $c_w_s['url_slug'] ?>">
										<div class="header-home">
											<i class="fas fa-book"></i>
											<h1 class="text-light"><?= $c_w_s['name'] ?></h1>
										</div>

										<div class="container-home">

											<div class="homesections">
											
												<div class="stats">
													<div><i class="fas fa-file-alt"></i> <?= number_format($c_w_s['total_posts']) ?> Posts</div>
													<div><i class="fas fa-comments"></i> <?= number_format($c_w_s['total_comments']) ?> Comments</div>
												</div>
												
											</div>
											
										</div>
									</a> -->

        						<?php 
									// }
								?>

        						<?php 
									foreach($category_with_stats as $c_w_s){
								?>
        						<div class="header-home">
        							<i class="fas fa-book"></i>
        							<h1 class="text-light"><?= $c_w_s['name'] ?></h1>
        						</div>


        						<div class="container-home">

        							<?php 
												foreach($c_w_s['sub_categories'] as $sub_category){
										?>

        							<div class="homesections">
        								<div class="topics-left-nd-questions">
        									<h2 class="text-green"><a href="<?=base_url()?>forum/<?= $sub_category['url_slug'] ?>">
        											<?= $sub_category['name'] ?></a></h2>
        									<div class="new-posts-left">
        										<?php 
															foreach($sub_category['new_posts'] as $np){
														?>
        										<p><a
        												href="<?=base_url() . $sub_category['url_slug'] . "/" . $np['url_slug'] ?>"><?= $np['title'] ?></a>
        										</p>
        										<?php 
															}
														?>
        									</div>
        								</div>
        								<div class="stats">

        									<?php
														/* <div>
																<?php 
																	foreach($sub_category['new_posts'] as $np){
																?>
												<p><a
														href="<?=base_url() . $sub_category['url_slug'] . "/" . $np['url_slug'] ?>"><?= $np['title'] ?></a>
												</p>
												<?php 
																	}
																?>
											</div>
											*/

											?>
        									<div><?= $sub_category['total_posts'] ?> Topics</div>

        								</div>

										<div class="new-posts-right">
											<?php 
															$counter = 0;
															foreach($top_five_posts as $t_f_p){
																if ($counter >= 1) break;
														?>
											<div class="post-user">
												<div>
													<div class="title text-color-green">
														<a
															href="<?= base_url() . $t_f_p['category_slug'] . "/" . $t_f_p['url_slug'] ?>">
															<?= $t_f_p['title'] ?>
														</a>
													</div>
													<div class="author-and-time-info d-flex justify-content-between">
														<div class="author">
															by: <?= $t_f_p['author_name'] ?>
														</div>

														<div class="topic-date">
															<?= date('d M Y, H:i') ?>
														</div>
													</div>
													<div class="likes">
														<i class="fas fa-thumbs-up"></i> <?= $t_f_p['total_likes'] ?>
													</div>
												</div>
											</div>
											<?php 
																$counter++;
															}
														?>
										</div>

        						</div>

        						<?php 
												}
											?>

        					</div>

        					<?php 
									}
								?>

        					<!---- top users ---------->

        					<div class="container-user">
        						<div class="section-user topusers">
        							<h2>Top Experts</h2>

        							<?php 
											foreach($top_moderators as $top_moderator){
										?>
        							<div class="item-user">
        								<!-- <img alt="Profile picture of Bunuel" src="https://avatar.iran.liara.run/public?username=<?= $top_moderator['name'] ?>" /> -->
        								<?= generate_letter_avatar($top_moderator['name']) ?>
        								<div class="details">
        									<div class="name" style="color: #f08616;">
        										<a
        											href="<?=base_url()?>members/member-<?= $top_moderator['id'] ?>"><?= $top_moderator['name'] ?></a>
        									</div>
        									<div class="role">
        										Joined <?= time_elapsed_string($top_moderator['created_at']) ?>
        									</div>
        								</div>
        								<div class="points">
        									<?= $top_moderator['total_points'] ?>
        								</div>
        							</div>
        							<?php 
											}
										?>

        						</div>

        						<div class="section-user topusers">
        							<h2>Top Users</h2>

        							<?php 
											foreach($top_users as $top_user){
										?>
        							<div class="item-user">
        								<!-- <img alt="Profile picture of Bunuel" src="https://avatar.iran.liara.run/public?username=<?= $top_user['name'] ?>" /> -->
        								<?= generate_letter_avatar($top_user['name']) ?>
        								<div class="details">
        									<div class="name" style="color: #f08616;">
        										<a
        											href="<?=base_url()?>members/member-<?= $top_user['id'] ?>"><?= $top_user['name'] ?></a>
        									</div>
        									<div class="role">
        										Joined <?= time_elapsed_string($top_user['created_at']) ?>
        									</div>
        								</div>
        								<div class="points">
        									<?= $top_user['total_points'] ?>
        								</div>
        							</div>
        							<?php 
											}
										?>

        						</div>
        						<div class="section-user topusers">
        							<h2>Best Posts</h2>

        							<?php 
											foreach($top_five_posts as $t_f_p){
										?>
        							<div class="post-user">
        								<div>
        									<div class="title">
        										<a
        											href="<?= base_url() . $t_f_p['category_slug'] . "/" . $t_f_p['url_slug'] ?>"><?= $t_f_p['title'] ?></a>
        									</div>
        									<div class="author">
        										by: <?= $t_f_p['author_name'] ?>
        									</div>
        									<div class="likes">
        										<i class="fas fa-thumbs-up"></i>
        										<?= $t_f_p['total_likes'] ?>
        									</div>
        								</div>
        							</div>

        							<?php 
											}
										?>

        						</div>
        					</div>

        					<!---- online users ---->

        					<div class="">
        						<div class="members-stats-container">
        							<div class="members-stat-box">
        								<h3>Total Members</h3>
        								<p><?= $total_members ?></p>
        							</div>
        							<div class="members-stat-box">
        								<h3>Total Active Users</h3>
        								<p><?= $total_active_users ?></p>
        							</div>
        							<div class="members-stat-box">
        								<h3>Total Posts</h3>
        								<p><?= $total_posts ?></p>
        							</div>
        						</div>
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

        	</div>
        	<!--/col-lg-3-->
        	</div>

        </section>

        <style>
        	@media only screen and (min-width: 1025px) {

        		/* --- Updated CSS as per new Feedbacks May 2025 ---- */

        		.toolkit-icon p {
        			font-size: 16px;
        		}

        		.homesections h2 {
        			font-size: 18px;
        			margin-bottom: 0;
        			font-weight: 400 !important;
        		}

        		.outer-main-wrapper .forum-main-sec .homesections {
        			display: flex;
        			align-items: center;
        			justify-content: space-between;
        			padding-block: 19px;
        			padding-inline: 20px;
        		}

        		.homesections .stats {
        			margin-top: 0;
        			display: flex;
        			justify-content: flex-end;
        			align-items: center;
        			gap: 110px;
        		}

        		.homesections .stats div {
        			font-size: 15px;
        		}

        		.header-home {
        			border-radius: 20px 20px 0 0;
        		}

        		.header-home h1 {
        			font-size: 20px;
        			font-weight: 600;
        		}

        		.container-home .homesections {
        			background-color: #ffffff;
        			margin: 0;
        			border-radius: 0;
        		}

        		.container-home .homesections:nth-child(even) {
        			background-color: #ecf9f494;
        		}

        		.outer-main-wrapper .forum-main-sec .homesections * {
        			color: #000;
        		}

        		.homesections h2 a {
        			font-weight: 500;
        		}

        		/* --- End of Updated CSS --- */

        	}
        </style>