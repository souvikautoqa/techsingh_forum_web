<!-- <style>
.main-sidebar {
    margin: 0;
    display: flex;
    height: 100vh;
}

.sidemenu-sidebar {
    width: 130px;
    position: relative;
    right: 18px;
    background-color: #f8f9fa;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: width 0.3s;
}

.sidemenu-sidebar.collapsed {
    width: 60px;
}

.sidemenu-sidebar a {
    text-decoration: none;
    color: #000;
    width: 60%;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    border-bottom: 1px solid #e6e6e6;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 3px;
    transition: opacity 0.3s;
}

.sidemenu-sidebar.collapsed a {
    justify-content: center;
    padding: 10px 0;
}

.sidemenu-sidebar.collapsed a span {
    display: none;
}

.sidemenu-sidebar a:hover,
.sidemenu-sidebar a.active {
    background-color: #fff;
    border-radius: 20px;
}

.sidemenu-sidebar a i {
    font-size: 16px;
    margin-bottom: 3px;
}

.sidemenu-sidebar .sidemenu-menu-icon {
    font-size: 20px;
    margin-bottom: 20px;
    cursor: pointer;
}

.sidemenu-content {
    position: relative;
    right: 10px;
    width: 220px;
    background-color: #fff;
    padding: 20px;
    border-radius: 7px;
    box-shadow: rgba(1, 116, 39, 0.9) 0px 0px 0px 1px;
    height: max-content;
    display: none;
}

.fa-bars {
    color: #0d7751;
}

.sidemenu-content.active {
    display: block;
}

.sidemenu-ask-question {
    background-color: #0d7751;
    padding: 10px 20px;
    color: #fff !important;
    border-radius: 20px;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    font-size: 14px;
}

.sidemenu-ask-question a {
    color: #fff !important;
}

.sidemenu-ask-question i {
    margin-right: 10px;
}

.sidemenu-content ul {
    list-style: none;
    padding: 0;
}

.sidemenu-content ul li {
    margin-bottom: 10px;
    font-size: 14px;
}

.sidemenu-content ul li a {
    text-decoration: none;
    font-weight: 600;
}

.sidemenu-content ul li::before {
    content: '•';
    color: #888;
    display: inline-block;
    width: 1em;
    margin-left: -1em;
}

@media (max-width: 768px) {
    .sidemenu-sidebar {
        width: 60px;
    }

    .sidemenu-sidebar a {
        justify-content: center;
        padding: 10px 0;
    }

    .sidemenu-sidebar a span {
        display: none;
    }

    .main-sidebar {
        display: none;
    }
}

@media only screen and (max-width: 1366px) {
    .main-sidebar {
        display: none;
    }
}
</style> -->




<?php 
	$parent_menus = get_navigation();
?>
<div class="main-sidebar collapsed" style="display: none;">

    <?php 
		if(!empty($parent_menus)){
	?>
			<div class="sidemenu-sidebar">
				<i class="fas fa-bars sidemenu-menu-icon" onclick="toggleMenu()"></i>
				<?php 
					foreach($parent_menus as $parent_menu){
				?>
						<a href="<?= $parent_menu['link'] ?>" onclick="showContent('menu-item-<?= $parent_menu['id'] ?>')">
							
							<?php 
								if(!empty($parent_menu['icon'])){
									echo "<i class='" . $parent_menu['icon'] ."'></i>";
								}
							?>
							<span><?= $parent_menu['title'] ?></span>
						</a>
				
				<?php
					}
				?>
			</div>

	<?php
		}
	?>
     
	
    <!-- <div class="sidemenu-content active" id="home">
        <div class="sidemenu-ask-question">
            <a href="#"><i class="fas fa-pencil-alt"></i> Ask Question</a>
        </div>
        <ul>
            <li><a href="#">GMAT Forums</a></li>
            <li><a href="#">MBA Forums</a></li>
            <li><a href="#">Executive MBA</a></li>
        </ul>
    </div> -->

	<?php foreach ($parent_menus as $key => $parent): ?>
        <?php 
			$child_menus = get_navigation($parent['id']);

            $hasActiveClass = false;
			
			if(!empty($child_menus)){
                // $hasActiveClass ? 'active': '' 
		?>

			<div class="sidemenu-content" id="menu-item-<?= $parent['id']; ?>">
				
				<?php if (!empty($child_menus)): ?>
					<ul>
						
						<?php foreach ($child_menus as $child): ?>
							<li>
								<a href="<?= $child['link']; ?>">
									<?= $child['title']; ?>
								</a>
							</li>
						<?php endforeach; ?>
						
					</ul>
				<?php endif; ?>
			</div>

		<?php 
                $hasActiveClass = false;
			}
		?>

    <?php endforeach; ?>


