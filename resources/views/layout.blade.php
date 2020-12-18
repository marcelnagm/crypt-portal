<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="">
        <meta name="Author" content="">
        <meta name="Keywords" content=""/>

        <!-- Title -->
        <title> @yield('title') </title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('/img/brand/favicon.png')}}" type="image/x-icon"/>

        <!-- Icons css -->
        <link href="{{asset('/css/icons.css')}}" rel="stylesheet">

        <!-- Internal Chart-Morris css-->
        <link href="{{asset('/plugins/morris.js/morris.css')}}" rel="stylesheet">

        <!--  Left-Sidebar css -->
        <link href="{{asset('/css/sidemenu-closed.css')}}" rel="stylesheet">

        <!--  Right-sidemenu css -->
        <link href="{{asset('/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!-- Internal Nice-select css  -->
        <link href="{{asset('/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">

        <!-- Internal News-Ticker css-->
        <link href="{{asset('/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

        <!-- Jquery-countdown css-->
        <link href="{{asset('/plugins/jquery-countdown/countdown.css')}}" rel="stylesheet">

        <!-- Internal News-Ticker css-->
        <link href="{{asset('/plugins/newsticker/jquery.jConveyorTicker.css')}}" rel="stylesheet">

        <!-- style css-->
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <!-- skin css-->
        <link href="{{asset('/css/skin-modes.css')}}" rel="stylesheet">


        <!-- dark-theme css-->
        <link href="{{asset('/css/skin-modes.css')}}" rel="stylesheet">

        <link href="{{asset('/css/style-dark.css')}}" rel="stylesheet">

        <!--- Animations css-->
        <link href="{{asset('/css/animate.css')}}" rel="stylesheet">

    </head>
    <body class="main-body app sidebar-mini dark-theme">

        <!-- Loader -->
        <div id="global-loader" class="dark-loader">
            <img src="{{ asset('img/loaders/loader.svg') }}" class="loader-img" alt="Loader">

        </div>
        <!-- /Loader -->


        <!-- Page -->
        <div class="page">

            <!-- main-sidebar opened -->
            @include('admin')
            <!-- main-sidebar -->

            <!-- main-content -->
            <div class="main-content app-content">

                <!-- main-header -->
                <div class="main-header sticky side-header nav nav-item">
                    <div class="container-fluid">
                        <div class="main-header-left ">
                            <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                                <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                                <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                            </div>
                        </div>
                        <div class="main-header-center">
                            <div class="responsive-logo">
                                <a href="index.html"><img src="https://autocrypto.com.br/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
                            </div>
                        </div>
                        <div class="main-header-right">
                            <div class="nav nav-item  navbar-nav-right ml-auto">
                                <form class="navbar-form nav-item my-auto d-lg-none" role="search">
                                    <div class="input-group nav-item my-auto">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default">
                                                <i class="ti-close"></i>
                                            </button>
                                            <button type="submit" class="btn btn-default nav-link">
                                                <i class="ti-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <div class="nav-item full-screen fullscreen-button">
                                    <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                                </div>
                                <div class="dropdown nav-item main-header-notification">
                                    <a class="new nav-link " href="#"><i class="ti-bell animated bell-animations"></i><span class=" pulse"></span></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="menu-header-content text-left d-flex">
                                            <div class="">
                                                <h6 class="menu-header-title text-white mb-0">7 novas notificações</h6>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                <span class="badge badge-pill badge-warning float-right">Marcar todas como lido</span>
                                            </div>
                                        </div>
                                        <div class="main-notification-list Notification-scroll">
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-success-transparent">
                                                    <i class="la la-shopping-basket text-success"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">New Order Received</h5>
                                                    <div class="notification-subtext">1 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-danger-transparent">
                                                    <i class="la la-user-check text-danger"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">22 verified registrations</h5>
                                                    <div class="notification-subtext">2 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-primary-transparent">
                                                    <i class="la la-check-circle text-primary"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">Project has been approved</h5>
                                                    <div class="notification-subtext">4 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="">VER TODAS</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                                </button>
                                <div class="dropdown main-profile-menu nav nav-item nav-link">
                                    <a class="profile-user" href=""><img alt="" src="{{asset('/img/faces/5.jpg')}}"></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="main-header-profile header-img">
                                            <div class="main-img-user"><img alt="" src="{{asset('/img/faces/5.jpg')}}"></div>
                                            <h6>Elizabeth Jane</h6><span>Membro VIP</span>
                                        </div>
                                        <a class="dropdown-item" href=""><i class="far fa-user"></i> Meu Dados</a>
                                        <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /main-header -->

                <!-- mobile-header -->
                <div class="responsive main-header">
                    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ml-auto">
                                <form class="navbar-form nav-item my-auto d-lg-none" role="search">
                                    <div class="input-group nav-item my-auto">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default">
                                                <i class="ti-close"></i>
                                            </button>
                                            <button type="submit" class="btn btn-default nav-link">
                                                <i class="ti-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <div class="d-md-flex">
                                    <div class="nav-item full-screen fullscreen-button">
                                        <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                                    </div>
                                </div>
                                <div class="dropdown  nav-item main-header-message header-contact">
                                    <a class="new nav-link" href="#" ><i class="ti-email"></i><span class=" pulse-danger"></span></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="main-dropdown-header d-sm-none">
                                            <a class="main-header-arrow" href=""><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="menu-header-content text-left d-flex">
                                            <div class="">
                                                <h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                <span class="badge badge-pill badge-warning float-right">Mark All Read</span>
                                            </div>
                                        </div>
                                        <div class="main-message-list text-scroll">
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="  drop-img  cover-image  " data-image-src="assets/img/faces/3.jpg">
                                                    <span class="avatar-status bg-teal"></span>
                                                </div>

                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1 name">Paul Molive</h5>
                                                        <p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
                                                    </div>
                                                    <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                                </div>
                                            </a>
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="drop-img cover-image" data-image-src="assets/img/faces/2.jpg">
                                                    <span class="avatar-status bg-teal"></span>
                                                </div>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1 name">Sahar Dary</h5>
                                                        <p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
                                                    </div>
                                                    <p class="mb-0 desc">All set ! Now, time to get to you now......</p>
                                                </div>
                                            </a>
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="drop-img cover-image" data-image-src="assets/img/faces/9.jpg">
                                                    <span class="avatar-status bg-teal"></span>
                                                </div>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1 name">Khadija Mehr</h5>
                                                        <p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
                                                    </div>
                                                    <p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
                                                </div>
                                            </a>
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="drop-img cover-image" data-image-src="assets/img/faces/12.jpg">
                                                    <span class="avatar-status bg-danger"></span>
                                                </div>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1 name">Barney Cull</h5>
                                                        <p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
                                                    </div>
                                                    <p class="mb-0 desc">Here are some products ...</p>
                                                </div>
                                            </a>
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="drop-img cover-image" data-image-src="assets/img/faces/5.jpg">
                                                    <span class="avatar-status bg-teal"></span>
                                                </div>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1 name">Petey Cruiser</h5>
                                                        <p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
                                                    </div>
                                                    <p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-center dropdown-footer">
                                            <a href="text-center">VIEW ALL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown nav-item main-header-notification">
                                    <a class="new nav-link" href="#"><i class="ti-bell "></i><span class=" pulse"></span></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="menu-header-content text-left d-flex">
                                            <div class="">
                                                <h6 class="menu-header-title text-white mb-0">7 novas notificações</h6>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                <span class="badge badge-pill badge-warning float-right">Marcar todas como lida</span>
                                            </div>
                                        </div>
                                        <div class="main-notification-list notify-scroll">
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-success-transparent">
                                                    <i class="la la-shopping-basket text-success"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">New Order Received</h5>
                                                    <div class="notification-subtext">1 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-danger-transparent">
                                                    <i class="la la-user-check text-danger"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">22 verified registrations</h5>
                                                    <div class="notification-subtext">2 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-primary-transparent">
                                                    <i class="la la-check-circle text-primary"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">Project has been approved</h5>
                                                    <div class="notification-subtext">4 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                            <a class="d-flex p-3 border-bottom">
                                                <div class="notifyimg bg-pink-transparent">
                                                    <i class="la la-file-alt text-pink"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">New files available</h5>
                                                    <div class="notification-subtext">10 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="">VER TODAS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown main-profile-menu nav nav-item nav-link">
                                    <a class="profile-user" href=""><img alt="" src="assets/img/faces/5.jpg"></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="main-header-profile header-img">
                                            <div class="main-img-user"><img alt="" src="assets/img/faces/5.jpg"></div>
                                            <h6>Elizabeth Jane</h6><span>Premium Member</span>
                                        </div>
                                        <a class="dropdown-item" href=""><i class="far fa-user"></i> Meus Dados</a>
                                        <a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile-header -->

                <!-- container -->
                <div class="container-fluid">
                    <?php
