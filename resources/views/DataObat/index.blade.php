@extends('layouts.master')

@section('content')

<title>Daftar Obat</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">


<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Obat</h3>
    <div class="right">
    <a href="/dataobat/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/dataobat/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>  
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Kode</th>
        <th>Nama Obat</th>
        <th>Jenis</th>
        <th>Stok</th>
        <th>Harga Per Satuan</th>
        <th>Tindakan</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_obat as $obat)
    <tr>
    <td>{{$obat->kode}}</td>
    <td>{{$obat->nama_obat}}</td>
    <td>{{$obat->jenis}}</td>
    <td>{{$obat->stok}}</td>
    <td>{{$obat->harga}}</td>
    <td>
    <a href="/dataobat/{{$obat->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/dataobat/{{$obat->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda ingin menghapus obat tersebut dari daftar?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/dataobat/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
      <label for="exampleInputEmail1">Kode</label>
      <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Obat</label>
      <input name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Obat">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Jenis</label>
      <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Stok</label>
      <input name="stok" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Harga Per Satuan</label>
      <input name="harga" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga per satuan">
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