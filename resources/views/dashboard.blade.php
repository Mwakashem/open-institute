<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="publisher" content="" />
<meta name="copyright" content="" />
<meta name="creation_Date" content="02/12/2021" />
<meta name="expires" content="" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>Premier Agent | Dashboard</title>

<!--StyleSheet-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!--Javascript-->
<script src="js/google.api.js" type="text/Javascript"></script>
</head>

<body class="app sidebar-mini ltr light-mode">

<!-- PAGE -->
<div class="page">
  <div class="page-main"> 
    
    <!-- app-Header -->
    <div class="app-header header sticky">
      <div class="container-fluid main-container">
        <div class="d-flex"> <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a> 
          <!-- sidebar-toggle--> 
          <a class="logo-horizontal " href="index.html">
            <h6>Openinstitue Interview</h6>
          </a> 
          <!-- LOGO -->
          <div class="d-flex order-lg-2 ms-auto header-right-icons"> 
            <!-- SEARCH -->
            <div class="navbar navbar-collapse responsive-navbar p-0">
              <div class="navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2">

                  <!-- FULL-SCREEN -->
                  <div class="dropdown  d-flex notifications"> 
                  <a class="nav-link icon" data-bs-toggle="dropdown">
                  	<i class="far fa-bell"></i><span class=" pulse"></span> 
                  </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <div class="drop-heading border-bottom">
                        <div class="d-flex">
                          <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications </h6>
                        </div>
                      </div>
                      <div class="notifications-menu"> <a class="dropdown-item d-flex" href="notify-list.html">
                        <div class="me-3 notifyimg bg-primary brround box-shadow-primary"> <i class="icofont-envelope"></i> </div>
                        <div class="mt-1 wd-80p">
                          <h5 class="notification-label">New Application received </h5>
                          <span class="notification-subtext">3 days ago</span> </div>
                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                        <div class="me-3 notifyimg bg-secondary brround box-shadow-secondary"> <i class="icofont-check-circled"></i> </div>
                        <div class="mt-1 wd-80p">
                          <h5 class="notification-label">Project has been
                            approved</h5>
                          <span class="notification-subtext">2 hours ago</span> </div>
                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                        <div class="me-3 notifyimg  bg-success brround box-shadow-success"> <i class="icofont-shopping-cart"></i> </div>
                        <div class="mt-1 wd-80p">
                          <h5 class="notification-label">Your Product Delivered </h5>
                          <span class="notification-subtext">30 min ago</span> </div>
                        </a> <a class="dropdown-item d-flex" href="notify-list.html">
                        <div class="me-3 notifyimg bg-pink brround box-shadow-pink"> <i class="icofont-user"></i> </div>
                        <div class="mt-1 wd-80p">
                          <h5 class="notification-label">Friend Requests</h5>
                          <span class="notification-subtext">1 day ago</span> 
                        </div>
                        </a> 
                      </div>
                      <div class="dropdown-divider m-0"></div>
                      <a href="notify-list.html" class="dropdown-item text-center p-3 text-muted">View all Notification</a> </div>
                  </div>
                  <!-- NOTIFICATIONS -->
                  <div class="dropdown  d-flex message"> 
                  	<a class="nav-link icon text-center" data-bs-toggle="dropdown"> <i class="fas fa-comment-alt"></i><span class="pulse-danger"></span> </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <div class="drop-heading border-bottom">
                        <div class="d-flex">
                          <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5 Messages</h6>
                          <div class="ms-auto"> <a href="javascript:void(0)" class="text-muted p-0 fs-12">make all unread</a> </div>
                        </div>
                      </div>
                      <div class="message-menu message-menu-scroll"> 
                        <a class="dropdown-item d-flex" href="chat.html"> 
                        <img class="avatar avatar-md brround me-3 align-self-center cover-image" src="images/user.jpg">
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5>Peter Theil</h5>
                            <small class="text-muted ms-auto text-end"> 6:45 am </small> </div>
                          <span>Commented on file Guest list....</span> </div>
                        </a> 
                        <a class="dropdown-item d-flex" href="chat.html"> 
                          <img class="avatar avatar-md brround me-3 align-self-center cover-image" src="images/user.jpg">
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5>Abagael Luth</h5>
                            <small class="text-muted ms-auto text-end"> 10:35 am </small> </div>
                          <span>New Meetup Started......</span> </div>
                        </a> 
                        <a class="dropdown-item d-flex" href="chat.html"> 
                          <img class="avatar avatar-md brround me-3 align-self-center cover-image" src="images/user.jpg">
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5>Brizid Dawson</h5>
                            <small class="text-muted ms-auto text-end"> 2:17 pm </small> </div>
                          <span>Brizid is in the Warehouse...</span> </div>
                        </a> 
                        <a class="dropdown-item d-flex" href="chat.html"> 
                          <img class="avatar avatar-md brround me-3 align-self-center cover-image" src="images/user.jpg">
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5>Shannon Shaw</h5>
                            <small class="text-muted ms-auto text-end"> 7:55 pm </small> </div>
                          <span>New Product Realease......</span> </div>
                        </a> 
                        <!-- <a class="dropdown-item d-flex" href="chat.html"> 
                          <img class="avatar avatar-md brround me-3 align-self-center cover-image" src="images/user.jpg">
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5>Cherry Blossom</h5>
                            <small class="text-muted ms-auto text-end"> 7:55 pm </small> </div>
                          <span>You have appointment on......</span> </div>
                        </a>  -->
                      </div>
                      <div class="dropdown-divider m-0"></div>
                      <a href="javascript:void(0)" class="dropdown-item text-center p-3 text-muted">See all
                      Messages</a> </div>
                  </div>
                  <!-- MESSAGE-BOX -->
                  <!-- <div class="dropdown d-flex header-settings"> <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right" data-target=".sidebar-right"> <i class="fas fa-bars"></i> </a> </div> -->
                  <!-- SIDE-MENU -->
                  <div class="dropdown d-flex profile-1"> <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex"> <img src="images/user.jpg" alt="profile-user" class="avatar  profile-user brround cover-image"> </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <div class="drop-heading">
                        <div class="text-center">
                          <h5 class="text-dark mb-0 fs-14 fw-semibold">Percy Kewshun</h5>
                          <small class="text-muted">Senior Admin</small> </div>
                      </div>
                      <div class="dropdown-divider m-0"></div>
                      <a class="dropdown-item" href="profile.html"> <i class="dropdown-icon icofont-user"></i> Profile </a> 
                      <a class="dropdown-item" href="email-inbox.html"> <i class="dropdown-icon icofont-envelope"></i> Inbox <span class="badge bg-danger rounded-pill float-end">5</span> </a> 
                      <a class="dropdown-item" href="password.html"> <i class="dropdown-icon icofont-lock"></i> Change Password </a>
                      <a class="dropdown-item" href="settings.html"> <i class="dropdown-icon icofont-ui-settings"></i> Settings </a> 
                      <a class="dropdown-item" href="login.html"> <i class="dropdown-icon icofont-sign-out"></i> Sign out </a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /app-Header --> 
    
    <!--APP-SIDEBAR-->
    <div class="sticky">
      <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
      <div class="app-sidebar">
        <div class="side-header"> <h5 class="header-brand1" href="/dashboard">
            Openinstitute Interview
        </h5> 
          <!-- LOGO --> 
        </div>
        <div class="main-sidemenu">
          <div class="slide-left disabled" id="slide-left">
            <svg xmlns="http://www.w3.org/2000/svg"
                            fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
              <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
            </svg>
          </div>
          <ul class="side-menu">
            <br><br>
            <li class="slide"> 
              <a class="side-menu__item" data-bs-toggle="slide" href="/users"><i class="side-menu__icon icofont-users-alt-3"></i> <span class="side-menu__label">User</span></a>
            </li>
            <li class="slide"> 
              <a class="side-menu__item" data-bs-toggle="slide" href="/leave-request"><i class="side-menu__icon icofont-chart-bar-graph"></i> <span class="side-menu__label">Leave Requests</span></a>
            </li>
          </ul>
          <div class="slide-right" id="slide-right">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
              <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
            </svg>
          </div>
        </div>
      </div>
      <!--/APP-SIDEBAR--> 
    </div>

