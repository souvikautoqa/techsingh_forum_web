<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <meta name="description" content="Forum & Community Discussions HTML Template">
  <meta name="keywords" content="bootstrap 5, forum, community, support, social, q&a, mobile, html">
  <meta name="robots" content="all,follow">

  <script>
    //Check local storage
    let localS = localStorage.getItem('theme')
    themeToSet = localS

    // If local storage is not set, we check the OS preference	
    if (!localS) {
      themeToSet = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    //Set the correct theme
    document.documentElement.setAttribute('data-theme', themeToSet)
  </script>

  <!-- ==============================================
     CSS Styles
    =============================================== -->
  <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/vendors/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="assets/vendors/aos/aos.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/external.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- ==============================================
     Fonts
    =============================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

  <!-- Switcher Icon -->
  <div class="" id="theme-switcher">
  </div>

  <!-- Back to Top -->
  <a href="#" id="back-to-top"></a>

  <div class="vine-wrapper">

    <?php include 'header.php' ?>

    <!-- ==============================================
     Dashboard
    =============================================== -->
    <section class="dashboard">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-lg-3 mb-3">

            <div class="dash-sidebar position-sticky" data-aos="fade-right" data-aos-easing="linear">

              <div class="ps-3 d-flex align-items-center">
                <div class="media align-items-center">
                  <div class="media-head me-2">
                    <div class="avatar avatar-lg">
                      <img src="assets/img/avatar/1.jpg" alt="user" class="avatar-img rounded-circle">
                    </div>
                  </div>
                  <div class="media-body">
                    <h5>Abram Marvyn</h5>
                    <p class="small mb-0">Member since 2009</p>
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
                  <li class="nav-item active">
                    <a class="nav-link " onclick="showSection('general')">
                      <span class="nav-icon-wrap"><i class="bi bi-person-check"></i></span>
                      <span class="nav-link-text">My Profile</span>
                    </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('badges')">
                      <span class="nav-icon-wrap"><i class="b bi-patch-check"></i></span>
                      <span class="nav-link-text">Messages</span>

                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('ranking')">
                      <span class="nav-icon-wrap"><i class="bi bi-sticky"></i></span>
                      <span class="nav-link-text">My Posts</span>

                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('bookmark')">
                      <span class="nav-icon-wrap"><i class="bi bi-bookmarks"></i></span>
                      <span class="nav-link-text">My Bookmarks</span>

                    </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('follow')">
                      <span class="nav-icon-wrap"><i class="bi bi-person-check"></i></span>
                      <span class="nav-link-text">Follow</span>

                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('settings')">
                      <span class="nav-icon-wrap"><i class="bi bi-gear"></i></span>
                      <span class="nav-link-text">Settings</span>

                    </a>
                  </li>



                  <li class="nav-item">
                    <a class="nav-link" onclick="showSection('logout')" href="login.html">
                      <span class="nav-icon-wrap"><i class="b bi-power"></i></span>
                      <span class="nav-link-text">Logout</span>
                    </a>
                  </li>
                </ul>
              </div>


            </div>

          </div><!--/col-lg-3-->

          <div class="col-12 col-lg-9">
            <div class="row mt-2 userprofile-stats" id="general">

              <div class="nav-menu">
                <button class="nav-link" data-target="#menu2"><i class="bi bi-bell"></i> Notifications</button>
              </div>

              <div id="menu2" class="content-section">
                <div class="myprofile-container">

                  <div class="adminnotify-container">
                    <div class="adminnotify-header">Admin notification</div>
                    <a href="#" class="adminnotify-notification">
                      <div class="adminnotify-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="adminnotify-content">
                        <div class="adminnotify-title">GMAT News</div>
                        <div class="adminnotify-description">Best GMAT Debriefs of 2024, GMAT Questions You Must Solve
                          this Year, New Admissions Predictor Tool</div>
                        <div class="adminnotify-time">Today 6:16 AM</div>
                      </div>
                    </a>
                    <a href="#" class="adminnotify-notification">
                      <div class="adminnotify-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="adminnotify-content">
                        <div class="adminnotify-title">Evan's MBA Story</div>
                        <div class="adminnotify-description">Worked on Covid Vaccine, Coached Recommenders, Admits from
                          All Schools' Scholarships from (Almost) Everywhere</div>
                        <div class="adminnotify-time">25 Jan, 2025 22:29 PM</div>
                      </div>
                    </a>
                    <a href="#" class="adminnotify-notification">
                      <div class="adminnotify-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="adminnotify-content">
                        <div class="adminnotify-title">LIVE on YouTube!</div>
                        <div class="adminnotify-description">How to Answer the Most Common MBA Interview Questions</div>
                        <div class="adminnotify-time">23 Jan, 2025 7:42 AM</div>
                      </div>
                    </a>




                  </div>

                </div>
              </div>



              <div class="myprofile-container">
                <div class="myprofile-header">
                  Viewing profile - abhishekv98
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
                    <img alt="User profile picture" height="120"
                      src="https://storage.googleapis.com/a1aa/image/cL8IZxkmyRKiCpWdGqW9GAbsabZYCeZWbj2C6XGrBeWOPpIUA.jpg"
                      width="120" />
                    <h2>
                      abhishekv98
                    </h2>
                    <div class="profile-info ">
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
                    </div>
                  </div>
                  <div class="myprofile-right">
                    <div class="details">
                      <div>
                        <p>
                          <span>
                            Joined:
                          </span>
                          09 Jan 2025, 04:08
                        </p>
                        <p>
                          <span>
                            Last visited:
                          </span>
                          25 Jan 2025, 05:00
                        </p>
                        <p>
                          <span>
                            Total posts:
                          </span>
                          0
                          <a href="#">
                            <i class="fas fa-search">
                            </i>
                            SEARCH USER'S POSTS
                          </a>
                        </p>
                        <p>
                          <span>
                            Own Kudos:
                          </span>
                          0
                          <a href="#">
                            <i class="fas fa-thumbs-up">
                            </i>
                            DETAILS
                          </a>
                        </p>
                        <p>
                          <span>
                            Given Kudos:
                          </span>
                          0
                          <a href="#">
                            <i class="fas fa-thumbs-up">
                            </i>
                            DETAILS
                          </a>
                        </p>
                        <p>
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
                        </p>
                      </div>
                      <div>
                        <p>
                          <span>
                            Following:
                          </span>
                          2:
                          <a href="#">
                            bb
                          </a>
                          ,
                          <a href="#">
                            dkpbus
                          </a>
                        </p>
                        <p>
                          <span>
                            Followers:
                          </span>
                          0
                        </p>
                      </div>
                    </div>
                    <div class="badges">
                      <h3>
                        BADGES
                      </h3>
                      <p>
                        0 : <i class="fas fa-coins" style="color:#ff7f0e;"></i>
                        Points
                      </p>
                      <p>
                        0 : <i class="fas fa-star" style="color:#ff7f0e;"></i> Badges
                      </p>
                      <p>
                        0 : <i class="fas fa-award" style="color:#ff7f0e;"></i> Rewards
                      </p>
                      <button class="">
                        VIEW ALL BADGES
                      </button>
                      <button class="bg-success">
                        VIEW DASHBOARD
                      </button>
                    </div>
                  </div>
                </div>
              </div>



            </div><!--/row-->



            <div class="row mt-2 userprofile-stats" id="badges" style="display: none;">

              <div class="nav-menu">
                <button class="nav-link" data-target="#menu4"><i class="bi bi-send"></i> Sent Messages</button>
                <button class="nav-link" data-target="#menu5"><i class="bi bi-journal-check"></i> Drafts</button>
              </div>

              <div id="menu4" class="content-section">
                <div class="mymessages-container">

                  <div class="mymessages-header">

                    <select class="form-control">
                      <option>
                        Show All
                      </option>
                    </select>
                    <button class="btn btn-secondary ">
                      DELETE MARKED
                    </button>
                    <select class="form-control">
                      <option>
                        more...
                      </option>
                    </select>
                    <input class="form-control" placeholder="SEARCH IN MESSAGES" type="text" />
                  </div>
                  <div class="mymessages-table-container">
                    <table class="mymessages-table table">
                      <thead>
                        <tr>
                          <th class="">
                            <i class="fas fa-thumbtack">
                            </i>
                          </th>
                          <th class="col-2">
                            Author
                            <i class="fas fa-sort">
                            </i>
                          </th>
                          <th>
                            Subject
                            <i class="fas fa-sort">
                            </i>
                          </th>
                          <th class="mymessages-date">
                            Sent at
                            <i class="fas fa-sort">
                            </i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input type="checkbox" />
                          </td>
                          <td class="mymessages-author">
                            <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40"
                              width="40" />
                            <span class="mymessages-author-name">
                              <a href="">bb</a>
                            </span>
                          </td>
                          <td class="mymessages-subject">
                            Convert the R2 Interview Invites - Make them Count! – Hi! We are organizing an absolutely
                            free Interview
                          </td>
                          <td class="mymessages-date">
                            17 Jan 2025, 11:14
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" />
                          </td>
                          <td class="mymessages-author">
                            <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40"
                              width="40" />
                            <span class="mymessages-author-name">
                              <a href="">bb</a>
                            </span>
                          </td>
                          <td class="mymessages-subject">
                            Welcome to GMAT Club - Here is what you need to know. – Hi abhishekv98 - welcome to GMAT
                            Club Forum -
                          </td>
                          <td class="mymessages-date">
                            09 Jan 2025, 04:08
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="mymessages-footer">
                    <select class="form-control">
                      <option>
                        Messages per page 25
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div id="menu5" class="content-section">
                <div class="mymessages-container">
                  <div class="mymessages-header">
                    <select class="form-control">
                      <option>
                        Show All
                      </option>
                    </select>
                    <button class="btn btn-secondary ">
                      DELETE MARKED
                    </button>
                    <select class="form-control">
                      <option>
                        more...
                      </option>
                    </select>
                    <input class="form-control" placeholder="SEARCH IN MESSAGES" type="text" />
                  </div>
                  <div class="mymessages-table-container">
                    <table class="mymessages-table table">
                      <thead>
                        <tr>
                          <th class="">
                            <i class="fas fa-thumbtack">
                            </i>
                          </th>
                          <th class="col-2">
                            Author
                            <i class="fas fa-sort">
                            </i>
                          </th>
                          <th>
                            Subject
                            <i class="fas fa-sort">
                            </i>
                          </th>
                          <th class="mymessages-date">
                            Sent at
                            <i class="fas fa-sort">
                            </i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input type="checkbox" />
                          </td>
                          <td class="mymessages-author">
                            <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40"
                              width="40" />
                            <span class="mymessages-author-name">
                              <a href="">bb</a>
                            </span>
                          </td>
                          <td class="mymessages-subject">
                            Convert the R2 Interview Invites - Make them Count! – Hi! We are organizing an absolutely
                            free Interview
                          </td>
                          <td class="mymessages-date">
                            17 Jan 2025, 11:14
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <input type="checkbox" />
                          </td>
                          <td class="mymessages-author">
                            <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40"
                              width="40" />
                            <span class="mymessages-author-name">
                              <a href="">bb</a>
                            </span>
                          </td>
                          <td class="mymessages-subject">
                            Welcome to GMAT Club - Here is what you need to know. – Hi abhishekv98 - welcome to GMAT
                            Club Forum -
                          </td>
                          <td class="mymessages-date">
                            09 Jan 2025, 04:08
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="mymessages-footer">
                    <select class="form-control">
                      <option>
                        Messages per page 25
                      </option>
                    </select>
                  </div>
                </div>
              </div>


              <div class="mymessages-container">
                <div class="mymessages-header">

                  <button class="compose"><i class="bi bi-pencil-square "></i> Compose</button>
                  <select class="form-control">
                    <option>
                      Show All
                    </option>
                  </select>
                  <button class="btn btn-secondary ">
                    DELETE MARKED
                  </button>
                  <select class="form-control">
                    <option>
                      more...
                    </option>
                  </select>
                  <input class="form-control" placeholder="SEARCH IN MESSAGES" type="text" />
                </div>
                <div class="mymessages-table-container">
                  <table class="mymessages-table table">
                    <thead>
                      <tr>
                        <th class="">
                          <i class="fas fa-thumbtack">
                          </i>
                        </th>
                        <th class="col-2">
                          Author
                          <i class="fas fa-sort">
                          </i>
                        </th>
                        <th>
                          Subject
                          <i class="fas fa-sort">
                          </i>
                        </th>
                        <th class="mymessages-date">
                          Sent at
                          <i class="fas fa-sort">
                          </i>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input type="checkbox" />
                        </td>
                        <td class="mymessages-author">
                          <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40" width="40" />
                          <span class="mymessages-author-name">
                            <a href="">bb</a>
                          </span>
                        </td>
                        <td class="mymessages-subject">
                          Convert the R2 Interview Invites - Make them Count! – Hi! We are organizing an absolutely free
                          Interview
                        </td>
                        <td class="mymessages-date">
                          17 Jan 2025, 11:14
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <input type="checkbox" />
                        </td>
                        <td class="mymessages-author">
                          <img alt="Author's profile picture" height="40" src="https://placehold.co/40x40" width="40" />
                          <span class="mymessages-author-name">
                            <a href="">bb</a>
                          </span>
                        </td>
                        <td class="mymessages-subject">
                          Welcome to GMAT Club - Here is what you need to know. – Hi abhishekv98 - welcome to GMAT Club
                          Forum -
                        </td>
                        <td class="mymessages-date">
                          09 Jan 2025, 04:08
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="mymessages-footer">
                  <select class="form-control">
                    <option>
                      Messages per page 25
                    </option>
                  </select>
                </div>
              </div>




            </div><!--/row-->

            <div class="row mt-2 userprofile-stats" id="ranking" style="display: none;">
              <div class="myposts-search-container">
                <input type="text" placeholder="Search...">
                <button class="bg-dark">Search in my Post</button>
              </div>
              <div class="myposts-table-container">
                <table class="table myposts-table table-responsive">
                  <thead>
                    <tr>
                      <th>Kudos <i class="fas fa-sort"></i></th>
                      <th>Posts <i class="fas fa-sort"></i></th>
                      <th>Post date <i class="fas fa-sort"></i></th>
                      <th>Topic <i class="fas fa-sort"></i></th>
                      <th>Last post in topic <i class="fas fa-sort"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10</td>
                      <td><a href="#" class="text-blue-500 hover:underline">Post 1</a></td>
                      <td>2023-10-01</td>
                      <td>Topic A</td>
                      <td>2023-10-02</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><a href="#" class="text-blue-500 hover:underline">Post 2</a></td>
                      <td>2023-09-25</td>
                      <td>Topic B</td>
                      <td>2023-09-26</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td><a href="#" class="text-blue-500 hover:underline">Post 3</a></td>
                      <td>2023-09-20</td>
                      <td>Topic C</td>
                      <td>2023-09-21</td>
                    </tr>
                    <tr>
                      <td>15</td>
                      <td><a href="#" class="text-blue-500 hover:underline">Post 4</a></td>
                      <td>2023-09-15</td>
                      <td>Topic D</td>
                      <td>2023-09-16</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
              </div>
            </div>


            <!--/row-->



            <div class="row mt-2 userprofile-stats" id="bookmark" style="display: none;">




              <div class="container">
                <!-- Bookmarks Section -->
                <div class="mybookmarks-container">
                  <div class="mybookmarks-header">Show bookmarks from:</div>
                  <div class="d-flex flex-wrap align-items-center">
                    <select class="form-select mybookmarks-select me-3" aria-label="Forum">
                      <option selected>All</option>
                      <option value="1">Forum 1</option>
                      <option value="2">Forum 2</option>
                    </select>
                    <div class="d-flex mybookmarks-date-range">
                      <input type="date" class="form-control mybookmarks-date-input" placeholder="yyyy-mm-dd">
                      <span>to</span>
                      <input type="date" class="form-control mybookmarks-date-input">
                      <button class="mybookmarks-go-btn">Go</button>
                    </div>
                  </div>
                  <div class="mybookmarks-buttons mt-3">
                    <button class="btn">SELECT ALL</button>
                    <button class="btn">INVERSE SELECTION</button>
                    <button class="btn">REMOVE SELECTED</button>
                  </div>
                  <table class="table  mybookmarks-table">
                    <thead>
                      <tr>
                        <th>Mark</th>
                        <th>Kudos</th>
                        <th>Topic / Post</th>
                        <th>Forum</th>
                        <th>Last post Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="5" class="text-center">You have no bookmarks.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <!-- Duplicate Section -->
                <div class="mybookmarks-container">
                  <div class="mybookmarks-header">Show bookmarks from:</div>
                  <div class="d-flex flex-wrap align-items-center">
                    <select class="form-select mybookmarks-select me-3" aria-label="Forum">
                      <option selected>All</option>
                      <option value="1">Forum 1</option>
                      <option value="2">Forum 2</option>
                    </select>
                    <div class="d-flex mybookmarks-date-range">
                      <input type="date" class="form-control mybookmarks-date-input" placeholder="yyyy-mm-dd">
                      <span>to</span>
                      <input type="date" class="form-control mybookmarks-date-input">
                      <button class="mybookmarks-go-btn">Go</button>
                    </div>
                  </div>
                  <div class="mybookmarks-buttons mt-3">
                    <button class="btn">SELECT ALL</button>
                    <button class="btn">INVERSE SELECTION</button>
                    <button class="btn">REMOVE SELECTED</button>
                  </div>
                  <table class="table mybookmarks-table">
                    <thead>
                      <tr>
                        <th>Mark</th>
                        <th>Kudos</th>
                        <th>Topic / Post</th>
                        <th>Forum</th>
                        <th>Last post Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="5" class="text-center">You have no bookmarks.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!--/row-->



            <div class="row mt-2 userprofile-stats" id="follow" style="display: none;">

              <div class="nav-menu">



              </div>



              <div class="following-container">
                <h1 class="following-title">You are Following</h1>
                <div class="following-buttons">
                  <button id="selectAllBtn">Select All</button>
                  <button id="unfollowSelectedBtn">Unfollow Selected</button>
                </div>
                <table class="following-table table-responsive">
                  <thead>
                    <tr>
                      <th>Mark</th>
                      <th>Author <i class="fas fa-sort"></i></th>
                      <th>Posts <i class="fas fa-sort"></i></th>
                      <th>Kudos <i class="fas fa-sort"></i></th>
                      <th>Following start date <i class="fas fa-sort"></i></th>
                      <th>Last visit <i class="fas fa-sort"></i></th>
                      <th>Last post time <i class="fas fa-sort"></i></th>
                    </tr>
                  </thead>
                  <tbody id="followingList">
                    <tr>
                      <td><input type="checkbox" class="following-checkbox"></td>
                      <td><a href="#">bb</a></td>
                      <td>39662</td>
                      <td>77472</td>
                      <td>24 Jan 2025, 02:23</td>
                      <td>25 Jan 2025, 03:14</td>
                      <td>25 Jan 2025, 04:28</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="following-checkbox"></td>
                      <td><a href="#">dkpbus</a></td>
                      <td>4</td>
                      <td>0</td>
                      <td>24 Jan 2025, 02:24</td>
                      <td>12 Dec 2002, 03:15</td>
                      <td>31 Dec 1969, 16:00</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div><!--/row-->

            <div class="row mt-2 userprofile-stats" id="settings" style="display: none;">

              <div class="nav-menu">
                <button class="nav-link" data-target="#menu12"><i class="bi bi-trash3"></i> Close Account </button>


              </div>


              <div id="menu12" class="content-section ">

                <div class="delete-account-container  max-w-md mb-3 ">
                  <h1 class="delete-account-title h4 mb-4">Close your account on GMAT Club?</h1>
                  <div class="mb-4">
                    <label for="password" class="d-block text-secondary mb-2">Enter your password:</label>
                    <input type="password" id="password" class="form-control">
                  </div>

                  <button class="delete-account-button btn btn-block d-flex align-items-center justify-content-center">
                    <i class="fas fa-check"></i> CLOSE ACCOUNT
                  </button>
                </div>
              </div>

              <div class="settings-container">
                <div class="settings-form-group">
                  <label for="username">Username:</label>
                  <input type="text" id="username" value="abhishekv98">
                </div>
                <div class="settings-form-group">
                  <label for="email">E-mail address:</label>
                  <input type="email" id="email" value="codewithabhishek95@gmail.com">
                </div>
                <div class="settings-form-group">
                  <label for="confirm-email">Confirm e-mail address:</label>
                  <input type="email" id="confirm-email">
                  <!-- <span>You only need to specify this if you are changing your e-mail address.</span> -->
                </div>
                <div class="settings-form-group">
                  <label for="new-password">New password:</label>
                  <input type="password" id="new-password">
                </div>
                <div class="settings-form-group">
                  <label for="confirm-password">Confirm new password:</label>
                  <input type="password" id="confirm-password">
                </div>
                <div class="settings-form-group">
                  <label for="current-password">Current password:</label>
                  <input type="password" id="current-password">
                </div>
                <div class="settings-button-container">
                  <button type="button">
                    <i class="fas fa-check"></i> SAVE
                  </button>
                </div>
              </div>
            </div><!--/row-->








          </div><!--/col-lg-9-->

        </div>
      </div>
    </section>

    <!-- ==============================================
     Footer
    =============================================== -->
    <?php include 'footer.php' ?>


  </div><!--/vine-wrapper-->

  <!-- ==============================================
    Scripts
    =============================================== -->
  <script src="assets/vendors/jquery/jquery.min.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="assets/vendors/popper/popper.min.js"></script>
  <script src="assets/vendors/simplebar/simplebar.min.js"></script>
  <script src="assets/vendors/aos/aos.js"></script>
  <script src="assets/vendors/waypoints/waypoints.js"></script>
  <script src="assets/vendors/counter-up/counter-up.js"></script>
  <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/counterup.js"></script>
  <script src="assets/js/apexcharts.js"></script>
  <script>
    document.addEventListener('contextmenu', event => {
      event.preventDefault();
    });

    document.querySelectorAll('.disabled').forEach(element => {
      element.style.pointerEvents = 'none';
    });
  </script>

  <script>
    function showSection(sectionId) {
      const sections = document.querySelectorAll('.userprofile-stats');
      sections.forEach(section => {
        section.style.display = 'none';
      });
      document.getElementById(sectionId).style.display = 'flex';

      const menuLinks = document.querySelectorAll('.userprofile-menu li a');
      menuLinks.forEach(link => {
        link.classList.remove('active');
      });
      document.querySelector(`.userprofile-menu li a[onclick="showSection('${sectionId}')"]`).classList.add('active');
    }
  </script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $(function () {
      $(".date-picker").datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
  </script>


  <script>

    document.getElementById('selectAllBtn').addEventListener('click', function () {
      const checkboxes = document.querySelectorAll('.following-checkbox');
      checkboxes.forEach(checkbox => {
        checkbox.checked = true;
      });
    });

    document.getElementById('unfollowSelectedBtn').addEventListener('click', function () {
      const checkboxes = document.querySelectorAll('.following-checkbox:checked');
      checkboxes.forEach(checkbox => {
        checkbox.closest('tr').remove();
      });
    });

  </script>

  <script>
    // Re-enable right-click
    document.addEventListener("contextmenu", function (event) {
      event.stopPropagation(); // Allow right-click menu to work
    }, true);

    // Re-enable keyboard shortcuts
    document.addEventListener("keydown", function (event) {
      event.stopPropagation(); // Allow all key events to pass through
    }, true);

  </script>

  <script>
    document.querySelectorAll('.nav-link').forEach(button => {
      button.addEventListener('click', () => {
        document.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        document.querySelectorAll('.content-section').forEach(section => section.classList.remove('active'));
        document.querySelector(button.getAttribute('data-target')).classList.add('active');
      });
    });
  </script>







</body>


</html>