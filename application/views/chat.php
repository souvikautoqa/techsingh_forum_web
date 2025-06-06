

		<!-- ==============================================
		 Dashboard
		=============================================== -->
        <section class="dashboard">
            <div class="container">
                <div class="row">

                    <!-- Sidebar START -->
                    <div class="col-lg-12" data-aos="fade-right" data-aos-easing="linear">

                        <!-- Divider -->
                        <!-- <div class="d-flex align-items-center my-5 d-lg-none">
                            <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="btn btn-mint bi bi-sliders2"></i>
                                <span class="h6 mb-0 fw-bold d-lg-none ms-2">Chats</span>
                            </button>
                        </div> -->
                        
						<!-- Advanced filter responsive toggler END -->
                        <div class="card card-body">
                            <div class="align-items-center">
                                <h1 class="h5 mb-0">Chats 
									<!-- <span class="badge bg-green bg-opacity-10 text-white">120</span> -->
								</h1>
                            </div>
                        </div>

                        <nav class="navbar navbar-light navbar-expand-lg mx-0">
                          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                            <!-- Offcanvas header -->
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas"></button>
                            </div>

                            <!-- Offcanvas body -->
                            <div class="offcanvas-body p-0">
                                <div class="card card-chat-list card-body">
                                    
                                    <!-- Search chat START -->
                                    <!-- <form class="position-relative">
                                        <input class="py-2" type="search" placeholder="Search for Users" aria-label="Search">
                                        <button class="btn bg-transparent text-secondary px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit">
                                            <i class="bi bi-search fs-5"></i>
                                        </button>
                                    </form> -->
                                    <!-- Search chat END -->
                                    <!-- Chat list tab START -->
                                    <div class="mt-4 h-100">
                                    <div data-simplebar class="chat-tab-list">
                                        <ul class="nav flex-column nav-pills nav-pills-soft">

											<?php 
												foreach($chat_list as $chat){
											?>
													<li data-bs-dismiss="offcanvas">
														<a href="<?= base_url() ?>chat/<?= $chat['user_id'] ?>" class="nav-link active">
															<div class="d-flex">
																<div class="flex-shrink-0 avatar avatar-md me-2">
																	<!-- <img class="avatar-img rounded-circle" src="https://avatar.iran.liara.run/public?username=<?= $chat['user_name'] ?>" alt="User"> -->
                                                                    <?= generate_letter_avatar($chat['user_name']) ?>
																</div>
																<div class="flex-grow-1 message-by">
																	<div class="d-flex justify-content-between">
																		<h5><?= $chat['user_name'] ?></h5>
																		<span><?= time_elapsed_string($chat['sent_at']) ?></span>
																	</div>
																	<p><?= $chat['message'] ?></p>
																</div>
															</div>
														</a>
													</li><!-- Chat user item -->

											<?php 
												}
											?>

                                           

                                        
                                        </ul>
                                    </div>
                                    </div>
                                    <!-- Chat list tab END -->
                                </div>
                            </div>
                          </div>
                        </nav>
                    </div>
                    <!-- Sidebar START -->

                

                </div>
            </div>
        </section>

