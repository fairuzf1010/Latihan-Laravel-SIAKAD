<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa'; 
    protected $fillable = ['nama','jurusan','progres','foto_siswa','created_at','updated_at'];

    public function getFoto()
    {
        if(!$this->foto_siswa)
        {
            return asset('gambar/default.jpg');
        }

        return asset('gambar/'.$this->foto_siswa);
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
    }
}
