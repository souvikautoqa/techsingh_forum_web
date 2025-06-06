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

		<section class="vine-main">

			<div class="container-fluid">
				<div class="row ">
					<div class="col-lg-3">

						<?php $this->load->view('layouts/left-sidebar.php'); ?>

					</div>
					<!--/col-lg-3-->

					<div class="col-lg-6 forum-main-sec" style="transition: margin-left 0.3s, width 0.3s; margin-left: -260px; width: 65%;">



						<?php 
							foreach($category_with_stats as $c_w_s){
						?>
							<a href="<?=base_url() . "forum/" . $c_w_s['url_slug'] ?>">
								<div class="header-home">
									<i class="fas fa-book"></i>
									<h1 class="text-light"><?= $c_w_s['name'] ?></h1>
								</div>

								<div class="container-home">

									<div class="homesections">
										<!-- <h2><a href="#"> General GMAT Questions and Strategies</a></h2> -->
										<!-- <a href="#">Find Study Buddy</a>
										<a href="#">Study Plan</a> -->
										<div class="stats">
											<div><i class="fas fa-file-alt"></i> <?= number_format($c_w_s['total_posts']) ?> Posts</div>
											<div><i class="fas fa-comments"></i> <?= number_format($c_w_s['total_comments']) ?> Comments</div>
										</div>
										<!-- <div class="latest-post">
											<a href="#"><i class="fas fa-comments"></i> Advise Required: Planning to quit job...</a>
											<div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
											<div class="date">29 Jan 2025, 00:21</div>
										</div> -->
									</div>
									
								</div>
							</a>

						<?php 
							}
						?>

					
				<!-- <div class="header-home">
						<i class="fas fa-book"></i>
						<h1 class="text-light">GMAT Questions, Tips And News</h1>
				</div>
    
                <div class="container-home">
       
					<div class="homesections">
						<h2><a href="#"> General GMAT Questions and Strategies</a></h2>
						
						<div class="stats">
							<a href="#">Find Study Buddy</a>
							<div>44,291 Topics</div>
					
						</div>
			
					</div>
				</div> -->




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
													<a href="<?=base_url()?>members/member-<?= $top_moderator['id'] ?>"><?= $top_moderator['name'] ?></a>
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
													<a href="<?=base_url()?>members/member-<?= $top_user['id'] ?>"><?= $top_user['name'] ?></a>
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
													<a href="<?= base_url() . $t_f_p['category_slug'] . "/" . $t_f_p['url_slug'] ?>"><?= $t_f_p['title'] ?></a>
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


					<!--/col-lg-9-->

					<div class="col-lg-3 ">

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
