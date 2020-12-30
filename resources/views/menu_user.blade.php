<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll ">
			<div class="main-sidebar-header">
				<a class=" desktop-logo logo-light" href="index.html"><img src="{{ asset('/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="index.html"><img src="{{ asset('/img/brand/logo.png') }}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="index.html"><img src="{{ asset('/img/brand/logo.png') }}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="index.html"><img src="{{ asset('/img/brand/logo.png') }}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Principal</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('/user/dashboard')}}"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Início</span></a>
					</li>
					<li><h3>Gestão</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('user/op/')}}"><i class="side-menu__icon ti-stats-up"></i><span class="side-menu__label">Operações</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('/user/statistics')}}"><i class="side-menu__icon ti-pie-chart"></i><span class="side-menu__label">Estatísticas</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('/user/configuration')}}"><i class="side-menu__icon ti-settings"></i><span class="side-menu__label">Configurações</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="user-config.html"><i class="side-menu__icon ti-headphone-alt"></i><span class="side-menu__label">Suporte</span></a>
					</li>
				</ul>
			</div>
		</aside>
