<table id="example1" class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_wisudawan as $index => $wisudawan)
        <tr>
            <td>{{$index + 1}}</td>
            <td>{{$wisudawan->nama}}</td>
            <td>{{$wisudawan->nim}}</td>
            <td>{{$wisudawan->prodi->nama_prodi}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
