@extends('dashboard')

@section('judul')

<center><h1 class="h3 mb-0 text-gray" style ="text-align:center;font-size:30px;"> Tabel CRUD </h1></center> 


@endsection('judul')





@section('tabel')
<div class="col-md-3" style = "margin-bottom:20px;margin-left:80%;">
<a href="/siswa/exportexcel" class="btn btn-primary d-none d-sm-inline-block" >
<i class="fas fa-download fa-sm text-white-50"></i> Export Data Excel
</a>
</div>

<div class="col-md-3" style = "margin-bottom:20px;margin-left:80%;">
<a href="/siswa/exportpdf" class="btn btn-primary d-none d-sm-inline-block" >
<i class="fas fa-download fa-sm text-white-50"></i> Export Data PDF
</a>
</div>



<div class = "container">
<div class = "wrapper">
<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Nama Siswa</th>
      <th scope="col">Departemen</th>
      <th scope="col">Progres</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data_siswa as $siswa)
    <tr>
      
      <td> {{$siswa->nama}}</a></td>
      <td> {{$siswa->jurusan}} </td>
      <td> {{$siswa->progres}} </td>
      <td> <a href="/siswa/{{$siswa->id}}/edit" class = "btn btn-warning btn-sm" > edit</a>
           <a href="/siswa/{{$siswa->id}}/delete" class = "btn btn-danger btn-sm delete" siswa-id = "/siswa/{{$siswa->id}}/delete" > delete</a>
           <a href="/siswa/{{$siswa->id}}/profile" class = "btn btn-info btn-sm" > profile</a>
    </td>
   
    </tr>
    @endforeach
  </tbody>
</table>


</div>
</div>

<br><br><br> <br> <br>
@endsection('tabel')

@section('footer')

<script>
$('.delete').click(function()
{
  var siswa_id = $(this).attr('siswa-d');
  swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
   windows.location = "/siswa/{{$siswa->id}}/delete"

  } else {
    swal("Your imaginary file is safe!");
  }
});




})




</script>


@endsection('footer')


