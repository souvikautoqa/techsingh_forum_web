<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
  <meta name="keywords"
    content="admin template, ra-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="la-themes">
  <link rel="icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Search Topic </title>

  <!-- Animation css -->
  <link rel="stylesheet" href="../assets/vendor/animation/animate.min.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

  <!-- wheather icon css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/weather/weather-icons.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/weather/weather-icons-wind.css">

  <!--flag Icon css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/flag-icons-master/flag-icon.css">

  <!-- tabler icons-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/tabler-icons/tabler-icons.css">

  <!-- prism css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/prism/prism.min.css">

   <!-- Selecrt css -->
   <link rel="stylesheet" type="text/css" href="../assets/vendor/select/select2.min.css">

  <!-- apexcharts css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/apexcharts/apexcharts.css">

  <!-- glight css -->
  <link rel="stylesheet" href="../assets/vendor/glightbox/glightbox.min.css">

  <!-- slick css -->
  <link rel="stylesheet" href="../assets/vendor/slick/slick.css">
  <link rel="stylesheet" href="../assets/vendor/slick/slick-theme.css">

  <!-- Data Table css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/datatable/jquery.dataTables.min.css">

  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">

  <!-- vector map css -->
  <link rel="stylesheet" href="../assets/vendor/vector-map/jquery-jvectormap.css">

  <!-- apexcharts css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/apexcharts/apexcharts.css">

  <!-- simplebar css-->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/simplebar/simplebar.css">

  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

  <style>
    .app-nav {
   
}
.container-fluid {
    overflow: visible !important;
}

.main-nav {
    list-style: none;
    padding: 0;
}

.menu-item {
    position: relative;
    margin-bottom: 10px;
}

