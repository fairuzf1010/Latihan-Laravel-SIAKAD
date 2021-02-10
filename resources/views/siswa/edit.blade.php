<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body style = "background-image:url('{{('gambar/working.png')}}');">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
      <center><h1>Edit Datanya ya!</h1></center>
    <div class="content" style = "background-color:white;">
        <div class="wrapper">



        <div class="col-lg-12" >
        <div class="modal-body">

        <form action = "/siswa/{{$siswa->id}}/update" method = "POST" enctype = "multipart/form-data">
     {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input name="nama"  type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jurusan</label>
    <select name = "jurusan" class="form-control" id="exampleFormControlSelect1">
      <option value = "Teknik Elektro">Departemen Teknik Elektro</option>
      <option value = "Teknik Komputer">Departemen Teknik Komputer</option>
      <option value = "Teknik Biomedik">Departemen Teknik Biomedik</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Progres</label>
    <textarea name = "progres" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1">Upload File</label>
    <input name="foto_siswa" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>



  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>

</form>
</div>
</div>







        </div>
    </div>
      </div>
      </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    @include('sweetalert::alert')



</body>
</html>