//                    if (Auth::check()) {
//                        // The user is logged in...
//                        echo "sim"
//                    }else{
//                        echo "Não"
//                    }
                    ?>
                    @yield('content');       
                </div>
                <!-- /conatiner -->
            </div>
            <!-- /main-content -->

            <!-- Footer opened -->
            <div class="main-footer ht-40">
                <div class="container-fluid pd-t-0-f ht-100p">
                    <span>Copyright © 2020 <a href="#">AutoCrypto</a>. Todos os direitos reservados.</span>
                </div>
            </div>
            <!-- Footer closed -->
        </div>
        <!--end  Page -->

        <!-- Back-to-top -->
        <a href="#top" id="back-to-top"><i class="la la-chevron-up"></i></a>

        <!-- JQuery min js -->

        <script src="{{ asset("/plugins/jquery/jquery.min.js")}}"></script>

        <!-- Datepicker js -->
        <script src="{{ asset("/plugins/jquery-ui/ui/widgets/datepicker.js")}}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ asset("/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

        <!-- Internal Newsticker js--> f
        <script src="{{ asset("/plugins/newsticker/jquery.jConveyorTicker.js")}}></script>
        <script src="{{ asset("/js/newsticker.js")}}"></script>

        <!-- Eva-icons js -->
        <script src="{{ asset("/js/eva-icons.min.js")}}"></script>

        <!-- Internal jquery.maskedinput js -->
        <script src="{{ asset("/plugins/jquery.maskedinput/jquery.maskedinput.js")}}"></script>

        <!-- Internal jquery-simple-datetimepicker js -->
        <script src="{{ asset("/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js")}}"></script>

        <!-- Sidebar js -->
        <script src="{{ asset("/plugins/side-menu/sidemenu.js")}}"></script>

        <!-- right-sidebar js -->
        <script src="{{ asset("/plugins/sidebar/sidebar.js")}}"></script>
        <script src="{{ asset("/plugins/sidebar/sidebar-custom.js")}}"></script>

        <!-- Rating js-->
        <script src="{{ asset("/plugins/rating/jquery.rating-stars.js")}}"></script>
        <script src="{{ asset("/plugins/rating/jquery.barrating.js")}}"></script>

        <!-- P-scroll js -->
        <script src="{{ asset("/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
        <script src="{{ asset("/plugins/perfect-scrollbar/p-scroll.js")}}"></script>

        <!-- Internal Nice-select js-->
        <script src="{{ asset("/plugins/jquery-nice-select/js/jquery.nice-select.js")}}"></script>
        <script src="{{ asset("/plugins/jquery-nice-select/js/nice-select.js")}}"></script>

        <!-- Internal form-elements js -->
        <script src="{{ asset("/js/form-elements.js")}}"></script>

        <!-- Sticky js -->
        <script src="{{ asset("/js/sticky.js")}}"></script>

        <!-- index js -->
        <script src="{{ asset("/js/dashboard.js")}}"></script>

        <!-- custom js -->
        <script src="{{ asset("/js/custom.js")}}"></script>


    </body>
</html>