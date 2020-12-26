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
            @include('menu_guest')
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
                                <a href="index.html"><img src="{{ asset('/img/brand/logo.png') }}" class="mobile-logo" alt="logo"></a>
                            </div>
                        </div>
                        <div class="main-header-right">
                            <div class="nav nav-item  navbar-nav-right ml-auto">
                                <div class="nav-item full-screen fullscreen-button">
                                    <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                                </div>
                                <div class="dropdown nav-item main-header-notification">
                                    <a class="new nav-link " href="#"><i class="ti-bell animated bell-animations"></i><span class=" pulse"></span></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <?php
                                        $notications = Auth::user()->notification();
                                        ?>
                                        <div class="menu-header-content text-left d-flex">
                                            <div class="">
                                                <h6 class="menu-header-title text-white mb-0">{{ Auth::user()->notification_unread()}} novas notificações</h6>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                   <a href="{{url('/user/notification_read_all')}}" >
                                                    <span class="badge badge-pill badge-warning float-right">Marcar todas como lido</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-notification-list Notification-scroll">
                                        
                                            <a class="d-flex p-3 border-bottom" href="{{url('/')}}">                                                                                                
                                                <div class="notifyimg bg-primary-transparent">
                                                    <i class="la la-check-circle text-primary"></i>
                                                </div>
                                                <div class="ml-3">
                                                    <h5 class="notification-label mb-1">Assine Já</h5>
                                                    <div class="notification-subtext">Assine Já - 1 hour ago</div>
                                                </div>
                                                <div class="ml-auto" >
                                                    <i class="las la-angle-right text-right text-muted"></i>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="{{url('/')}}">VER TODAS</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                                </button>
                                <div class="dropdown main-profile-menu nav nav-item nav-link">
                                    <a class="profile-user" href="#"><img alt="" src="{{asset('/img/faces/5.jpg')}}"></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="main-header-profile header-img">
                                            <div class="main-img-user"><img alt="" src="{{asset('/img/faces/5.jpg')}}"></div>
                                            <h6>{{Auth::user()->name}}</h6><span>Membro VIP</span>
                                        </div>
                                        <a class="dropdown-item" href="{{url('user/profile')}}"><i class="far fa-user"></i> Meu Dados</a>
                                        <a class="dropdown-item" href="{{url('logout')}}"><i class="fas fa-sign-out-alt"></i> Sair</a>
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
                                                    <a href="{{url('/user/notification_read_all')}}" >
                                                    <span class="badge badge-pill badge-warning float-right">Marcar todas como lido</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="main-message-list text-scroll">
                                            <a href="#" class="p-3 d-flex border-bottom">
                                                <div class="  drop-img  cover-image  " data-image-src="{{ asset('/img/faces/3.jpg') }}">
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
                                                <div class="drop-img cover-image" data-image-src="{{ asset('/img/faces/2.jpg') }}">
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
                                                <div class="drop-img cover-image" data-image-src="{{ asset('/img/faces/9.jpg') }}">
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
                                                <div class="drop-img cover-image" data-image-src="{{ asset('/img/faces/12.jpg') }}">
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
                                                <div class="drop-img cover-image" data-image-src="{{ asset('/img/faces/5.jpg') }}">
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
                                                <a href="{{url('/user/notification_read_all')}}" >
                                                    <span class="badge badge-pill badge-warning float-right">Marcar todas como lido</span>
                                                </a>
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
                                    <a class="profile-user" href=""><img alt="" src="{{ asset('/img/faces/5.jpg') }}"></a>
                                    <div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
                                        <div class="main-header-profile header-img">
                                            <div class="main-img-user"><img alt="" src="{{ asset('/img/faces/5.jpg') }}"></div>
                                            <h6>{{Auth::user()->name}}</h6><span>Membro Vip</span>
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
                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <h3 class="content-title mb-2">Bem vindo</h3>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Painel&nbsp;/&nbsp;</p>
                                <p class="text-primary mb-0 hover-cursor">Inicial</p>
                            </div>
                        </div>
                       <div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
						<button type="button" class="btn btn-warning mr-3 mt-2 mt-xl-0">
							<i class="cf cf-btc"></i> Sem saldo
						</button>
						<button type="button" class="btn btn-primary mr-3 mt-2 mt-xl-0">
							<i class="cf cf-tusd"></i> $ Sem saldo
						</button>
					</div>
                    </div>
                    <!-- /breadcrumb -->
                    <!-- row  -->
                  <div class="row">
					<div class="col-xl-12 col-md-12 col-lg-12">
						<div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
							<div class="js-conveyor-example jctkr-wrapper jctkr-initialized">
								<ul class="news-crypto" style="width: 5185.29px; left: -2108.35px;">
									<li>
										<div class="crypto-card">
											<div class="row">
												<div class="d-flex">
													<div class="my-auto">
														<img src="assets/img/crypto-currencies/round-outline/Augur.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">REP / INR</p>
														<div class="m-0 tx-13 text-warning">$0.0215<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
									   <div class="crypto-card">
										   <div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/AquariusCoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ARCO / INR</p>
														<div class="m-0 tx-13 text-warning">$425.25<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>+12.85%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
									   <div class="crypto-card">
											<div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/BitShares.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">BTS / INR</p>
														<div class="m-0 tx-13 text-warning">$2.786<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-02.25%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Bytecoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">BCN / INR</p>
														<div class="m-0 tx-13 text-warning">$15.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="my-auto">
														<img src="assets/img/crypto-currencies/round-outline/Dash.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">Dash / INR</p>
														<div class="m-0 tx-13 text-warning">$5.125<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-11.85%%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/EOS.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">EUR / INR</p>
														<div class="m-0 tx-13 text-warning">$135.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Decred.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ETH / USDT</p>
														<div class="m-0 tx-13 text-warning">$34.625<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.32%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/IOTA.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">IOTA / USD</p>
														<div class="m-0 tx-13 text-warning">$67.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Litecoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">LTC / USD</p>
														<div class="m-0 tx-13 text-warning">$7.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.42%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Monero.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">XMR / EUR</p>
														<div class="m-0 tx-13 text-warning">$4.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/NEM.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ETH / USDT</p>
														<div class="m-0 tx-13 text-warning">$5.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.32%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Netko-coin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">NEO / USD</p>
														<div class="m-0 tx-13 text-warning">$6.025<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li>
								<li>
										<div class="crypto-card">
											<div class="row">
												<div class="d-flex">
													<div class="my-auto">
														<img src="assets/img/crypto-currencies/round-outline/Augur.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">REP / INR</p>
														<div class="m-0 tx-13 text-warning">$0.0215<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
									   <div class="crypto-card">
										   <div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/AquariusCoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ARCO / INR</p>
														<div class="m-0 tx-13 text-warning">$425.25<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>+12.85%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
									   <div class="crypto-card">
											<div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/BitShares.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">BTS / INR</p>
														<div class="m-0 tx-13 text-warning">$2.786<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-02.25%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class="d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Bytecoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">BCN / INR</p>
														<div class="m-0 tx-13 text-warning">$15.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="my-auto">
														<img src="assets/img/crypto-currencies/round-outline/Dash.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">Dash / INR</p>
														<div class="m-0 tx-13 text-warning">$5.125<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-11.85%%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/EOS.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">EUR / INR</p>
														<div class="m-0 tx-13 text-warning">$135.425<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Decred.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ETH / USDT</p>
														<div class="m-0 tx-13 text-warning">$34.625<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-0.32%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/IOTA.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">IOTA / USD</p>
														<div class="m-0 tx-13 text-warning">$67.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Litecoin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">LTC / USD</p>
														<div class="m-0 tx-13 text-warning">$7.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.42%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Monero.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">XMR / EUR</p>
														<div class="m-0 tx-13 text-warning">$4.325<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/NEM.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">ETH / USDT</p>
														<div class="m-0 tx-13 text-warning">$5.525<span class="text-success ml-2"><i class="ion-arrow-up-c mr-1"></i>-1.32%</span></div>
													</div>
												</div>
											</div>
										</div>
									</li><li>
										<div class="crypto-card">
										   <div class="row">
												<div class=" d-flex">
													<div class="">
														<img src="assets/img/crypto-currencies/round-outline/Netko-coin.svg" class="w-6 h-6 mt-0" alt="">
													</div>
													<div class="ml-3">
														<p class="mb-1 tx-13">NEO / USD</p>
														<div class="m-0 tx-13 text-warning">$6.025<span class="text-danger ml-2"><i class="ion-arrow-down-c mr-1"></i>-0.78%</span></div>
													</div>
												</div>

											</div>
										</div>
									</li></ul>
							</div>
						</div>
					</div>
				</div>
                    <!-- /row -->
                    <?php
