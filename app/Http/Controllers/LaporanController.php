<?php

namespace App\Http\Controllers;

use PDF;
use DB;
use App\BebanPenerangan;
use App\BebanLain;
use App\BebanMesin;
use App\BebanAc;
use App\Ruang;
use App\HitungIke;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    
    public function laporanbebanpenerangan()
    {
        $beban = BebanPenerangan::all();
        $pdf = PDF::loadview('admin.laporan.laporanbebanpenerangan', compact('beban'));
        return $pdf->download('DataBebanPenerangan-Siadit.pdf');
        //return view('admin.laporan.laporanbebanpenerangan');
    }
    public function laporanbebanmesin()
    {
        $beban = BebanMesin::all();
        $pdf = PDF::loadview('admin.laporan.laporanbebanmesin', compact('beban'));
        return $pdf->download('DataBebanMesin-Siadit.pdf');
        //return view('admin.laporan.laporanbebanmesin');
    }
    public function laporanbebanlain()
    {
        $beban = BebanLain::all();
        $pdf = PDF::loadview('admin.laporan.laporanbebanlain', compact('beban'));
        return $pdf->download('DataBebanLain-Siadit.pdf');
        //return view('admin.laporan.laporanbebanlain');
    }
    public function laporanbebanac()
    {
        $beban = BebanAc::all();
        $pdf = PDF::loadview('admin.laporan.laporanbebanac', compact('beban'));
        return $pdf->download('DataBebanAC-Siadit.pdf');
        //return view('admin.laporan.laporanbebanac');
    }

    public function laporanruang()
    {
        $ruang = Ruang::all();
        $pdf = PDF::loadview('admin.laporan.laporanruang', compact('ruang'));
        return $pdf->download('DataRuanganGedung-Siadit.pdf');
        //return view('admin.laporan.laporanruang');
    }

    
    public function laporandataike()
    {
        $ike = HitungIke::all();
        $pdf = PDF::loadview('admin.laporan.laporandataike', compact('ike'));
        return $pdf->download('DataHitunganIKE-Siadit.pdf');
        //return view('admin.laporan.laporandataike');
    }
    public function laporandashboard()
    {
        return view('admin.laporan.laporandashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
