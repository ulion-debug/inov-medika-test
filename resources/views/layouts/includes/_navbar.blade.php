<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="/dashboard">
					<font color="blue">
					<p>
						<br>
						PT. Inova Medika Solusindo
					</p>
				</font>
				</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
			</div>
			@if(auth()->user()->role=='pemimpin')
			<div class="brando">
				<a href="/#">Program Kerja</a>
				<a href="/program">Program/Isu</a>
				<a href="/showArahanMenteri">Arahan Menteri</a>
			</div>
			@endif
			@if(auth()->user()->role=='persidangan')
			<div class="brando">
				<a href="/persidangan">Persidangan</a>
				<a href="/showArahanMenteri">Arahan Menteri</a>
			</div>
			@endif
			
				{{-- <form class="navbar-form navbar-left">
				<form action="/search" method="POST" role="search">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				</form> --}}
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('admin/assets/img/default.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/pengguna"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>