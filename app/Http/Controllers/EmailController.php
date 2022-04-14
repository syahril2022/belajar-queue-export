<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use App\Jobs\CustomerJob;
use App\Jobs\ExportExcelJob;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new ExportExcelJob);
        return "testing";
    }

    public function export()
    {
        // return Excel::download(new SiswaExport, 'siswa.xlsx');
        // if (Mahasiswa::count() > 10000) {
        //     abort(403, "TIDAK BOLEH LEBIH DARI");
        // }
        (new SiswaExport)->store('public/invoices.xlsx');
        return response("Iye sukses");
    }
}
