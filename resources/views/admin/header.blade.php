<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>immomaket Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./admin/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./admin/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=".admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}">
            <img src="admin/images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Salut {{ Auth::user()->name }} ! Bienvenue sur Immomaket</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="admin/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="admin/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="admin/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="admin/images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> {{ Auth::user()->name }} </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="admin/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">{{ Auth::user()->name }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="admin/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <p class="designation">{{ Auth::user()->role }}</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Categories</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/createcategorie')}}">ajouter une categorie</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/categorielist')}}">Liste des categories</a></li>
                  </ul>
              </div>
            </li>
            @can('bailleur')
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Proprietes</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/proprietecreate')}}">ajouter une propriete</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/proprietelist')}}">Liste des proprietes</a></li>
                </ul>
              </div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Bailleurs</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/bailleurliste')}}">Liste des bailleurs</a></li>
                
                  {{-- <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/buttons.html">ajouter une bailleur</a></li> --}}
                  {{-- <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/typography.html">Liste des bailleurs</a></li> --}}
                </ul>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Categories</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/buttons.html">ajouter une categorie</a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/ui-features/typography.html">Liste des categories</a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="admin/pages/icons/simple-line-icons.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/pages/forms/basic_elements.html">
                <span class="menu-title">Form Elements</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="admin/pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="admin/pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li> --}}
            {{-- <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/immomaket-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
              </span>
            </li> --}}
          </ul>
        </nav>
        <!-- partial -->