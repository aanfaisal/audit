<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use DB;
use Session;
use App\Ruang;
use App\BebanAc;
use App\HitungIke;

use Illuminate\Http\Request;

class BebanAcController extends Controller
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
            $bebanac = BebanAc::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jml_ac', 'LIKE', "%$keyword%")
                ->orWhere('daya_ac', 'LIKE', "%$keyword%")
                ->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
                ->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('tot_dayaac', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $bebanac = BebanAc::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
        }

        return view('admin.beban-ac.index', compact('bebanac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $nm_ruang = DB::table('ruangs')->pluck('nm_ruang', 'ruang_id');
        return view('admin.beban-ac.create1')->with('nm_ruang', $nm_ruang);

    }

    public function ajaxruang(Request $request)
    {
        $ruang = Ruang::findOrFail($request->id);
        return response()->json(['data' => $ruang]);
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
        $waktu = $request->wktu_pengukuran;

        $BebanAc = new BebanAc;

        $dayatotal = $request->daya_ac * $request->jml_ac * $request->tot_pemakaian / 1000;
        
        $BebanAc->ruang_id =$request->ruang_id;
        $BebanAc->jml_ac = $request->jml_ac;
        $BebanAc->daya_ac =$request->daya_ac;
        $BebanAc->tot_pemakaian = $request->tot_pemakaian;
        $BebanAc->wktu_pengukuran = $request->wktu_pengukuran;
        $BebanAc->tot_dayaac = $dayatotal;
        
        $BebanAc->save();


        $cek= HitungIke::where('wktu_pengukuran', '=', Input::get('wktu_pengukuran'))->exists();

        
        if(!$cek)
        {
                $hasil = "12.5";
                $hitung = new HitungIke;
                $hitung->wktu_pengukuran = $request->wktu_pengukuran;
                $hitung->hsil_perhitungan = $hasil;
                
                $hitung->save();
            

        }


//        BebanAc::create($requestData);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan Data AC" 
        ]);

        return redirect('manage/beban-ac');
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
        $bebanac = BebanAc::findOrFail($id);

        return view('admin.beban-ac.show', compact('bebanac'));
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
        $bebanac = BebanAc::findOrFail($id);

        return view('admin.beban-ac.edit', compact('bebanac'));
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
        
        $bebanac = BebanAc::findOrFail($id);
        $bebanac->update($requestData);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengupdate Data AC" 
        ]);

        return redirect('manage/beban-ac');
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
        BebanAc::destroy($id);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menghapus Data Beban AC",
        ]);

        return redirect('manage/beban-ac');
    }
}
