<?php

namespace App\Http\Controllers;

use Charts;
use DB;
use App\HitungIke;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart = Charts::database(HitungIke::all(), 'bar', 'highcharts')
        ->title(' ')    
        ->elementLabel("Frekuensi Perhitungan IKE / Bulan")
            ->dimensions(500, 300)
            ->responsive(false)
            ->dateColumn('wktu_pengukuran')
            ->lastByMonth('12', true);

        $charti = Charts::database(HitungIke::all(), 'line', 'highcharts')
            ->title(' ')
            ->elementLabel("Hasil Perhitungan IKE")
            ->dimensions(500, 300)
            ->responsive(false)
            ->dateColumn('wktu_pengukuran')
            ->lastByDay();
            //->groupByMonth('2018', true);

        $chartbulan = Charts::database(HitungIke::all(), 'line', 'highcharts')
            ->title(' ')
            ->elementLabel("Hasil Perhitungan IKE")
            ->dimensions(1000, 300)
            ->responsive(false)
            ->dateColumn('wktu_pengukuran')
            ->lastByDay('30', true);
            //->groupByMonth('2018', true);
            
        $t = DB::table('hitung_ikes')->avg('hsil_perhitungan');
        //Table::select('name','surname')->where('id', 1)->get();
        $nama = DB::table('profils')->where('profil_id', 1)->pluck('nama_institusi');
        $gedung = DB::table('profils')->where('profil_id', 1)->pluck('p_gedung');
        //dd($nama);
        return view('home', ['chart' => $chart, 'charti' => $charti, 'rata2' => $t, 'nama' => $nama, 'gedung' => $gedung, 'bulan' => $chartbulan ]);
    }
}
