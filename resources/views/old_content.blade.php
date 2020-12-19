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
		<title> Auto Crypto Trading </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!-- Internal Chart-Morris css-->
		<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

		<!--  Left-Sidebar css -->
		<link href="assets/css/sidemenu-closed.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- Internal Nice-select css  -->
		<link href="assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet"/>

		<!-- Internal News-Ticker css-->
		<link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

		<!-- Jquery-countdown css-->
		<link href="assets/plugins/jquery-countdown/countdown.css" rel="stylesheet">

		<!-- Internal News-Ticker css-->
		<link href="assets/plugins/newsticker/jquery.jConveyorTicker.css" rel="stylesheet" />

		<!-- style css-->
		<link href="assets/css/style.css" rel="stylesheet">

		<!-- skin css-->
		<link href="assets/css/skin-modes.css" rel="stylesheet">

		<!-- dark-theme css-->
		<link href="assets/css/style-dark.css" rel="stylesheet">

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">


	</head>
	<body class="main-body app sidebar-mini dark-theme">

		<!-- Loader -->
		<div id="global-loader" class="dark-loader">
			<img src="assets/img/loaders/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->


			  <!-- Page -->
	  <div class="page">

		<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll ">
			<div class="main-sidebar-header">
				<a class=" desktop-logo logo-light" href="index.html"><img src="https://autocrypto.com.br/bot/themes/apex/app-assets/img/logo.png" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="index.html"><img src="https://autocrypto.com.br/bot/themes/apex/app-assets/img/logo.png" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="index.html"><img src="https://autocrypto.com.br/bot/themes/apex/app-assets/img/logo.png" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="index.html"><img src="https://autocrypto.com.br/bot/themes/apex/app-assets/img/logo.png" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Principal</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="index.html"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Início</span></a>
					</li>
					<li><h3>Gestão</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon ti-user"></i><span class="side-menu__label">Usuários</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon ti-stats-up"></i><span class="side-menu__label">Sinais</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon ti-comments"></i><span class="side-menu__label">Notificações</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-write menu-icons"></i><span class="side-menu__label">Estatísticas</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="mail.html">Usuários</a></li>
							<li><a class="slide-item" href="mail-compose.html">Sinais</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-settings menu-icons"></i><span class="side-menu__label">Configurações</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="">Telegram</a></li>
							<li><a class="slide-item" href="">Outros</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</aside>
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
							<a href="index.html"><img src="https://autocrypto.com.br/bot/themes/apex/app-assets/img/logo.png" class="mobile-logo" alt="logo"></a>
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
								<a class="profile-user" href=""><img alt="" src="assets/img/faces/5.jpg"></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
									<div class="main-header-profile header-img">
										<div class="main-img-user"><img alt="" src="assets/img/faces/5.jpg"></div>
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
							<div class="d-md-flex">
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
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
									<a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href=""><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a>
									<a class="dropdown-item" href=""><i class="fas fa-sliders-h"></i> Account Settings</a>
									<a class="dropdown-item" href="page-signin.html"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
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
						<h3 class="content-title mb-2">Bem vindo,</h3>
						<div class="d-flex">
							<i class="mdi mdi-home text-muted hover-cursor"></i>
							<p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Painel&nbsp;/&nbsp;</p>
							<p class="text-primary mb-0 hover-cursor">&nbsp;Sinais</p>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row  -->
				<div class="row">
					<div class="col-xl-12 col-md-12 col-lg-12">
						<div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
							<div class="js-conveyor-example">
								<ul class="news-crypto">
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
										<div class="crypto-card" >
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
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
					<div class="d-flex align-items-end flex-wrap my-auto">
						<a class="btn btn-primary mt-2 mt-xl-0 mg-b-20 mg-r-15" data-target="#modalgerar" data-toggle="modal" href="">Gerar Sinais IA</a>
						<a class="btn btn-primary mt-2 mt-xl-0 mg-b-20" data-target="#modalcadastrar" data-toggle="modal" href="">Cadastrar Sinal</a>
					</div>
					</div>
					<div class="col-md-12">
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-10">Gestão de Sinais</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
								</div>
								<div class="table-responsive market-values">
									<table id="example2" class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
										<thead>
											<tr>
												<th>Data de Envio</th>
												<th>Par</th>
												<th>Preço Inicial</th>
												<th>Alvo 1</th>
												<th>Stop</th>
												<th>Lucro/Prejuízo</th>
												<th>Status</th>
												<th>Ações</th>
											</tr>
										</thead>
										<tbody>
											<tr class="border-bottom">
												<td>14/12/2020 22:11</td>
												<td>USDT/TUSD</td>
												<td>$966.61</td>
												<td>$967.61</td>
												<td class="text-red">-6%</td>
												<td class="text-success">1% / 0.32$</td>
												<td>Em aberto</td>
												<td><a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Enviar Telegram" class="ti-sharethis"></i></a> <!--<a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Fechar Ordem" class="ti-close"></a></i>--></td>
											</tr>
											<tr class="border-bottom">
												<td>14/12/2020 22:11</td>
												<td>USDT/TUSD</td>
												<td>$966.61</td>
												<td>$967.61</td>
												<td class="text-red">-6%</td>
												<td class="text-danger">-2% / 1.30$</td>
												<td>Em aberto</td>
												<td><a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Enviar Telegram" class="ti-sharethis"></i></a> <!--<a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Fechar Ordem" class="ti-close"></a></i>--></td>
											</tr>
											<tr class="border-bottom">
												<td>14/12/2020 22:11</td>
												<td>USDT/TUSD</td>
												<td>$966.61</td>
												<td>$967.61</td>
												<td class="text-red">-6%</td>
												<td class="text-success">1% / 0.32$</td>
												<td>Em aberto</td>
												<td><a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Enviar Telegram" class="ti-sharethis"></i></a> <!--<a href="#"><i data-placement="top" data-toggle="tooltip-primary" title="Fechar Ordem" class="ti-close"></i></a>--></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /conatiner -->
		</div>
		<!-- /main-content -->
	
	<div class="modal" id="modalgerar" style="display: none;" aria-hidden="true">
		 <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					 <div class="modal-body tx-center pd-y-20 pd-x-20">
							<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i> 
							<h4 class="tx-success tx-semibold mg-b-20">Sucesso!</h4>
							<p class="mg-b-20 mg-x-20">Os sinais foram gerados com sucesso.</p>
							<button aria-label="Close" class="btn ripple btn-success pd-x-25" data-dismiss="modal" type="button">Fechar</button> 
					 </div>
				</div>
		 </div>
	</div>
	
	<div id="modalcadastrar" class="modal" style="display: none;" aria-hidden="true">
   <div class="modal-dialog wd-xl-400" role="document">
      <div class="modal-content">
         <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> 
            <h5 class="modal-title mg-b-5">Cadastrar novo sinal</h5>
            <p class="mg-b-20">Preencha as informações abaixo e clique em salvar.</p>
					 	<div class="form-group">
            <select class="form-control select2">
							 <option label="Par">
							 </option>
							 <option value="1">
									USDT/BTC
							 </option>
							 <option value="2">
									USDT/XRN
							 </option>
							 <option value="3">
									USDT/ETH
							 </option>
						</select>
					 	</div>
					 	<div class="form-group">
            <select class="form-control select2">
							 <option label="Exchange">
							 </option>
							 <option value="1">
									Binance
							 </option>
							 <option value="2">
									Novadax
							 </option>
							 <option value="3">
									Bitinex
							 </option>
						</select>
					 	</div>
            <!-- form-group --> 
            <div class="form-group"> <input type="number" class="form-control" placeholder="Alvo 1 (%)"> </div>
            <!-- form-group --> 
            <div class="form-group"> <input type="number" class="form-control" placeholder="Alvo 2 (%)"> </div>
            <!-- form-group --> 
            <div class="form-group"> <input type="number" class="form-control" placeholder="Alvo 3 (%)"> </div>
					 	<div class="form-group"> <input type="number" class="form-control" placeholder="Stop (%)"> </div>
            <!-- form-group --> 
					 	<p>
							Assim que inserido o sinal, deverá ser replicado para todos os usuários com o recebimento ativo.
					 </p>
            <!-- form-group --> <button class="btn btn-primary btn-block">Salvar</button> 
         </div>
         <!-- modal-body --> 
      </div>
      <!-- modal-content --> 
   </div>
   <!-- modal-dialog --> 
</div>

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
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Internal Newsticker js-->
		<script src="assets/plugins/newsticker/jquery.jConveyorTicker.js"></script>
		<script src="assets/js/newsticker.js"></script>

		<!-- Eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>

		<!-- right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!-- P-scroll js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Internal Nice-select js-->
		<script src="assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
		<script src="assets/plugins/jquery-nice-select/js/nice-select.js"></script>
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- Internal Data tables -->
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
		<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
		<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

		<!-- Internal Datatable js -->
		<script src="assets/js/table-data.js"></script>


		<script src="assets/js/modal.js"></script>

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>

		<!-- index js -->
		<script src="assets/js/dashboard.js"></script>

		<!-- custom js -->
		<script src="assets/js/custom.js"></script>

		<!-- Internal form-elements js -->
		<script src="assets/js/form-elements.js"></script>


	</body>
</html>