</div>
<div class="main-sidebar collapsed">
    <?php if (!empty($parent_menus)): ?>
        <div class="sidemenu-sidebar custom-sidemenu-sidebar">
            <!-- <i class="fas fa-bars sidemenu-menu-icon"></i> -->
            <i class="fas fa-bars sidemenu-menu-icon" onclick="toggleMenu()"></i>
            <?php /*
            <?php foreach ($parent_menus as $parent): ?>
                <?php $child_menus = get_navigation($parent['id']); ?>
                
                <div class="menu-item-wrapper test">
                    <!-- Parent Menu -->
                    <a href="<?= $parent['link'] ?>" class="parent-menu">
                        <?php if (!empty($parent['icon'])): ?>
                            <i class="<?= $parent['icon'] ?>"></i>
                        <?php endif; ?>
                        <span><?= $parent['title'] ?></span>
                    </a>

                    <!-- Submenu -->
                    <?php if (!empty($child_menus)): ?>
                        <ul class="submenu">
                            <?php foreach ($child_menus as $child): ?>
                                <li>
                                    <a href="<?= $child['link'] ?>"><?= $child['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            */ ?>


            <?php $count = 1; ?>
                <?php foreach ($parent_menus as $parent): ?>
                    <?php $child_menus = get_navigation($parent['id']); ?>
                    
                    <div class="menu-item-wrapper menu-item-<?= $count ?>">
                        <!-- Parent Menu -->
                        <a href="<?= $parent['link'] ?>" class="parent-menu">
                            <?php if (!empty($parent['icon'])): ?>
                                <i class="<?= $parent['icon'] ?>"></i>
                            <?php endif; ?>
                            <span><?= $parent['title'] ?></span>
                        </a>

                        <!-- Submenu -->
                        <?php if (!empty($child_menus)): ?>
                            <ul class="submenu">
                                <?php foreach ($child_menus as $child): ?>
                                    <li>
                                        <a href="<?= $child['link'] ?>"><?= $child['title'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <?php $count++; ?>
                <?php endforeach; ?>

        </div>
    <?php endif; ?>
</div>




<script>
function toggleMenu() {
    const sidebar = document.querySelector('.main-sidebar');
    const contents = document.querySelectorAll('.sidemenu-content');
    const colLg6 = document.querySelector('.forum-main-sec'); // Select the target div

    // Apply smooth transition effect
    colLg6.style.transition = 'width 0.3s ease-in-out';

    // Check if the sidebar is currently collapsed
    const isCollapsed = sidebar.classList.contains('collapsed');

    // Toggle the collapsed class on the sidebar
    sidebar.classList.toggle('collapsed');

    // Toggle margin-left and width on .forum-main-sec
    if (isCollapsed) {
        // If it was collapsed, expand it
        colLg6.style.marginLeft = ''; // Remove margin when sidebar expands
        colLg6.style.width = ''; // Reset width to default

        // Show the active content when expanded
        const activeContent = document.querySelector('.sidemenu-content.active');
        if (activeContent) {
            activeContent.style.display = 'block'; // Show active content
        } else {
            // If no active content, show the first content by default
            const firstContent = contents[0];
            if (firstContent) {
                firstContent.classList.add('active');
                firstContent.style.display = 'block'; // Show the first content
            }
        }
    } else {
        // If it was expanded, collapse it
        // colLg6.style.marginLeft = '-260px'; // Add margin when sidebar is collapsed
        // colLg6.style.width = '65%'; // Increase width to 65%

        // Hide all content when collapsed
        contents.forEach(content => {
            content.classList.remove('active'); // Remove active class
            content.style.display = 'none'; // Hide content
        });
    }

    const links = document.querySelectorAll('.sidemenu-sidebar a');
    links.forEach(link => {
        link.classList.toggle('collapsed');
    });
}

function showContent(id) {
    const contents = document.querySelectorAll('.sidemenu-content');
    contents.forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none'; // Hide all content
    });

    const selectedContent = document.getElementById(id);
    if (selectedContent) {
        selectedContent.classList.add('active');
        selectedContent.style.display = 'block'; // Show selected content
    }
}

