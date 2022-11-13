@extends('layouts.master')

@section('content')
<title>Data Tindakan</title>
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
                <form action="/tindakan/{{$tindakan->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Kode</label>
            <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$tindakan->kode}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Tindakan</label>
            <input name="nama_tindakan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tindakan" value="{{$tindakan->nama_tindakan}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Harga</label>
            <input name="harga" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga" value="{{$tindakan->harga}}">
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
