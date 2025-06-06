
    <section class="dashboard">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-lg-3 mb-3">

            <?php 
							$this->load->view('layouts/user-sidebar.php');
						?>

          </div><!--/col-lg-3-->

          <div class="col-12 col-lg-9">
						
            <div class="row mt-2 userprofile-stats" id="general">

              


              <div class="myprofile-container">
                <div class="myprofile-header">
                  Viewing profile - <?= $student['name'] ?>
                </div>
                <div class="myprofile-nav">
                  <a href="#">
                    Board presence
                  </a>
                  <a href="#">
                    User statistics
                  </a>
                </div>
                <div class="myprofile-section">
                  <div class="myprofile-left">
                    <!-- <img alt="User profile picture" height="120"
                      src="https://avatar.iran.liara.run/public?username=<?= $student['name'] ?>"
                      width="120" /> -->
                      <div class = "text-center">
                        <?= generate_letter_avatar($student['name']) ?>
                      </div>
                    <h2>
                      <?= $student['name'] ?>
                    </h2>
                    <!-- <div class="profile-info ">
                      <select name="" id="" class="mb-3 p-1">
                        <option value="">Groups: Registered user</option>
                      </select>
                      <button class="bg-success">
                        Go
                      </button>
                      <button class="bg-">
                        + ADD SCHOOL
                      </button>
                      <button class="bg-dark">
                        + ADD GMAT/GRE SCORE
                      </button>
                    </div> -->
                  </div>
                  <div class="myprofile-right">
                    <div class="details">
                      <div>
                        <p>
                          <span>
                            Joined:
                          </span>
                          <?php
														echo date("d F Y H:i", strtotime($student['created_at']));
													?>
                        </p>
                        <p>
                          <span>
                            Last visited:
                          </span>
                          <?php 
														echo date("d F Y H:i", strtotime($student['last_visited_at']));
													?>
                        </p>
                        <p>
                          <span>
                            Total posts:
                          </span>
													<?php 
														echo $total_forum_posts;
													?>
                          <!-- <a href="#">
                            <i class="fas fa-search">
                            </i>
                            SEARCH USER'S POSTS
                          </a> -->
                        </p>
                        <p>
                          <span>
                            Own Kudos:
                          </span>
                          <?= $total_received_likes ?>
                          <!-- <a href="#">
                            <i class="fas fa-thumbs-up">
                            </i>
                            DETAILS
                          </a> -->
                        </p>
                        <p>
                          <span>
                            Given Kudos:
                          </span>
                          <?= $total_given_likes ?>
                          <!-- <a href="#">
                            <i class="fas fa-thumbs-up">
                            </i>
                            DETAILS
                          </a> -->
                        </p>
                        <!-- <p>
                          <span>
                            Most active forum:
                          </span>
                          -
                        </p>
                        <p>
                          <span>
                            Most active topic:
                          </span>
                          -
                        </p> -->
                      </div>
                      <div>
                        <p>
                          <span>
                            Following:
                          </span>
                          <?= count($member_followings) ?>:
                          
													<?php 
														foreach($member_followings as $following_key => $member_following){
													?>
															<a href="<?=base_url() . "members/member-" . $member_following['id'] ?>"><?= $member_following['name']?></a>
															<?= ($following_key + 1) != count($member_followings) ? ',' : ''  ?>
													<?php 
														}
													?>
                          
                        </p>
                        <p>
                          <span>
                            Followers:
                          </span>
                          <?= count($member_followers) ?>

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
                    <div class="badges">
                      <h3>
                        Statistics
                      </h3>
                      <p>
                         <i class="fas fa-coins" style="color:#ff7f0e;"></i>  Points : <?= $total_points ?> 
                       
                      </p>
										
                      <p>
                        <i class="fas fa-star" style="color:#ff7f0e;"></i> Badges : <?= !empty($badges) && is_array($badges) ? count($badges) : 0 ?>
                      </p>
                     
                      <?php 
                        $member_link = base_url() . "members/member-" . $_SESSION['id'];
                      ?>
                      <button class="" onClick = "window.location.href = '<?= $member_link ?>'" >
                        VIEW ALL BADGES
                      </button>
                      <!-- <button class="bg-success">
                        VIEW DASHBOARD
                      </button> -->
                    </div>
                  </div>
                </div>
              </div>



            </div><!--/row-->


          </div><!--/col-lg-9-->

        </div>
      </div>
    </section>