<!--app-content open-->
<div class="main-content app-content mt-0">
  <div class="side-app"> 
    
    <!-- CONTAINER -->
    <div class="main-container container-fluid"> 
      
      <!-- PAGE-HEADER -->
      <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div>
      <!-- PAGE-HEADER END -->

      <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Listed Agents</h6>
                                                        <h2 class="mb-0 number-font">1,428</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="icon1 mt-1">
                                                          <img src="images/icons/icon-agents.png" alt="Premier Dashboard">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                  <span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    Last week</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Listed Property</h6>
                                                        <h2 class="mb-0 number-font">15,477</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="icon1 mt-1">
                                                          <img src="images/icons/icon-properties.png" alt="Premier Dashboard">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                  <span class="text-pink"><i class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                    Last 6 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Blogs Writen</h6>
                                                        <h2 class="mb-0 number-font">1,000</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="icon1 mt-1">
                                                          <img src="images/icons/icon-blogs.png" alt="Premier Dashboard">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                  <span class="text-green"><i class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                    Last 9 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Ads Placed</h6>
                                                        <h2 class="mb-0 number-font">128</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                         <div class="icon1 mt-1">
                                                          <img src="images/icons/icon-promo.png" alt="Premier Dashboard">
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                  <span class="text-warning"><i class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                    Last year</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->
      
      <!-- ROW-1 -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
          <div class="row">
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="#">
                   <div class="icon1 my-auto"><img src="images/icons/icon-home.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Home</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="profile.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-user.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Profile</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="review.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-rating.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Review</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="add-property.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-property.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Add Property</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="listed-property.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-lisiting.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Listed Property</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="leads.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-leads.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>My Leads</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="blog.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-blog.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Blogs</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="events.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-events.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Events</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="password.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-password.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Change Password</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
            <div class="col-md-6 col-12 col-xl-4">
              <div class="card overflow-hidden text-left dashboardinfo">
                <div class="card-body">
                  <a href="settings.html">
                   <div class="icon1 my-auto"><img src="images/icons/icon-settings.png" alt="Premier Dashboard"></div>
                   <div class="dashblock">
                   <span>Settings</span>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis erat a tortor iaculis.</p>
                 </div>
                  </a>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ROW-1 END --> 
    </div>
    <!-- CONTAINER END --> 
  </div>
