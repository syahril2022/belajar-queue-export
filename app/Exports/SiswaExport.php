<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class SiswaExport implements FromQuery, WithChunkReading, ShouldQueue
{
    use Exportable;

    public function query()
    {
        return Mahasiswa::query();
    }

    public function chunkSize(): int
    {
        return 10000;
    }
}
