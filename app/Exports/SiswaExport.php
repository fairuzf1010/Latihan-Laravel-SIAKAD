<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array
    { return[
        
        $siswa->nama,
        $siswa->jurusan,
        $siswa->progres,
        $siswa->nilai,
    ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Departemen',
            'Progres',
            'Nilai'
        ];
    }
}