</div>
<!--app-content close-->

  </div>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <span id="year"></span> <a href="javascript:void(0)">Premier Agent</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

</div>

<footer class="footermenu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center">
        <div class="menu-bottom">
          <ul>
            <li><a href=""><i class="icofont-home"></i> Home</a></li>
            <li><a href=""><i class="icofont-users"></i> Community</a></li>
            <li><a href=""><i class="icofont-building-alt"></i> Sell</a></li>
            <li><a href=""><i class="icofont-calendar"></i> Events</a></li>
            <li><a href=""><i class="icofont-book-mark"></i> Tips</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- jQuery -->
<script src="js/jquery.min.js" type="text/Javascript"></script>
<script src="js/sticky.js" type="text/Javascript"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="assets/p-scroll/perfect-scrollbar.js"></script>
<script src="assets/p-scroll/pscroll.js"></script>
<script src="assets/p-scroll/pscroll-1.js"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="assets/chart/Chart.bundle.js"></script>
<script src="assets/chart/rounded-barchart.js"></script>
<script src="assets/chart/utils.js"></script>

<script src="js/sidebar/sidebar.js" type="text/Javascript"></script>
<script src="js/sidemenu/sidemenu.js" type="text/Javascript"></script>

<script src="js/main.js" type="text/Javascript"></script>
</body>

</html>
