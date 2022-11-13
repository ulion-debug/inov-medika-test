@extends('layouts.master')

@section('content')

<title>Data Pasien</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pasien</h3>
    <div class="right">
      <a href="/pasien/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/pasien/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Nama Lengkap</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Handphone</th>
        <th>Tindakan</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_pasien as $pasien)
    <tr>
    <td><a href="/pasien/{{$pasien->id}}/profile" class="href">{{$pasien->nama_lengkap}}</td></a>
    <td>{{$pasien->nik}}</td>
    <td>{{$pasien->jenis_kelamin}}</td>
    <td>{{$pasien->alamat}}</td>
    <td>{{$pasien->no_hp}}</td>
    <td>{{$pasien->nama_tindakan}}</td>
    <td>
    <a href="/pasien/{{$pasien->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/pasien/{{$pasien->id}}/delete" class="btn btn-warning btn-sm">Delete</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/pasien/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Lengkap</label>
              <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
    <input name="nik" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-Laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No. Handphone</label>
    <input name="no_hp" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No. Handphone">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Tindakan</label>
    <select name="nama_tindakan" class="form-control">
      <option value=""> --- Nama Tindakan ---</option>
      @foreach ($data_tindakan as $item)
          <option value="{{$item->nama_tindakan}}">{{$item->nama_tindakan}}</option>
      @endforeach
    </select>
  </div>
            </div>    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
            </div>
        </div>
@stop