.menu-link {
    display: block;
    padding: 10px;
    background: #fff;
    border-radius: 5px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.menu-link:hover {
    background: #e9ecef;
}

.popup-submenu {
    position: fixed;
    top: 43%;
    left: 15.5%;
    background: #fff;
    transform: translate(-50%, -50%);
    border-radius: 8px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    z-index: 99999;
}

/* .popup-submenu {
    display: none;  
    position: absolute;
    left: 55%;
    top: 0;
    background: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    list-style: none;
    padding: 10px;
    width: 180px;
    z-index: 9999 !important; 
} */

.parent-container {
    position: relative;
    z-index: 1000;
}

.popup-submenu li {
    margin: 5px 0;
}

.popup-submenu a {
    text-decoration: none;
    color: #333;
    font-size: 14px;
    display: block;
    padding: 5px;
    border-radius: 3px;
}

.popup-submenu a:hover {
   color: #4fc9da;
}
@media screen and (max-width: 767px) {
  .popup-submenu {
    position: fixed;
    top: 50%;
    left: 56.5%;
   
}
}


  </style>

</head>

<body>
  <div class="app-wrapper">
    <div class="loader-wrapper">
      <div class="app-loader">
        <span></span>
      
      </div>
    </div>
    

    <!-- Menu Navigation starts -->
    <nav>
     
      <div class="app-nav" id="app-simple-bar">
        
        <ul class="main-nav p-0 mt-2">
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="ph-duotone ph-house-line"></i> Home
                </a>
                <ul class="popup-submenu">
                    <li><a href="index.html">Ask Question</a></li>
                    <li><a href="project_dashboard.html">GMAT Forums</a></li>
                    <li><a href="project_dashboard.html">MBA Forums</a></li>
                    <li><a href="project_dashboard.html">Executive MBA</a></li>
                    <li><a href="project_dashboard.html">Masters Programs</a></li>
                    <li><a href="project_dashboard.html">GRE</a></li>
                    <li><a href="project_dashboard.html">Support</a></li>
                    <li><a href="project_dashboard.html">Blog</a></li>

                </ul>
            </li>
            
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="ph-duotone ph-stack"></i> GMAT
                </a>
                <ul class="popup-submenu">
                  <li><a href="index.html"> Make Post</a></li>
                  <li><a href="project_dashboard.html">GMAT Preparation</a></li>
                  <li><a href="project_dashboard.html">GMAT Tips</a></li>
                  <li><a href="project_dashboard.html">GMAT Resources</a></li>
                  <li><a href="project_dashboard.html">Masters Programs</a></li>
                  <li><a href="project_dashboard.html">GRE</a></li>
                </ul>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link">
                  <i class="ph-duotone ph-stack"></i> Message
              </a>
              <ul class="popup-submenu">
                <li><a href="index.html"> Test</a></li>
                <li><a href="project_dashboard.html">Upcoming Tests</a></li>
                <li><a href="project_dashboard.html">Past Tests</a></li>
                <li><a href="project_dashboard.html">Test Results</a></li>
             
              </ul>
          </li>


          <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="ph-duotone ph-stack"></i> Tests
            </a>
            <ul class="popup-submenu">
              <li><a href="index.html"> Test</a></li>
              <li><a href="project_dashboard.html">Upcoming Tests</a></li>
              <li><a href="project_dashboard.html">Past Tests</a></li>
              <li><a href="project_dashboard.html">Test Results</a></li>
           
            </ul>
        </li>


        <li class="menu-item">
          <a href="#" class="menu-link">
              <i class="ph-duotone ph-stack"></i> Schools
          </a>
          <ul class="popup-submenu">
            <li><a href="index.html"> Schools</a></li>
            <li><a href="project_dashboard.html">Top Schools</a></li>
            <li><a href="project_dashboard.html">School Reviews</a></li>
            <li><a href="project_dashboard.html">School Rankings</a></li>
          
          </ul>
      </li>


      <li class="menu-item">
        <a href="#" class="menu-link">
            <i class="ph-duotone ph-stack"></i> Reviews
        </a>
        <ul class="popup-submenu">
          <li><a href="index.html"> Reviews</a></li>
          <li><a href="project_dashboard.html">Product Reviews</a></li>
          <li><a href="project_dashboard.html">Service Reviews</a></li>
          <li><a href="project_dashboard.html">Company Reviews</a></li>
         
        </ul>
    </li>


    <li class="menu-item">
      <a href="#" class="menu-link">
          <i class="ph-duotone ph-stack"></i> Social
      </a>
      <ul class="popup-submenu">
        <li><a href="index.html"> Social</a></li>
        <li><a href="project_dashboard.html">Social Media</a></li>
        <li><a href="project_dashboard.html">Community Events</a></li>
        <li><a href="project_dashboard.html">Networking</a></li>
        
      </ul>
  </li>


  <li class="menu-item">
    <a href="#" class="menu-link">
        <i class="ph-duotone ph-stack"></i> Chat
    </a>
    <ul class="popup-submenu">
      <li><a href="index.html"> Chat</a></li>
      <li><a href="project_dashboard.html">Chat Rooms</a></li>
      <li><a href="project_dashboard.html">Private Messages</a></li>
      <li><a href="project_dashboard.html">Group Chats</a></li>
   
    </ul>
</li>

<li class="menu-item">
  <a href="#" class="menu-link">
      <i class="ph-duotone ph-stack"></i> Profile
  </a>
  <ul class="popup-submenu">
    <li><a href="index.html"> Profile</a></li>
    <li><a href="project_dashboard.html">View Profile</a></li>
    <li><a href="project_dashboard.html">Edit Profile</a></li>
    <li><a href="project_dashboard.html">Account Settings</a></li>
   
  </ul>
</li>
        </ul>
    </div>
    

      <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
      </div>

    </nav>
    <!-- Menu Navigation ends -->

    <div class="app-content">
      <div class="">

        <!-- Header Section starts -->
        <header class="header-main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-sm-3 d-flex align-items-center header-left p-0">
               

                <img src="../assets/images/logo/1.png"  alt="#" class="mainlogo">

 
              </div>

              

              <div class="col-6 col-sm-9 d-flex align-items-center justify-content-end header-right p-0">

                <ul class="d-flex align-items-center">
                  

                  <li class="header-cloud">
                   
                    <form class="app-form app-icon-form w-100 " action="#">
                      <div class="position-relative searchinput">
                        <input type="search" class="form-control search-filter " placeholder="Search..."
                          aria-label="Search">
                        <i class="ti ti-search text-dark"></i>
                      </div>
                    </form>

                    <li class="header-apps">
                      <ul class="main-nav p-0 mt-2 d-flex">

                        <li class="menu-item">
                          <a href="#" class="menu-link">
                              <i class="ph-duotone  ph-plus-circle"></i> 
                          </a>
                         
                      </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="ph-duotone ph-house-line"></i> Home
                            </a>
                            <ul class="popup-submenu">
                                <li><a href="index.html">Ask Question</a></li>
                                <li><a href="project_dashboard.html">GMAT Forums</a></li>
                                <li><a href="project_dashboard.html">MBA Forums</a></li>
                                <li><a href="project_dashboard.html">Executive MBA</a></li>
                                <li><a href="project_dashboard.html">Masters Programs</a></li>
                                <li><a href="project_dashboard.html">GRE</a></li>
                                <li><a href="project_dashboard.html">Support</a></li>
                                <li><a href="project_dashboard.html">Blog</a></li>
            
                            </ul>
                        </li>
                        
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="ph-duotone ph-stack"></i> About
                            </a>
                            <ul class="popup-submenu">
                              <li><a href="index.html"> Make Post</a></li>
                              <li><a href="project_dashboard.html">GMAT Preparation</a></li>
                              <li><a href="project_dashboard.html">GMAT Tips</a></li>
                              <li><a href="project_dashboard.html">GMAT Resources</a></li>
                              <li><a href="project_dashboard.html">Masters Programs</a></li>
                              <li><a href="project_dashboard.html">GRE</a></li>
                            </ul>
                        </li>
        
           
                    </ul>
  
                    </li>

                    

                    <div class="offcanvas offcanvas-end header-cloud-canvas" tabindex="-1" id="cloudoffcanvasTops"
                      aria-labelledby="cloudoffcanvasTops">
                      <div class="offcanvas-body p-0">
                        <div class="cloud-body">

                          <div class="cloud-content-box">
                            <div class="cloud-box bg-primary-900">
                              <p class="mb-3">Mon</p>
                              <h6 class="mt-4 f-s-13"> +29°C</h6>
                              <span>
                                <i class="ph-duotone  ph-cloud-fog text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 2%</p>
                            </div>
                            <div class="cloud-box bg-primary-800">
                              <p class="mb-3">Tue</p>
                              <h6 class="mt-4 f-s-13"> +29°C</h6>
                              <span>
                                <i class="ph-duotone  ph-cloud-sun text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 2%</p>
                            </div>
                            <div class="cloud-box bg-primary-700">
                              <p class="mb-3 text-light">Wed</p>
                              <h6 class="mt-4 f-s-13"> +20°C</h6>
                              <span>
                                <i class="ph-duotone  ph-sun-dim text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 1%</p>
                            </div>
                            <div class="cloud-box bg-primary-600">
                              <p class="mb-3">Thu</p>
                              <h6 class="mt-4 f-s-13"> +17°C</h6>
                              <span>
                                <i class="ph-duotone  ph-sun-dim text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 1%</p>
                            </div>
                            <div class="cloud-box bg-primary-500">
                              <p class="mb-3">Fri</p>
                              <h6 class="mt-4 f-s-13"> +18°C</h6>
                              <span>
                                <i class="ph-duotone  ph-sun-dim text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 1%</p>
                            </div>
                            <div class="cloud-box bg-primary-400">
                              <p class="mb-3">Sat</p>
                              <h6 class="mt-4 f-s-13"> +16°C</h6>
                              <span>
                                <i class="ph-duotone  ph-sun-dim text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 1%</p>
                            </div>
                            <div class="cloud-box bg-primary-300">
                              <p class="mb-3">Sun</p>
                              <h6 class="mt-4 f-s-13"> +29°C</h6>
                              <span class="mb-3">
                                <i class="ph-duotone  ph-sun-dim text-white f-s-25"></i>
                              </span>
                              <p class="f-s-13 mt-3"><i class="wi wi-raindrop"></i> 1%</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="header-language">
                    <div id="lang_selector" class="flex-shrink-0 dropdown">
                      <a href="#" class="d-block head-icon ps-0" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="lang-flag lang-en ">
                          <span class="flag rounded-circle overflow-hidden">
                            <i class=""></i>
                          </span>
                        </div>
                      </a>
                      <ul class="dropdown-menu language-dropdown header-card border-0">
                        <li class="lang lang-en selected dropdown-item p-2" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="US">
                          <span class="d-flex align-items-center">
                            <i class="flag-icon flag-icon-usa flag-icon-squared b-r-10 f-s-22"></i>
                            <span class="ps-2">US</span>
                          </span>
                        </li>
                        <li class="lang lang-pt dropdown-item p-2" title="FR">
                          <span class="d-flex align-items-center">
                            <i class="flag-icon flag-icon-fra flag-icon-squared b-r-10 f-s-22"></i>
                            <span class="ps-2">France</span>
                          </span>
                        </li>
                        <li class="lang lang-es dropdown-item p-2" title="UK">
                          <span class="d-flex align-items-center">
                            <i class="flag-icon flag-icon-gbr flag-icon-squared b-r-10 f-s-22"></i>
                            <span class="ps-2">UK</span>
                          </span>
                        </li>
                        <li class="lang lang-es dropdown-item p-2" title="IT">
                          <span class="d-flex align-items-center">
                            <i class="flag-icon flag-icon-ita flag-icon-squared b-r-10 f-s-22"></i>
                            <span class="ps-2">Italy</span>
                          </span>
                        </li>
                      </ul>
                    </div>

                  </li>

                  <li class="header-searchbar">
                    <a href="#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                      <i class="ph  ph-chat-text"></i>
                    </a>

                    <div class="offcanvas offcanvas-end header-searchbar-canvas" tabindex="-1" id="offcanvasRight"
                      aria-labelledby="offcanvasRight">
                      <div class="header-searchbar-header">
                        <div class="d-flex justify-content-between mb-3">
                          

                          <div class="app-dropdown flex-shrink-0">
                           

                            <ul class="dropdown-menu mb-3">
                              <li class="dropdown-item mt-2">
                                <a href="#">
                                  <h6 class="mb-0">Search Settings</h6>
                                </a>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <a href="#">
                                  <h6 class="mb-0 text-secondary f-s-14">Safe Search Filtering</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox" id="searchSwitch"
                                      checked>
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <a href="#">
                                  <h6 class="mb-0 text-secondary f-s-14">Search Suggestions</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox"
                                      id="searchSwitch1">
                                  </div>
                                </div>
                              </li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-secondary f-s-14"> Search History</h6>
                                <i class="ti ti-message-circle me-3  text-success"></i>
                              </li>
                              <li class="dropdown-divider"></li>
                              <li class="dropdown-item d-flex align-items-center justify-content-between mb-2">
                                <a href="#">
                                  <h6 class="mb-0 text-dark f-s-14">Custom Search Preferences</h6>
                                </a>
                                <div class="flex-shrink-0">
                                  <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" type="checkbox"
                                      id="searchSwitch2">
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <p class="mb-0 text-secondary f-s-15 mt-2">Recently Searched Data:</p>
                      </div>
                      <div class="offcanvas-body app-scroll p-0">
                        <div>
                          <ul class="search-list">
                            <li class="search-list-item">
                              <div
                                class="h-35 w-35 d-flex-center b-r-15 overflow-hidden bg-light-secondary search-list-avtar">
                                <i class="ph-duotone  ph-gear f-s-20"></i>
                              </div>
                              <div class="search-list-content">
                                <a href="api.html" target="_blank"><h6 class="mb-0 text-dark">user management</h6></a>
                                <p class="f-s-13 mb-0 text-secondary">#RA789</p>
                              </div>
                            </li>
                            <li class="search-list-item">
                              <div
                                class="h-35 w-35 d-flex-center b-r-15 overflow-hidden bg-light-warning search-list-avtar">
                                <i class="ph-duotone  ph-projector-screen-chart f-s-20"></i>
                              </div>
                              <div class="search-list-content">
                                <a href="privacy_policy.html" target="_blank"><h6 class="mb-0 text-dark">data visualization</h6></a>
                                <p class="f-s-13 mb-0 text-secondary">#RY810</p>
                              </div>
                            </li>
                            <li class="search-list-item">
                              <div
                                class="h-35 w-35 d-flex-center b-r-15 overflow-hidden bg-light-dark search-list-avtar">
                                <i class="ph-duotone  ph-shield-check f-s-20"></i>
                              </div>
                              <div class="search-list-content">
                                <a href="terms_condition.html" target="_blank"><h6 class="mb-0 text-dark">security protocols</h6></a>
                                <p class="f-s-13 mb-0 text-secondary">#ATR56</p>
                              </div>
                            </li>
                            <li class="search-list-item">
                              <div
                                class="h-35 w-35 d-flex-center b-r-15 overflow-hidden bg-light-primary search-list-avtar">
                                <i class="ph-duotone  ph-app-window f-s-20"></i>
                              </div>
                              <div class="search-list-content">
                                <a href="sign_in.html" target="_blank"><h6 class="mb-0 text-dark">authentication methods</h6></a>
                                <p class="f-s-13 mb-0 text-secondary">#YE615</p>
                              </div>
                            </li>
                            <li class="search-list-item">
                              <div
                                class="h-35 w-35 d-flex-center b-r-15 overflow-hidden bg-light-dark search-list-avtar">
                                <i class="ph-duotone  ph-table f-s-20"></i>
                              </div>
                              <div class="search-list-content">
                                <a href="data_table.html" target="_blank"><h6 class="mb-0 f-s-16 text-dark">Data Table</h6></a>
                                <p class="f-s-13 mb-0 text-secondary">#YE615</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>

                  

                 

                 

                 

                  <li class="header-notification">
                    <a href="#" class="d-block head-icon position-relative" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#notificationcanvasRight" aria-controls="notificationcanvasRight">
                      <i class="ph ph-bell"></i>
                      <span
                        class="position-absolute translate-middle p-1 bg-success border border-light rounded-circle animate__animated animate__fadeIn animate__infinite animate__slower"></span>
                    </a>
                    <div class="offcanvas offcanvas-end header-notification-canvas" tabindex="-1"
                      id="notificationcanvasRight" aria-labelledby="notificationcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="notificationcanvasRightLabel">Notification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body app-scroll p-0">
                        <div class="head-container">
                          <div class="notification-message head-box">
                            <div class="message-images">
                              <span class="bg-secondary h-35 w-35 d-flex-center b-r-10 position-relative">
                                <img src="../assets/images/ai_avtar/6.jpg" alt="" class="img-fluid b-r-10">
                                <span
                                  class="position-absolute bottom-30 end-0 p-1 bg-secondary border border-light rounded-circle notification-avtar"></span>
                              </span>
                            </div>
                            <div class="message-content-box flex-grow-1 ps-2">

                              <a href="./read_email.html" class="f-s-15 text-secondary mb-0"><span
                                  class="f-w-500 text-secondary">Gene Hart</span> wants to edit <span
                                  class="f-w-500 text-secondary">Report.doc</span></a>
                              <div>
                                <a class="d-inline-block f-w-500 text-success me-1" href="#">Approve</a>
                                <a class="d-inline-block f-w-500 text-danger" href="#">Deny</a>
                              </div>
                              <span class="badge text-light-secondary mt-2"> sep 23 </span>

                            </div>
                            <div class="align-self-start text-end">
                              <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                            </div>
                          </div>
                          <div class="notification-message head-box">
                            <div class="message-images">
                              <span class="bg-light-dark h-35 w-35 d-flex-center b-r-10 position-relative">
                                <i class="ph-duotone  ph-truck f-s-18"></i>
                              </span>
                            </div>
                            <div class="message-content-box flex-grow-1 ps-2">
                              <a href="./read_email.html" class="f-s-15 text-secondary mb-0">Hey <span
                                  class="f-w-500 text-secondary">Emery McKenzie</span>, get ready: Your order from <span
                                  class="f-w-500 text-secondary">@Shopper.com</span> is out for delivery today!</a>
                              <span class="badge text-light-secondary mt-2"> sep 23 </span>

                            </div>
                            <div class="align-self-start text-end">
                              <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                            </div>
                          </div>
                          <div class="notification-message head-box">
                            <div class="message-images">
                              <span class="bg-secondary h-35 w-35 d-flex-center b-r-10 position-relative">
                                <img src="../assets/images/ai_avtar/2.jpg" alt="" class="img-fluid b-r-10">
                                <span
                                  class="position-absolute  end-0 p-1 bg-secondary border border-light rounded-circle notification-avtar"></span>
                              </span>
                            </div>
                            <div class="message-content-box flex-grow-1 ps-2">
                              <a href="./read_email.html" class="f-s-15 text-secondary mb-0"><span
                                  class="f-w-500 text-secondary">Simon Young</span> shared a file called <span
                                  class="f-w-500 text-secondary">Dropdown.pdf</span></a>
                              <span class="badge text-light-secondary mt-2"> 30 min</span>

                            </div>
                            <div class="align-self-start text-end">
                              <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                            </div>
                          </div>
                          <div class="notification-message head-box">
                            <div class="message-images">
                              <span class="bg-secondary h-35 w-35 d-flex-center b-r-10 position-relative">
                                <img src="../assets/images/ai_avtar/5.jpg" alt="" class="img-fluid b-r-10">
                                <span
                                  class="position-absolute end-0 p-1 bg-secondary border border-light rounded-circle notification-avtar"></span>
                              </span>
                            </div>
                            <div class="message-content-box flex-grow-1 ps-2">
                              <a href="./read_email.html" class="f-s-15 text-secondary mb-0"><span
                                  class="f-w-500 text-secondary">Becky G. Hayes</span> has added a comment to <span
                                  class="f-w-500 text-secondary">Final_Report.pdf</span></a>
                              <span class="badge text-light-secondary mt-2"> 45 min</span>
                            </div>
                            <div class="align-self-start text-end">
                              <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                            </div>
                          </div>
                          <div class="notification-message head-box">
                            <div class="message-images">
                              <span class="bg-secondary h-35 w-35 d-flex-center b-r-10 position-relative">
                                <img src="../assets/images/ai_avtar/1.jpg" alt="" class="img-fluid b-r-10">
                                <span
                                  class="position-absolute  end-0 p-1 bg-secondary border border-light rounded-circle notification-avtar"></span>
                              </span>
                            </div>
                            <div class="message-content-box flex-grow-1 ps-2">
                              <a href="./read_email.html" class="f-s-15 text-secondary mb-0"><span
                                  class="f-w-600 text-secondary">Romaine Nadeau</span> invited you to join a meeting
                              </a>
                              <div>
                                <a class="d-inline-block f-w-500 text-success me-1" href="#">Join</a>
                                <a class="d-inline-block f-w-500 text-danger" href="#">Decline</a>
                              </div>

                              <span class="badge text-light-secondary mt-2"> 1 hour ago </span>
                            </div>
                            <div class="align-self-start text-end">
                              <i class="ph ph-trash f-s-18 text-danger close-btn"></i>
                            </div>
                          </div>

                          <div class="hidden-massage py-4 px-3">
                            <img src="../assets/images/icons/bell.png" class="w-50 h-50 mb-3 mt-2" alt="">
                            <div>
                              <h6 class="mb-0">Notification Not Found</h6>
                              <p class="text-secondary">When you have any notifications added here,will
                                appear here.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </li>

                  <li class="header-profile">
                    <a href="#" class="d-block head-icon" role="button" data-bs-toggle="offcanvas"
                      data-bs-target="#profilecanvasRight" aria-controls="profilecanvasRight">
                      <img src="../assets/images/avtar/woman.jpg" alt="avtar" class="b-r-10 h-35 w-35">
                    </a>

                    <div class="offcanvas offcanvas-end header-profile-canvas" tabindex="-1" id="profilecanvasRight"
                      aria-labelledby="profilecanvasRight">
                      <div class="offcanvas-body app-scroll">
                        <ul class="">
                          <li>
                            <div class="d-flex-center">
                              <span class="h-45 w-45 d-flex-center b-r-10 position-relative">
                                <img src="../assets/images/avtar/woman.jpg" alt="" class="img-fluid b-r-10">
                              </span>
                            </div>
                            <div class="text-center mt-2">
                              <h6 class="mb-0"> Laura Monaldo</h6>
                              <p class="f-s-12 mb-0 text-secondary">lauradesign@gmail.com</p>
                            </div>
                          </li>

                          <li class="app-divider-v dotted py-1"></li>
                          <li>
                            <a class="f-w-500" href="./profile.html" target="_blank">
                              <i class="ph-duotone  ph-user-circle pe-1 f-s-20"></i> Profile Details
                            </a>
                          </li>
                          <li>
                            <a class="f-w-500" href="./setting.html" target="_blank">
                              <i class="ph-duotone  ph-gear pe-1 f-s-20"></i> Settings
                            </a>
                          </li>
                          <li>
                            <div class="d-flex align-items-center justify-content-between">
                              <a class="f-w-500" role="button" href="./setting.html" target="_blank" data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                <i class="ph-duotone  ph-eye-slash pe-1 f-s-20"></i> Hide Settings
                              </a>
                              <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                  <input class="form-check-input form-check-primary" type="checkbox" id="hideSetting"
                                         checked>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-center justify-content-between" >
                              <a class="f-w-500" href="#">
                                <i class="ph-duotone  ph-notification pe-1 f-s-20"></i> Notification
                              </a>
                              <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                  <input class="form-check-input form-check-primary" type="checkbox" id="basicSwitch"
                                    checked>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <a class="f-w-500" href="#">
                                  <i class="ph-duotone  ph-detective pe-1 f-s-20"></i> Incognito
                                </a>
                              </div>
                              <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                  <input class="form-check-input form-check-primary" type="checkbox"
                                    id="incognitoSwitch">
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="app-divider-v dotted py-1"></li>
                          <li>
                            <a class="f-w-500" href="./faq.html" target="_blank">
                              <i class="ph-duotone  ph-question pe-1 f-s-20"></i> Help
                            </a>
                          </li>
                          <li>
                            <a class="f-w-500" href="./pricing.html" target="_blank">
                              <i class="ph-duotone  ph-currency-circle-dollar pe-1 f-s-20"></i> Pricing
                            </a>
                          </li>
                          <li>
                            <a class="mb-0 text-secondary f-w-500" href="./sign_up.html" target="_blank">
                              <i class="ph-bold  ph-plus pe-1 f-s-20"></i> Add account
                            </a>
                          </li>
                          <li class="app-divider-v dotted py-1"></li>
                          <li>
                            <div class="card card-light-primary upgrade-plan">
                              <div class="card-body">
                                <div class="text-center">
                                  <div>
                                    <h6 class="mb-0 text-dark f-w-600">Free Plan</h6>
                                    <p class="text-dark mb-0">20k views</p>
                                  </div>
                                  <div class="flex-shrink-0 mt-3">
                                    <a href="pricing.html" target="_blank" role="button" class="btn btn-dark text-white d-block m-auto w-125">Upgrade</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="app-divider-v dotted py-1"></li>

                          <li>
                            <a class="mb-0 text-danger" href="./sign_in.html" target="_blank">
                              <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>

                  <li class="header-searchbar">
                   

                    <span class="header-toggle  d-md-none d-sm-block">
                      <i class="ph ph-circles-four"></i>
                    </span>

                   
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </header>
        <!-- Header Section ends parent-container -->

        <!-- Body main section starts -->
       

        <main class="parent-container">
          <div class="container-fluid">
            <div class="row">
                         
              <!-- order 1 -->
              <div class="col-xxl-9 order-1-md">
                <div class="card-body ">
                    <div class="row app-form">
                        <div class="col-md-6 col-xl-4 m-auto mt-5">
                            <div class="mt-5 d-flex align-items-center gap-2 align-middle">
                               
                                <select class="select-example form-select select-basic" name="state">
                                    <option value="AL">Alabama</option>
                                    <option value="AL">Wyoming</option>
                                    <option value="WY">Coming</option>
                                    <option value="WY">Hanry Die</option>
                                    <option value="WY">John Doe</option>
                                </select>
                                <button class="btn btn-primary  ">
                                    Search
                                </button>
                            </div>

                           
                        </div>
                        
                       
                    </div>
                </div>
              </div>


              
              <div class="col-md-5 col-xxl-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="header-title-text text-center">
                      Prep Toolkit</h5>

                    <div class="data-list-box mt-3 d-flex text-center gap-2">
                      <div class="filebox">
                        <div class=" align-items-center">
                          <img src="../assets/images/icons/10.png" class="w-35 h-35" alt="">
                          <div class="flex-grow-1 ms-2">
                            <h6 class="mb-0">React Data</h6>
                          </div>
                        </div>
                      </div>
                      <div class="filebox">
                        <div class=" align-items-center">
                          <img src="../assets/images/icons/02.png" class="w-35 h-35" alt="">
                          <div class="flex-grow-1 ms-2">
                            <h6 class="mb-0">React Data</h6>
                          </div>
                        </div>
                      </div>

                      <div class="filebox">
                        <div class=" align-items-center">
                          <img src="../assets/images/icons/02.png" class="w-35 h-35" alt="">
                          <div class="flex-grow-1 ms-2">
                            <h6 class="mb-0">React Data</h6>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <h5 class="header-title-text text-center">
                     Announcement</h5>

                    <div class="data-list-box mt-3  text-center gap-2">
                     
                      <p>How I got into HEC and ESSEC MiM Programs with Average.</p>

                      <div class="milestones-image pt-2">
                        <img src="https://img.freepik.com/free-photo/young-woman-walking-wooden-path-with-green-rice-field-vang-vieng-laos_335224-1258.jpg?ga=GA1.1.1104220778.1718962103&semt=ais_hybrid" width="250px" alt="" class="rounded">
                    </div>
                     
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <h5 class="header-title-text text-center">
                     Youtube Videos</h5>

                    <div class="data-list-box mt-3 ">
                     
                     
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID1" frameborder="0" allowfullscreen></iframe>
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID2" frameborder="0" allowfullscreen></iframe>
                        <iframe src="https://www.youtube.com/embed/VIDEO_ID3" frameborder="0" allowfullscreen></iframe>
                    
                     
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <h5 class="header-title-text text-center">
                      Latest Posts</h5>

                    <div class="data-list-box mt-3 ">
                     
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between" draggable="false">
                            <div class="">
                              <h6 class="mb-0 text-dark">Layla Garcia</h6>
                              <div class="cust-icon d-flex gap-2 pt-1">
                                <div class="like">
                                  <i class="ph ph-thumbs-up"> 1k</i>
                                </div>
                                <div class="dislike">
                                  <i class="ph ph-thumbs-down"> 2k</i>
                                </div>

                                <div class="coment">
                                  <i class="ph  ph-chat-centered-dots"> 300</i>
                                </div>
                              </div>
                            </div>
                            <p class="text-secondary mb-0">10:00 AM</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between" draggable="false">
                            <div class="">
                              <h6 class="mb-0 text-dark">Layla Garcia</h6>
                              <div class="cust-icon d-flex gap-2 pt-1">
                                <div class="like">
                                  <i class="ph ph-thumbs-up"> 1k</i>
                                </div>
                                <div class="dislike">
                                  <i class="ph ph-thumbs-down"> 2k</i>
                                </div>

                                <div class="coment">
                                  <i class="ph  ph-chat-centered-dots"> 300</i>
                                </div>
                              </div>
                            </div>
                            <p class="text-secondary mb-0">10:00 AM</p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between" draggable="false">
                            <div class="">
                              <h6 class="mb-0 text-dark">Layla Garcia</h6>
                              <div class="cust-icon d-flex gap-2 pt-1">
                                <div class="like">
                                  <i class="ph ph-thumbs-up"> 1k</i>
                                </div>
                                <div class="dislike">
                                  <i class="ph ph-thumbs-down"> 2k</i>
                                </div>

                                <div class="coment">
                                  <i class="ph  ph-chat-centered-dots"> 300</i>
                                </div>
                              </div>
                            </div>
                            <p class="text-secondary mb-0">10:00 AM</p>
                          </div>
                        </div>
                      </div>
                     
                     
                    </div>
                  </div>
                </div>
                
               

                <div class="card card-dark milestones-card">
                  <div class="card-body">
                  <div class="milestones-image">
                      <img src="../assets/images/dashboard/project/04.png" alt="">
                  </div>
                   <div class="text-center">
                    <h4 class="text-white">Ads  <span class="text-primary">Here</span> </h4>
                    
                   
                   </div>
                  </div>
                </div>

                
              </div>
              
            </div>
          </div>
        </main>
      </div>
    </div>
    <!-- Body main section ends -->


    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>

    <!-- Footer Section starts-->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9 col-12">
            <ul class="footer-text">
              <li>
                <p class="mb-0">Copyright © 2024 ra-admin. All rights reserved 💖</p>
              </li>
              <li> <a href="#"> V1.0.0 </a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="footer-text text-end">
              <li> <a href="document.html"> Need Help <i class="ti ti-help"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section ends-->
  </div>

  <!-- modal -->

  <!-- <div class="modal" tabindex="-1" id="welcomeCard" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content welcome-card">

        <div class="modal-body p-0">
          <div class="text-center position-relative welcome-card-content z-1 p-3">
            <div class="text-end">
              <i class="ti ti-x fs-5 text-dark f-w-600" data-bs-dismiss="modal"></i>
            </div>
            <h2 class="f-w-600"><span>Welcome !</span>👋 </h2>
            <h6 class="f-s-15 text-dark f-w-500 mx-0 mx-sm-5"> Start Multipurpose, clean modern responsive bootstrap 5 admin template </h6>

            <div>
              <img src="../assets/images/modals/welcome-1.png" alt="img" class=" img-fluid">
            </div>
            <div class="mt-3 mb-4">
              <button type="button" class="btn btn-primary text-white btn-lg" data-bs-dismiss="modal">Let's
                Started <i class="ti ti-chevrons-right"></i> </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> -->

  <!--customizer-->
  <div id="customizer"></div>

  <!-- latest jquery-->
  <script src="../assets/js/jquery-3.6.3.min.js"></script>

  <!-- Bootstrap js-->
  <script src="../assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Simple bar js-->
  <script src="../assets/vendor/simplebar/simplebar.js"></script>

  <!-- phosphor js -->
  <script src="../assets/vendor/phosphor/phosphor.js"></script>

  <!-- chart js -->
  <script src="../assets/vendor/chartjs/chart.js"></script>

  <!-- vector map plugin js -->
  <script src="../assets/vendor/vector-map/jquery-jvectormap-2.0.5.min.js"></script>
  <script src="../assets/vendor/vector-map/jquery-jvectormap-world-mill.js"></script>

  <!-- select2 -->
<script src="../assets/vendor/select/select2.min.js"></script>

<!--js-->
<script src="../assets/js/select.js"></script>

  <!-- slick-file -->
  <script src="../assets/vendor/slick/slick.min.js"></script>

   <!-- data table js-->
   <script src="../assets/js/data_table.js"></script>


  <!--cleave js  -->
  <script src="../assets/vendor/cleavejs/cleave.min.js"></script>

  <!-- apexcharts-->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>

  <!-- data table js-->
  <script src="../assets/vendor/datatable/jquery.dataTables.min.js"></script>

   <!-- sortable js  -->
   <script src="../assets/vendor/sortable/Sortable.min.js"></script>

  <!-- Glight js -->
  <script src="../assets/vendor/glightbox/glightbox.min.js"></script>

  <!-- Customizer js-->
  <script src="../assets/js/customizer.js"></script>

  <!-- Ecommerce js-->
  <script src="../assets/js/ecommerce_dashboard.js"></script>

  <!-- prism js-->
  <script src="../assets/vendor/prism/prism.min.js"></script>

   <!-- Project Dashboard js-->
   <script src="../assets/js/project_dashboard.js"></script>

  <!-- App js-->
  <script src="../assets/js/script.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll(".menu-item");

    menuItems.forEach(item => {
        const link = item.querySelector(".menu-link");
        const submenu = item.querySelector(".popup-submenu");

        link.addEventListener("click", function(event) {
            event.preventDefault();

            // Close other open submenus
            document.querySelectorAll(".popup-submenu").forEach(sub => {
                if (sub !== submenu) {
                    sub.style.display = "none";
                }
            });

            // Toggle current submenu
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        });

        // Close submenu when clicking outside
        document.addEventListener("click", function(event) {
            if (!item.contains(event.target)) {
                submenu.style.display = "none";
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let submenus = document.querySelectorAll(".popup-submenu");
    submenus.forEach(submenu => {
        submenu.style.display = "none"; // Hide all submenus on page load
    });
});



  </script>


  

</body>

</html>