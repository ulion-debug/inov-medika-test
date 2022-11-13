@extends('layouts.master')

@section('content')

<title>Tindakan</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">


<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Tindakan</h3>
    <div class="right">
    <a href="/tindakan/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/tindakan/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>  
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Kode</th>
        <th>Nama Tindakan</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_tindakan as $tindakan)
    <tr>
    <td>{{$tindakan->kode}}</td>
    <td>{{$tindakan->nama_tindakan}}</td>
    <td>{{$tindakan->harga}}</td>
    
    <td>
    <a href="/tindakan/{{$tindakan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/tindakan/{{$tindakan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Tindakan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/tindakan/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
    <label for="exampleInputEmail1">Kode</label>
    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Tindakan</label>
    <input name="nama_tindakan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tindakan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input name="harga" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
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