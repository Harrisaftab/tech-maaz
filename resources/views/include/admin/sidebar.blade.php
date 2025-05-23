<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="../admin/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../admin/images/logo-dark.png" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="../admin/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../admin/images/logo-light.png" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
        <div class="vertical-menu-btn-wrapper header-item vertical-icon">
            <button type="button" class="btn btn-sm px-0 fs-xl vertical-menu-btn topnav-hamburger shadow hamburger-icon" id="topnav-hamburger-icon">
                <i class='bx bx-chevrons-right'></i>
                <i class='bx bx-chevrons-left'></i>
            </button>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="nav-item">
                    <a href="dashboard.html" class="nav-link menu-link">
                        <i class="bx bx-home"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="orders.html" class="nav-link menu-link">
                        <i class="bx bx-cart"></i> <span data-key="t-orders">Orders</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="programs.html" class="nav-link menu-link">
                        <i class="bx bx-dumbbell"></i> <span data-key="t-programs">Programs</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="services.html" class="nav-link menu-link">
                        <i class="bx bx-briefcase"></i> <span data-key="t-services">Services</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="blogs.html" class="nav-link menu-link">
                        <i class="bx bx-news"></i> <span data-key="t-blogs">Blogs</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="ebooks.html" class="nav-link menu-link">
                        <i class="bx bx-book"></i> <span data-key="t-ebooks">E-books</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="contact.html" class="nav-link menu-link">
                        <i class="bx bx-phone"></i> <span data-key="t-contact">Contact</span>
                    </a>
                </li>
            
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="dropdown sidebar-user mt-4">
        <button type="button" class="btn sidebar-user-button shadow-none w-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center overflow-hidden">
                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/32/avatar-1.jpg') }}" alt="Header Avatar">
                <span class="text-start ms-xl-2 overflow-hidden flex-grow-1 sideba-user-content">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text text-truncate mb-0">
                        {{ Auth::user()->name }}
                    </span>
                    <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">
                        {{ Auth::user()->role ?? 'User' }}
                    </span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                <i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Profile</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="mdi mdi-message-text-outline text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Messages</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="mdi mdi-calendar-check-outline text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Taskboard</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="mdi mdi-lifebuoy text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Help</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="mdi mdi-wallet text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Balance : <b>$8451.36</b></span>
            </a>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                <span class="badge bg-success-subtle text-success mt-1 float-end">New</span>
                <i class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Settings</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i>
                <span class="align-middle">Lock screen</span>
            </a>
            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                    <span class="align-middle" data-key="t-logout">Logout</span>
                </a>
            </form>
        </div>
    </div>    
    <div class="sidebar-background"></div>
</div>