<?php

namespace App\Http\Controllers;

use Charts;
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
        ->elementLabel("Hasil Perhitungan IKE")
            ->dimensions(500, 300)
            ->responsive(false)
            ->dateColumn('wktu_pengukuran')
            ->groupByMonth('2018', true);

        $charti = Charts::database(HitungIke::all(), 'line', 'highcharts')
            ->title(' ')
            ->elementLabel("Hasil Perhitungan IKE")
            ->dimensions(500, 300)
            ->responsive(false)
            ->dateColumn('wktu_pengukuran')
            ->lastByDay();
            //->groupByMonth('2018', true);

        return view('home', ['chart' => $chart, 'charti' => $charti]);
    }
}
