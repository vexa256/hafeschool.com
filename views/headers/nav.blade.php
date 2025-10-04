<nav
class="layout-navbar container-fluid navbar-detached navbar navbar-expand-xl align-items-center bg-dark"
id="layout-navbar">
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
    <i class="icon-base bx bx-menu icon-md"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
  <!-- Search -->
  @include('headers.alerts')
  <!-- /Search -->


  <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">

    <!-- Search -->
    <div class="navbar-nav align-items-center">
      <div class="nav-item navbar-search-wrapper mb-0">
        <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
          <span class="d-inline-block text-body-secondary fw-normal" id="autocomplete"></span>
        </a>
      </div>
    </div>

    <!-- /Search -->





  <ul class="navbar-nav flex-row align-items-center ms-md-auto">





      <!-- Notification -->
      <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
          <span class="position-relative">
            <i class="icon-base bx bx-bell icon-md"></i>
            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end p-0">
          <li class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
              <h6 class="mb-0 me-auto">Notification</h6>
              <div class="d-flex align-items-center h6 mb-0">
                <span class="badge bg-label-primary me-2">8 New</span>
                <a href="javascript:void(0)" class="dropdown-notifications-all p-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="icon-base bx bx-envelope-open text-heading"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown-notifications-list scrollable-container">
            <ul class="list-group list-group-flush">





              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-success"><i class="icon-base bx bx-pie-chart-alt"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-0">Monthly report is generated</h6>
                    <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                    <small class="text-body-secondary">3 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="{{ asset('bootstrap/assets/img/avatars/5.png')}}" alt="" class="rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-0">Send connection request</h6>
                    <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                    <small class="text-body-secondary">4 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <img src="{{ asset('bootstrap/assets/img/avatars/6.png')}}" alt="" class="rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-0">New message from Jane</h6>
                    <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base bx bx-x"></span></a>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                      <span class="avatar-initial rounded-circle bg-label-warning"><i class="icon-base bx bx-error"></i></span>
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="small mb-0">CPU is running high</h6>
                    <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                    <small class="text-body-secondary">5 days ago</small>
                  </div>
                  <div class="flex-shrink-0 dropdown-notifications-actions">
                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="icon-base bx bx-x"></span></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="border-top">
            <div class="d-grid p-4">
              <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                <small class="align-middle">View all notifications</small>
              </a>
            </div>
          </li>
        </ul>
      </li>
      <!--/ Notification -->






  <ul class="navbar-nav flex-row align-items-center ms-md-auto">
    <!-- Place this tag where you want the button to render. -->

    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a
        class="nav-link dropdown-toggle hide-arrow p-0"
        href="javascript:void(0);"
        data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            <img
            src="{{ Auth::check() && Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('bootstrap/assets/img/avatars/1.png') }}"
            alt="User Avatar"
            class="w-px-40 h-auto rounded-circle"
        />
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <div class="avatar avatar-online">
                    <img
                    src="{{ Auth::check() && Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('bootstrap/assets/img/avatars/1.png') }}"
                    alt="User Avatar"
                    class="w-px-40 h-auto rounded-circle"
                />

                </div>
              </div>
              <div class="flex-grow-1">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <small class="text-body-secondary">{{ Auth::user()->role }}</small>
              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider my-1"></div>
        </li>
        <li>
          <a class="dropdown-item" href="{{ route('UserProfile') }}">
            <i class="icon-base bx bx-user icon-md me-3"></i><span>My Profile</span>
          </a>
        </li>

        <li>
          <div class="dropdown-divider my-1"></div>
        </li>
        <li>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            .closest('form').submit();>
            <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
          </a>

        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>
</nav>

<!-- / Navbar -->

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
