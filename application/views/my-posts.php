
			<section class="dashboard">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-lg-3 mb-3">

                            <?php 
								$this->load->view('layouts/user-sidebar');
							?>

                        </div>
                        <!--/col-lg-3-->

                        <div class="col-12 col-lg-9">

                            <div class="row mt-2 userprofile-stats" id="general">




                                <div class="myprofile-container">

                                    <div class="col-lg-12 ">


                                        <div class="questions">

											<?php 
												if(!empty($forum_posts)){
													foreach($forum_posts as $post){
											?>

													<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
														<div class="qa-avatar">
															<a href="#">
																<!-- <img src="https://avatar.iran.liara.run/public?username=<?= $post['author_name'] ?>" alt="User"> -->
																<?= generate_letter_avatar($post['author_name']) ?>
															</a>
														</div>

														<div class="qa-holder ">

															<!-- <div class="qa-badge"> <i class="bi bi-check2-circle"></i> Solved</div> -->

														


															<div class="qa-content mb-">

																<div class="post-heading d-flex justify-content-between">
																	<h1><a href="<?= base_url() . $post['category_slug'] . '/' . $post['url_slug'] ?>"><?= $post['title'] ?></a></h1>
																	<?php 
																		if($post['status'] == "not_approved"){

																	?>
																			<div>
																				<a href="<?=base_url()?>edit/post/<?= $post['url_slug'] ?>"><span class="qa-text"><i class="bi bi-pencil-square"></i> Edit</span> </a> 

																				<a href="<?=base_url()?>delete/post/<?= $post['url_slug'] ?>"><span class="qa-text"><i class="bi bi-trash"></i> Delete</span> </a>
																			</div>
																	<?php 
																		}
																	?>
																</div>
																
																<div class="d-flex align-items-center flex-wrap mb-">
																	
																	<span class="qa-category"><a href="<?= base_url() .  $post['category_slug'] ?>"><?= $post['category_name']?></a></span>
																	<span class="qa-text"><i class="bi bi-clock-history"></i> <?= time_elapsed_string($post['created_at']) ?></span>
																</div>

															</div>

															<!-- <div class="qa-stats">
																<div class="qa-item">
																	<div class="d-flex align-items-center flex-wrap mb-2">
																		<span class="qa-text"><i class="bi bi-clock-history"></i> January 14th 2023</span>
																	</div>
																</div>



															</div> -->
														</div>
													</div>
													<!--/qa-box-->


											<?php 
													}
												}
											?>



                                      

                                        </div>
                                        <!--/questions-->


                                    </div>
                                </div>



                            </div>
                            <!--/row-->

                        </div>
                        <!--/col-lg-9-->

                    </div>
                </div>
            </section>
