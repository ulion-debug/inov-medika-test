@extends('layouts.master')

@section('content')
<title>Pembayaran</title>
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
                <form action="/informasi/{{$transaksi->id}}/bayarupdate" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Pasien</label>
            <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$transaksi->nama_pasien}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah" value="{{$transaksi->harga}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1" > 
            <option value="Belum Bayar" @if($transaksi->status == 'Belum Bayar') selected @endif>Belum Bayar</option>
            <option value="Lunas" @if($transaksi->status == 'Lunas') selected @endif>Lunas</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
