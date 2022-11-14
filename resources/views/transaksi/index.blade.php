@extends('layouts.master')

@section('content')
<title>Transaksi</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->

<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Transaksi</h3>
    <div class="right">
    <a href="/transaksi/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
    <a href="/transaksi/exportPdf" class="btn btn-sm btn-primary">Export PDF</a>
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>
  <div class="panel-body">
    <table id="datatableid" class="table table-hover">
      <thead>
        <tr>
        <th>Nama Pasien</th>
        <th>NIK</th>
        <th>Tanggal</th>
        <th>Jenis Kelamin</th>
        <th>Nama Tindakan</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_transaksi as $transaksi)
    <tr>
    <td>{{$transaksi->nama_pasien}}</td>
    <td>{{$transaksi->nik}}</td>
    <td>{{$transaksi->tanggal}}</td>
    <td>{{$transaksi->jenis_kelamin}}</td>
    <td>{{$transaksi->nama_tindakan}}</td>
    <td>{{$transaksi->harga}}</td>
    <td>
    <a href="/transaksi/{{$transaksi->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/transaksi/{{$transaksi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/transaksi/create" method="POST">
            {{csrf_field()}}
            <div class="input-field">
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" id="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIK</label>
    <input name="nik" id="nik" type="bigInteger" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal</label>
    <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input name="jenis_kelamin" id='jenis_kelamin' type="text" id="exampleInputEmail1" class="form-control" aria-describedby="emailHelp" placeholder="Jenis Kelamin">
  </div>
  <div class="input-field">
    <label for="exampleInputEmail1">Nama Tindakan</label>
    <input name="nama_tindakan" id='nama_tindakan' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Tindakan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input name="harga" id='harga' type="bigInteger" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="Belum Bayar">Belum Bayar</option>
      <option value="Lunas">Lunas</option>
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

