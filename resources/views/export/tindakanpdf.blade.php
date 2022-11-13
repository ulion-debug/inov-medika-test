<table class ="table" style="border:1px solid #ddd">
    <thead>
    <tr>
            <th>Kode</th>
            <th>Nama Tindakan</th>
            <th>Harga</th>
          </tr>
    </thead>
    <tbody>
          @foreach($tindakan as $i)
        <tr>
        <td>{{$i->kode}}</td>
        <td>{{$i->nama_tindakan}}</td>
        <td>{{$i->harga}}</td>
        @endforeach
        </tbody>
    </table> 