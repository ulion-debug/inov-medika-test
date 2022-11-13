@extends('layouts.master')

@section('content')
<title>Data Pasien</title>
<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
<div class="panel panel-profile">
	<div class="clearfix">
		<!-- LEFT COLUMN -->
		<div class="profile-left">

			<!-- PROFILE DETAIL -->
			<div class="profile-detail">
				<div class="profile-info">
					<h4 class="heading">Data Diri Pasien</h4>
					<ul class="list-unstyled list-justify">
						<li>Nama Lengkap <span>{{$pasien->nama_lengkap}}</span></li>
						<li>NIK <span>{{$pasien->nik}}</span></li>
						<li>Jenis Kelamin <span>{{$pasien->jenis_kelamin}}</span></li>
						<li>Alamat <span>{{$pasien->alamat}}</span></li>
						<li>No. Handphone <span>{{$pasien->no_hp}}</span></li>
						
					</ul>
				</div>
				<div class ="margin-top-30 text-center">
				<a href="/pasien/{{$pasien->id}}/edit" class="btn btn-warning text-center">Edit Profile</a>
				<a href="/pasien/{{$pasien->id}}/delete" class="btn btn-danger text-center">Delete Profile</a>
			
				</div>
			</div>
			<!-- END PROFILE DETAIL -->
		</div>
		<!-- END LEFT COLUMN -->

		<!-- RIGHT COLUMN -->
		<div class="profile-right">
			
			

			<!-- TABBED CONTENT -->
			<div class="custom-tabs-line tabs-line-bottom left-aligned">
				<ul class="nav" role="tablist">
					<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Aktivitas Terakhir</a></li>
					
				</ul>
			</div>

			</div>
			<!-- END TABBED CONTENT -->
		</div>
		<!-- END RIGHT COLUMN -->
	</div>
</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
        </div>
        @stop