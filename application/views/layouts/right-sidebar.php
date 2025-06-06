<div class="sidebar-sec">
    <div class="section">
        <div class="section-header">
            <i class="fas fa-toolbox"></i>
            <h2>Prep Toolkit</h2>
        </div>
        <div class="toolkit-icons">
            <div class="toolkit-icon">
                <a href="">
                    <i class="fas fa-comments icon-forum"></i>
                    <p>Forum Quiz</p>
                </a>
            </div>
            <div class="toolkit-icon">
                <a href="<?= base_url() ?>my-posts">
                    <i class="fas fa-user icon-posts"></i>
                    <p>My Posts</p>
                </a>
            </div>
            <div class="toolkit-icon">
                <a href="<?=base_url() ?>">
                    <i class="fas fa-fire icon-topics"></i>
                    <p>Hot Topics</p>
                </a>
            </div>
        </div>
    </div>


	<?php 
		$announcements = get_announcements();

		if(!empty($announcements)){
			foreach($announcements as $key => $announcement){
	?>
				<div class="section my-4">
					<?php
						if($key == 0){ 
					?>
							<div class="section-header">
								<i class="fas fa-bullhorn"></i>
								<h2>Announcements</h2>
							</div>
					<?php 
						}
					?>
					<div class="announcement-content">
						<?php 
							echo $announcement['content'];
						?>
					</div>
				</div>
	<?php 
			}
		}
	?>




	<?php 
		$videos = get_videos();
		if(!empty($videos)){
	?>	
			<div class="section my-1">
				<div class="section-header">
					<i class="fas fa-video"></i>
					<h2>Youtube Videos</h2>
				</div>
			</div>


			<div class="announcement-content youtube-slider section mb-3">
				<div class="video-container">
					<?php 
						foreach($videos as $video){
					?>
							<iframe src="<?= $video['url'] ?>" width = "100%" frameborder="0" allowfullscreen></iframe>
					<?php 
						}
					?>
				</div>

			
			</div>
	<?php 
		}
	?>


   <?php 
	$right_sidebar_latest_posts = get_latest_five_posts_sidebar(5);

	if(!empty($right_sidebar_latest_posts) && (is_array($right_sidebar_latest_posts) && count($right_sidebar_latest_posts) > 0)){
   ?>

		<div class="announcement-content youtube-slider section">
			<div class="section mb-3">
				<div class="section-header">
					<i class="fas fa-blog"></i>
					<h2 class="text-light">Latest Posts</h2>
				</div>

				<ul class="list-unstyled mb-0 mt-3 p-3">
					
					<?php 
						foreach($right_sidebar_latest_posts as $r_s_l_p){
					?>
							<li class="border-bottom pb-3 mb-3">
								<h4 class="h6 mb-2">
									<a href="<?=base_url() . $r_s_l_p['category_slug'] . "/" . $r_s_l_p['url_slug']  ?>"><?= $r_s_l_p['title'] ?></a>
								</h4>
								<div class="d-flex align-items-center justify-content-center text-muted pt-1">
									<div class="fs-xs border-end pe-3 me-3"><?= date("F d, Y") ?></div>
									<div class="d-flex align-items-center me-3">
										<i class="bi bi-hand-thumbs-up fs-base me-1"></i>
										<span class="fs-xs"><?= $r_s_l_p['total_likes'] ?></span>
									</div>
									<!-- <div class="d-flex align-items-center me-3">
										<i class="bi bi-hand-thumbs-down fs-base me-1"></i>
										<span class="fs-xs">300</span>
									</div> -->
									<div class="d-flex align-items-center">
										<i class="bi bi-chat-dots fs-base me-1"></i>
										<span class="fs-xs"><?= $r_s_l_p['total_comments'] ?></span>
									</div>
								</div>
							</li>

					<?php 
						}
					?>
					
				</ul>


			</div>
		</div>

	<?php
	}
	?>


	<?php 
		$ads = get_ads();

		if(!empty($ads)){
			foreach($ads as $ad){
	?>

				<div class="ad-section my-4" data-aos="fade-right" data-aos-easing="linear">
					<div class="card border-0 ad-sec">
						<div class="card-body">
							<?php 
								echo $ad['content'];
							?>
						</div>
					</div>
				</div>
				
	<?php
			}
		}
	?>

</div>
