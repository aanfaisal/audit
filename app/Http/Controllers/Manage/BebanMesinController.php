<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;
use Session;
use App\BebanMesin;
use App\HitungIke;
use App\Profil;
use App\Ruang;
use Illuminate\Http\Request;

class BebanMesinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $bebanmesin = BebanMesin::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('nm_mesin', 'LIKE', "%$keyword%")
                ->orWhere('daya_mesin', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayamesin', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanmesin = BebanMesin::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
        }

        return view('admin.beban-mesin.index', compact('bebanmesin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $nm_ruang = DB::table('ruangs')->pluck('nm_ruang', 'ruang_id');
        return view('admin.beban-mesin.create1')->with('nm_ruang', $nm_ruang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        //BebanMesin::create($requestData);
        //dd($requestData);

        $BebanMesin = new BebanMesin;

        $dayatotal = $request->daya_mesin * $request->jml_mesin * $request->tot_pemakaian / 1000;
        
        $BebanMesin->ruang_id =$request->ruang_id;
        $BebanMesin->nm_mesin = $request->nm_mesin;
        $BebanMesin->daya_mesin =$request->daya_mesin;
        $BebanMesin->tot_pemakaian = $request->tot_pemakaian;
        $BebanMesin->wktu_pengukuran = $request->wktu_pengukuran;
        $BebanMesin->tot_dayamesin = $dayatotal;
        
        $BebanMesin->save();

        $cek= HitungIke::where('wktu_pengukuran', '=', Input::get('wktu_pengukuran'))->exists();

        $bebanmsin= BebanMesin::where('wktu_pengukuran', '=' , Input::get('wktu_pengukuran'))->sum('tot_dayamesin');
        $luas= DB::table('profils')->where('profil_id', 1)->pluck('luas_gedung');
        $hsil = $bebanmsin / $luas;

        if(!$cek)
        {
                $hasil = $hsil;
                $hitung = new HitungIke;
                $hitung->wktu_pengukuran = $request->wktu_pengukuran;
                $hitung->hsil_perhitungan = $hasil;
                
                $hitung->save();
        }
        
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan Data Beban Lain" 
        ]);

        return redirect('manage/beban-mesin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $bebanmesin = BebanMesin::findOrFail($id);

        return view('admin.beban-mesin.show', compact('bebanmesin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $bebanmesin = BebanMesin::findOrFail($id);

        return view('admin.beban-mesin.edit', compact('bebanmesin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $bebanmesin = BebanMesin::findOrFail($id);
        $bebanmesin->update($requestData);
        
        $bebanmsin= BebanMesin::where('wktu_pengukuran', '=' , Input::get('wktu_pengukuran'))->sum('tot_dayamesin');
        $luas= DB::table('profils')->where('profil_id', 1)->pluck('luas_gedung');
        $hsil = $bebanmsin / $luas;

        if(!$cek)
        {
                $hasil = $hsil;
                $hitung = new HitungIke;
                $hitung->wktu_pengukuran = $request->wktu_pengukuran;
                $hitung->hsil_perhitungan = $hasil;
                
                $hitung->save();
        }
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengupdate Data Beban Mesin" 
        ]);

        return redirect('manage/beban-mesin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        BebanMesin::destroy($id);

         Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menghapus Data Beban Mesin",
        ]);

        return redirect('manage/beban-mesin');
    }
}
