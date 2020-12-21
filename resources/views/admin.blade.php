<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll ">
			<div class="main-sidebar-header">
				<a class=" desktop-logo logo-light" href="{{url('/')}}"><img src="{{ asset('/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="{{url('/')}}"><img src="{{ asset('/img/brand/logo.png') }}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="{{url('/')}}"><img src="{{ asset('/img/brand/logo.png') }}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="{{url('/')}}"><img src="{{ asset('/img/brand/logo.png') }}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Principal</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('/')}}"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Início</span></a>
					</li>
					<li><h3>Gestão</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('user/')}}"><i class="side-menu__icon ti-user"></i><span class="side-menu__label">Usuários</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('user_profile/')}}"><i class="side-menu__icon ti-user"></i><span class="side-menu__label">Perfis</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('signature-type/')}}"><i class="side-menu__icon ti-user"></i><span class="side-menu__label">Planos</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('signal')}}"><i class="side-menu__icon ti-stats-up"></i><span class="side-menu__label">Sinais</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon ti-comments"></i><span class="side-menu__label">Notificações</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-write menu-icons"></i><span class="side-menu__label">Estatísticas</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="mail.html">Usuários</a></li>
							<li><a class="slide-item" href="{{url('statistics')}}">Sinais</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href=""><i class="side-menu__icon ti-settings menu-icons"></i><span class="side-menu__label">Configurações</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="">Telegram</a></li>
							<li><a class="slide-item" href="">Outros</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</aside>
