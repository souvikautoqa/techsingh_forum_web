<style>
    .main-sidebar {
        margin: 0;       
        display: flex;
        height: 100vh;


    }


    .sidemenu-sidebar {

        width: 130px;
        position: relative;
        right: 18px;
        background-color: ;
        padding: 0px 0;
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

    .sidemenu-sidebar a:hover {
        background-color: #fff;
        border-radius: 20px;
    }

    .sidemenu-sidebar a.active {
        background-color: #fff;
        border-radius: 20px;
    }

    .sidemenu-sidebar a i {
        margin-right: 0px;
        font-size: 16px;
        margin-bottom: 3px;
    }

    .sidemenu-sidebar.collapsed a i {
        margin-right: 0;
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
        z-index: 1111;
        flex-grow: ;
        background-color: #fff;
        padding: 20px;
        border-radius: 7px;
        box-shadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px inset, rgba(1, 116, 39, 0.9) 0px 0px 0px 1px;
        height: max-content;
        display: none;
    }

    .fa-bars {
        color: #0d7751
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

    /* iPad (portrait and landscape) */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
 .main-sidebar {
            display: none;
        }
}

/* iPad Pro (11-inch) */
@media only screen and (min-width: 834px) and (max-width: 1194px) {
  .main-sidebar {
            display: none;
        }
}

/* iPad Pro (12.9-inch) */
@media only screen and (min-width: 1024px) and (max-width: 1366px) {
  .main-sidebar {
            display: none;
        }
}



</style>



<div class="main-sidebar">
    <div class="sidemenu-sidebar">
        <i class="fas fa-bars sidemenu-menu-icon" onclick="toggleMenu()"></i>
        <a href="#" class="" onclick="showContent('home')"><i class="fas fa-home"></i> <span>Home</span></a>
        <a href="#" onclick="showContent('gmat')"><i class="fas fa-book"></i> <span>GMAT</span></a>
        <a href="#" onclick="showContent('messages')"><i class="fas fa-envelope"></i> <span>Messages</span></a>
        <a href="#" onclick="showContent('tests')"><i class="fas fa-clipboard"></i> <span>Tests</span></a>
        <a href="#" onclick="showContent('schools')"><i class="fas fa-graduation-cap"></i> <span>Schools</span></a>
        <a href="#" onclick="showContent('reviews')"><i class="fas fa-star"></i> <span>Reviews</span></a>
        <a href="#" onclick="showContent('social')"><i class="fas fa-users"></i> <span>Social</span></a>
        <a href="#" onclick="showContent('chat')"><i class="fas fa-comments"></i> <span>Chat</span></a>
        <a href="#" onclick="showContent('profile')"><i class="fas fa-user"></i> <span>My Profile</span></a>
    </div>
    <div class="sidemenu-content active" id="home">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Ask Question</a>
        </div>
        <ul>
            <li><a href="">GMAT Forums</a></li>
            <li><a href="">MBA Forums</a></li>
            <li><a href="">Executive MBA</a></li>
            <li><a href="">Masters Programs</a></li>
            <li><a href="">GRE</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Blog</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="gmat">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Make Post</a>
        </div>
        <ul>
            <li><a href="">GMAT Preparation</a></li>
            <li><a href="">GMAT Tips</a></li>
            <li><a href="">GMAT Resources</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="messages">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Message</a>
        </div>
        <ul>
            <li><a href="">Inbox</a></li>
            <li><a href="">Sent</a></li>
            <li><a href="">Drafts</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="tests">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Test</a>
        </div>
        <ul>
            <li><a href="">Upcoming Tests</a></li>
            <li><a href="">Past Tests</a></li>
            <li><a href="">Test Results</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="schools">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Schools </a>
        </div>
        <ul>
            <li><a href="">Top Schools</a></li>
            <li><a href="">School Reviews</a></li>
            <li><a href="">School Rankings</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="reviews">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Reviews</a>
        </div>
        <ul>
            <li><a href="">Product Reviews</a></li>
            <li><a href="">Service Reviews</a></li>
            <li><a href="">Company Reviews</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="social">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Social </a>
        </div>
        <ul>
            <li><a href="">Social Media</a></li>
            <li><a href="">Community Events</a></li>
            <li><a href="">Networking</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="chat">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Chat </a>
        </div>
        <ul>
            <li><a href="">Chat Rooms</a></li>
            <li><a href="">Private Messages</a></li>
            <li><a href="">Group Chats</a></li>
        </ul>
    </div>
    <div class="sidemenu-content" id="profile">
        <div class="sidemenu-ask-question">
            <a href=""> <i class="fas fa-pencil-alt"></i> Profile </a>
        </div>
        <ul>
            <li><a href="">View Profile</a></li>
            <li><a href="">Edit Profile</a></li>
            <li><a href="">Account Settings</a></li>
        </ul>
    </div>
</div>

<script>
function toggleMenu() {
    const sidebar = document.querySelector('.main-sidebar');
    const contents = document.querySelectorAll('.sidemenu-content');
    const colLg6 = document.querySelector('.col-lg-6'); // Select the target div

    // Apply smooth transition effect
    colLg6.style.transition = 'margin-left 0.3s ease, width 0.3s ease';

    // Check if the sidebar is currently collapsed
    const isCollapsed = sidebar.classList.contains('collapsed');

    // Toggle the collapsed class on the sidebar
    sidebar.classList.toggle('collapsed');

    // Toggle margin-left and width on .col-lg-6
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
        colLg6.style.marginLeft = '-260px'; // Add margin when sidebar is collapsed
        colLg6.style.width = '65%'; // Increase width to 65%

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
    selectedContent.classList.add('active');
    selectedContent.style.display = 'block'; // Show selected content
}

// Add event listeners for mouseover to show content
document.querySelectorAll('.sidemenu-sidebar a').forEach(link => {
    link.addEventListener('mouseover', function () {
        const id = this.getAttribute('onclick').match(/'([^']+)'/)[1];
        const sidebar = document.querySelector('.main-sidebar');

        // Show content based on sidebar state
        if (sidebar.classList.contains('collapsed')) {
            showContent(id);
        } else {
            // If sidebar is expanded, hide all content first
            const contents = document.querySelectorAll('.sidemenu-content');
            contents.forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none'; // Hide all content
            });

            // Then show the selected content
            const selectedContent = document.getElementById(id);
            if (selectedContent) {
                selectedContent.classList.add('active');
                selectedContent.style.display = 'block'; // Show selected content
            }
        }
    });
});

// Hide sidemenu content if cursor is not hovering over sidemenu or sidemenu content
document.querySelector('.sidemenu-sidebar').addEventListener('mouseleave', function () {
    const sidebar = document.querySelector('.main-sidebar');
    if (sidebar.classList.contains('collapsed')) {
        const contents = document.querySelectorAll('.sidemenu-content');
        contents.forEach(content => {
            content.classList.remove('active');
            content.style.display = 'none'; // Hide all content
        });
    }
});

// Prevent hiding when hovering over sidemenu content
document.querySelectorAll('.sidemenu-content').forEach(content => {
    content.addEventListener('mouseenter', function () {
        this.style.display = 'block'; // Show content on hover
    });

    content.addEventListener('mouseleave', function () {
        const sidebar = document.querySelector('.main-sidebar');
        if (sidebar.classList.contains('collapsed')) {
            this.style.display = 'none'; // Hide content when mouse leaves
        }
    });
});
</script>