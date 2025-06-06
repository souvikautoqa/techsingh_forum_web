			<div class="dash-sidebar position-sticky" data-aos="fade-right" data-aos-easing="linear">

              <div class="ps-3 d-flex align-items-center">
                <div class="media align-items-center">
                  <div class="media-head me-2">
                    <!-- <div class="avatar avatar-lg">
                      <img src="https://avatar.iran.liara.run/public?username=<?= $_SESSION['name'] ?>" alt="user" class="avatar-img rounded-circle">
                    </div> -->
                    <?= generate_letter_avatar($_SESSION['name']) ?>
                  </div>
                  <div class="media-body">
                    <h5><?= $_SESSION['name'] ?></h5>
										<?php 
											$member_since = member_since($_SESSION['id']);
											if(!empty($member_since)){
												if(date("Y") != date("Y", strtotime($member_since))){
										?>
                    		<p class="small mb-0">Member since <?= date("Y", strtotime($member_since)) ?></p>
										<?php 
												}else{
										?>
													<p class="small mb-0">New Member</p>
										<?php
												}
											}
										?>
                  </div>
                </div>

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto d-block d-xl-none" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </button>
              </div>

              <div class="navbar-collapse d-xl-block collapse" id="navbarNav2">
                <ul class="navbar-nav flex-column">
                  <li class="nav-info"></li>
                  <li class="nav-item">
                    <a class="nav-link"  href = "<?=base_url()?>profile">
                      <span class="nav-icon-wrap"><i class="bi bi-person-check"></i></span>
                      <span class="nav-link-text">My Profile</span>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href = "<?= base_url() ?>chat">
                      <span class="nav-icon-wrap"><i class="b bi-patch-check"></i></span>
                      <span class="nav-link-text">Messages</span>

                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href = "<?= base_url()?>my-posts">
                      <span class="nav-icon-wrap"><i class="bi bi-sticky"></i></span>
                      <span class="nav-link-text">My Posts</span>
                    </a>
                  </li>

									<?php 
										if($_SESSION['role'] == 1){
									?>

									<li class="nav-item">
                    <a class="nav-link" href = "<?= base_url()?>pending-approval">
                      <span class="nav-icon-wrap"><i class="bi bi-sticky"></i></span>
                      <span class="nav-link-text">Pending For Approval</span>
                    </a>
                  </li>

									<?php 
										}
									?>

                  <li class="nav-item">
                    <a class="nav-link" href = "<?= base_url()?>bookmark">
                      <span class="nav-icon-wrap"><i class="bi bi-bookmarks"></i></span>
                      <span class="nav-link-text">My Bookmarks</span>

                    </a>
                  </li>


                

                  <!-- <li class="nav-item">
                    <a class="nav-link" onclick="showSection('settings')">
                      <span class="nav-icon-wrap"><i class="bi bi-gear"></i></span>
                      <span class="nav-link-text">Settings</span>

                    </a>
                  </li> -->



                  <li class="nav-item">
                    <a class="nav-link"  href="<?= base_url() . "logout" ?>">
                      <span class="nav-icon-wrap"><i class="b bi-power"></i></span>
                      <span class="nav-link-text">Logout</span>
                    </a>
                  </li>
                </ul>
              </div>


      </div>
