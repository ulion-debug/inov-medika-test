<table class ="table" style="border:1px solid #ddd">
    <thead>
    <tr>
            <th>Kode</th>
            <th>Nama Obat</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Status</th>
          </tr>
    </thead>
    <tbody>
          @foreach($obat as $obt)
        <tr>
        <td>{{$obt->kode}}</td>
        <td>{{$obt->nama_obat}}</td>
        <td>{{$obt->jenis}}</td>
        <td>{{$obt->stok}}</td>
        
        @endforeach
        </tbody>
    </table> 