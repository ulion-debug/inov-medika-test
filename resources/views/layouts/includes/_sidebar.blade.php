<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-database"></i>Master</a>
							<ul class="dropdown-menu">
								<li><a href="/dataobat"><i class="lnr lnr-user"></i> <span>Data Obat</span></a></li>
								<li><a href="/tindakan"><i class="lnr lnr-exit"></i> <span>Tindakan</span></a></li>
								<li><a href="/pasien"><i class="lnr lnr-exit"></i> <span>Pasien</span></a></li>
							</ul>
						</li>
						<li><a href="/transaksi" class=""><i class="lnr lnr-database"></i> <span>Transaksi</span></a></li>
						@if(auth()->user()->role == 'koordinator') 
						<li><a href="/aktivitas" class=""><i class="fa fa-calendar"></i> <span>Aktivitas</span></a></li>
						@endif
						<li><a href="/informasi" class=""><i class="fa fa-line-chart"></i> <span>Informasi</span></a></li>
				</nav>
			</div>
		</div>
