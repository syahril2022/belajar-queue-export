<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use App\Jobs\CustomerJob;
use App\Jobs\ExportExcelJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new ExportExcelJob);
        return "Membuat Data Job";
    }

    public function export()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
