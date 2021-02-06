@extends('siswa/dashboarddua')
@section('tabel')
              
              
     


        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="{{asset('gambar/'.$siswa->foto_siswa )}}" id="imgProfile" style="width: 100px; height: 100px;" class="img-thumbnail" />
                                    <div class="middle">
                                    <a href="/siswa/{{$siswa->id}}/edit" class = "btn btn-info btn-sm" > Ubah Profile</a>
                                       
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{$siswa->nama}}</a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)">1,500</a> Video Uploads</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">300</a> Blog Posts</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Daftar Mata Pelajaran</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$siswa->nama}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Departemen</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$siswa->jurusan}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Progres</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$siswa->progres}}
                                            </div>
                                        </div>
                                        <hr />



                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Jumlah Mapel</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$siswa->mapel->count()}}
                                            </div>
                                        </div>
                                        <hr />
                                       

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                       

                                    <table class="table table-striped">
  <thead>
    <tr>
    
      <th scope="col">Nama Pelajaran</th>
      <th scope="col">Kode</th>
      <th scope="col">Semester</th>
      <th scope="col">Guru</th>
      <th scope="col">Nilai</th>
    </tr>
  </thead>
  <tbody>
      @foreach($siswa->mapel as $mapel)
    
    <tr>
      
      <td>{{$mapel->nama}}</td>
      <td>{{$mapel->kode}}</td>
      <td> {{$mapel->semester}} </td>
      <td> <a href="/guru/{{$mapel->guru->id}}/profile"> {{$mapel->guru->nama}}</a></td>
      <td><a href="#">{{$mapel->pivot->nilai}}</a></td>
    </tr>
    
    @endforeach
  </tbody>
</table>


                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
  

    
@endsection('tabel')