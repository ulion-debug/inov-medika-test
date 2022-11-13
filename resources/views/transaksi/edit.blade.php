@extends('layouts.master')

@section('content')
<title>Transaksi</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
                <form action="/transaksi/{{$transaksi->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Pasien</label>
            <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$transaksi->nama_pasien}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">NIK</label>
          <input name="nik" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal" value="{{$transaksi->nik}}">
      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal" value="{{$transaksi->tanggal}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <input name="jenis_kelamin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$transaksi->jenis_kelamin}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Tindakan</label>
          <input name="nama_tindakan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$transaksi->nama_tindakan}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Harga</label>
          <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$transaksi->harga}}">
        </div>
        
        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
