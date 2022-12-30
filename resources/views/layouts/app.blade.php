<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Niter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="{{ asset('/') }}assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('/') }}assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('/') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- custom Css-->


    <link href="{{ asset('/') }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/libs/toastr/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/libs/jqueryui/jquery-ui.min.css">


</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/images/logo-dark.png" alt=""
                                        height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/images/logo-light.png" alt=""
                                        height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">




                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>


                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('/') }}assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Yetfix</span>
                                        {{-- <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span> --}}
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <form action="{{ route('logout') }}" method="POST">
                                    <button class="dropdown-item">
                                        @csrf
                                        <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                            </lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Light Logo-->
                <a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('/') }}assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('/') }}assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span>Dashboards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('department') @yield('create.department') @yield('edit.department')"
                                href="#department" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="ri-community-fill"></i> <span data-key="t-apps">Department</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('department.show')" id="department">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('department.index') }}" class="nav-link @yield('department')">
                                            All Department </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('department.create') }}" class="nav-link @yield('create.department')"
                                            data-key="t-chat"> Add
                                            Department </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('news.create') @yield('news.edit') @yield('news')"
                                href="#news" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">News</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('news.show')" id="news">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('news.index') }}" class="nav-link @yield('news')"> All
                                            News
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('news.create') }}" class="nav-link @yield('news.create')"
                                            data-key="t-chat"> Add News </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('category.index') }}" class="nav-link" data-key="t-chat">
                                            News
                                            Category </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('research.create') @yield('research.edit') @yield('research')"
                                href="#research" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="lab la-researchgate"></i> <span data-key="t-apps">Research</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('research.show')" id="research">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('research.index') }}" class="nav-link @yield('research')">
                                            All
                                            Resarch </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('research.create') }}" class="nav-link @yield('research.create')"
                                            data-key="t-chat"> Add Research
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('event.create') @yield('event.edit') @yield('event')"
                                href="#event" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="ri-calendar-event-line"></i> <span data-key="t-apps">Event</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('event.show')" id="event">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('event.index') }}" class="nav-link @yield('event')"> All
                                            Event </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('event.create') }}" class="nav-link @yield('event.create')"
                                            data-key="t-chat"> Add Event
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('notice.create') @yield('notice.edit') @yield('notice')"
                                href="#notice" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="ri-calendar-event-line"></i> <span data-key="t-apps">Notice</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('notice.show')" id="notice">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('notice.index') }}" class="nav-link @yield('notice')">
                                            All
                                            Notice </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('notice.create') }}" class="nav-link @yield('notice.create')"
                                            data-key="t-chat"> Add Notice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link"
                                href="#designation" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="sidebarApps">
                                <i class="ri-calendar-event-line"></i> <span data-key="t-apps">Designation</span>
                            </a>
                            <div class="collapse menu-dropdown @yield('notice.show')" id="designation">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('designation.index') }}" class="nav-link ">
                                            Designation </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('designation.create') }}" class="nav-link "
                                            data-key="t-chat"> Add Designation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#faculty" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Faculty</span>
                            </a>
                            <div class="collapse menu-dropdown " id="faculty">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('faculty.index') }}" class="nav-link">Faculty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('faculty.create') }}" class="nav-link"
                                            data-key="t-chat">Add Faculty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('faculty-member.index') }}" class="nav-link">Faculty
                                            Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('faculty-member.create') }}" class="nav-link"
                                            data-key="t-chat">Add Faculty Member</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link @yield('settings')" href="{{ route('setting.index') }}">
                                <i class="ri-dashboard-2-line"></i> <span>Settings</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#programs" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Programs</span>
                            </a>
                            <div class="collapse menu-dropdown " id="programs">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('programs.index') }}" class="nav-link">Programs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('programs.create') }}" class="nav-link" data-key="t-chat">Add Programs</a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- end main content-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Yetfix
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <script src="{{ asset('/') }}assets/libs/jquery/jquery.min.js"></script>




    <!-- JAVASCRIPT -->
    <script src="{{ asset('/') }}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('/') }}assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('/') }}assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('/') }}assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('/') }}assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('/') }}assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('/') }}assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('/') }}assets/js/app.js"></script>
    <script src="{{ asset('/') }}assets/libs/jqueryui/jquery-ui.min.js"></script>
    <script src="{{ asset('/') }}assets/libs/toastr/toastr.min.js"></script>





    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    {!! Toastr::message() !!}
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
            $(document).on('click', '.datepicker', function() {
            $(this).datepicker().focus();
        });
        });

        // $( ".datepicker" ).datepicker();

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                });
            @endforeach
        @endif
    </script>

    @stack('script')

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Dec 2022 04:58:46 GMT -->

</html>
