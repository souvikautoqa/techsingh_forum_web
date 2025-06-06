<div class="col-md-5 col-xxl-3">
	<div class="card">
		<div class="card-body">
			<h5 class="header-title-text text-center"> Prep Toolkit</h5>
			<div class="data-list-box mt-3 d-flex text-center gap-2">
				<div class="filebox">
					<div class=" align-items-center">
						<img src="<?=base_url()?>assets/images/icons/10.png" class="w-35 h-35" alt="">
						<div class="flex-grow-1 ms-2">
							<h6 class="mb-0">Forum Quiz</h6>
						</div>
					</div>
				</div>
				<div class="filebox">
					<div class=" align-items-center">
						<img src="<?=base_url()?>assets/images/icons/02.png" class="w-35 h-35" alt="">
						<div class="flex-grow-1 ms-2">
							<h6 class="mb-0">React Data</h6>
						</div>
					</div>
				</div>
				<div class="filebox">
					<div class=" align-items-center">
						<img src="<?=base_url()?>assets/images/icons/02.png" class="w-35 h-35" alt="">
						<div class="flex-grow-1 ms-2">
							<h6 class="mb-0">React Data</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		$announcements = get_announcements();

		if(!empty($announcements)){
			foreach($announcements as $announcement){
	?>

				<div class="card">
					<div class="card-body">
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
	
			<div class="card">
				<div class="card-body">
					<h5 class="header-title-text text-center"> Youtube Videos</h5>
					<div class="data-list-box mt-3 ">
						<?php 
							foreach($videos as $video){
						?>
								<iframe src="<?= $video['url'] ?>" width = "100%" frameborder="0" allowfullscreen></iframe>
						<?php 
							}
						?>
					</div>
				</div>
			</div>
	<?php 
		}
	?>


	<div class="card">
		<div class="card-body">
			<h5 class="header-title-text text-center"> Latest Posts</h5>
			<div class="data-list-box mt-3 ">
				
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-between" draggable="false">
							<div class="">
								<h6 class="mb-0 text-dark">Layla Garcia</h6>
								<div class="cust-icon d-flex gap-2 pt-1">
									<div class="like">
										<i class="ph ph-thumbs-up"> 1k</i>
									</div>
									<div class="dislike">
										<i class="ph ph-thumbs-down"> 2k</i>
									</div>

									<div class="coment">
										<i class="ph  ph-chat-centered-dots"> 300</i>
									</div>
								</div>
							</div>
							<p class="text-secondary mb-0">10:00 AM</p>
						</div>
					</div>
				</div>
				


			</div>
		</div>
	</div>


	<?php 
		$ads = get_ads();

		if(!empty($ads)){
			foreach($ads as $ad){
	?>

				<div class="card">
					<div class="card-body">
						<?php 
							echo $ad['content'];
						?>
					</div>
				</div>
				
	<?php
			}
		}
	?>


</div>
