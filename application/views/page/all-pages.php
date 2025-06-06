<?php 
	$this->load->view('layouts/head', ['page_title' => $page_title]);
?>

<div class="app-content">
	<div class="">

		<?php 
			$this->load->view('layouts/header');
		?>


		<!-- Body main section starts -->
		<main>
			<div class="container-fluid">
				<!-- Breadcrumb start -->
				<div class="row m-1">
					<div class="col-12 ">
						<h4 class="main-title">Pages</h4>
						<ul class="app-line-breadcrumbs mb-3">
							<li class="">
								<a href="#" class="f-s-14 f-w-500">
									<span><i class="ph-duotone  ph-stack f-s-16"></i> Home</span>
								</a>
							</li>
						
							<li class="active">
								<a href="#" class="f-s-14 f-w-500">Pages</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Breadcrumb end -->

				<!-- blog start -->
				<div class="row blog-section">
					<!-- Technology start -->
					<?php 
						foreach($pages as $page){
					?>
							<div class="col-md-6 col-lg-4 col-xxl-3">
								<div class="card blog-card overflow-hidden">
									<a href="<?= base_url() . "page/". $page['url_slug'] ?>">
										<img src="<?= ADMIN_URL . $page['featured_image'] ?>" class="card-img-top" alt="..." height = "250px">
									</a>
									<div class="tag-container">
										<span class="badge text-light-secondary"><?= $page['category_name'] ?></span>
									</div>
									<div class="card-body">
										<p class="text-body-secondary"><i class="ti ti-calendar-due"></i> <?= date("d.m.y", strtotime($page['created_at'])) ?></p>
										<a href="<?= base_url() . "page/". $page['url_slug'] ?>" class="bloglink">
											<h5 class="title-text mb-2"><?= $page['title'] ?></h5>
										</a>
										<p class="card-text text-secondary">
											<?= $page['description'] ?>
										</p>
										
										
									</div>
								</div>
							</div>
					<?php 
						}
					?>
					<!-- Technology end -->
					
				</div>
				<!-- blog end -->

				<div class="row">
					<div class="col-md-12">
						<?= $pagination_links; ?>
					</div>
				</div>
			</div>
		</main>
		<!-- Body main section ends -->

	</div>
</div>


<?php 
	$this->load->view('layouts/footer');
?>
 


<?php 
	$this->load->view('layouts/footer-end');
?>
