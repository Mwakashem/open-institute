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
<title>Open Institute | Interview</title>

<!--StyleSheet-->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="{{asset('css/style.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">

<!--Javascript-->
<script src="{{asset('js/google.api.js')}}" type="text/Javascript"></script>
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
          <a class="logo-horizontal " href="/">
          <h5>Openinstitute Interview</h5>
          </a> 
          <!-- LOGO -->
          <div class="d-flex order-lg-2 ms-auto header-right-icons"> 
            <!-- SEARCH -->
            <div class="navbar navbar-collapse responsive-navbar p-0">
              <div class="navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2">

                  <!-- FULL-SCREEN -->
                  
                  <div class="dropdown d-flex profile-1"> <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex"> <img src="{{asset('images/user.jpg')}}" alt="profile-user" class="avatar  profile-user brround cover-image"> </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <div class="drop-heading">
                        <div class="text-center">
                          <h5 class="text-dark mb-0 fs-14 fw-semibold">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
                          <small class="text-muted">{{ Auth::user()->roles->pluck('name')[0] }}</small> </div>
                      </div>
                      <div class="dropdown-divider m-0"></div>
                      <a class="dropdown-item" href="{{ route('profile') }}"> <i class="dropdown-icon icofont-user"></i> Profile </a>
                      <a class="dropdown-item" href="{{ route('change.password') }}"> <i class="dropdown-icon icofont-user"></i> Change Password </a>
                      <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"> <i class="dropdown-icon icofont-sign-out"></i> Sign out </button> 

                    </form>
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
        <div class="side-header"> <a class="header-brand1" href="/">
          <!-- <h2>Premier Agent</h2> -->
        <h5>Openistsitute Interview</h5>
          </a> 
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
            @if (Auth::user()->roles->pluck('name')[0] == 'admin')
            <li class="slide is-expanded"> 
              <a class="side-menu__item active" data-bs-toggle="slide" href="/users"><i class="side-menu__icon icofont-users-alt-3"></i> <span class="side-menu__label">Users</span></a>
            </li>
            <li class="slide"> 
                <a class="side-menu__item" data-bs-toggle="slide" href="/leaves"><i class="side-menu__icon icofont-ui-file"></i> <span class="side-menu__label">Leave Applications</span></a>
            </li>
            @endif
            @if (Auth::user()->roles->pluck('name')[0] == 'user')
            <li class="slide is-expanded"> 
              <a class="side-menu__item active" data-bs-toggle="slide" href="/profile"><i class="side-menu__icon icofont-users-alt-3"></i> <span class="side-menu__label">My profile</span></a>
            </li>
            <li class="slide"> 
                <a class="side-menu__item" data-bs-toggle="slide" href="/leaves"><i class="side-menu__icon icofont-ui-file"></i> <span class="side-menu__label">My Applications</span></a>
            </li>
            @endif
            <li class="slide"> 
                <a class="side-menu__item" data-bs-toggle="slide" href="/notifications"><i class="side-menu__icon icofont-ui-file"></i> <span class="side-menu__label">Notifications</span></a>
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
@yield('main-content')
<!--app-content close-->

  </div>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            
        </div>
    </div>
</footer>
<!-- FOOTER END -->

</div>



<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}" type="text/Javascript"></script>
<script src="{{asset('js/sticky.js')}}" type="text/Javascript"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('assets/p-scroll/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/p-scroll/pscroll.js')}}"></script>
<script src="{{asset('assets/p-scroll/pscroll-1.js')}}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{asset('assets/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/chart/rounded-barchart.js')}}"></script>
<script src="{{asset('assets/chart/utils.js')}}"></script>

<script src="{{asset('assets/fileuploads/js/fileupload.js')}}"></script>
<script src="{{asset('assets/fileuploads/js/file-upload.js')}}"></script>
<script src="{{asset('js/sidebar/sidebar.js')}}" type="text/Javascript"></script>
<script src="{{asset('js/sidemenu/sidemenu.js')}}" type="text/Javascript"></script>
<script src="{{asset('js/summernote/summernote1.js')}}"></script>
<script src="{{asset('js/summernote.js')}}"></script>

<script src="{{asset('js/main.js')}}" type="text/Javascript"></script>
</body>

</html>
