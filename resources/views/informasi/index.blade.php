@extends('layouts.master')

@section('content')
<title>Pembayaran</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Informasi Pembayaran</h3>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Nama Pasien</th>
        <th>Harga</th>
		<th>Status</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_transaksi as $transaksi)
    <tr>
    <td>{{$transaksi->nama_pasien}}</td>
    <td>{{$transaksi->harga}}</td>
	<td>{{$transaksi->status}}</td>
    <td>
    <a href="/informasi/{{$transaksi->id}}/bayar" class="btn btn-warning btn-sm">Bayar</a>
    </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END TABLE HOVER -->

        </div>
      </div>
    </div>
  </div>
</div>

@stop

