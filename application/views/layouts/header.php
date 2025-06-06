<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .login-btn{
		background: #1a503e;
		border: none;
	}
</style>
<header class="vine-navbar fixed-top">
    <nav class="navbar navbar-expand-lg d-none">
        <div class="container-fluid px-lg-4 align-items-center">

            <div class="logo">
                <a class="navbar-brand" href="<?=base_url()?>">
                    <img class="logo-dark" src="<?=base_url()?>assets/img/logo.png" alt="Logo">
                </a>
            </div>


            <div class="offcanvas nav-offcanvas offcanvas-start" tabindex="-1" id="offcanvas_Header_011" aria-labelledby="offcanvas_Header_011">
                <div class="offcanvas-header flex-wrap border-bottom border-gray-200">
                    <?php 
                        if(isset($_SESSION['id']) && $_SESSION['id']){
                    ?>
                    <div class="offcanvas-title">
                        <div class="d-flex align-items-center">
                            <!-- <div class="avatar"><img class="avatar-img rounded-circle" src="<?=base_url()?>assets/img/avatar/1.jpg" alt="User"></div> -->
                            <?= generate_letter_avatar() ?>
                            <div class="col ps-3">
                                <h6 class="mb-0"><?= $_SESSION['name'] ?></h6> <span><?= $_SESSION['role'] == 0 ? "Student" : "Moderator"; ?></span></div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvas_Header_01" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">

                    <!-- Nav Search START -->
                    <div class="col-xl-5">
                        <div class="nav mt-3 mt-lg-0 px-lg-4 flex-nowrap align-items-center">
                            <div class="search-form nav-item w-100">
                                <form class="rounded position-relative" method = "GET" action = "<?= base_url()?>search" >
                                    <input class="ps-5 bg-opacity-10 border-0" type="search" placeholder="Search" name = "search_term" aria-label="Search">
                                    <button class="btn bg-transparent px-3 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-6 text-green pe-2"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Nav Search END -->
                    <ul class="navbar-nav">


                        <li class="nav-item dropdown dropdown-hover d-sm-block d-md-none">
                            <a class="nav-link " href="<?=base_url()?>" data-bs-toggle="">
                                <i class="bi bi-house-door me-2"></i>Home
                            </a>
                        </li>


                        <?php 
                            $header_menus = get_navigation(); 
                            if (!empty($header_menus)):
                        ?>
                            <?php foreach ($header_menus as $menu): ?>
                                <?php 
                                    $submenus = get_navigation($menu['id']);
                                    $hasDropdown = !empty($submenus);
                                ?>

                                <li class="nav-item dropdown <?= $hasDropdown ? 'dropdown-hover' : '' ?> d-sm-block d-md-none">
                                    <a class="nav-link <?= $hasDropdown ? 'dropdown-toggle' : '' ?>" 
                                    href="<?= $menu['link'] ?>" 
                                    <?= $hasDropdown ? 'data-bs-toggle="dropdown"' : '' ?>>
                                        <?php if (!empty($menu['icon'])): ?>
                                            <i class="<?= $menu['icon'] ?> me-2"></i>
                                        <?php endif; ?>
                                        <?= $menu['title'] ?>
                                    </a>

                                    <?php if ($hasDropdown): ?>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($submenus as $submenu): ?>
                                                <li>
                                                    <a class="dropdown-item" href="<?= $submenu['link'] ?>">
                                                        <?= $submenu['title'] ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        



                        <!-- <li class="nav-item dropdown d-md-none d-sm-block">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-journal me-2"></i>Forum
                            </a>

                            
                            <ul class="dropdown-menu" aria-labelledby="">
                                <li>
                                    <div class="row">
                                        <div class="col">
                                            <div class="">

                                                <ul class="mega-dropdown-list">
                                                    <li><a href="discussion.html" class="dropdown-item"> Ask Question</a></li>
                                                    <li><a href="discussion-2.html" class="dropdown-item">GMAT Forums</a></li>
                                                    <li><a href="discussion-3.html" class="dropdown-item">MBA Forums</a></li>
                                                    <li><a href="discussion-4.html" class="dropdown-item">Executive MBA</a></li>
                                                    <li><a href="discussion-5.html" class="dropdown-item">Masters Programs</a></li>
                                                    <li><a href="discussion-6.html" class="dropdown-item">GRE</a></li>
                                                    <li><a href="discussion-7.html" class="dropdown-item">Support</a></li>
                                                    <li><a href="discussion-7.html" class="dropdown-item">Blog</a></li>

                                                </ul>

                                            </div>
                                        </div>



                                    </div>
                                </li>
                            </ul>
                        </li> -->

                        

                    </ul>

                </div>	
            </div>


            <div class="header-end d-flex justify-content-end">

                <!--  Add Post Start -->
                <!-- <div class="h-col h-plus-toggle">
                    <a class="btn btn-mint rounded-circle" href="dash-addpost.html">
                        <i class="bi bi-plus-lg"></i>
                    </a>
                </div> -->
                <!-- Add Post END -->

               

                <!-- Messages dropdown START -->
                <!-- <div class="nav-item dropdown h-col d-none d-lg-block">

                    <a class="h-message-icon h-icon" href="#header_message_bar" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-chat-left-text"></i> <sup>4</sup>
                    </a>

                    
                    <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                        <div class="card bg-transparent border-0">
                            <div class="card-header bg-transparent py-4 d-flex justify-content-between align-items-center">
                                <h6 class="m-0">Messages <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                                <a class="small" href="#">Clear all</a>
                            </div>
                            <div data-simplebar class="card-body p-0 dropdown-body">
                                <ul class="list-group list-unstyled list-group-flush">


                                    <li>
                                        <a href="#" class="list-group-item-action border-0 d-flex p-3">
                                            <div>
                                                <h6 class="mb-1">Oliver Carpenter</h6>
                                                <p class="small m-0">Lorem ipsum dolor sit amet, conse...</p>
                                                <small class="text-muted fs-xs">5 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                   



                                </ul>
                            </div>
                           
                            <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                <a href="#" class="stretched-link">See all incoming activity</a>
                            </div>
                        </div>
                    </div>
                    
                </div> -->
                <!-- Messages dropdown END -->

				<?php 
					if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

						$h_notifications = get_notifications_header($_SESSION['id'], 5);
				?>
						<!-- Notification dropdown START -->
						<div class="nav-item dropdown h-col d-none d-lg-block">

							<a class="h-notification-icon h-icon" href="#header_notification_bar" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell"></i> <sup id = "notification-count"><?= count($h_notifications) ?></sup>
							</a>

							<!-- Notification dropdown menu START -->
							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
								<div class="card bg-transparent border-0">
									<div class="card-header bg-transparent py-4 d-flex justify-content-between align-items-center">
										<h6 class="m-0">Notifications</h6>
										<a class="small" href="javascript:void(0)" id = "clear-notification-btn">Clear all</a>
									</div>
									<div data-simplebar class="card-body p-0 dropdown-body">
										<ul class="list-group list-unstyled list-group-flush" id = "notification-list">

										<?php
											foreach($h_notifications as $h_n){
										?>
											<li>
												<a href="#" class="list-group-item-action border-0 d-flex p-3">
													<div>
														<h6 class="mb-1"><?= $h_n['title'] ?></h6>
														<p class="small m-0"><?= $h_n['message'] ?></p>
														<small class="text-muted fs-xs"><?= time_elapsed_string($h_n['created_at']) ?></small>
													</div>
												</a>
											</li>
											
										<?php 
											}
										?>
										

										</ul>
									</div>
									<!-- Button -->
									<!-- <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
										<a href="#" class="stretched-link">See all incoming activity</a>
									</div> -->
								</div>
							</div>

							<!-- Notification dropdown menu END -->
						</div>
						<!-- Notification dropdown END -->
				<?php 
					}
				?>

				<?php 
					if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
				?>
						<!-- Account -->
						<div class="nav-item ms-3 dropdown h-col">
							<a href="#" id="navbarShoppingCartDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
								<div class="d-flex">
									<!-- <img class="avatar-sm avatar-img rounded-circle" src="https://avatar.iran.liara.run/public?username=<?= $_SESSION['name'] ?>" alt="Image Description"> -->
                                    <?= generate_letter_avatar() ?>
									<div class="profile-text d-none d-sm-block">
										<div class="profile-head text-muted">Hello,</div>
										<div class="text-nowrap"><?= $_SESSION['name'] ?> </div>
									</div>
								</div>
							</a>

							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-2 shadow-lg border-0" aria-labelledby="navbarShoppingCartDropdown" style="min-width: 16rem;">
								<a class="d-flex align-items-center p-2" href="#">
									<div class="flex-shrink-0">
										<!-- <img class="avatar" src="https://avatar.iran.liara.run/public?username=<?= $_SESSION['name'] ?>" alt="Image Description"> -->
                                        <?= generate_letter_avatar() ?>
									</div>
									<div class="flex-grow-1 ms-3">
										<span class="d-block fw-semibold"><?= $_SESSION['name'] ?></span>
										<span class="d-block text-muted small"><?= $_SESSION['role'] == 0 ? "Student" : "Moderator"; ?></span>
									</div>
								</a>

								<div class="dropdown-divider my-3"></div>

								<a class="dropdown-item" href="<?= base_url() ?>profile"><span class="dropdown-item-icon"><i class="bi-person"></i></span> Dashboard</a>
								<a class="dropdown-item" href="<?= base_url() ?>my-posts"><span class="dropdown-item-icon"><i class="bi bi-sticky"></i></span> My Posts </a>
								<a class="dropdown-item" href="<?= base_url() ?>bookmark"><span class="dropdown-item-icon"><i class="bi-bookmarks"></i></span> Bookmarks </a>
								<!-- <a class="dropdown-item" href="dash-subscriptions.html"><span class="dropdown-item-icon"><i class="bi-wallet2"></i></span> Subscriptions</a> -->

								<div class="dropdown-divider"></div>

								<!-- <a class="dropdown-item" href="#">
									<span class="dropdown-item-icon">
										<i class="bi-question-circle"></i>
										</span> Help
								</a> -->
								<a class="dropdown-item" href="<?= base_url() ?>logout">
									<span class="dropdown-item-icon">
										<i class="bi-box-arrow-right"></i>
										</span> Log out
								</a>
							</div>
						</div>
						<!-- End Account -->

				<?php 
					}else{
				?>
						<div class="nav-item ms-3 h-col d-none d-lg-block">
							<a href="<?=base_url()?>login" class = "btn btn-secondary login-btn px-4 py-2"><i class="fa-solid fa-right-to-bracket"></i> 
							Login</a>
						</div>	
				<?php
					}
				?>
				

                

                <!-- Mobile Toggle -->
                <div class="h-col h-toggler d-xl-none">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_Header_01" aria-controls="offcanvas_Header_01">
                        <span class="px-navbar-toggler-icon"></span>
                    </button>
                </div>


            </div>
        </div>
    </nav>

    <!-- Updated Navbar -->

    
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white new-nav-top">
        <div class="container-fluid px-lg-4 d-flex align-items-center justify-content-between">

            <!-- Logo -->
            <a class="navbar-brand me-3" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="Logo" class="logo-dark">
            </a>

            <!-- Offcanvas Toggle Button (mobile only) -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu (hidden on small screens) -->
            <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarContent">
                <ul class="navbar-nav me-auto ms-2 gap-2">
                    <?php 
                        $topbar_navigation = get_topbar_navigation();

                        if(!empty($topbar_navigation)){
                            foreach($topbar_navigation as $tn){
                    ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $tn['link'] ?>">
                                        <?= $tn['title'] ?>
                                    </a>
                                </li>

                    <?php 
                            }
                        }
                    ?>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">GMAT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">MBA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">RESOURCES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">DEALS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">REVIEWS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">CHAT</a></li> -->
                </ul>

                <!-- Search -->
                <div class="custom-search-form-header search-container ms-3">
                    <form action="<?= base_url() ?>search" method="get" class="d-flex align-items-center">
                        <input class="search expandright" id="searchright" type="search" name="search_term" placeholder="Search">
                        <label class="button searchbutton" for="searchright"><i class="bi bi-search"></i></label>
                    </form>
                </div>

                <!-- Auth -->
                <?php if (isset($_SESSION['id']) && $_SESSION['id']): ?>
                    <div class="dropdown ms-3">
                        <a class="d-flex align-items-center text-decoration-none" href="#" id="userDropdown" data-bs-toggle="dropdown">
                            <?= generate_letter_avatar() ?>
                            <span class="ms-2"><?= $_SESSION['name'] ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="<?= base_url() ?>profile">Dashboard</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>my-posts">My Posts</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>bookmark">Bookmarks</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>logout">Logout</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="d-flex gap-2 ms-3">
                        <a href="<?= base_url() ?>login" class="btn btn-secondary login-btn px-4 py-2">
                            <i class="fa-solid fa-right-to-bracket"></i> Login
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Menu for Small Screens -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileMenuLabel">
                <!-- Logo -->
                <a class="navbar-brand me-3" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/img/logo.png" alt="Logo" class="logo-dark">
                </a>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">FORUMS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">GMAT</a></li>
                <li class="nav-item"><a class="nav-link" href="#">MBA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">RESOURCES</a></li>
                <li class="nav-item"><a class="nav-link" href="#">DEALS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">REVIEWS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CHAT</a></li>
            </ul>

            <!-- Optional: Search in offcanvas -->
            <form action="<?= base_url() ?>search" method="get" class="mt-3">
                <input class="form-control" type="search" name="search_term" placeholder="Search">
            </form>

            <!-- Optional: Login/Profile in offcanvas -->
            <div class="mt-4">
                <?php if (isset($_SESSION['id']) && $_SESSION['id']): ?>
                    <div class="d-flex align-items-center mb-2">
                        <?= generate_letter_avatar() ?>
                        <span class="ms-2"><?= $_SESSION['name'] ?></span>
                    </div>
                    <a href="<?= base_url() ?>profile" class="d-block mb-1">Dashboard</a>
                    <a href="<?= base_url() ?>my-posts" class="d-block mb-1">My Posts</a>
                    <a href="<?= base_url() ?>bookmark" class="d-block mb-1">Bookmarks</a>
                    <a href="<?= base_url() ?>logout" class="d-block text-danger">Logout</a>
                <?php else: ?>
                    <a href="<?= base_url() ?>login" class="btn btn-secondary w-100">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

</header>
