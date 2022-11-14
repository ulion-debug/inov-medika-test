@extends('layouts.master')

@section('content')
<title>Dashboard</title>
<div class="main"> 
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Selamat Datang di PT. Inova Medika Solusindo</h3>
							<div class="center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalPasien()}}</span>
					<span class="title">Total Pasien</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
            <div class="metric">
				<span class="icon"><i class="lnr lnr-database"></i></span>
				<p>
					<span class="number">{{totalObat()}}</span>
					<span class="title">Total Jenis Obat</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalRawatInap()}}</span>
					<span class="title">Total Pasien Rawat Inap</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalRawatJalan()}}</span>
					<span class="title">Total Pasien Rawat Jalan</span>
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="metric">
				<span class="icon"><i class="fa fa-user"></i></span>
				<p>
					<span class="number">{{totalkonsultasi()}}</span>
					<span class="title">Total Konsultasi</span>
				</p>
			</div>
		</div>
	</div>
</div>
@stop