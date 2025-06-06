

      <section class="vine-main pt-5">
        <div class="container-fluid my-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4">
                <h1 class="h4 font-weight-bold"> Viewing profile - <?= $student['name'] ?></h1>
                <div class="text-muted"> User statistics </div>
              </div>
              <div class="row">
                <div class="col-lg-2 mb-4">
                  <div class="bg-light p-3 rounded mb-4">

                    <div class="d-flex align-items-center mb-4">
                      <!-- <img alt="User profile picture" class="rounded-circle mr-3" height="50" src="https://avatar.iran.liara.run/public?username=<?= $student['name'] ?>" width="50" /> -->
                      <?= generate_letter_avatar($student['name']) ?>
                      <div>
                        <h2 class="h5 font-weight-bold text-danger"> <?= $student['name'] ?> </h2>
                        <p class="text-muted small"> <?= $student['role_id'] == "1" ? "Moderator" : "Student" ?> </p>
                      </div>
                    </div>

										<?php 
											if(!isset($_SESSION['id']) || (isset($_SESSION['id']) && $_SESSION['id']  != $student['id'])){
										?>
                    		<button class="btn btn-sm btn-warning btn-block mb-4 follow-btn" type = "button" data-id = "<?= $student['id'] ?>"><?= $is_follow ? "Unfollow": "Follow" ?></button>
										<?php 
											}
										?>

                    <!-- <div class="d-flex gap-1 align-items-center mb-3 ">
                      <i class="fas fa-toolbox text-primary mr-3"></i>
                      <span class="small ml-2">
                        <a href="#">TOOLKIT</a>
                      </span>
                    </div> -->

                    <div class="d-flex gap-1 align-items-center mb-3">
                      <i class="fas fa-comments text-success mr-2"></i>
                      <span class="small">
                        <a href="<?=base_url()?>">FORUM</a>
                      </span>
                    </div>

                    <!-- <div class="d-flex gap-1 align-items-center mb-3">
                      <i class="fas fa-question-circle text-warning mr-2"></i>
                      <span class="small">
                        <a href="">QUIZ</a>
                      </span>
                    </div> -->

                    <!-- <div class="p-2 rounded mb-4">
                      <button class="btn btn-sm btn-dark btn-block mb-2 text-light"> SEND PRIVATE MESSAGE </button>
                      <button class="btn btn-sm btn-dark btn-block text-light"> BLOCK/IGNORE </button>
                    </div> -->
                    <!-- <div class="text-muted small mb-2">
                      <p>
                        <strong> Location: </strong> United States
                      </p>
                      <p>
                        <strong> GMAT: </strong> 750 Q49 V42 <i class="fas fa-question-circle"></i>
                      </p>
                      <p>
                        <strong> GPA: </strong> 3
                      </p>
                      <p>
                        <strong> Website: </strong>
                        <a class="text-primary" href="https://gmatclub.com"> https://gmatclub.com </a>
                      </p>
                      <p>
                        <strong> GPA: </strong> 3
                      </p>
                      <p>
                        <strong> Website: </strong>
                        <a class="text-primary" href="https://gmatclub.com"> https://gmatclub.com </a>
                      </p>
                    </div> -->

                  </div>
                </div>
                <div class="col-lg-7 mb-4">
                  <div class="bg-light p-3 rounded mb-4">
                    <div class="row mb-4">
                      <div class="col-md-6 col-lg-4 mb-3">
                        <p class="text-muted small"> Joined: </p>
                        <p class="font-weight-bold"> <?= date("d M Y, H:i A", strtotime($student['created_at'])) ?> </p>
                      </div>
                      <div class="col-md-6 col-lg-4 mb-3">
                        <p class="text-muted small"> Last visited: </p>
                        <p class="font-weight-bold"> <?= date("d M Y H:i A", strtotime($student['updated_at'])) ?></p>
                      </div>
                      <div class="col-md-6 col-lg-4 mb-3">
                        <p class="text-muted small"> Total posts: </p>
                        <p class="font-weight-bold"> <?=  $total_forum_posts ?> </p>
                        <!-- <button class="btn btn-sm btn-dark btn-block mt-2 text-light"> SEARCH USER'S POSTS </button> -->
                      </div>
                      <div class="col-md-6 col-lg-4 mb-3">
                        <p class="text-muted small"> Own Kudos: </p>
                        <p class="font-weight-bold"> <?= $total_received_likes ?> </p>
                        <!-- <button class="btn btn-sm btn-dark btn-block mt-2 text-light"> DETAILS </button> -->
                      </div>
                      <div class="col-md-6 col-lg-4 mb-3">
                        <p class="text-muted small"> Given Kudos: </p>
                        <p class="font-weight-bold"> <?= $total_given_likes ?> </p>
                        <!-- <button class="btn btn-sm btn-dark btn-block mt-2 text-light"> DETAILS </button> -->
                      </div>
                    </div>

										<?php 
											if(!empty($user_forum_posts)){
										?>
												<div class=" p-3 rounded">
													<h2 class="h5 font-weight-bold mb-4"> Five best posts: </h2>
													<table class="table table-striped">
														<tbody>
															<?php
																foreach($user_forum_posts as $u_f_p){
															?>
																	<tr>
																		<td>
																			<span class="text-success font-weight-bold">
																				<i class="fas fa-thumbs-up text-warning mr-2"></i> <?= $u_f_p['total_likes'] ?> </span>
																		</td>
																		<td>
																			<a class="" href="<?= base_url() . "/" .  $u_f_p['category_slug'] . '/' . $u_f_p['url_slug'] ?>"> <?= $u_f_p['title'] ?></a>
																		</td>
																		<td>
																			<span class="text-muted small"> <?= date("d M Y H:i A", strtotime($u_f_p['created_at'])) ?></span>
																		</td>
																	</tr>

															<?php 
																}
															?>
															
														</tbody>
													</table>
													<!-- <button class="btn btn-warning btn-block mt-4"> SHOW ALL POSTS WITH KUDOS </button> -->
												</div>

										<?php
											}
										?>


                  </div>


                  <div class="bg-light p-3 rounded">
                    <div class="d-block align-items-center mb-4">
                      <div class="mb-4 mb-md-0">
                        <p class="text-dark small"> Following: <?= count($member_followings) ?> </p>
                        <p class="text-success small">
													<?php 
														foreach($member_followings as $following_key => $member_following){
													?>
                          		<a href="<?=base_url() . "members/member-" . $member_following['id'] ?>"><?= $member_following['name']?></a>
															<?= ($following_key + 1) != count($member_followings) ? ',' : ''  ?>
													<?php
														}
													?>

                        </p>
                      </div>
                      <div>
                        <p class="text-dark small mt-2"> Followers: <?= count($member_followers) ?></p>
                        <p class="text-success small">
														<?php 
															foreach($member_followers as $follower_key => $member_follower){
														?>
																<a href="<?=base_url() . "members/member-" . $member_follower['id'] ?>"><?= $member_follower['name']?></a>
																<?= ($follower_key + 1) != count($member_followers) ? ',' : ''  ?>
														<?php
															}
														?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mb-4">
                  <div class="bg-light p-3 rounded mb-4">
                    <!-- <div class="d-flex gap-2 align-items-center mb-4">
                      <i class="fas fa-trophy text-warning mr-2"></i>
                      <div>
                        <p class="h5 font-weight-bold "> Legendary </p>
                        <p class="h4 font-weight-bold text-primary"> 9486 </p>
                      </div>
                      <hr>
                    </div> -->
                    <div class="text-muted small">
                      <p>
                        <strong>
                          <i class="fas fa-gift text-warning mr-2 mb-3 "></i> Points: </strong> <?= $total_points ?>
                      </p>
                      <p>
                        <strong>
                          <i class="fas fa-star text-warning mr-2 mb-3"></i> Badges: </strong>  <?= !empty($badges) && is_array($badges) ? count($badges) : 0 ?>
                      </p>
                      <!-- <p>
                        <strong>
                          <i class="fas fa-certificate text-warning mr-2"></i> Rewards: </strong> 2
                      </p> -->
                    </div>
                    <?php 
                      if(!empty($badges)){
                    ?>
                        <div class=" p-3 rounded">
                          <h2 class="h5 font-weight-bold mb-4 "> BADGES </h2>
                          <div class="row m-auto">

                              <?php 
                                foreach($badges as $badge){
                              ?>
                                  <div class="col-6  mb-3">
                                    
                                      <img alt="Engagement badge" class="mr-2 rounded d-block" height="50" src="<?=base_url() . "assets/img/" . $badge['image'] ?>" width="50" />
                                    
                                    <span class="small">
                                      <?= $badge['badge'] ?>
                                    </span>
                                  </div>
                              <?php 
                                }
                              ?>
                            
                          
                          </div>

                        </div>

                    <?php 
                      }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
		