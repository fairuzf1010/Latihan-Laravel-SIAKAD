<table class="table">
    <thead>
        <tr>
            <th>NAMA LENGKAP</th>
            <th>JURUSAN</th>
            <th>PROGRES</th>
            <th>NILAI</th>
        </tr>
    </thead>
    <tbody>
    @foreach($siswa as $a)
        <tr>
            <td> {{$a->nama}} </td>
            <td> {{$a->jurusan}} </td>
            <td> {{$a->progres}} </td>
            <td> {{$a->nilai}} </td>
        </tr>
        @endforeach
    </tbody>
</table>