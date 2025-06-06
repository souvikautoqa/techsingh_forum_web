<?php 
	$this->load->view('layouts/head', ['page_title' => $page_title]);
?>

        <div class="app-content">
            <div class="">

                <?php 
					$this->load->view('layouts/header');
				?>

                <!-- Body main section starts -->


                <main class="parent-container">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- order 1 -->
                            <div class="col-lg-8 col-xxl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="post-div mb-3">
                                            <div class="row g-2">
                                                <div class="col-12">
                                                    <img src = "<?= ADMIN_URL . $page['featured_image'] ?>" class="w-100  rounded">
                                                </div>
                                               
                                            </div>
                                        </div>

                                        <h5 class="mb-3 text-dark f-w-600"><?= $page['title'] ?></h5>

                                        <div class="mb-3">
											<?= $page['content'] ?>
                                        </div>


                                        <div class="app-divider-v mb-2"></div>
                                        <!-- <div class="d-flex align-items-center flex-wrap ">
                                            <div class="h-50 w-50 d-flex-center b-r-10 overflow-hidden">
                                                <img src="../assets/images/avtar/09.png" alt="" class="bg-danger img-fluid">
                                            </div>
                                            <div class="flex-grow-1 ps-2 me-2">
                                                <h6 class="mb-0 f-w-500 text-dark"> Bette Hagenes</h6>
                                                <div class="text-muted f-s-12">26 Nov,2022</div>
                                            </div>
                                            <div>
                                                <a href="#" role="button" class="btn btn-sm icon-btn b-r-5"> <i class="ti ti-thumb-up f-s-20"></i></a>
                                                <a href="#id1" role="button" class="btn btn-sm icon-btn b-r-5"> <i class="ti ti-brand-hipchat f-s-20"></i></a>
                                                <a href="#" role="button" class="btn btn-sm icon-btn b-r-5"> <i class="ti ti-share f-s-20"></i></a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Comments</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="blogcomment-box mb-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden comment-img">
                                                    <img src="../assets/images/avtar/4.png" alt="avtar" class="bg-warning img-fluid">
                                                </div>
                                                <div class="commentdiv">
                                                    <h6 class="mb-0 text-dark f-w-600">Bette Hagenes <span class="text-muted f-s-12"> 1 min</span></h6>
                                                    <p class="text-muted mb-0">
                                                        “Photography is the only language that can be understood anywhere in the world.”
                                                        <span class="fs-6 d-inline-block text-secondary"><cite>- Bruno Barbey</cite></span>
                                                    </p>
                                                    <span class="badge text-light-secondary">lenora@gmail.com</span>
                                                    <span class="badge text-light-dark"> #beautiful</span>
                                                </div>
                                                <div>
                                                    <div class="btn-group dropdown-icon-none">
                                                        <a class="icon-btn dropdown-toggle p-2" role="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share"></i> Share </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit"></i> Edit </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blogcomment-box mb-3">
                                            <div class="d-flex justify-content-between ">
                                                <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden comment-img">
                                                    <img src="../assets/images/avtar/4.png" alt="avtar" class="bg-warning img-fluid">
                                                </div>
                                                <div class="commentdiv">
                                                    <h6 class="mb-0 text-dark f-w-600">Bette Hagenes <span class="text-muted f-s-12"> 1 min</span></h6>
                                                    <p class="text-muted mb-0">You're such a talented person with the camera. I appreciate your work ,It's always good to work with a photographer who knows how to get the job done. </p>
                                                </div>
                                                <div>
                                                    <div class="btn-group dropdown-icon-none">
                                                        <a class="icon-btn dropdown-toggle p-2" role="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-share"></i> Share </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-edit"></i> Edit </a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="ti ti-trash"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="mb-3">Leave A Comment</h5>
                                        <form class="app-form" id="id1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" rows="3" placeholder="Enter Your Comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" placeholder="Enter Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <input type="email" class="form-control" placeholder="Enter Your Email">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="ti ti-send"></i> Comment
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <h5 class="mb-3">Latest Pages</h5>
                                <div class="row">

									<?php 
										foreach($latest_pages as $lt){
									?>

											<div class="col-md-6 col-xxl-4">
												<div class="card blog-card overflow-hidden">
													<a href="<?= base_url() ?>page/<?= $lt['url_slug'] ?>">
														<img src="<?= ADMIN_URL . $lt['featured_image'] ?>" class="card-img-top" alt="..." height = "250px">
													</a>
													<div class="tag-container">
														<span class="badge"><?= $lt['category_name'] ?></span>
													</div>
													<div class="card-body">
														<p class="text-body-secondary"><i class="ti ti-calendar-due"></i> <?= date("d.m.y", strtotime($lt['created_at'])) ?></p>
														<a href="<?= base_url() ?>page<?= $lt['url_slug'] ?>" class="bloglink">
															<h5 class="title-text mb-2"><?= $lt['title'] ?></h5>
														</a>
														<p class="card-text text-secondary">
															<?= $lt['description'] ?>
														</p>
													</div>
												</div>
											</div>

									<?php 
										}
									?>
                                    
                                </div>
                            </div>



                            <?php 
								$this->load->view('layouts/sidebar');
							?>

                        </div>
                    </div>
                </main>


            </div>
        </div>
        <!-- Body main section ends -->


        
<?php 
	$this->load->view('layouts/footer');
?>
 


<?php 
	$this->load->view('layouts/footer-end');
?>