// Add event listeners to links
document.querySelectorAll('.sidemenu-sidebar a').forEach(link => {
    const sidebar = document.querySelector('.main-sidebar');

    link.addEventListener('mouseover', function () {
        const onclickAttr = this.getAttribute('onclick');
        const idMatch = onclickAttr?.match(/'([^']+)'/);
        const id = idMatch ? idMatch[1] : null;

        // Remove active class from all links
        document.querySelectorAll('.sidemenu-sidebar a').forEach(l => {
            l.classList.remove('active');
        });

        this.classList.add('active');

        if (id) {
            showContent(id);
        }
    });

    // Add click if needed too
    link.addEventListener('click', function () {
        const onclickAttr = this.getAttribute('onclick');
        const idMatch = onclickAttr?.match(/'([^']+)'/);
        const id = idMatch ? idMatch[1] : null;

        // Remove active class from all links
        document.querySelectorAll('.sidemenu-sidebar a').forEach(l => {
            l.classList.remove('active');
        });

        this.classList.add('active');

        if (id) {
            showContent(id);
        }
    });
});

// Handle mouseleave outside .main-sidebar and .sidemenu-content
document.addEventListener('mousemove', function (e) {
    const sidebar = document.querySelector('.main-sidebar');
    const contentArea = document.querySelector('.sidemenu-content');

    if (!sidebar.contains(e.target) && !contentArea.contains(e.target)) {
        // Remove active classes when mouse is outside
        document.querySelectorAll('.sidemenu-sidebar a').forEach(l => {
            l.classList.remove('active');
        });

        document.querySelectorAll('.sidemenu-content').forEach(content => {
            content.classList.remove('active');
            content.style.display = 'none';
        });
    }
});


// When Sidebar sub menu is opened, Then Class will add on Main wrapper
const observer = new MutationObserver(() => {
  const isActive = document.querySelector('.sidemenu-content.active');
  const wrapper = document.querySelector('.sidebar-wrapper');
  const forumMain = document.querySelector('.forum-main-sec');

  if (isActive) {
    wrapper.classList.add('sidebar-open');
    forumMain.classList.add('sidebar-open');
  } else {
    wrapper.classList.remove('sidebar-open');
    forumMain.classList.remove('sidebar-open');
  }
});

// Observe any class changes in .main-sidebar
const sidebar = document.querySelector('.main-sidebar');

observer.observe(sidebar, {
  childList: true,
  subtree: true,
  attributes: true,
  attributeFilter: ['class']
});

</script>


<!-- <script>
    function toggleMenu() {
        const sidebar = document.querySelector('.main-sidebar');
        const contents = document.querySelectorAll('.sidemenu-content');
        const isCollapsed = sidebar.classList.contains('collapsed');

        sidebar.classList.toggle('collapsed');

        if (isCollapsed) {
            const activeContent = document.querySelector('.sidemenu-content.active');
            if (activeContent) activeContent.style.display = 'block';
        } else {
            contents.forEach(content => content.style.display = 'none');
        }

        document.querySelectorAll('.sidemenu-sidebar a').forEach(link => {
            link.classList.toggle('collapsed');
        });
    }

    function showContent(id) {
        document.querySelectorAll('.sidemenu-content').forEach(content => {
            content.classList.remove('active');
            content.style.display = 'none';
        });

        const selectedContent = document.getElementById(id);
        if (selectedContent) {
            selectedContent.classList.add('active');
            selectedContent.style.display = 'block';
        }
    }

    document.querySelectorAll('.sidemenu-sidebar a').forEach(link => {
        link.addEventListener('mouseover', function () {
            const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
            if (document.querySelector('.main-sidebar').classList.contains('collapsed')) {
                showContent(id);
            }
        });
    });

    document.querySelector('.sidemenu-sidebar').addEventListener('mouseleave', function () {
        if (document.querySelector('.main-sidebar').classList.contains('collapsed')) {
            document.querySelectorAll('.sidemenu-content').forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });
        }
    });

    document.querySelectorAll('.sidemenu-content').forEach(content => {
        content.addEventListener('mouseenter', function () {
            this.style.display = 'block';
        });

        content.addEventListener('mouseleave', function () {
            if (document.querySelector('.main-sidebar').classList.contains('collapsed')) {
                this.style.display = 'none';
            }
        });
    });
</script> -->
