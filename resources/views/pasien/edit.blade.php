@extends('layouts.master')

@section('content')
<title>Data Pasien</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Data Pasien</h3>
				</div>
				<div class="panel-body">
                <form action="/pasien/{{$pasien->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Nama Lengkap</label> 
    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$pasien->nama_lengkap}}">
    @if($errors->has('nama_lengkap'))
  <span class="help-block">{{$errors->first('nama_lengkap')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('nik') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">NIK</label>
    <input name="nik" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK" value="{{$pasien->nik}}">
    @if($errors->has('nik'))
  <span class="help-block">{{$errors->first('nik')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
    @if($errors->has('jenis_kelamin'))
  <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$pasien->alamat}}">
    @if($errors->has('alamat'))
  <span class="help-block">{{$errors->first('alamat')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('no_hp') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">No. Handphone</label>
    <input name="no_hp" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Handphone" value="{{$pasien->no_hp}}">
    @if($errors->has('no_hp'))
  <span class="help-block">{{$errors->first('no_hp')}}</span>
  @endif
  </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            


@stop