<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Session;
use App\Profil;
use App\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
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
            $ruang = Ruang::where('nm_ruang', 'LIKE', "%$keyword%")
                ->orWhere('luas_ruang', 'LIKE', "%$keyword%")
                ->orWhere('jns_lamp', 'LIKE', "%$keyword%")
                ->orWhere('jml_lamp', 'LIKE', "%$keyword%")
                ->orWhere('daya_lamp', 'LIKE', "%$keyword%")
                ->orWhere('nmbebanac', 'LIKE', "%$keyword%")
                ->orWhere('jml_ac', 'LIKE', "%$keyword%")
                ->orWhere('daya_ac', 'LIKE', "%$keyword%")
                ->orWhere('jnsbebanlain', 'LIKE', "%$keyword%")
                ->orWhere('jmlbebanlain', 'LIKE', "%$keyword%")
                ->orWhere('dyabebanlain', 'LIKE', "%$keyword%")
                ->orWhere('nm_mesin', 'LIKE', "%$keyword%")
                ->orWhere('jml_mesin', 'LIKE', "%$keyword%")
                ->orWhere('daya_mesin', 'LIKE', "%$keyword%")
                ->orWhere('nilai_IKE', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ruang = Ruang::paginate($perPage);
        }

        return view('admin.ruang.index', compact('ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ruang.create1');
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
        
        //dd($requestData);
        Ruang::create($requestData);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan Data Ruang Gedung" 
        ]);

        return redirect('manage/ruang');
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
        $ruang = Ruang::findOrFail($id);

        return view('admin.ruang.show', compact('ruang'));
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
        $ruang = Ruang::findOrFail($id);

        //dd($ruang);
        return view('admin.ruang.edit1', compact('ruang'));
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
        
        $ruang = Ruang::findOrFail($id);
        $ruang->update($requestData);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengupdate Data Ruang Gedung" 
        ]);

        return redirect('manage/ruang');
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
        Ruang::destroy($id);

         Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menghapus Data Ruang",
        ]);

        return redirect('manage/ruang');
    }
}
