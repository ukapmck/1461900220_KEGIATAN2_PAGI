<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class HomeController extends Controller
{
    public function index0220()
    {
        $no1 = 1;
        $no2=1;
        $no3=1;
        $no4=1;
        $data1 = Buku::get();
        $data2 = Buku::where('tahun_terbit_buku','>','2017')->get();
        $data3 = Buku::with('kategori')->get();
        $data4 = Buku::with('kategori')->where('tahun_terbit_buku','>','2017')->get();
        return view('index0220', compact('no1','no2','no3','no4','data1', 'data2', 'data3','data4'));
    }
}
