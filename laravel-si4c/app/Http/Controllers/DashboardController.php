<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Grafik jumlah mahasiswa per program studi
        $grafikmhs = DB::select("
            SELECT prodis.nama_prodi,
                   COUNT(*) as jumlah_mhs
            FROM mahasiswas
            JOIN prodis
            ON mahasiswas.prodi_id = prodis.id
            GROUP BY prodis.nama_prodi
        ");

        // Grafik jumlah mahasiswa per tahun angkatan
        $grafikangkatan = DB::select("
            SELECT LEFT(npm,2) AS tahun_angkatan,
                   COUNT(*) AS jumlah_mhs
            FROM mahasiswas
            GROUP BY LEFT(npm,2)
            ORDER BY tahun_angkatan
        ");

        return view('dashboard', compact(
            'grafikmhs',
            'grafikangkatan'
        ));
    }
}