//                    if (Auth::check()) {
//                        // The user is logged in...
//                        echo "sim";
//                    }else{
//                        echo "Não";
//                    }
//                    
                    ?>
                   @yield('content') 
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

        <script src="{{ asset('/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Datepicker js -->
        <script src="{{ asset('/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- Bootstrap Bundle js -->
        <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Internal Newsticker js-->
        <script src="{{ asset('/plugins/newsticker/jquery.jConveyorTicker.js') }}"></script>
        <script src="{{ asset('/js/newsticker.js')}}"></script>

        <!-- Eva-icons js -->
        <script src="{{ asset('/js/eva-icons.min.js')}}"></script>

        <!-- Internal jquery.maskedinput js -->
        <script src="{{ asset('/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>

        <!-- Internal jquery-simple-datetimepicker js -->
        <script src="{{ asset('/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>

        <!-- P-scroll js -->
        <script src="{{ asset('/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

        <!-- Sidebar js -->
        <script src="{{ asset('/plugins/side-menu/sidemenu.js')}}"></script>

        <!-- right-sidebar js 
        <script src="{{ asset('/plugins/sidebar/sidebar.js')}}"></script>
        <script src="{{ asset('/plugins/sidebar/sidebar-custom.js')}}"></script>-->

        <!-- Rating js-->
        <script src="{{ asset('/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{ asset('/plugins/rating/jquery.barrating.js')}}"></script>

        <!-- Internal Nice-select js-->
        <script src="{{ asset('/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{ asset('/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

        <!-- Internal Data tables -->
        <script src="{{ asset('/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/jquery.dataTables.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/jszip.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/pdfmake.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/vfs_fonts.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Internal Datatable js -->
        <script src="{{ asset('/js/table-data.js')}}"></script>

        <!-- Internal form-elements js -->
        <script src="{{ asset('/js/form-elements.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{ asset('/js/sticky.js')}}"></script>

        <script src="{{ asset('/js/modal.js') }}"></script>

        <!-- index js
        <script src="{{ asset('/js/dashboard.js')}}"></script>-->

        <!-- custom js -->
        <script src="{{ asset('/js/custom.js')}}"></script>


    </body>
</html>