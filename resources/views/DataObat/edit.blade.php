@extends('layouts.master')

@section('content')
<title>Data Obat</title>
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
                <form action="/dataobat/{{$obat->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$obat->kode}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Obat" value="{{$obat->nama_obat}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Jenis</label>
            <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis" value="{{$obat->jenis}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Stok</label>
            <input name="stok" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok" value="{{$obat->stok}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Harga Per Satuan</label>
            <input name="harga" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga per satuan" value="{{$obat->harga}}">
        </div>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
